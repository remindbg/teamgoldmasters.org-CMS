@extends('layouts.admin')

@section('title', 'Homepage')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message') }}
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <h4 class="card-title">New Article</h4>
            <hr>

            <form role="form" method="POST" action="/admin/articles">
                        <!-- text input -->
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="title..." class="form-control" name="title" placeholder="Enter ...">
                        </div>

                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control"  name="body" rows="3" placeholder="Enter ..."></textarea>
                        </div>

                        <select class="form-control" name="category">
                            @foreach($category as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                        <div>
                            <hr>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Create</button>

                    </form>


        </div>

    </div>

@endsection
