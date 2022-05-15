<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function addImage(Request $request){
    //     $request->validate(
    //         [ 
    //             'user_image'=>'required:mimes:jpg,jpeg,png'
    
    //          ]
    //    );
    //    $userImg=$request->file('user_image');
    //    $uniqueName=hexdec(uniqid());
    //    $imgExt=strtolower($userImg->getClientOriginalExtension());
    //    $imgName=$uniqueName.'.'.$imgExt;
    //    $uploadLoc='images/users/';
    //    $saveWithName=$uploadLoc.$imgName;
    //    $userImg->move($uploadLoc,$imgName);

    //    $user=new User();
    //    $user->user_image=$saveWithName;
    //    $user->save();
    // }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');

    }
    
   
    public function checkPin(Request $req){
    //$profileNew=new Profile();
    $profile=Profile::all();
    foreach($profile as $item){ 
    $storedPin=$item->pin;
    $enteredPin=$req->pin;
    //dd($enteredPin);
    }
    if($storedPin==$enteredPin){
    // return view('livewire.site.index');
    return redirect('/index');
     //dd($enteredPin);
    }
    else 
    echo "error";
    
    }
    public function ImageUpload()
    {
    	return view('livewire.admin.dashboard');	
    }

    public function ImageUploadStore(Request $request,$id)
    {
        $profile=Profile::all();
    	//  $request->validate([
        //     'profile_photo_path' => 'required:profiles|mimes:jpg,jpeg,png|max:2048',
        // ]);
    
        $imageName = time().'.'.$request->profile_photo_path->extension();  
     
        $request->profile_photo_path->move(public_path('images'), $imageName);
        $profile->profile_photo_path=$imageName;
        // $profile->save();
        Profile::findorfail($id)->update([
            'profile_photo_path'=>$imageName,
        ]);

  
        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('profile_photo_path',$imageName); 
    }
}
