<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function Login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->input();
            
            if(Auth::attempt(['email'=>$data['email'],
                               'password'=>$data['password'],
                               'admin'=>'1']))
            {
               Session::put('adminSession',$data['email']);
                return redirect('admin/dashboard');
            }
            else
            {  
                return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
            }
    }
        return view('admin.admin_login');
    
    }
    public function dashboard(){
        if(Session::has('adminSession')) {
             return view('admin.dashboard');
        }
       //
        else
        { 
            return redirect('/admin')->with('flash_message_error','please login to access');
    }
    }
    
    public function logout()
    {
      
            Session::flush();
           return redirect('/admin')->with('flash_message_success','loggout is successfully');
   }
    
    public function updatePassword(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data =$request->all();
            
            $check_password = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
        
            if(Hash::check($current_password,$check_password->password))
         {
             $password=bcrypt($data['new_pwd']);
             User::where('id','1')->update(['password'=>'$password']);
             return redirect('/admin/settings')->with('flash_message_success','updated password ');
         }
            else
            {
                return redirect('/admin/settings')->with('flash_message_error','no correct password');
            }
        }}
   
    public function chkPassword(Request $request){
         $data = $request->all();
         $current_password = $data['current_pwd'];
         $check_password = User::where(['$data' => '1'])->first();
         if(Hash::check($current_password,$check_password->password))
         {
             echo "true";die;
         }
         else
         {
             echo "false";die;
         }
         
        
     }

     public function settings(){
      
        
        
          return view('admin.settings');
    }
}

