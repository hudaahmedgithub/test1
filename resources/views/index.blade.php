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
<section class="sections about" id="about">
            <div style="margin-top:100px;" class="container">
                <div class="section-header text-center">
                    <h2 class="section-title">About Us</h2>
                    <div class="line">
                        <span></span>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos nostrum, cumque numquam quae voluptatum qui.
                    </p>
                </div><!-- ./section-header -->
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-info">
                            <h3 class="mg_bt">Welcome to <span style="color:#903">Social Creative</span>Design For Caring with Children</h3>
                            <p class="about-info-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem voluptas aspernatur, error sunt iure id. Nihil, sit. Sint iusto error perspiciatis dolore aliquam, pariatur neque nostrum tempora ex assumenda nulla non excepturi facilis sunt voluptatem veniam, dolorem animi molestias accusantium, vitae corporis. Quasi, officiis non ipsam cum, labore quisquam fuga beatae qui, consequatur aut voluptatibus tempora ex molestiae id ipsum unde suscipit dignissimos? Quia libero, deserunt ipsa, repellat nihil incidunt architecto veniam ipsum voluptate rerum!
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-img">
                            <img  src="{{asset('images/frontend_images/home/m22.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </section><section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian">
							<div class="panel panel-default">
								<?php echo     $categories_menu;?>
                        @foreach($categories as $cat)
							
				
                               </div>
                               </div>
                          @endforeach
                    
					
				<div style="float:rigth;" class="col-sm-12 padding-right">
					<div class="features_items">
						<h2 class="title text-center">Caring</h2>
                        @foreach($productsAll as $product)
                        
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
					<div class="productinfo text-center">
						<img src="{{asset('images/frontend_images/home/m33.jpg')}}">
           		
				<p>{{$product->product_name}}</p>
				<a href="{{url('add-cart')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i></a>
										</div>
      <div class="product-overlay">
         	<div class="overlay-content">
                    <img src="{{asset('images/frontend_images/home/.jpg')}}" alt="" />
						 <p>{{$product->product_name}}</p>
				
                <a href="{{url('add-cart')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i></a>
											</div>
				</div>
                                </div></div></div>

                           @endforeach
                    </div></div></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					
     
                </div></div></div>
	</section>


        
        <!-- Services -->
        <section class="sections services"  id="service">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title">Our Services</h2>
                    <div class="line">
                        <span></span>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos nostrum, cumque numquam quae voluptatum qui.
                    </p>
                </div><!-- ./section-header -->
                
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="serv">
                            <i class="icon fa fa-camera fa-lg"></i>
                            <h3 class="serv-title">Write Post</h3>
                            <p class="serv-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dignissimos, recusandae facilis, quis consequatur eos!
                            </p>
                        </div>
                    </div><!-- ./serv -->
                    
                    <div class="col-md-4 col-xs-12">
                        <div class="serv">
                            <i class="icon fa fa-laptop fa-lg"></i>
                            <h3 class="serv-title">Create Account</h3>
                            <p class="serv-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dignissimos, recusandae facilis, quis consequatur eos!
                            </p>
                        </div>
                    </div><!-- ./serv -->
                    
                    <div class="col-md-4 col-xs-12">
                        <div class="serv">
                            <i class="icon fa fa-camera fa-lg"></i>
                            <h3 class="serv-title">View Posts</h3>
                            <p class="serv-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dignissimos, recusandae facilis, quis consequatur eos!
                            </p>
                        </div>
                    </div><!-- ./serv -->
                </div><!-- ./row -->
                
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="serv">
                            <i class="icon fa fa-database fa-lg"></i>
                            <h3 class="serv-title">Write Comment</h3>
                            <p class="serv-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dignissimos, recusandae facilis, quis consequatur eos!
                            </p>
                        </div>
                    </div><!-- ./serv -->
                   
                    <div class="col-md-4 col-xs-12">
                        <div class="serv">
                            <i class="icon fa fa-pencil fa-lg"></i>
                            <h3 class="serv-title">Read Advices</h3>
                            <p class="serv-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dignissimos, recusandae facilis, quis consequatur eos!
                            </p>
                        </div>
                    </div><!-- ./serv -->
                    <div class="col-md-4 col-xs-12">
                        <div class="serv">
                            <i class="icon fa fa-pencil fa-lg"></i>
                            <h3 class="serv-title">Read Instructions</h3>
                            <p class="serv-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dignissimos, recusandae facilis, quis consequatur eos!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="serv">
                            <i class="icon fa fa-pencil fa-lg"></i>
                            <h3 class="serv-title">Login</h3>
                            <p class="serv-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dignissimos, recusandae facilis, quis consequatur eos!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="serv">
                            <i class="icon fa fa-pencil fa-lg"></i>
                            <h3 class="serv-title">View Problem & Solution</h3>
                            <p class="serv-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dignissimos, recusandae facilis, quis consequatur eos!
                            </p>
                        </div>
                    </div>
                <div class="col-md-4 col-xs-12">
                        <div class="serv">
                            <i class="icon fa fa-file-video-o fa-lg"></i>
                            <h3 class="serv-title">Contact</h3>
                            <p class="serv-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum dignissimos, recusandae facilis, quis consequatur eos!
                            </p>
                        </div>
                    </div><!-- ./serv -->
                </div><!-- ./row -->
                
            </div>
        </section>
        
