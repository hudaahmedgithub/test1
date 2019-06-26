@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>Contacts<a href="#" class="current"></a>Add Contact</div>
    <h1>Contacts</h1>
      
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
              <h5>Add Contact</h5>
            </div>
    
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{url('/admin/add-contact')}}" name="add_contact" id="add_contact" novalidate="novalidate">{{ csrf_field() }}
                  
            
                 
           <div class="control-group">
                  <label class="control-label">name</label>
                  <div class="controls">
                    <input type="text" name="name" id="name"/>
                  </div>
                </div>
    
                  <div class="control-group">
                  <label class="control-label">Email</label>
                  <div class="controls">
                    <input type="email" name="email" id="email" /> 
                </div></div>
                  
                  <div class="control-group">
                  <label class="control-label">Subject</label>
                  <div class="controls">
                    <input type="text" name="subject" id="subject" /> 
                </div></div>
                  
                   <div class="control-group">
                  <label class="control-label">Message</label>
                  <div class="controls">
                    <input type="text" name="message" id="message" /> 
                </div></div>
                  
                <div class="form-actions">
                  <input type="submit" value="Add Contact" class="btn btn-success"/>
                    </div>
            </form>
          </div>
        </div>
     
@endsection