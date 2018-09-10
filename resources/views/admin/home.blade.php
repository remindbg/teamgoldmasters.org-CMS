@extends('layouts.admin')

@section('title', 'Homepage')

@section('content')
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-info"></i> Example Message Componnent!</h5>
        Example Message Componnent!  Example Message Componnent!  Example Message Componnent!
    </div>
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

                <div class="media-body">
                    <h3>Aggggrticle Title example test</h3>
                    <small><i>Posted on February 19, 2016</i></small></h4>
                    <p>Lorem ipsum...</p>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <!-- /.card-title -->
    </div>

@endsection
