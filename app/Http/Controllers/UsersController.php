<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Comment;

class UsersController extends Controller
{
     public function userLoginRegister(Request $request)
     {
         return view('users.login_register');
     }
    
     public function login(Request $request){
    if($request->isMethod('post'))
    {
     $data=$request->all(); 
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
     {
         return redirect('/posts');
     }
        else
        {
            return redirect()->back()->with('flash_message_error','Invalid email OR password !!!');
        }
      }
    }
    public function register(Request $request){
      if($request->isMethod('post'))
    {
     $data = $request->all();  
     $usercount=new User;
     $usercount = User::
            where('email',$data['email'])->count();
        if($usercount>0)
        {
            return redirect()->back()->with('flash_message_error','Email alresdy exist');
        }
            else
            {
                $user=new User;
                $user->name=$data['name'];
                $user->email=$data['email'];
                $user->password=bcrypt($data['password']);
                $user->save();
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
                {
                    return redirect('/cart');
                }
            }
        }
       
    }
    
    
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
    
   /* public function login(Request $request){
    if($request->isMethod('post'))
    {
     $data = $request->all();   if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
     {
         return redirect('/cart');
     }
        else
        {
            return redirect()->back()->with('flash_message_error','Check if any field not full !!!');
        }
    }
    }*/
   /*************view user***********/ 
    public function viewUser(Request $request)
    {    $users=User::get();
         $comment=Comment::get();
         return view('admin.user.view_users')->with(compact('users','comment'));
    }
    
    /************ add user************/
     public function addUser(Request $request)
    {   
         if($request->isMethod('post')){
             $data = $request->all();
    
        if(empty($data['name'] && $data['email'] && $data['password']))
            
            {
               return redirect()->back()->with('flash_message_error','Check if any field not full !!!');
           }
           
             $user=new User;
             //$user->id=$data['id'];
             $user->name=$data['name'];
             $user->email=$data['email'];
             $user->password=bcrypt($data['password']);
             $user->admin=$data['admin'];
             $user->save();
}
            return view('admin.user.add_user');
}
    
    /**************delete**********/
     public function deleteUser($id=null)
    {    
        
    if(!empty($id))
    {
        User::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','User deleted Successfully !!!');
    }
  }
    
    /******************update*************/
   public function editUser(Request $request , $id=null)
    {        
    if($request->isMethod('post'))
        {
            $data =$request->all();
            User::where(['id'=>$id])->
            update(['name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$data['password'],
             'admin'=>$data['admin']]);
        
        return redirect('/admin/view-users')->with('flash_message_success','User updated Successfully !!!');
    
    }   
         $userD=User::where(['id'=>$id])->first();
         return view('admin.user.edit_user')->with(compact('userD'));
     }   
}
/*public function login(Request $request)
{
    $data = $request->input();
            
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],
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
        return view('index');
    
    }
    
    
    
}*/