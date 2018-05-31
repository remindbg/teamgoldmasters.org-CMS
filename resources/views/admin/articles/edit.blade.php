@extends('layouts.admin')

@section('title', 'Homepage')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fa fa-info"></i> Error!</h5>
            {{ Session::get('message') }}
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Article</h4>


        </div>
        <!-- /.card-body -->

        <!-- /.card-title -->
    </div>

@endsection
