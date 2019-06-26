@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>Users<a href="#" class="current"></a>Edit User</div>
    <h1>Users</h1>
    
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
    
    <div class="row-fluid">

        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit User</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{url('/admin/edit-user/'.$userD->id)}}" name="edit_user" id="edit_user" novalidate="novalidate">{{ csrf_field() }}
               
                
              <div class="control-group">
                  <label class="control-label">ID</label>
                  <div class="controls">
                    <input type="integer" name="id" id="id" value="{{ $userD->id }}"/>
                  </div>
                </div>
            
                  <div class="control-group">
                  <label class="control-label">User Name</label>
                  <div class="controls">
                    <input type="text" name="name" id="name" value="{{ $userD->name }}" /> 
                </div></div>
                  <div class="control-group">
                  <label class="control-label">User Email</label>
                  <div class="controls">
                    <input type="email" name="email" id="email" value="{{ $userD->email }}" /> 
                </div></div>
                  
                      <div class="control-group">
                  <label class="control-label">Password</label>
                  <div class="controls">
                    <input type="text" name="password" id="password"
                      value="{{ $userD->password }}"/>
                  </div>
                </div>
                
                 
                    <div class="control-group">
                  <label class="control-label">Admin</label>
                  <div class="controls">
                    <input type="text" name="admin" id="admin" value="{{ $userD->admin }}"  />
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Edit User" class="btn btn-success"/>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
    
      
    <!-- @if(Session::has('flash_message_error'))
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
-->