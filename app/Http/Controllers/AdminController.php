<?php

namespace App\Http\Controllers;

use App\Models\AccessDetails;
use App\Models\Consultation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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

        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalConsultations' => $totalConsultations,
            'latestFiveUsers' => $latestFiveUsers
        ]);
    }

    public function account()
    {
        return view('admin.account');
    }

    public function users()
    {
        $users = User::latest()->where('user_type', 'User')->get();

        return view('admin.users', [
            'users' => $users
        ]);
    }

    public function view_edit_user($id, Request $request)
    {
        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);

        return view('admin.view_edit_user', [
            'user' => $user
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

        return view('admin.consultations', [
            'consultations' => $consultations
        ]);
    }

    public function transactions()
    {
        return view('admin.transactions');
    }

    public function update_profile($id, Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
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

    public function access_details(Request $reqeust)
    {
        $access =  AccessDetails::join('users', 'access_details.user_id', '=', 'users.id')
                                ->get(['access_details.*', 'users.first_name', 'users.last_name']);

        return view('admin.users_access',[
            'access' => $access
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

        return back()->with([
            'type' => 'success',
            'message' => 'Access sent to '. $user->first_name .' '. $user->last_name
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
}
