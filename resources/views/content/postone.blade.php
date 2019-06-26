@extends('layouts.frontLayout.front_design')
@section('content')
<!-- Blog Entries Column -->
           
<br><br><br><br><br><br><br><br>
<br><br><br>

<div class="col-md-8 border-post">

                <!-- First Blog Post -->
                <h2>
                    <a href="#">{{$post->title}}</a>
                </h2>
                <p class="lead">
                    by <a style="color:#047;" href="index.php">Huda Ahmed</a>
                </p>
    
                <p><span class="glyphicon glyphicon-time"></span> Posted on: {{$post->created_at}}</p>
    
        
                <p>{{$post->body}}</p>
                <a class="btn btn-primary" href="">Comments <span class="glyphicon glyphicon-chevron-right"></span></a>
 <hr>
 
    <div class="col-md-12" >
        
 @foreach($post->comments as $comment)
   
   <div style="background:#fff; padding:20px;">
    
    {{$comment->created_at->toDayDateTimeString()}}
       
<br>{{$comment->name_user}} &nbsp; &nbsp; &nbsp; &nbsp; {{$comment->description}}
        </div><br>
        @endforeach
       
        </div>
    <br>
 <form method="post" action="/posts/{{$post->id}}/store">
        {{csrf_field()}}
        
                             
       <div class="form-group col-md-12">
                      <label for="description">Write Comment Here....</label>
           <br>
           <textarea name="description" id="description" required="required" class="form-control" placeholder=" Write Your Comment Here"></textarea>
				            </div>               
        <div class="form-group col-md-12">
				         <input style="background-color: #f56" type="submit" name="submit" class="btn btn-primary pull-right" value="Write comment">
				            </div>
				        </form>
	    			</div>
    
                <!--
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>
-->
          
@endsection
