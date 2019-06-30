<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserTable;
use Hash;
use Session;
class AuthController extends Controller
{
    public function index(){
        return view('auth.login_page');
    }

   public function LoginVerification(Request $req){
       $data=UserTable::where('email',$req->email)->first();
       if($data){
        if(Hash::check($req->password,$data->password)) {
            $user_type=$data->user_belongs_group;
            Session::put('UserSession',$data->username);
            Session::put('User_email',$data->email);
            Session::put('UserType',$user_type);

                if($user_type=='1'){
                    return redirect('/admin-dashbord');
                }
                elseif($user_type=='2' || $user_type=='3'){
                    return redirect('/user-dashbord');
                }
            
       }
       else{
           return back()->with('msg','Wrong Password');
       }

       }
       else{
        return back()->with('msg','Wrong Email');
       }


      
   }


public function Logout(){
    Session()->forget('UserSession');
    Session()->forget('User_email');
    Session()->forget('UserType');
    
    return redirect('/');
}













}

