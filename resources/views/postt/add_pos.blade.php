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
 	<form action="{{url('/postt/add-commentt')}}"id="main-contact-form" class="contact-form row" name="post-form" method="post">{{ csrf_field() }}
				     <div class="form-group col-md-12">
				                <textarea name="description" id="description" required="required" class="form-control" rows="8" placeholder="Write Your Post Here"></textarea>
				            </div>                         
				            <div class="form-group col-md-12">
				                <input  type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    

   
    <div id="contact-page" class="container">
 
					<h2 class="title text-center">Write <strong>Comment</strong></h2>   			
					<div id="gmap" class="contact-map" >
	
	    		<div class="col-sm-10">
	    			
                    <div class="contact-form">
<form action="{{url('/postt/add-commentt')}}"id="main-contact-form" class="contact-form row" name="commentt-form" method="post">{{ csrf_field() }}
				          
       <div class="form-group col-md-12">      
    <textarea name="description" id="description" required="required" class="form-control" rows="8" placeholder="Write Your Comment Here" style="color:#047;border:2px"></textarea>
    </div>                    
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
    </div> </form>
                    
                    </div></div></div></div>
                 <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body comment-container" >
                    
                    @foreach($pos as $comment)
                        <div class="well">
                            <i><b> {{ $comment->id_parent }} </b></i>&nbsp;&nbsp;
                            <span> {{ $comment->description }} </span>
                            <div style="margin-left:10px;">
                                <a style="cursor: pointer;"name_a="{{ Auth::user()->id }}" token="{{ csrf_token() }}"/>
                                   </div></div>
                    @endforeach
                </div></div></div></div>

	    @endsection
