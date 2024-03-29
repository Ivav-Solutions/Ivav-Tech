<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\ScheduleCall;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Omnipay\Omnipay;
use Omnipay\Common\CreditCard;
use Srmklive\PayPal\Services\ExpressCheckout;

class HomePageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about_us()
    {
        return view('about');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function scrum_webinar()
    {
        return view('scrum_webinar');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactConfirm(Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'phone' => 'required|numeric',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'subject' => request()->subject,
            'description' => request()->message,
            'created_at' => now(),
            'admin' => 'info@ivavtech.com',
        );
        /** Send message to the admin */
        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject('Contact Form Notification');
        });

        return back()->with('success_report', 'Thanks for contacting us, We will get in touch with you shortly!');
    }

    public function book_consultation()
    {
        return view('book_consultation');
    }

    public function post_book_consultation(Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'phone_number' => 'numeric'
        ]);

        $Consultation = Consultation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'sex' => $request->sex,
            'service' => $request->service,
            'platform' => $request->platform,
            'time' => $request->time,
            'date' => $request->date
        ]);

        $SECRET_KEY = config('app.paystack_secret_key');;

        $url = "https://api.paystack.co/transaction/initialize";

        $fields = [
            'email' => $request->email,
            'amount' => 100000 * 100,
            'callback_url' => url('/payment/callback'),
            'metadata' => [
                'consultation_id' => $Consultation->id,
                'name' => $request->name
            ]
        ];

        $fields_string = http_build_query($fields);
        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer $SECRET_KEY",
            "Cache-Control: no-cache",
        ));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute post
        $paystack_result = curl_exec($ch);

        $result = json_decode($paystack_result);

        //  return $result;
        $authorization_url = $result->data->authorization_url;
        $paystack_status = $result->status;

        // return dd($result->status);

        if ($paystack_status == true) {
            return redirect()->to($authorization_url);
        } else {
            return back()->with('failure_report', 'Payment failed. Response not ok, please try again!');
        }
    }

    public function handleGatewayCallback()
    {
        $SECRET_KEY = config('app.paystack_secret_key');

        $curl = curl_init();

        $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
        if (!$reference) {
            die('No reference supplied');
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $SECRET_KEY",
                "Cache-Control: no-cache",
            ),
        ));

        $paystack_response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        $result = json_decode($paystack_response);

        if ($err) {
            // there was an error contacting the Paystack API
            die('Curl returned error: ' . $err);
        } else {
            // dd($result);
            $consultation = Consultation::findorfail($result->data->metadata->consultation_id);
            $consultation->amount =  ($result->data->amount / 100);
            $consultation->payment_status = "Success";
            $consultation->save();


            Transaction::create([
                'consultation_id' => $result->data->metadata->consultation_id,
                'name' => $result->data->metadata->name,
                'email' => $result->data->customer->email,
                'amount' => ($result->data->amount / 100),
                'transaction_id' => $result->data->id,
                'ref_id' => $result->data->reference,
                'paid_at' => $result->data->paid_at,
                'channel' => $result->data->channel,
                'ip_address' => $result->data->ip_address,
                'status' => $result->data->status,
            ]);

            $data = array(
                'name' => $consultation->name,
                'email' => $consultation->email,
                'sex' => $consultation->sex,
                'phone_number' => $consultation->phone_number,
                'service' => $consultation->service,
                'platform' => $consultation->platform,
                'time' => $consultation->time,
                'date' => $consultation->date,
            );

            /** Send message to the admin */
            Mail::send('emails.consultation', $data, function ($m) use ($data) {
                $m->to($data['email'])->subject('Consultation Details');
            });

            return redirect()->route('consultation.successful');
        }
    }

    public function consultation_successfully()
    {
        return view('sucessful_message');
    }

    public function consultation()
    {
        return view('consultation');
    }

    public function web_development()
    {
        return view('web_development');
    }

    public function mobile_development()
    {
        return view('mobile_development');
    }

    public function desktop_development()
    {
        return view('desktop_development');
    }

    public function game_development()
    {
        return view('game_development');
    }

    public function it_programs()
    {
        return view('it_programs');
    }

    public function project_management()
    {
        return view('project_management');
    }

    public function scrum_program()
    {
        return view('pm.scrum_program');
    }

    public function scrum_program_name($name)
    {
        return view('scrum_programs.index', [
            'name' => $name
        ]);
    }

    public function quality_management_program()
    {
        return view('pm.quality_management_program');
    }

    public function quality_management_program_name($name)
    {
        return view('quality_management_programs.index', [
            'name' => $name
        ]);
    }

    public function risk_management_program()
    {
        return view('pm.risk_management_program');
    }

    public function prince2_program()
    {
        return view('pm.prince2_program');
    }

    public function marketing_program()
    {
        return view('pm.marketing_program');
    }

    public function marketing_program_name($name)
    {
        return view('marketing_programs.index', [
            'name' => $name
        ]);
    }

    public function itil()
    {
        return view('pm.itil');
    }

    public function enroll()
    {
        return view('enroll');
    }

    public function admin_login()
    {
        return view('auth.admin_login');
    }

    public function login_admin(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $input = $request->only(['email', 'password']);

        $user = User::query()->where('email', $request->email)->first();

        if ($user && !Hash::check($request->password, $user->password)) {
            return back()->with('failure_report', 'Incorrect Password!');
        }

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('failure_report', 'Email does\'nt exist');
        }

        // authentication attempt
        if (auth()->attempt($input)) {
            if ($user->user_type == 'Administrator') {
                return redirect()->route('dashboard');
            }

            return back()->with('failure_report', 'You are not an Administrator');
        } else {
            return back()->with('failure_report', 'User authentication failed.');
        }
    }

    public function me()
    {
        $gateway = OmniPay::create('SagePay\Direct')->initialize([
            'vendor' => 'reapivavsolutio',
            'testMode' => true,
        ]);
        // $gateway = OmniPay::create('SagePay\Server');

        // $gateway->setVendor('reapivavsolutio');
        // $gateway->setTestMode(true); // For a test account

        // Create the credit card object from details entered by the user.

        $card = new CreditCard([
            'firstName' => 'Promise',
            'lastName' => 'Ezema',

            'number' => '4929000000006',
            'expiryMonth' => '12',
            'expiryYear' => '2023',
            'CVV' => '123',

            // Billing address details are required.
            'billingFirstName' => 'Promise',
            'billingLastName' => 'Ezema',
            'billingAddress1' => 'Metalbox Road',
            'billingAddress2' => 'Billing Address 2',
            //'billingState' => '',
            'billingCity' => 'Ikeja',
            'billingPostcode' => '100001',
            'billingCountry' => 'NG',
            'billingPhone' => '08161215848',
            //
            'email' =>  'promiseezema11@gmail.com',
            'clientIp' => '169.150.197.237',
            //
            'shippingFirstName' => 'Joe',
            'shippingLastName' => 'Bloggs',
            'shippingAddress1' => '99',
            'shippingState' => 'NY',
            'shippingCity' => 'City1',
            'shippingPostcode' => 'SPOSTC',
            'shippingCountry' => 'US',
            'shippingPhone' => '01234 567 890 SS',
        ]);

        // $transactionId = 'abcd12345';
        // Create the minimal request message.

        $requestMessage = $gateway->purchase([
            'amount' => '99.99',
            'currency' => 'GBP',
            'card' => $card,
            'transactionId' => $this->transaction_id(7),
            'description' => 'Pizzas for everyone at PHPNE',

            // If 3D Secure is enabled, then provide a return URL for
            // when the user comes back from 3D Secure authentication.

            // 'notifyUrl' => 'https://www.ivavtech.com/sagepay-complete',
            'returnUrl' => 'https://www.ivavtech.com',
        ]);

        // Send the request message.

        $responseMessage = $requestMessage->send();

        // dd($responseMessage);
        if ($responseMessage->isRedirect()) {
            $responseMessage->redirect();
        }
    }

    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function test(Request $request)
    {
        try {

            $response = $this->gateway->purchase(array(
                'amount' => 400,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => route('success.payment'),
                'cancelUrl' => route('cancel.payment')
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            }
            else{
                return $response->getMessage();
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
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

                // $payment = new Payment();
                // $payment->payment_id = $arr['id'];
                // $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                // $payment->payer_email = $arr['payer']['payer_info']['email'];
                // $payment->amount = $arr['transactions'][0]['amount']['total'];
                // $payment->currency = env('PAYPAL_CURRENCY');
                // $payment->payment_status = $arr['state'];

                // $payment->save();

                return "Payment is Successfull. Your Transaction Id is : " . $arr['id'];

            }
            else{
                return $response->getMessage();
            }
        }
        else{
            return 'Payment declined!!';
        }
    }

    public function paymentCancel()
    {
        return 'User declined the payment!';
    }

    public function mmm()
    {
        $product = [];
        $product['items'] = [
            [
                'name' => 'Nike Joyride 2',
                'price' => 112,
                'desc'  => 'Running shoes for Men',
                'qty' => 2
            ]
        ];

        $product['invoice_id'] = 1;
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment');
        $product['total'] = 224;

        $paypalModule = new ExpressCheckout;

        $res = $paypalModule->setExpressCheckout($product);
        $res = $paypalModule->setExpressCheckout($product, true);

        // return redirect($res['paypal_link']);

        dd($res);
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

    public function business_page(Request $request)
    {
        if ($request->isMethod('post'))
        {
            ScheduleCall::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'whatsapp_call' => $request->whatsapp_call,
                'preferred_time' => $request->preferred_time,
                'context' => $request->context
            ]);

            /** Store information to include in mail in $data as an array */
            $data = array(
                'name' => request()->name,
                'email' => request()->email,
                'phone' => request()->phone,
                'whatsapp_call' => request()->whatsapp_call,
                'preferred_time' => request()->preferred_time,
                'context' => $request->context,
                'created_at' => now(),
                'admin' => 'info@ivavtech.com',
            );
            /** Send message to the admin */
            Mail::send('emails.schedule', $data, function ($m) use ($data) {
                $m->to($data['admin'])->subject('Schedule Call Form Notification');
            });

            return back()->with('success_report', "We've received your request to schedule a phone call, and we're delighted that you've chosen to speak with us. A member of our team will be reaching out to you shortly to confirm the details of our upcoming call.");
        }

        return view('business_page');
    }
}
