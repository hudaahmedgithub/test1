@extends('layouts.frontLayout.front_design')
@section('content')
<!-- Blog Entries Column -->
           
<br><br><br><br><br><br><br><br>
<br><br><br>

<div class="col-md-8 border-post">

@foreach($posts as $post)
                <!-- First Blog Post -->
                <h2>
                    <a href="#">{{$post->title}}</a>
                </h2>
                <p class="lead">
                    by <a style="color:#047;" href="index.php">Huda Ahmed</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, {{$post->created_at}}</p>
               <!-- <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>-->
                <p>{{$post->body}}</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
@endforeach
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>
@endsection
