@extends('layouts.adminLayout.admin_design')
@section('content')
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

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>Contacts<a href="#" class="current"></a>Edit Contact</div>
    <h1>Contacts</h1>
    
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
    
    <div class="row-fluid">

        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit Contact</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{url('/admin/edit-contact/'.$contacts->id)}}" name="edit_contact" id="edit_contact" novalidate="novalidate">{{ csrf_field() }}
               
                
             <!-- <div class="control-group">
                  <label class="control-label">ID</label>
                  <div class="controls">
                    <input type="integer" name="id" id="id" value="{{ $contacts->id }}"/>
                  </div>
                </div>-->
            
                  <div class="control-group">
                  <label class="control-label">User Name</label>
                  <div class="controls">
                    <input type="text" name="name" id="name" value="{{ $contacts->name }}" /> 
                </div></div>
                  <div class="control-group">
                  <label class="control-label">User Email</label>
                  <div class="controls">
                    <input type="email" name="email" id="email" value="{{ $contacts->email }}" /> 
                </div></div>
                  
                      <div class="control-group">
                  <label class="control-label">Subject</label>
                  <div class="controls">
                    <input type="text" name="subject" id="subject"
                      value="{{ $contacts->subject }}"/>
                  </div>
                </div>
                
                 
                    <div class="control-group">
                  <label class="control-label">Message</label>
                  <div class="controls">
                    <input type="text" name="message" id="message" value="{{ $contacts->message }}"  />
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Edit Contact" class="btn btn-success"/>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
    
      
 