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

<style>
.col-sm-8.contact-form
    {
        margin-bottom:-5000px;
        background:#ccB199
    }
    .con
    {
        background:#ccB199;
        border: 2px solid #903;
        color: #a03
    }
</style>
<div class="con">
<div id="contact-page" class="container"style="padding-bottom:-800px;">
 
					<h2 class="title text-center"style="color: #a03;margin-top:20px">Contact <strong>Us</strong></h2>   			
					<div id="gmap" class="contact-map" style="padding-bottom:-800px;">
	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
				    	<form action="{{url('/pages/contact/')}}"id="main-contact-form" class="contact-form row" name="contact-form" method="post">{{ csrf_field() }}
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
                            
                            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="subject">
				            </div>
                            
				            
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input style="background-color: #903" type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
                        </div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center"style="color: #c03">Contact Info</h2>
	    				<address style="color: #c03">
	    					<p>E-Children Inc.</p>
							<p>Egypt Minia</p>
							<p>Mobile: 010 346 17 38 9</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@e-childrens.com</p>
	    				</address>
	    				<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  


@endsection