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
            <h4 class="card-title">New Category</h4>
            <hr>
            <form role="form" method="post" action="{{route('catstore')}}">
                @csrf
                <!-- text input -->
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="" class="form-control" name="name" placeholder=" ...">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Create</button>



            </form>


        </div>

    </div>

@endsection
