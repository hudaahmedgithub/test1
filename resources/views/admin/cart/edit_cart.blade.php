@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>carts<a href="#" class="current"></a>Edit cart</div>
    <h1>carts</h1>
    
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
    
    <div class="row-fluid">

        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit Cart</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{url('/admin/edit-cart/'.$cart->id)}}" name="edit_cart" id="edit_cart" novalidate="novalidate">{{ csrf_field() }}
               
                
              <!--<div class="control-group">
                  <label class="control-label">ID</label>
                  <div class="controls">
                    <input type="text" name="id" id="id" value="{{ $cart->id }}"/>
                  </div>
                </div>
            -->
                  <div class="control-group">
                  <label class="control-label">ID parent</label>
                  <div class="controls">
                    <input type="text" name="id_parent" id="id_parent" value="{{ $cart->id_parent }}" /> 
                </div>
            </div>
                  
                  <div class="control-group">
                  <label class="control-label">title</label>
                  <div class="controls">
                    <input type="text" name="title" id="title" value="{{ $cart->title }}" /> 
                </div>
            </div>
                  
                      <div class="control-group">
                  <label class="control-label">Result</label>
                  <div class="controls">
                    <input type="text" name="result" id="result"
                      value="{{ $cart->result }}"/>
                  </div>
            </div>
             
               
                      <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <input type="text" name="description" id="description"
                      value="{{ $cart->description }}"/>
                  </div>
            </div>
                
                 
                  
                <div class="form-actions">
                  <input type="submit" value="Edit problem" class="btn btn-success"/>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
    
      
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
