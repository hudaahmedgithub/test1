@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>comments<a href="#" class="current"></a>Edit comment</div>
    <h1>comments</h1>
    
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
              <form class="form-horizontal" method="post" action="{{url('/admin/edit-comment/'.$cart->id)}}" name="edit_cart" id="edit_cart" novalidate="novalidate">{{ csrf_field() }}
               
                
           <!--   <div class="control-group">
                  <label class="control-label">ID</label>
                  <div class="controls">
                    <input type="text" name="id" id="id" value="{{ $comment->id }}"/>
                  </div>
                </div>
            -->
                  <div class="control-group">
                  <label class="control-label">Parent ID</label>
                  <div class="controls">
                    <input type="text" name="id_parent" id="id_parent" value="{{ $comment->id_parent }}" /> 
                </div>
            </div>
                  
                  <div class="control-group">
                  <label class="control-label">Name-Parent</label>
                  <div class="controls">
                    <input type="text" name="name_parent" id="vame_patent" value="{{ $comment->name_parent }}" /> 
                </div>
            </div>
                  
                      <div class="control-group">
                  <label class="control-label">date</label>
                  <div class="controls">
                    <input type="date" name="date" id="date"
                      value="{{ $comment->date }}"/>
                  </div>
            </div>
             
                  <div class="control-group">
                  <label class="control-label">time</label>
                  <div class="controls">
                    <input type="time" name="time" id="time" value="{{ $comment->time }}" /> 
                </div>
            </div>
                  
                <!--  <div class="control-group">
                  <label class="control-label">Session_id </label>
                  <div class="controls">
                    <input type="text" name="session_id" id="session_id" value="{{ $cart->session_id }}" /> 
                </div>
            </div>-->
                  
                   <div class="control-group">
                  <label class="control-label">Description </label>
                  <div class="controls">
                    <input type="text" name="Description" id="Description" value="{{ $comment->Description }}" /> 
                </div>
            </div>
                <div class="form-actions">
                  <input type="submit" value="Edit Comment" class="btn btn-success"/>
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
