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
            <h4 class="card-title">All Articles</h4>
            <hr>
            <a href="/admin/articles/create"><button type="submit" class="btn btn-primary btn-sm">New Article</button></a>
            <hr>
            <table class="table table-condensed">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>title</th>
                    <th>category</th>
                    <th>date</th>
                    <th style="width: 40px">Action</th>
                </tr>
                @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>
                       {{$article->category->name}}
                    </td>
                    <td>
                        {{$article->created_at}}
                    </td>
                    <td>
                        <span class="badge bg-success"><a href="/admin/articles/{{$article->id}}/edit">Edit</a></span>
                        <form action="{{'articledelete'}}" method="post">
                            @csrf
                            <span class="badge bg-danger"><a href="{{route('articledelete',$article->id)}}" onclick="return confirm('U sure bro?')">Delete</a></span>
                        </form>
                    </td>
                </tr>
                @endforeach


                </tbody></table>
        </div>

    </div>

@endsection
