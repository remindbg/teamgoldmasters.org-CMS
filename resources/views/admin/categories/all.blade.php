@extends('layouts.admin')

@section('title', 'Homepage')

@section('content')



    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Categories</h4>
            <table class="table table-condensed">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>name</th>
                    <th>articles count</th>
                    <th style="width: 40px">Action</th>
                </tr>
                @foreach($categories as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>
                            {{$cat->articles->count()}}
                        </td>
                        <td>
                            <span class="badge bg-success"><a href="{{route('catedit',$cat->id)}}">Edit</a></span>
                            <form action="{{'catdel'}}" method="post">
                                @csrf
                                <span class="badge bg-danger"><a href="{{route('catdelete',$cat->id)}}" onclick="return confirm('U sure bro?')">Delete</a></span>
                            </form>
                        </td>
                    </tr>
                @endforeach


                </tbody></table>
        </div>

    </div>

@endsection
