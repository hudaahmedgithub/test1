@extends('layouts.frontLayout.front_design')
@section('content')
<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
					<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-4">
									<h1><span>E</span>-Children</h1>
									
							
									
								</div>
								
									<img src="{{asset('images/frontend_images/home/mmm.png')}}"  />
								</div>
						
							<div class="item ">
								<div class="col-sm-4">
									<h1><span>E</span>-Chidren</h1>
									
								
									
								</div>
								
									<img src="{{asset('images/frontend_images/home/m22.jpg')}}"  />
								</div>
						
							<div class="item ">
								<div class="col-sm-4">
									<h1><span>E</span>-Children</h1>
								
									
								</div>
								
									<img src="{{asset('images/frontend_images/home/m33.jpg')}}"  />
								</div>
                        </div>
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
                </div></div></div>	
</section>

<!--@foreach($categories as $cat)
							
						 <div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#{{$cat->id}}"> 
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{$cat->name}}
                                           
										</a>
									</h4>
                              </div>
							 <div id="$cat->id" class="panel-collapse collapse">
             <div class="panel-body">
           
             <ul>
                     @foreach($cat->categories as $subcat)
                    {
                       <li><a href="{{asset('/product/'.$subcat->name)}}">{{$subcat->name}}</a></li>
                     }
                      @endforeach   
                </ul>
                 
            </div>
         </div>
    @endforeach-->

				<div class="col-sm-12">
					<div class="features_items">
						<h2 class="title text-center">{{$categoryDetails->name}}</h2>
                        @foreach($productsAll as $product)
						<div class="col-sm-4">
				<div class="product-image-wrapper">
								
                    <div class="single-products">
								
                        <div class="productinfo text-center">
											
                            <img src="{{asset('images/frontend_images/home/m33.jpg')}}" alt="" />
											
                          	
                            <p>{{$product->product_name}}</p>
                            
                            <p>{{$product->description}}</p>
											
                            <a href="{{url('product/'.$product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i></a>
										</div>
                        
           
							
</div>
 		<div class="choose">
									
                     <!--<ul class="nav nav-pills nav-justified">
										
                         <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										
                         <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>-->
								</div>
							</div>
						
                          
                     
       		</div>
                         @endforeach
                    </div>
					
				</div>
            </div></div>
		
	</section>
@endsection
