<?php

namespace App\Http\Controllers;

use App\Models\AccessDetails;
use App\Models\Consultation;
use App\Models\Notification;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalUsers = User::latest()->where('user_type', 'User')->get();
        $totalConsultations = Consultation::latest()->get();
        // $totalEnrollment = Consultation::latest()->get();
        $latestFiveUsers = User::latest()->where('user_type', 'User')->take(5)->get();
        $notifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->take(5)
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $unreadNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);

        // dd($notifications);

        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalConsultations' => $totalConsultations,
            'latestFiveUsers' => $latestFiveUsers,
            'notifications' => $notifications,
            'unreadNotifications' => $unreadNotifications
        ]);
    }

    public function account()
    {
        $notifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->take(5)
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $unreadNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);

        return view('admin.account', [
            'notifications' => $notifications,
            'unreadNotifications' => $unreadNotifications
        ]);
    }

    public function add_user()
    {
        $notifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->take(5)
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $unreadNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);

        return view('admin.add_user', [
            'notifications' => $notifications,
            'unreadNotifications' => $unreadNotifications
        ]);
    }

    public function create_user(Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            // 'last_name' => ['required', 'string', 'max:255'],
            // 'phone_number' => ['required', 'numeric'],
            // 'gender' => ['required', 'string', 'max:255'],
            // 'country' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $user = User::create([
            'user_type' => 'User',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'country' => $request->country,
            'gender' => $request->gender,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        /** Store information to include in mail in $data as an array */
        $data = array(
            'first_name' => $user->first_name,
            // 'last_name' => $user->last_name,
            // 'phone_number' => $user->phone_number,
            // 'country' => $user->country,
            // 'gender' => $user->gender,
            'email' => $user->email,
            'password' => 'password',
        );
        /** Send message to the admin */
        Mail::send('emails.welcome', $data, function ($m) use ($data) {
            $m->to($data['email'])->subject('Welcome To '. config('app.name'));
        });

        return back()->with([
            'type' => 'success',
            'message' => 'User Registered Successfully'
        ]);
    }

    public function users()
    {
        $users = User::latest()->where('user_type', 'User')->get();

        $notifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->take(5)
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $unreadNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);

        return view('admin.users', [
            'users' => $users,
            'notifications' => $notifications,
            'unreadNotifications' => $unreadNotifications
        ]);
    }

    public function view_edit_user($id, Request $request)
    {
        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);
        $notifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->take(5)
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $unreadNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);

        return view('admin.view_edit_user', [
            'user' => $user,
            'notifications' => $notifications,
            'unreadNotifications' => $unreadNotifications
        ]);
    }

    public function delete_user($id)
    {
        $finder = Crypt::decrypt($id);

        $user = User::find($finder);

        Storage::delete(str_replace("storage", "public", $user->avatar));

        $user->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'User Deleted!'
        ]);
    }

    public function consultations()
    {
        $consultations = Consultation::latest()->get();
        $notifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->take(5)
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $unreadNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);

        return view('admin.consultations', [
            'consultations' => $consultations,
            'notifications' => $notifications,
            'unreadNotifications' => $unreadNotifications
        ]);
    }

    public function transactions()
    {
        $notifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->take(5)
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $unreadNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $transactions = Transaction::latest()->get();

        return view('admin.transactions', [
            'transactions' => $transactions,
            'notifications' => $notifications,
            'unreadNotifications' => $unreadNotifications
        ]);
    }

    public function update_profile($id, Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
        ]);

        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);

        if ($user->email == $request->email) {
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
            if ($profile->avatar) {
                Storage::delete(str_replace("storage", "public", $profile->avatar));
            }
            request()->photo->storeAs('users_avatar', $filename, 'public');
            $profile->avatar = '/storage/users_avatar/' . $filename;
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

    public function update_password($id, Request $request)
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

    public function access_details(Request $reqeust)
    {
        $access =  AccessDetails::join('users', 'access_details.user_id', '=', 'users.id')
            ->get(['access_details.*', 'users.first_name', 'users.last_name']);

        $notifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->take(5)
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $unreadNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);

        return view('admin.users_access', [
            'access' => $access,
            'notifications' => $notifications,
            'unreadNotifications' => $unreadNotifications
        ]);
    }

    public function user_access_details($id, Request $request)
    {
        $this->validate($request, [
            'url' => ['required', 'string'],
            'program' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $finder = Crypt::decrypt($id);

        $user = User::find($finder);

        AccessDetails::create([
            'user_id' => $user->id,
            'url' => $request->url,
            'program' => $request->program,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $notifyUser = array(
            'name' => $user->first_name . ' ' . $user->last_name,
            'email' => $user->email
        );

        /** Send message to the user */
        Mail::send('emails.notify-user', $notifyUser, function ($m) use ($notifyUser) {
            $m->to($notifyUser['email'])->subject(config('app.name') . ' Notification');
        });

        return back()->with([
            'type' => 'success',
            'message' => 'Access sent to ' . $user->first_name . ' ' . $user->last_name
        ]);
    }

    public function user_update_ccess_details($id, Request $request)
    {
        $this->validate($request, [
            'url' => ['required', 'string'],
            'program' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $finder = Crypt::decrypt($id);

        $access = AccessDetails::find($finder);

        $access->update([
            'url' => $request->url,
            'program' => $request->program,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Updated Successfully'
        ]);
    }

    public function user_delete_ccess_details($id)
    {
        $finder = Crypt::decrypt($id);

        AccessDetails::find($finder)->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Deleted Successfully'
        ]);
    }

    public function read_notification($id)
    {
        $finder = Crypt::decrypt($id);

        $notification = Notification::findorfail($finder);

        $notification->update([
            'status' => 'Read'
        ]);

        return back();
    }

    public function notifications()
    {
        $allNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $notifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->take(5)
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $unreadNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);


        return view('admin.notifications', [
            'allNotifications' => $allNotifications,
            'notifications' => $notifications,
            'unreadNotifications' => $unreadNotifications
        ]);
    }

    public function program_payments()
    {
        $payments = Payment::join('users', 'payments.user_id', '=', 'users.id')
            ->get(['payments.*', 'users.first_name', 'users.last_name', 'users.email']);
        $notifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->take(5)
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);
        $unreadNotifications = Notification::join('users', 'notifications.from', '=', 'users.id')
            ->where('notifications.status', 'Unread')
            ->get(['notifications.*', 'users.first_name', 'users.last_name']);

        return view('admin.payments', [
            'payments' => $payments,
            'notifications' => $notifications,
            'unreadNotifications' => $unreadNotifications
        ]);
    }
}
