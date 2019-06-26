@extends('layouts.frontLayout.front_design')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="cssbootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<br><br><br><br><br><br><br><br>	
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

 

<div id="contact-page" class="container">
 
					<h2 class="title text-center"style="color: #f67">Write <strong>Comment</strong></h2>   			
					<div id="gmap" class="contact-map" >
	
	    		<div class="col-sm-8">
	    			
                    <div class="contact-form">
<form action="{{url('/postt/add-commentt')}}"id="main-contact-form" class="contact-form row" name="commentt-form" method="post">{{ csrf_field() }}
				          
				             <div class="form-group col-md-12">
				                <textarea name="description" id="description" required="required" class="form-control" rows="8" placeholder="Write Your     Comment Here"></textarea>
				            </div>                         
				            <div class="form-group col-md-12">
				                <input style="background-color: #f78" type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
       
    </div>
  </div>
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Comments</div>

                <div class="panel-body comment-container" >
                    
                    @foreach($usercomment as $comment)
                        <div class="well">
                            <i><b> {{ $comment->id_post }} </b></i>&nbsp;&nbsp;
                             
                            <span> {{ $comment->description }} </span>
                           
                </div></div>
                                @endforeach</div></div></div></div></div></div>
    </body></html>
 
	    @endsection