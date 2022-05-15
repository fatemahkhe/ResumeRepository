<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showProfile($id)
    { 
        $profile=Profile::findorfail($id);
        return view('livewire.admin.profile',['profile'=>$profile]);
    }
    public function showProfiles()
    { 
        $profiles=Profile::latest()->paginate(5);
        //$profile=Profile::all();
        return view('livewire.admin.profiles.show',compact('profiles'));
    }
    public function addAccounts()
    { 
        $account=Account::all();
        return view('livewire.admin.profile',compact('account'));
    }
    public function createProfile()
    { 
       
        return view('livewire.admin.createProfile');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProfile(Request $request)
    {
        $request->validate(
            [ 
           'fname' => 'required:profiles|max:100',
             'lname' => 'required:profiles|max:100',
             'phone' => 'required|unique:profiles|digits:10',
             'pin' => 'required|unique:profiles|digits:4',
             'gender'=>'required:profiles|in:male,female',
             'country'=>'required:profiles|max:100',
             'birthdate' => 'required:profiles|date_format:Y-m-d|after_or_equal:1920-01-01',
             'address' => 'required:profiles|max:100',
             'about' => 'required:profiles|max:1000',
             'jobTitle' => 'required:profiles|max:1000',
             'email' => 'required:profiles|max:100',
              'profile_photo_path'=>'required:profiles|mimes:jpg,jpeg,png'
             ]
       );
        $profile=new Profile();

        $userImg=$request->file('profile_photo_path');
        $uniqueName=hexdec(uniqid());
        $imgExt=strtolower($userImg->getClientOriginalExtension());
        $imgName=$uniqueName.'.'.$imgExt;
        $uploadLoc='/images/users/';
        $saveWithName=$uploadLoc.$imgName;
        $userImg->move($uploadLoc,$imgName);
        $profile->profile_photo_path=$saveWithName;

        $profile->fname=$request->fname;
        $profile->lname=$request->lname;
        $profile->gender=$request->gender;
        $profile->phone=$request->phone;
        $profile->pin=$request->pin;
        $profile->birthdate=$request->birthdate;
        $profile->country=$request->country;
        $profile->address=$request->address;
        $profile->email=$request->email;
        $profile->about=$request->about;
        $profile->jobTitle=$request->jobTitle;
        $age1= Carbon::parse($request->birthdate)->age;
        $profile->age=$age1;
        $profile->user_id=Auth::user()->id;
        //dd($profile);
         $profile->save();
         $profiles=Profile::latest()->paginate(5);
        return view('livewire.admin.profiles.show',compact('profiles'));
    }
    public function editProfile($id)
    {
        $profile=Profile::findorfail($id);
        
        return view('livewire.admin.profile',compact('profile'));
    }
    public function uploadPhoto(Request $request,$id){
        $profile1=Profile::all();
        $userImg=$request->file('profile_photo_path');
        $uniqueName=hexdec(uniqid());
        $imgExt=strtolower($userImg->getClientOriginalExtension());
        $imgName=$uniqueName.'.'.$imgExt;
        $uploadLoc='/images/users/';
        $saveWithName=$uploadLoc.$imgName;
        $userImg->move($uploadLoc,$imgName);
        $profile1->profile_photo_path=$saveWithName;
        // dd($profile1);
        Profile::findorfail($id)->update([
            'user_id' =>Auth::user()->id,
            'profile_photo_path'=>$saveWithName, 
        ]);
        return redirect('editProfile/')->with([$profile1->id]);
    }
    public function updateProfile(Request $request,$id)
    {   
        $profile1=Profile::all();
        $userImg=$request->file('profile_photo_path');
        $uniqueName=hexdec(uniqid());
        $imgExt=strtolower($userImg->getClientOriginalExtension());
        $imgName=$uniqueName.'.'.$imgExt;
        $uploadLoc='images/users/';
        $saveWithName=$uploadLoc.$imgName;
        $userImg->move($uploadLoc,$imgName);
        $profile1->profile_photo_path=$saveWithName;
 

        Profile::findorfail($id)->update([
            'user_id' =>Auth::user()->id,
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'pin'=>$request->pin,
            'birthdate'=>$request->birthdate,
            'country'=>$request->country,
            'address'=>$request->address,
            'email'=>$request->email,
            'about'=>$request->about,
            'jobTitle'=>$request->jobTitle,
            'profile_photo_path'=>$saveWithName,
        ]);
        
        
        return redirect()->route('showProfiles')->with('success','image Updated Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
