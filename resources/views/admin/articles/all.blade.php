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
            <h4 class="card-title">All Articles</h4>

            <table class="table table-condensed">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>title</th>
                    <th>category</th>
                    <th style="width: 40px">Action</th>
                </tr>
                @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>
                       {{$article->category->name}}
                    </td>
                    <td><span class="badge bg-danger"><a href="/admin/articles/edit/{{$article->id}}">Edit</a></span></td>
                </tr>
                    @endforeach


                </tbody></table>
        </div>
        <!-- /.card-body -->

        <!-- /.card-title -->
    </div>

@endsection