<!--<div class="row">
                    
                    <div class="col-md-6 col-xs-12">
                        <div class="c_panel">
                            
                            <ul class="list-unstyled">
                                <li data-role="p_about">About</li>
                                <li data-role="p_service">Service</li>
                                <li data-role="p_contact">Contact</li>
                            </ul>
                            
                            <div class="content">
                                <div class="c_info content1" id="p_about">
                                    <img src="{{asset('images/frontend_images/home/m3.jpg')}}" alt="">
                                    <p>About Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem officiis eligendi sapiente<br> nobis sequi eveniet assumenda aut obcaecati accusamus quod est illo eum nesciunt illum,<br> consequuntur possimus tempore. Quibusdam recusandae fugit, quidem facere.<br> Consequatur rem saepe maxime quibusdam itaque aperiam at possimus velit sint eaque. Iusto dolorum quod minus cum<br> ratione facere ab numquam quia id aut quo recusandae similique error,<br> distinctio corporis et quasi mollitia debitis? Atque quam nemo, porro iure sunt odio ad perferendis ducimus nihil, ratione odit<br> laboriosam error ipsa. Sapiente obcaecati adipisci, dignissimos, rerum nesciunt laudantium ex quos ducimus accusamus amet esse, velit debitis reiciendis! Expedita</p>
                                </div>
                                
                                <div class="clearfix"></div>
                                
                                <div class="c_info content2"  id="p_service">
                                    <img style="width:100%;" src="{{asset('images/frontend_images/home/m22.jpg')}}" alt="">
                                    <p>Service Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem officiis eligendi sapiente nobis sequi eveniet<br> assumenda aut obcaecati accusamus quod est illo eum nesciunt illum, consequuntur possimus tempore.<br> Quibusdam recusandae fugit, quidem facere. Consequatur rem saepe maxime quibusdam<br> itaque aperiam at possimus velit sint eaque. Iusto dolorum quod minus cum ratione facere ab numquam quia id aut quo recusandae<br> similique error, distinctio corporis et quasi mollitia debitis? Atque quam nemo, porro iure sunt odio ad perferendis ducimus nihil, ratione odit laboriosam error<br> ipsa. Sapiente obcaecati adipisci, dignissimos, rerum nesciunt laudantium ex quos ducimus accusamus amet esse, velit debitis reiciendis! Expedita?</p>
                                </div>
                                
                                <div class="clearfix"></div>
                                
                                <div class="c_info content3" id="p_contact">
                                    <img style="width:100%;" src="{{asset('images/frontend_images/home/images (4).jpg')}}" alt="">
                                    <p>Contact Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem officiis eligendi sapiente nobis sequi eveniet<br> assumenda aut obcaecati accusamus quod est illo eum nesciunt illum, consequuntur possimus tempore.<br> Quibusdam recusandae fugit, quidem facere. Consequatur rem saepe maxime quibusdam itaque aperiam at possimus velit sint eaque. Iusto dolorum quod minus cum<br> ratione facere ab numquam quia id aut quo recusandae similique error, distinctio corporis et quasi mollitia<br> debitis? Atque quam nemo, porro iure sunt odio ad perferendis ducimus nihil, ratione odit laboriosam error ipsa. Sapiente<br> obcaecati adipisci, dignissimos, rerum nesciunt laudantium ex quos ducimus accusamus amet esse, velit debitis reiciendis! Expedita?</p>
                                </div></div></div></div></div>-->

   <section id="caring" class="sections choose" >
            <div class="container">
                <div style="margin-left:300px;" class=" col-md-4 section-header text-center">
                    <h2  class="section-title">Caring Problem</h2>
                    <div class="line">
                        <span></span>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos nostrum, cumque numquam quae voluptatum qui.
                    </p>
                </div>
               
          <div  class="row">
              <div class="col-md-12">
                   <div class="c_panel">
                       <ul class="list-unstyled">
                           <li data-role="p_about">Autism</li>
                           <li data-role="p_service">Depression</li>
                           <li data-role="p_contact">Worry</li>
                            <li data-role="p_unnatural">Unnatural</li>
                           <li data-role="p_misnderstanding">misUnderstanding</li>
                           <li data-role="p_neural">Neural</li>
                           
                       </ul>
                       <div class="content">
                           
                           <div class="c_info content" id="p_about">
                               <img style="width:70%;" src="{{asset('images/frontend_images/home/m33.jpg')}}">
                             <p>Autism Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing</p>  
                           </div>
                           <div class="clearfix"></div>
                           
                           <div class="c_info content2" id="p_service">
                            <img style="width:70%;" src="{{asset('images/frontend_images/home/m333.jpg')}}">
                             <p>Depression Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing.</p>  
                           </div>
                           <div class="clearfix"></div>
                           <div class="c_info content3" id="p_contact">
                        <img style="width:70%;" src="{{asset('images/frontend_images/home/m22.jpg')}}">
                             <p> Worry Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing  Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing .</p>  
                       </div>
                           <div class="clearfix"></div>
                           
                           <div class="c_info content4" id="p_misnderstanding">
                               <img style="width:70%;" src="{{asset('images/frontend_images/home/m3.jpg')}}">
                             <p>misnderstanding Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing.</p>  
                           </div>
                           <div class="clearfix"></div>
                           
                           <div class="c_info content5" id="p_neural">
                            <img style="width:70%;" src="{{asset('images/frontend_images/home/download.jpg')}}">
                             <p>neural Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing  .</p>  
                           </div>
                           <div class="clearfix"></div>
                           <div class="c_info content6" id="p_unnatural">
                        <img style="width:70%;" src="{{asset('images/frontend_images/home/mmm.png')}}">
                             <p>unnatural Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing  Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing .</p>  
                       </div>
                           <div class="clearfix"></div>
                  </div>
                  </div>
              </div>
                </div></div></section> 
             <!-- <div class="col-md-6 text-center">
                   <div class="video">
                       <a class="pop" href="video/start.mp4">
                       <i class="fa fa-play"></i></a>
                       
                       <h3>Our Service Avalabile</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur</p> 
                  </div>
                  </div>
          
            
                </div></div></section>
      -->
