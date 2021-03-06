<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\User;
use App\Comment;
use App\Result;


class ResultsController extends Controller
{
      public function viewR(Request $request)
    {   
          $comment=Result::get();
          return view('admin.result.view_results')->with(compact('comment'));
     }
     public function addR(Request $request)
    {   
                
     if($request->isMethod('post')){
             $data = $request->all();
       
        if(empty($data['description']))
           {
               return redirect()->back()->with('flash_message_error','Check if any field not full !!!');
           }
             $problem=new Result;
             //$product->id=$data['id'];
             //$problem->id_parent=$data['id_parent'];
             //$product->date=$data['date'];
             //$product->time=$data['time'];
             //$problem->name_parent=$data['name_parent'];
             $problem->description=$data['description'];
             $problem->save();
             return redirect()->back()->with('flash_message_success','result Added Successfully !!!');
     }
     /*$categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option value='' selected disable>Select</option>";
        
        foreach($categories as $cat)
        {
     
       $categories_dropdown .= "<option value='".$cat->id."' >".$cat->name."</option>";
     
            $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
                
           foreach($sub_categories as $sub_cat)
           {
               $categories_dropdown .= "<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
           }
            
        }*/
          return view('admin.result.add_result');//->with(compact('categories_dropdown'));    
    }

     public function editR(Request $request , $id=null)
    {        
    if($request->isMethod('post'))
        {
            $data =$request->all();
            Result::where(['id'=>$id])->update(['description'=>$data['description']]);
        
        return redirect('/admin/view-questions')->with('flash_message_success','result updated Successfully !!!');
    
    }   
         $comment=Question::where(['id'=>$id])->first();
         return view('admin.result.edit_result')->with(compact('comment'));
     }   

  public function deleteR($id=null)
    {    
        
    if(!empty($id))
    {
        Result::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Result deleted Successfully !!!');
    }
  }
    
}
