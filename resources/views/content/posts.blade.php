@extends('layouts.frontLayout.front_design')
@section('content')
<!-- Blog Entries Column -->
           
<br><br><br><br><br><br><br><br>
<br><br><br>
 <div class="col-md-8 border-post"> 
     <h1 style="color:#f56;font-size:30px; padding-left:42%;">Write Post</h1>
    <br>
<form method="post" action="/posts/store" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group col-md-12">
            <label style="color:#f56;font-size:25px;" for="title">title</label>
				     <input style="color:#f56;size:30px;" type="text" name="title" class="form-control"  placeholder="Title">
				            </div>
                             
				  <div class="form-group col-md-12">
                      <label style="color:#f56;font-size:25px;" for="body">body</label>
				      <textarea style="color:#f56;size:30px;" name="body" id="body" required="required" class="form-control" rows="8" placeholder=" Write Your Post Here"></textarea>
				            </div>               
<div class="form-group col-md-12">
            <label style="color:#f56;font-size:25px;" for="url">URL</label>
				     <input style="color:#f56;size:30px;"  type="file" name="url" class="form-control"
                     id="url"
                    
                     placeholder="Url">
				            </div>   
				   <div class="form-group col-md-12">
				         <input style="background-color: #f56" type="submit" name="submit" class="btn btn-primary pull-right" value="Write Post">
				            </div>
				        </form>
</div>
	  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br>
<div class="col-md-8 pos" id="posts">
@foreach($posts as $post)
                <!-- First Blog Post -->
    <br><br> 
       <h2>
     <a href="/post-id/{{$post->id}}">{{$post->title}}</a>
     </h2>
     <p><span class="glyphicon glyphicon-time"></span> Posted on : {{$post->created_at->toDayDateTimeString()}}</p>
     <p class="lead">
     by <a style="color:#047;" href="index.php">Huda Ahmed</a>
    </p>
   
    @if($post->url)
    <img style="width:100%;height:100%;" src="content/{{ $post->url }}">
    @endif
                
               <!-- <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>-->
                <p>{{$post->body}}</p>
                <a class="btn btn-primary" href="/post-id/{{$post->id}}">Write Comment <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
@endforeach
        </div>       
   <!-- 
    <form method="post" action="/posts/store">
        {{csrf_field()}}
        <div class="form-group col-md-12">
            <label for="title">title</label>
				     <input type="text" name="title" class="form-control" required="required" placeholder="Title">
				            </div>
                             
				  <div class="form-group col-md-12">
                      <label for="body">body</label>
				      <textarea name="body" id="body" required="required" class="form-control" rows="8" placeholder=" Write Your Post Here"></textarea>
				            </div>               
        <div class="form-group col-md-12">
            <label for="url">URL</label>
				     <input type="file" name="url" class="form-control"
                     id="url"
                     required="required"
                     placeholder="Url">
				            </div>   
				   <div class="form-group col-md-6">
				         <input style="background-color: #f56" type="submit" name="submit" class="btn btn-primary pull-right" value="Write Post">
				            </div>
				        </form>
	    			</div>
    -->
                <!--  <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>
 -->
@endsection
