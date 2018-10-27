@extends('layouts.front')
@section('title', '')
@section('content')
    <h5>Articles from category:  {{$category->name}}</h5>

    <div class="row">
        <div class="col-lg-9">
            @foreach($category->articles as $article)
                <div class="card">
                    <div class="card-body">
                        <a href="/articles/{{$article->id}}"><h5>{{$article->title}}</h5></a><span class="small">Posted on: {{$article->created_at}} | in {{$article->category->name}} by  {{$article->user->name}}</span>
                        <p class="card-text">{{$article->body}}</p>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection

@section('css')
@endsection

@section('scripts')
    <script type="text/javascript">

    </script>
@endsection()
