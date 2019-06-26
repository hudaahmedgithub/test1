<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Contact;
class ContactsController extends Controller
{
    public function contact(Request $request){
      
       if($request->isMethod('post')){
         $data = $request->all();
            //echo "<pre>"; print_r($data);
        /*   $contact=new Contactt;
             $contact->name=$data['name'];
             $contact->email=$data['email']; 
             $contact->subject=$data['subject']; 
             $contact->message=$data['message'];
             $contact->save();*/
 $email="admin1000@yopmail.com";
            $messageData=
                [
                'name'=>$data['name'],
                'email'=>$data['email'],
                'subject'=>$data['subject'],
                'comment'=>$data['message']
                ];
            Mail::send('emails.enquiry',$messageData,
                      function($message)use($email)
                       {
                           $message->to($email)->subject('Enquiry from E-com');
                       });
            return redirect()->back()->with('flash_message_success','Thank you for your enquiry, we will get back soon.');
           // echo "test";die;
    }
   $categories = Category::with('categories')->where(['parent_id'=>0])->get();
    $categories_menu="";
      
      foreach($categories as $cat)
      {   //echo $cat->name; echo"<br>";
          
         $categories_menu.= "<div class='panel-heading'>
				<h4 class='panel-title'>
				<a data-toggle='collapse' data-parent='#accordian ' href='#".$cat->id."'> 
				<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											".$cat->name."
                                            
										</a>
									</h4>
                              </div>
             <div id='".$cat->id."' class='panel-collapse collapse'>
             <div class='panel-body'>
           
             <ul>";
       
      $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
          
          foreach($sub_categories as $subcat)
          {
                 $categories_menu.="<li><a href='/products/".$subcat->name."'>".$subcat->name."</a></li>";
          }
    
       $categories_menu.="</ul>
        </div>
        </div>";
    }
  
         return view('pages.contact')->with(compact('$categories_menu','$categories'));
}}