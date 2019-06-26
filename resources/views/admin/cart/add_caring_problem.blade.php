@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>Caring Problems<a href="#" class="current"></a>Add Problem</div>
    <h1>Add Problem</h1>
      
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
              <h5>Add Problem</h5>
            </div>
    
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{url('/admin/add-problem')}}" name="add_problem" id="add_problem" novalidate="novalidate">{{ csrf_field() }}
                  
             <!--<div class="control-group">
                  <label class="control-label">ID</label>
                  <div class="controls">
                    <input type="int" name="id" id="id"/>
                  </div>
                </div>-->
                 
          <div class="control-group">
                  <label class="control-label">ID Parent</label>
                  <div class="controls">
                    <input type="integer" name="id_parent" id="id_parent"/>
                  </div>
                </div>
  
             <!--  <div class="control-group">
                  <label class="control-label">Date Problem</label>
                  <div class="controls">
                    <input type="date" name="date" id="date" /> 
                </div></div>-->
                  
                  
                  <div class="control-group">
                  <label class="control-label">Title Problem</label>
                  <div class="controls">
                    <input type="text" name="title" id="title" /> 
                </div></div>
                  
                   <div class="control-group">
                  <label class="control-label">Result Analysis</label>
                  <div class="controls">
                    <input type="text" name="result" id="result" /> 
                </div></div>
                
                <div class="control-group">
                  <label class="control-label">Description Problem</label>
                  <div class="controls">
                    <input type="text" name="description" id="description" /> 
                </div></div>
                  
                  
                <div class="form-actions">
                  <input type="submit" value="Add Problem" class="btn btn-success"/>
                    </div>
            </form>
          </div>
        </div>
     
@endsection