<?php

namespace App\Http\Controllers;

use App\Models\AccessDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Monarobase\CountryList\CountryListFacade;
use Omnipay\Omnipay;
use Omnipay\Common\CreditCard;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
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
        return view('dashboard.dashboard');
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


    public function proceed_payment($amount)
    {
        $countries = CountryListFacade::getList('en');
        $userAmount = Crypt::decrypt($amount);

        return view('dashboard.payment', [
            'userAmount' => $userAmount,
            'countries' => $countries
        ]);
    }

    public function make_payment($id, Request $request)
    {   
        // dd($request->shippingCountry);

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
            'shippingState' => ['required', 'string'],
            'shippingCity' => ['required', 'string'],
            'shippingPostcode' => ['required', 'string'],
            'shippingCountry' => ['required', 'string'],
            'shippingPhone' => ['required', 'numeric']
        ]);

        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);

        $gateway = OmniPay::create('SagePay\Direct')->initialize([
            'vendor' => 'reapivavsolutio',
            'testMode' => true,
        ]);
        // $gateway = OmniPay::create('SagePay\Server');

        // $gateway->setVendor('reapivavsolutio');
        // $gateway->setTestMode(true); // For a test account
                
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
            'billingCountry' => 'NG',
            'billingPhone' => $request->billingPhone,
            //
            'email' =>  $request->email,
            'clientIp' => '169.150.197.237',
            //
            'shippingFirstName' => $request->shippingFirstName,
            'shippingLastName' => $request->shippingLastName,
            'shippingAddress1' => $request->shippingAddress1,
            'shippingState' => 'NY',
            'shippingCity' => $request->shippingCity,
            'shippingPostcode' => $request->shippingPostcode,
            'shippingCountry' => 'US',
            'shippingPhone' => $request->shippingPhone,
        ]);

        // $transactionId = 'abcd12345';
        // Create the minimal request message.

        $requestMessage = $gateway->purchase([
            'amount' => $request->amount,
            'currency' => 'GBP',
            'card' => $card,
            'transactionId' => $this->transaction_id(7),
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
            return view('/');
        }
        // dd($responseMessage);
        // if ($responseMessage->isRedirect()) {
        //     $responseMessage->redirect();
        // }
    }

    function transaction_id($input, $strength = 5) {
        $input = '0123456789abcdefghijklmnopqrstuvwxyz';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }    
        return $random_string;
    }
}
