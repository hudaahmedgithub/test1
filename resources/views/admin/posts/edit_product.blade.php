@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> Posts<a href="#" class="current"></a>Edit Postt</div>
    <h1>Edit Post</h1>
      
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
            <div class="widget-content nopadding">
              <form enctype="multipart/form-data" class="form-horizontal" method="post" 
                    action="{{url('/admin/edit-post/'.$productDetails->id)}}" 
                    name="edit_post" id="edit_post" novalidate="novalidate">{{ csrf_field() }}
            
                 <!--  <div class="control-group">
                  <label class="control-label">ID</label>
                  <div class="controls">
                    <input type="text" name="id" id="id" value="{{ $productDetails->id }}"/>
                  </div>
                </div>
               -->
                <!--<div class="control-group">
                  <label class="control-label">ID Parent</label>
                  <div class="controls">
                    <input type="int" name="id_parent" id="id_parent" value="{{ $productDetails->id_parent }}"/>
                      
                      <?/*php echo $categories_dropdown;*/?>
                  </div>
                </div> -->
                     
                   
                  <div class="control-group">
                  <label class="control-label">Title</label>
                  <div class="controls">
                    <input type="text" name="title" id="title" value="{{ $productDetails->title }}"/> 
                </div></div>
                  
                 <!-- <div class="control-group">
                  <label class="control-label">Date</label>
                  <div class="controls">
                    <input type="date" name="date" id="date" value="{{ $productDetails->date }}" /> 
                </div></div>
                  
                   <div class="control-group">
                  <label class="control-label">Time</label>
                  <div class="controls">
                    <input type="time" name="time" id="time" value="{{ $productDetails->time }}" /> 
                </div></div>-->
                  
                  
                      <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <textarea name="description" id="description">{{ $productDetails->description }}</textarea>
                  </div>
                </div>
                
                
                <div class="form-actions">
                  <input type="submit" value="Edit Post" class="btn btn-success"/>
                    </div>
            </form>
          </div>
        </div>
    

@endsection