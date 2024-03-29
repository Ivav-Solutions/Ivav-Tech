<?php

namespace App\Http\Controllers;

use App\Models\AccessDetails;
use App\Models\Country;
use App\Models\Enrollment;
use App\Models\Notification;
use App\Models\Payment;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Monarobase\CountryList\CountryListFacade;
use Omnipay\Omnipay;
use Omnipay\Common\CreditCard;

class HomeController extends Controller
{
    private $gateway;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(false);
    }



    public function logouts()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalEnrollment = Enrollment::latest()->where('user_id', Auth::user()->id)->get();
        $totalPayments = Payment::latest()->where('user_id', Auth::user()->id)->take(5)->get();

        return view('dashboard.dashboard', [
            'totalEnrollment' => $totalEnrollment,
            'totalPayments' => $totalPayments
        ]);
    }

    public function it_programs()
    {
        return view('dashboard.it_programs');
    }

    public function scrum_program()
    {
        return view('dashboard.scrum_programs');
    }

    public function prince2_program()
    {
        return view('dashboard.prince2_program');
    }

    public function marketing_program()
    {
        return view('dashboard.marketing_program');
    }

    public function risk_management_program()
    {
        return view('dashboard.risk_management_program');
    }

    public function quality_management_program()
    {
        return view('dashboard.quality_management_program');
    }

    public function itil_program()
    {
        return view('dashboard.itil_program');
    }

    public function account()
    {
        return view('dashboard.account');
    }

    public function update_profile($id, Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'phone_number' => ['required', 'numeric'],
            'country' => ['required', 'string'],
            'gender' => ['required', 'string']
        ]);

        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);

        if($user->email == $request->email)
        {
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => $request->phone_number,
                'country' => $request->country,
                'gender' => $request->gender,
            ]);

            return back()->with([
                'type' => 'success',
                'message' => 'Profile Updated Successfully!'
            ]); 

        } else {
            $this->validate($request, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);

            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => $request->phone_number,
                'country' => $request->country,
                'email' => $request->email,
                'gender' => $request->gender
            ]);

            return back()->with([
                'type' => 'success',
                'message' => 'Profile Updated Successfully!'
            ]);
        }
    }

    public function upload_photo($id, Request $request) 
    {
        //Validate Request
        $this->validate($request, [
            'photo' => 'required|mimes:jpeg,png,jpg',
        ]);

        //Find User
        $userFinder = Crypt::decrypt($id);

        //Profile
        $profile = User::find($userFinder);

        //Validate User
        if (request()->hasFile('photo')) {
            $filename = request()->photo->getClientOriginalName();
            if($profile->avatar) {
                Storage::delete(str_replace("storage", "public", $profile->avatar));
            }
            request()->photo->storeAs('users_avatar', $filename, 'public');
            $profile->avatar = '/storage/users_avatar/'.$filename;
            $profile->save();
            
            return back()->with([
                'type' => 'success',
                'message' => 'Photo Updated Successfully!'
            ]);
        } else {
            return back()->with([
                'type' => 'danger',
                'message' => 'Access denied!',
            ]);
        }
    }

    public function update_password ($id, Request $request) 
    {
        $this->validate($request, [
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);
        
        $user->password = Hash::make($request->new_password);

        $user->save();

        return back()->with([
            'type' => 'success',
            'message' => 'Password Updated Successfully!'
        ]); 
    }

    public function access_details()
    {
        $access = AccessDetails::latest()->where('user_id', Auth::user()->id)->get();

        return view('dashboard.access_details', [
            'access' => $access
        ]);
    }

    public function proceed_payment($amount, $program)
    {
        $userAmount = Crypt::decrypt($amount);
        $programDescription = Crypt::decrypt($program);
        $countries = Country::all();

        try {
            $response = $this->gateway->purchase(array(
                'amount' => $userAmount,
                'description' => $programDescription,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => route('success.payment'),
                'cancelUrl' => route('cancel.payment')
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            }
            else {
                return back()->with([
                    'type' => 'danger',
                    'message' => $response->getMessage()
                ]); 
            }
        } catch (\Throwable $th) {
            return back()->with([
                'type' => 'danger',
                'message' => $th->getMessage()
            ]); 
        }

        // return view('dashboard.payment', [
        //     'userAmount' => $userAmount,
        //     'programDescription' => $programDescription,
        //     'countries' => $countries
        // ]);
    }
    
    public function paymentSuccess(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $user = User::find(Auth::user()->id); 

                Payment::create([
                    'user_id' => $user->id,
                    'amount' => $arr['transactions'][0]['amount']['total'],
                    'transaction_id' => $arr['id'],
                    'description' => $arr['transactions'][0]['description'],
                ]);

                Notification::create([
                    'from' => $user->id,
                    'subject' => 'Enrollment',
                    'description' => $user->first_name.' has successfully applied to enroll in '.$arr['transactions'][0]['description'].' Program'
                ]);

                // $payment = new Payment();
                // $payment->payment_id = $arr['id'];
                // $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                // $payment->payer_email = $arr['payer']['payer_info']['email'];
                // $payment->amount = $arr['transactions'][0]['amount']['total'];
                // $payment->currency = env('PAYPAL_CURRENCY');
                // $payment->payment_status = $arr['state'];

                // $payment->save();

                return redirect()->route('user.successful.payment', Crypt::encrypt($arr['id']));

            }
            else{
                return back()->with([
                    'type' => 'danger',
                    'message' => $response->getMessage()
                ]); 
            }
        }
        else{
            return back()->with([
                'type' => 'danger',
                'message' => 'Payment declined!!'
            ]); 
        }
    }

    public function paymentCancel()
    {
        return back()->with([
            'type' => 'danger',
            'message' => 'User declined the payment!'
        ]); 
    }

    // Opayo
    public function make_payment($id, $amount, Request $request)
    {   
        $this->validate($request, [
            'firstName' => ['required', 'string'],
            'lastName' => ['required', 'string'],
            'email' => ['required', 'email'],
            'amount' => ['required', 'numeric'],
            'description' => ['required', 'string'],
            'number' => ['required', 'numeric'],
            'expiryMonth' => ['required', 'numeric'],
            'expiryYear' => ['required', 'numeric'],
            'CVV' => ['required', 'numeric'],
            'billingFirstName' => ['required', 'string'],
            'billingLastName' => ['required', 'string'],
            'billingAddress1' => ['required', 'string'],
            'billingCity' => ['required', 'string'],
            'billingPostcode' => ['required', 'string'],
            'billingCountry' => ['required', 'string'],
            'billingPhone' => ['required', 'numeric'],
            'shippingFirstName' => ['required', 'string'],
            'shippingLastName' => ['required', 'string'],
            'shippingAddress1' => ['required', 'string'],
            'shippingState' => ['required', 'min:2', 'max:2'],
            'shippingCity' => ['required', 'string'],
            'shippingPostcode' => ['required', 'string'],
            'shippingCountry' => ['required', 'string'],
            'shippingPhone' => ['required', 'numeric']
        ]);

        $userFinder = Crypt::decrypt($id);
        $amount = Crypt::decrypt($amount);

        if(intval($request->amount) !== $amount) {
            return back()->with([
                'type' => 'danger',
                'message' => "The amount of the project doesn't correspond"
            ]);
        }

        $user = User::findorfail($userFinder);

        $shippingState = strtoupper($request->shippingState);

        if(str_replace(' ', '', $request->discountCode) == "")
        {
            try {
                $gateway = OmniPay::create('SagePay\Direct')->initialize([
                    'vendor' => 'reapivavsolutio',
                    'testMode' => false,
                ]);
                // Create the credit card object from details entered by the user.

                $card = new CreditCard([
                    'firstName' => $request->firstName,
                    'lastName' => $request->lastName,

                    // 'number' => '4929000000006',
                    // 'expiryMonth' => '12',
                    // 'expiryYear' => '2023',
                    // 'CVV' => '123',

                    'number' => $request->number,
                    'expiryMonth' => $request->expiryMonth,
                    'expiryYear' => $request->expiryYear,
                    'CVV' => $request->CVV,

                    // Billing address details are required.
                    'billingFirstName' => $request->billingFirstName,
                    'billingLastName' => $request->billingLastName,
                    'billingAddress1' => $request->billingAddress1,
                    'billingAddress2' => '',
                    // 'billingState' => '',
                    'billingCity' => $request->billingCity,
                    'billingPostcode' => $request->billingPostcode,
                    'billingCountry' => $request->billingCountry,
                    'billingPhone' => $request->billingPhone,
                    //
                    'email' =>  $request->email,
                    'clientIp' => '169.150.197.237',
                    //
                    'shippingFirstName' => $request->shippingFirstName,
                    'shippingLastName' => $request->shippingLastName,
                    'shippingAddress1' => $request->shippingAddress1,
                    'shippingState' => $shippingState,
                    'shippingCity' => $request->shippingCity,
                    'shippingPostcode' => $request->shippingPostcode,
                    'shippingCountry' => $request->shippingCountry,
                    'shippingPhone' => $request->shippingPhone,
                ]);

                // Create the minimal request message.
                $transaction_ids = $this->transaction_id(7);

                $requestMessage = $gateway->purchase([
                    'amount' => $request->amount,
                    'currency' => 'GBP',
                    'card' => $card,
                    'transactionId' => $transaction_ids,
                    'description' => $request->description,

                    // If 3D Secure is enabled, then provide a return URL for
                    // when the user comes back from 3D Secure authentication.

                    // 'notifyUrl' => 'https://www.ivavtech.com/sagepay-complete',
                    'returnUrl' => 'https://www.ivavtech.com',
                ]);

                // Send the request message.
                $responseMessage = $requestMessage->send();

                If ($responseMessage->isSuccessful())
                {
                    Payment::create([
                        'user_id' => $user->id,
                        'amount' => $request->amount,
                        'transaction_id' => $transaction_ids,
                        'description' => $request->description,
                    ]);

                    Notification::create([
                        'from' => $user->id,
                        'subject' => 'Enrollment',
                        'description' => $user->first_name.' has successfully applied to enroll in '.$request->description.' Program'
                    ]);

                    return redirect()->route('user.successful.payment', Crypt::encrypt($transaction_ids));
                } else {
                    $reason = $responseMessage->getMessage();
                    return back()->with([
                        'type' => 'danger',
                        'message' => $reason
                    ]);
                }
            } catch(Exception $e) {
                return back()->with([
                    'type' => 'danger',
                    'message' => $e->getMessage()
                ]);
            }
        } elseif (str_replace(' ', '', $request->discountCode) == "TUPMsociety1")
        {
            $total = $amount * 0.1;
            $totalCost = $amount - $total;

            try {
                $gateway = OmniPay::create('SagePay\Direct')->initialize([
                    'vendor' => 'reapivavsolutio',
                    'testMode' => false,
                ]);
                // Create the credit card object from details entered by the user.

                $card = new CreditCard([
                    'firstName' => $request->firstName,
                    'lastName' => $request->lastName,

                    // 'number' => '4929000000006',
                    // 'expiryMonth' => '12',
                    // 'expiryYear' => '2023',
                    // 'CVV' => '123',w

                    'number' => $request->number,
                    'expiryMonth' => $request->expiryMonth,
                    'expiryYear' => $request->expiryYear,
                    'CVV' => $request->CVV,

                    // Billing address details are required.
                    'billingFirstName' => $request->billingFirstName,
                    'billingLastName' => $request->billingLastName,
                    'billingAddress1' => $request->billingAddress1,
                    'billingAddress2' => '',
                    // 'billingState' => '',
                    'billingCity' => $request->billingCity,
                    'billingPostcode' => $request->billingPostcode,
                    'billingCountry' => $request->billingCountry,
                    'billingPhone' => $request->billingPhone,
                    //
                    'email' =>  $request->email,
                    'clientIp' => '169.150.197.237',
                    //
                    'shippingFirstName' => $request->shippingFirstName,
                    'shippingLastName' => $request->shippingLastName,
                    'shippingAddress1' => $request->shippingAddress1,
                    'shippingState' => $shippingState,
                    'shippingCity' => $request->shippingCity,
                    'shippingPostcode' => $request->shippingPostcode,
                    'shippingCountry' => $request->shippingCountry,
                    'shippingPhone' => $request->shippingPhone,
                ]);

                // Create the minimal request message.
                $transaction_ids = $this->transaction_id(7);

                $requestMessage = $gateway->purchase([
                    'amount' => $totalCost,
                    'currency' => 'GBP',
                    'card' => $card,
                    'transactionId' => $transaction_ids,
                    'description' => $request->description,

                    // If 3D Secure is enabled, then provide a return URL for
                    // when the user comes back from 3D Secure authentication.

                    // 'notifyUrl' => 'https://www.ivavtech.com/sagepay-complete',
                    'returnUrl' => 'https://www.ivavtech.com',
                ]);

                // Send the request message.
                $responseMessage = $requestMessage->send();

                If ($responseMessage->isSuccessful())
                {
                    Payment::create([
                        'user_id' => $user->id,
                        'amount' => $totalCost,
                        'transaction_id' => $transaction_ids,
                        'description' => $request->description . 'Discount Code Applied',
                    ]);

                    Notification::create([
                        'from' => $user->id,
                        'subject' => 'Enrollment',
                        'description' => $user->first_name.' has successfully applied to enroll in '.$request->description.' Program'
                    ]);

                    return redirect()->route('user.successful.payment', Crypt::encrypt($transaction_ids));
                } else {
                    $reason = $responseMessage->getMessage();
                    return back()->with([
                        'type' => 'danger',
                        'message' => $reason
                    ]);
                }
            } catch(Exception $e) {
                return back()->with([
                    'type' => 'danger',
                    'message' => $e->getMessage()
                ]);
            }
        } else {
            return back()->with([
                'type' => 'danger',
                'message' => "Discount Code incorrect!"
            ]);
        }
    }

    function transaction_id($input, $strength = 7) 
    {
        $input = '0123456789abcdefghijklmnopqrstuvwxyz';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }    
        return $random_string;
    }

    public function successful_payment($id)
    {
        $transaction_id = Crypt::decrypt($id);

        $payment = Payment::where('transaction_id', $transaction_id)->first();

        Enrollment::create([
            'user_id' => Auth::user()->id,
            'amount' => $payment->amount,
            'description' => $payment->description
        ]);

        $admin = array(
            'name' => 'Admin',
            'email' => 'contact@ivavtech.com',
            'description' => $payment->description
        );

        /** Send message to the admin */
        Mail::send('emails.notification', $admin, function ($m) use ($admin) {
            $m->to($admin['email'])->subject('Notification');
        });

        return view('dashboard.success_payment', [
            'transaction_id' => $transaction_id
        ]);
    }

    public function payments()
    {
        $payments = Payment::latest()->where('user_id', Auth::user()->id)->get();

        return view('dashboard.payments', [
            'payments' => $payments
        ]);
    }

    public function free($id)
    {
        $courseName = Crypt::decrypt($id);

        Notification::create([
            'from' => Auth::user()->id,
            'subject' => 'Enrollment',
            'description' => Auth::user()->first_name.' has successfully applied to enroll in Scrum Fundamentals Program'
        ]);

        Enrollment::create([
            'user_id' => Auth::user()->id,
            'amount' => 'Free',
            'description' => 'Scrum Fundamentals Program'
        ]);

        $admin = array(
            'name' => 'Admin',
            'email' => 'contact@ivavtech.com',
            'description' => 'Scrum Fundamentals Program'
        );

        /** Send message to the admin */
        Mail::send('emails.notification', $admin, function ($m) use ($admin) {
            $m->to($admin['email'])->subject('Notification');
        });

        return view('dashboard.success_message', [
            'courseName' => $courseName
        ]);
    }

    public function enrollments()
    {
        $enrollments = Enrollment::where('user_id', Auth::user()->id)->get();

        return view('dashboard.enrollments', [
            'enrollments' => $enrollments
        ]);
    }
}
