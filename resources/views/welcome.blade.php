@extends('layouts.front')

@section('title', 'Homepage')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Welcome</h4>
            <p class="card-text">Welcome To Our Clan TeamGoldMasters</p>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h4 class="card-title">Online Streams</h4>
            <p class="card-text">TODO Streams</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Recent News</h4>
            <div class="media border p-1">
                <img src="{{URL::asset('images/article.jpg')}}" alt="John Doe" class="mr-3 mt-3 img-responsive"
                     style="width:240px;">
                <div class="media-body">
                    <h3>Article Title example test</h3>
                    <small><i>Posted on February 19, 2016</i></small></h4>
                    <p>Lorem ipsum...</p>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <!-- /.card-title -->
    </div>

@endsection