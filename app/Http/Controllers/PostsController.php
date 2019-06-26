<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Image;
use App\Category;
use App\Problem;
use DB;


class PostsController extends Controller
{
    public function addProduct(Request $request)
    {   
                
     if($request->isMethod('post')){
             $data = $request->all();
              
       
        if(empty($data['category_id'] && $data['product_name']))
           {
               return redirect()->back()->with('flash_message_error','Check if any field not full !!!');
           }
             $product=new Problem;
             $product->category_id=$data['category_id'];
             $product->id=$data['id'];
             $product->product_name=$data['product_name'];
             $product->description=$data['description'];
             $product->save();
             return redirect()->back()->with('flash_message_success','Product Added Successfully !!!');
     }
        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option value='' selected disable>Select</option>";
        
        foreach($categories as $cat)
        {
     
       $categories_dropdown .= "<option value='".$cat->id."' >".$cat->name."</option>";
     
            $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
                
           foreach($sub_categories as $sub_cat)
           {
               $categories_dropdown .= "<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
           }
            
        }
          return view('admin.products.add_product')->with(compact('categories_dropdown'));    
        
}
    
public function editProduct(Request $request , $id=null)
            {
               if($request->isMethod('post'))
               {
            $data =$request->all();
            Problem::where(['id'=>$id])->update([ 
                'id'=>$data['id'],
                'category_id'=>$data['category_id'],
                'product_name'=>$data['product_name'],
                'description'=>$data['description'],]);
       
                   
                  return redirect('/admin/view-product')->with('flash_message_success','product updated Successfully !!!');
    
    }   
            $productDetails=Problem::where(['id'=>$id])->first();
    
            $categories = Category::where(['parent_id'=>0])->get();
         $categories_dropdown = "<option selected disable>Select</option>";
        
        foreach($categories as $cat)
        {
            if($cat->id==$productDetails->category_id)
            {
                $selected="selected";
            }
            else
            {
                 $selected="";
            }
        
            $categories_dropdown .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
            
        $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
           
            foreach($sub_categories as $sub_cat)
        {if($sub_cat->id==$productDetails->category_id)
            {
                $selected="selected";
            }
            else
            {
                 $selected="";
            }
        
            $categories_dropdown .= "<option value='".$sub_cat->id."' ".$selected.">&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }
         return view('admin.products.edit_product')->with(compact('productDetails','categories_dropdown'));
          }  

    
    public function deleteProduct($id=null )
    {
        Problem::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','product deleted successfully !!');
    }
  
   public function addAttributes(Request $request,$id=null)
   {    
      $productDetail = Problem::where(['id'=>$id])->first();
       return view('admin.products.add_attributes')
           ->with(compact('productDetail'));
   }
     


public function Products($name=null)
{
    $countCategory=Category::where(['name'=>$name])->count();
    /*if($countCategory==0)
       {
          abort(404); 
       }
    */
    $categoryDetails=Category::where(['name'=>$name])->first();
  
    $categories = Category::with('categories')->where(['parent_id'=>0])->get();
   if($categoryDetails->parent_id==0)
   {
       $subCategories=Category::where(['parent_id'=>$categoryDetails->id])->get();
       
       $cat_ids="";
       foreach($subCategories as $key=>$subcat)
       {
         if($key==1)
             $cat_ids.=","; 
              $cat_ids.=trim($subcat->id);       
         
       }
      // echo $cat_ids;die;
       //$productsAll=Problem::whereIn('category_id',array($cat_ids))->get();
       $productsAll=Problem::where(['category_id'=>$categoryDetails->id])->get();
        
   }
    
    else{
        $productsAll=Problem::where(['category_id'=>$categoryDetails->id])->get();
        
        
       }
     
     //$productsAll=Problem::where(['category_id'=>$categoryDetails->id])->get();
    return view('products.listing')->with(compact('categoryDetails','productsAll','categories'));
}
   public function viewProduct()
    {    $products=Problem::get();
         
          foreach($products as $key => $val)
          {
        $category_name =Category::where(['id'=>$val->category_id])->first();
        $products[$key]->category_name =$category_name->name;
             
          }
         return view('admin.products.view_product')->with(compact('products'));
     }
     
    public function Product($id=null)
    {
        
        $productDetails=Problem::where('id',$id)->first();
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        return view('products.detail')->with(compact('productDetails','categories'));
    }
   public function cart()
   {    
         
        $session_id=Session::get('session_id');
        $userCart=DB::table('carts')->where(['session_id'=>$session_id])->get();
       return view('products.cart')->with(compact('userCart'));
   }

    
 public function addtocart(Request $request)

 {
   
     $data=$request->all();
     if(empty($data['user_email']))
      
     {
         $data['user_email']=' ';
     }
     
      $session_id=Session::get('session_id');
     
     if(empty($data['session_id']))
  {
         $session_id=str_random(40);
         Session::put('session_id',$session_id);
  }
    
     DB::table('carts')->insert(['id'=>$data['id'], 
     'product_name'=>$data['product_name'],
     'product_code'=>$data['product_code'],
     'price'=>$data['price'],
      'user_email'=>$data['user_email'],
      'session_id'=>$session_id]);
 
     return redirect('cart')->with('flash_message_success','product added Successfully !!!');
  
    
 }

}
