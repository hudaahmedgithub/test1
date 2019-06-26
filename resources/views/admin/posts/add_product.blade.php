@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> Posts<a href="#" class="current"></a>Add Posts</div>
    <h1>Post</h1>
      
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
<div class="container-fluid"><hr>
    <div class="row-fluid">
 

        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Post</h5>
            </div>
    
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{url('/admin/add-post')}}" name="add_post" id="add_post" novalidate="novalidate">{{ csrf_field() }}
                 
            
                  <!-- <div class="control-group">
                  <label class="control-label">ID</label>
                  <div class="controls">
                    <input type="int" name="id" id="id"/>
                  </div>
                </div>-->
               
            <!-- <div class="control-group">
                  <label class="control-label">ID Parent</label>
                  <div class="controls">
                    <input type="int" name="id_parent" id="id_parent"/>
                  </div>
                </div>-->
                  
                  <div class="control-group">
                  <label class="control-label">Title Post</label>
                  <div class="controls">
                    <input type="text" name="title" id="title" /> 
                </div></div>
                  
                 <!-- <div class="control-group">
                  <label class="control-label">Date Post</label>
                  <div class="controls">
                    <input type="date" name="date" id="date" /> 
                </div></div>
                  
                   <div class="control-group">
                  <label class="control-label">Time</label>
                  <div class="controls">
                    <input type="time" name="time" id="time" /> 
                </div></div>-->
                  
                  
                      <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <textarea name="description" id="description"></textarea>
                  </div>
                </div>
                
                
                <div class="form-actions">
                  <input type="submit" value="Add Product" class="btn btn-success"/>
                    </div>
            </form>
          </div>
        </div>
     
@endsection