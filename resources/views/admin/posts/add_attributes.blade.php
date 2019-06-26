@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> Products<a href="#" class="current"></a>Add Attributes</div>
    <h1>Add Attributes</h1>
      
   @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>	
                   <strong>{!! session('flash_message_error')!!}</strong>
            </div>
            
            @endif
            
             @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>	
                   <strong>{!! session('flash_message_success')!!}</strong>
            </div>
            
            @endif

            </div>
    <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Product Attributes</h5>
            </div>
            <div class="widget-content nopadding">
              
             <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{url('/admin/add-attribute/'.$productDetail->id)}}" name="add_attribute" id="add_attribute" novalidate="novalidate">{{ csrf_field() }}
                
                 
                 <div class="control-group">
                  <label class="control-label">Product ID</label>
                     <label class="control-label"><strong>{{$productDetail->id}}</strong></label>
                  </div>
            
                  <div class="control-group">
                  <label class="control-label">Product Name</label>
                      <label class="control-label"><strong>{{$productDetail->product_name}}</strong></label>
                  </div>
                  
                  <div class="control-group">
                  <label class="control-label">Product Code</label>
                      <label class="control-label"><strong>{{$productDetail->product_code}}</strong></label></div>
                  
                   <div class="control-group">
                  <label class="control-label">Product Color</label>
                       <label class="control-label"><strong>{{$productDetail->product_color}}
                           </strong></label></div>
                  
                 
<div class="control-group">
                
    <label class="control-label"></label>       
          <div class="field_wrapper">
            <div>
                 <input type="text" name="sku[]" placeholder="SKU" style="width:120px;"/>
                
                 <input type="text" name="size[]" placeholder="Size" style="width:120px;"/>
                
                <input type="text" name="price[]" placeholder="Price" style="width:120px;"/>
                
                <input type="text" name="stock[]" placeholder="Stock" style="width:120px;"/>
                
            <a href="javascript:void(0);" class="add_button"   title="Add field">Add</a>
                <br > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input  type="text" name="sku[]" placeholder="SKU" style="width:120px;"/>
                <input type="text" name="size[]" placeholder="Size" style="width:120px;"/>
                <input type="text" name="price[]" placeholder="Price" style="width:120px;"/>
 
    <input type="text" name="stock[]" placeholder="Stock" style="width:120px;"/>
 
                                

    <a href="javascript:void(0);" class="remove_button">Remove</a>
 
          </div>
    </div></div>
                        
                <div class="form-actions">
                  <input type="submit" value="Add Attribute" class="btn btn-success"/>
                </div>
                </form>
          </div>
            </div></div></div></div>
        

@endsection