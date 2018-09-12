@extends('layouts.front')
@section('title', '')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$article->title}}</h4> <span class="small">Posted on: {{$article->created_at}} | in {{$article->category->name}} by  {{$article->user->name}}</span>
            <p class="card-text">{{$article->body}}</p>
        </div>
    </div>

@endsection

@section('css')
@endsection

@section('scripts')
    <script type="text/javascript">

    </script>
@endsection()
