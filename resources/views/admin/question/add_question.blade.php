@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>Question<a href="#" class="current"></a>Add Question</div>
    <h1>Add Question</h1>
      
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
              <h5>Add Question</h5>
            </div>
    
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{url('/admin/add-question')}}" name="add-question" id="add-question" novalidate="novalidate">{{ csrf_field() }}
                  
             <!--<div class="control-group">
                  <label class="control-label">ID</label>
                  <div class="controls">
                    <input type="int" name="id" id="id"/>
                  </div>
                </div>-->
                 
    
                <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <input type="text" name="description" id="description" /> 
                </div></div>
                  
                  
                <div class="form-actions">
                  <input type="submit" value="add question" class="btn btn-success"/>
                    </div>
            </form>
          </div>
        </div>
     
@endsection