<section class="sections blog" id="advice">
            <div class="container">
                <div class="section-header text-center">
                    <h2  style="color:#047;" class="section-title">Advice Care</h2>
                    <div class="line">
                        <span></span>
                    </div></div></div></section>
      <div  style="margin-top:-120px;" class="car">
          <div class="owl-carousel owl-theme">
                    <div class="item" >
                        <div class="team-info">
                            <img src="{{asset('images/frontend_images/home/m333.jpg')}}" alt="">
                            <h4 class="item-info-title">Movement</h4>
                            <p style="color:#fcc;">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur .</p>
                        </div>
                    </div>
               
                  
              <div class="item">
                        <div class="team-info">
                            <img src="{{asset('images/frontend_images/home/images (2).jpg')}}" alt="">
                            <h4 class="item-info-title">Play</h4>
                            
                  
                                <p style="color:#fcc;">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur .</p>
                        </div>
                    </div>
             <div class="item">
                        <div class="team-info">
                            <img src="{{asset('images/frontend_images/home/images (1).jpg')}}" alt="">
                            <h4 class="item-info-title">Nursery</h4>
                         <p style="color:#fcc;">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur .</p>
                        </div>
                    </div>
                 
              <div class="item">
                        <div class="team-info">
                            <img src="{{asset('images/frontend_images/home/m22.jpg')}}" alt="">
                            <h4 class="item-info-title">Pronunciate</h4>
                             <p style="color:#fcc;">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur .</p>
                        </div>
                    </div>
             
            <div class="item">
                        <div class="team-info">
                            <img src="{{asset('images/frontend_images/home/m1.jpg')}}" alt="">
                            <h4 class="item-info-title">Hobbies</h4>
                            <p style="color:#fcc;">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur .</p>
                        </div>
                    </div>
              <div class="item">
                        <div class="team-info">
                            <img src="{{asset('images/frontend_images/home/m33.jpg')}}" alt="">
                            <h4 class="item-info-title">Spoken</h4>
                             <p style="color:#fcc;">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur .</p>
                        </div>
                    </div>
              <div class="item">
                        <div class="team-info">
                            <img src="{{asset('images/frontend_images/home/m22.jpg')}}" alt="">
                            <h4 class="item-info-title">Reading</h4>
                            
                            <p style="color:#fcc;">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur .</p>
                        </div>
                    </div>
               
                
                  <div class="item">
                        <div class="team-info">
                            <img src="{{asset('images/frontend_images/home/images (2).jpg')}}" alt="">
                            <h4 class="item-info-title">Beheviour</h4>
                            
                            
                                <p style="color:#fcc;">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur .</p>
                        </div>
                    </div>
               <div class="item">
                        <div class="team-info">
                            <img src="{{asset('images/frontend_images/home/images.jpg')}}" alt="">
                            <h4 class="item-info-title">Culture</h4>
                            <p style="color:#fcc;">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur .</p>
                        </div>
                    </div>
          </div></div>

        <!--
        <section class="sections blog" id="blog">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title">Our Blog</h2>
                    <div class="line">
                        <span></span>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos nostrum, cumque numquam quae voluptatum qui.
                    </p>
                </div>
                
                 -->

      <section id=prices class="pricingg section ">
      <div class="section-header text-center">
		  <h1 class="section-tit">Vaccination</h1>
	          <div class="line">
	          <span></span>
	         </div>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing  .</p>
         </div>
          <div class="row">
              <div class="col-md-3 ">
                   <div style="background:#d1ffff"class="plan">
                       
         <h2 class="plan-title" >
              
              <span class="price">Hepatitis B (HepB)</span>
              <span class="title">15-Monthl </span>
          
         </h2>
        
        <p class="pl-desc">starter</p>
                       
                       <ul class="list-unstyled">
                           <li>2nd dose</li>
                           <li>3rd dose</li>
                           
                           
                       </ul>
                      <!-- <button calss="plan-btn">Select paln</button>
