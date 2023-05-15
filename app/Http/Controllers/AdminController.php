<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;            // import Auth

use Illuminate\Support\Facades\Validator;       // import Validator

use App\Models\User;                            // import User Model

use Illuminate\Support\Facades\Hash;            // import Hash

use Carbon\Carbon;                              // import Carbon

class AdminController extends Controller
{
    // change password page
    public function changePasswordPage() {
        return view('admin.account.changePassword');
    }

    // change password
    public function changePassword(Request $request) {
        // dd($request->all());

        $this->passwordValidationCheck($request);

        $user = User::select('password')->where('id',Auth::user()->id)->first();
        
        $dbHashValue = $user->password;

        if(Hash::check($request->oldPassword, $dbHashValue)) {
            $data = [
                'password' => Hash::make($request->newPassword)
            ];
            User::where('id',Auth::user()->id)->update($data);  // user ရိုက်ထည့်လိုက်တဲ့ oldPassword နဲ့ db ထဲက password နဲ့ တူလားစစ်မယ်၊ တူရင် update မယ်။

            return redirect()->route('dashboard')->with(['changeSuccess'=>'Changed Your Password Successfully!']);
        }

        return back()->with(['notMatch'=>'The Old Password not Match. Try Again!']);
    }

    // direct admin edit page
    public function edit() {
        return view('admin.account.edit');
    }

    // update account
    public function update($id, Request $request) {
        $this->accountValidationCheck($request);
        $data = $this->getUserData($request);

        // for image
        if($request->hasFile('image')){                 // user က image ကိုပါ upload လုပ်လားစစ်တယ်
            $dbImage = User::where('id',$id)->first();
            $dbImage = $dbImage->image;                 // database ထဲက old တန်ဖိုးကို ရှာတယ်
            
            if($dbImage != null){                       // image က null မဟုတ်ရင် ရှာပီးဖျက်တယ်
                Storage::delete('public/'.$dbImage);
            }

            $fileName = uniqid().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public',$fileName);   // ပုံအသစ်ကို upload လုပ်မယ်
            $data['image'] = $fileName;
        }

        User::where('id',$id)->update($data);
        return redirect()->route('dashboard')->with(['updateSuccess'=>'Updated Your Account Successfully!']);
    }

    // request user data
    private function getUserData($request){
        return [
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => Carbon::now(),
        ];
    }

    // account validation check
    private function accountValidationCheck($request) {
        Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'image' => 'mimes:png,jpg,jpeg|file',
        ])->validate();
    }

    // password validation check
    private function passwordValidationCheck($request) {
        Validator::make($request->all(),[
            'oldPassword' => 'required|min:6',
            'newPassword' => 'required|min:6',
            'confirmPassword' => 'required|min:6|same:newPassword',
        ])->validate();
    }
}
