<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Mail;
use App\Contact;
 
class ContactsController extends Controller
{
    public function contact(Request $request){
      
       if($request->isMethod('post')){
         $data = $request->all();
            //echo "<pre>"; print_r($data);
          /*    $contact=new Contact;
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
}
    /***************add contact***************/
    public function addContact(Request $request)
    {   
         if($request->isMethod('post')){
             $data = $request->all();
             
        if(empty($data['name'] && $data['email'] && $data['subject'] && $data['message']))
           {
               return redirect()->back()->with('flash_message_error','Check if any field not full !!!');
           }
             $contac=new Contact;
            // $contac->id=$data['id'];
             $contac->name=$data['name'];
             $contac->email=$data['email'];
             $contac->subject=$data['subject'];
             $contac->message=$data['message'];
             $contac->save();
     }
         return view('admin.contact.add_contact');
     }
    
    /*****************view contact*************/
    
   public function viewContact(Request $request)
    {   
         $contacts=Contact::get();
         return view('admin.contact.view_contact')->with(compact('contacts'));
    }
    
    /************delete contact*********/
     public function deleteContact($id=null)
    {    
        
    if(!empty($id))
    {
        Contact::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','contact deleted Successfully !!!');
    }
  }
    /***************update contact********/
   public function editContact(Request $request , $id=null)
    {        
    if($request->isMethod('post'))
        {
            $data =$request->all();
            Contact::where(['id'=>$id])->
            update(['id'=>$data['id'],
            'name'=>$data['name'],
            'email'=>$data['email'],
            'subject'=>$data['subject'],
             'message'=>$data['message']]);
        
        return redirect('/admin/view-contact')->with('flash_message_success','contact updated Successfully !!!');
    
    }   
         $contacts=Contact::where(['id'=>$id])->first();
         return view('admin.contact.edit_contact')->with(compact('contacts'));
     }   
}