-->
      <h2 class="plan-title" >
              
         
              <span class="title">Select plan</span>
          
         </h2>
      
                  </div>
              </div>
          <div class="col-md-3">
                   <div style="background:#d1ffff" class="plan">
                       
         <h2 class="plan-title" >
              
              <span class="price">Rotavirus</span>
              <span class="title">15-Monthl</span>
          
         </h2>
        
        <p class="pl-desc">starter</p>
                       
                       <ul class="list-unstyled">
                           <li>1st dose</li>
                           <li>3-dose series</li>
                     </ul>
    
      <h2 class="plan-title" >
              
         
              <span class="title">Select plan</span>
          
         </h2>
      
                 </div> </div>
              <div class="col-md-3">
                   <div style="background:#d1ffff" class="plan">
                       
         <h2 class="plan-title" >
              
              <span class="price">Diphtheria</span>
              <span class="title">15-Monthl</span>
          
         </h2>
        
        <p class="pl-desc">starter</p>
                       
                       <ul class="list-unstyled">
                           <li>1st dose</li>
                           <li>3rd dose</li>
                          
                           
                       </ul>
                      <!-- <button calss="plan-btn">Select paln</button>
-->
      <h2 class="plan-title" >
              
         
              <span class="title">Select plan</span>
          
         </h2>
      
             </div>     </div>
              <div class="col-md-3">
                   <div style="background:#d1ffff" class="plan">
                       
         <h2 class="plan-title" >
              
              <span class="price">Haemophilus</span>
              <span class="title">15-Month</span>
          
         </h2>
        
        <p class="pl-desc">starter</p>
                       
                       <ul class="list-unstyled">
                           <li>1st dose</li>
                           <li>3st dose</li>

                     
      <h2 class="plan-title" >
              
         
              <span class="title">Select plan</span>
          
         </h2>
      
                       </ul></div></div>
          </div>
              
      </section>
      

@endsection
