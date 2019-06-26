@extends('layouts.frontLayout.front_design')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

 
<!--close-top-serch--> 

<!--sidebar-menu-->


<div id="content">
  <div id="content-header">
   
  

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
    <br><br><br><br><br><br>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
         
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h1 style="color:#047;margin-left:44%;">View Posts</h1>
          </div>
          <div class="widget-content nopadding">
         </div>
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>
             
                <div class="panel-body comment-container" >  
                    <table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">           &nbsp;&nbsp;&nbsp;id</td>
							<td class="description"></td>
						
							
							<td class="total">post</td>
							
						</tr>
					</thead>
                    </table>
                    @foreach($posts as $post)
                        <div class="well">
                               <i><b> {{ $post->id }} </b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i><b> {{ $post->id_user }} </b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i><b> {{ $post->id_post }} </b>
                         @foreach($comments as $comment)
                        
                        <i><b> {{ $comment->name_user }} </b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                                 <i><b> {{ $comment->description }} </b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                            <i><b> {{ $comment->description }} </b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                            @endforeach
                            </div>
                    @endforeach
                </div></div></div></div></div></div>
<!--Footer-part-->

<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>

@endsection