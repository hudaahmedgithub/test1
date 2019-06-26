@extends('layouts.frontLayout.front_design')
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
<br><br><br><br><br><br><br><br>
<style>
.col-sm-8.contact-form
    {
        margin-bottom:-6000px;
    }
</style>
<div class="bord">
<div id="contact-page" class="container"style="padding-bottom:-800px;">
 <h2 class="title text-center">Write <strong>Post</strong></h2>   			
					<div id="gmap" class="contact-map" style="padding-bottom:-800px;">
	
	    		<div class="col-sm-10">
	    			
             <div class="contact-form">
<form action="{{url('/postt/post')}}"id="main-contact-form" class="contact-form row" name="post-form" method="post">{{ csrf_field() }}
				     <div class="form-group col-md-12">
				      <textarea name="description" id="description" required="required" class="form-control" rows="8" style="border:2px solid #f67;" placeholder="Write Your Post Here"></textarea>
				            </div>                   <input type="hidden" id="id_post" name="id_post" value="{{Auth::id()}}" >
        
				            <input type="hidden" id="id_user" name="id_user" value="{{Auth::user()->id}}" >
        
        <div class="form-group col-md-12">
				                <input  type="submit" name="submit" class="btn btn-primary pull-right" value="Post">
				            </div>
				        </form>
	    

   
    
                    
                       </div></div>
                </div></div></div>

	    @endsection
