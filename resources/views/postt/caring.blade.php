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
					 
		 

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Caring Problems</li>
				</ol>
			</div>
           
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">           ID</td>
                            <td class="image">           Date</td>
                            <td class="image">           Time</td>
                            <td class="image">           Description</td>
							<td class="description"></td>
							<td class="total">Result Of Analysis</td>
							
						</tr>
					</thead>
                   
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
                    @foreach($userpost as $cart)
					<tbody>
						<tr>
							<td class="cart_product">
								<a href="">{{$cart->id}}</a>
							</td>
                            
							<td class="cart_description">
								<h4><a href="">{{$cart->date}}</a></h4>
								
							</td>
                        <td class="cart_description">
								<h4><a href="">{{$cart->time}}</a></h4>
								
						
                            </td>
                            <td class="cart_description">
								<h4><a href="">{{$cart->description}}</a></h4>
								
							</td>
                        </tr>
                    
						<tr>
							
						
                       @endforeach  
                  
					</tbody>
              
				</table>
     
          
		</div>
              
                
        </div>
        
	</section> <!--/#cart_items-->
  
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<!--<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	
        </div></section>
    
    <div id="work" class="work text-center">
    <div class="container">
	     <h1 class="line">Advice for avoid problems</h1>
		    <p class="pp">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur
			</p>
			<div class="buttons">

<button id="all"    class="all">All</button>
<button id="food" class="food">food</button>
<button id="play" class="play">play</button>
<button id="talk"  class="talk">talk</button>
<button id="skill"  class="skill">skill</button>

</div>

<div class="images">

<div class="col-md-3 food">
<img src="{{asset('images/frontend_images/home/p1.jpg')}}" alt=""/>
</div>

<div class="col-md-3 play">
<img src="{{asset('images/frontend_images/home/p2.jpg')}}" alt=""/>
</div>

<div class="col-md-3 talk">
<img src="{{asset('images/frontend_images/home/p5.jpg')}}" alt=""/>
</div>
	
<div class="col-md-3 skill">
<img src="{{asset('images/frontend_images/home/p2.jpg')}}" alt=""/>
</div>	

</div>

<div class="clearfix"></div>
<button class="more">View More</button>
	
	
        </div>	
			
</div>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
@endsection