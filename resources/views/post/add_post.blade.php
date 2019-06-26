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
<div id="contact-page" class="container"style="padding-bottom:-800px;">
 
					<h2 class="title text-center"style="color: #D48806">Contact <strong>Us</strong></h2>   			
					<div id="gmap" class="contact-map" style="padding-bottom:-800px;">
	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
				    	<form action="{{url('/post/add-post')}}"id="main-contact-form" class="contact-form row" name="contact-form" method="post">{{ csrf_field() }}
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Title">
				            </div>
				     
				            <div class="form-group col-md-12">
				                <textarea name="desciption" id="desciption" required="required" class="form-control" rows="8" placeholder="Write Your Post Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input style="background-color: #D48806" type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    @endsection