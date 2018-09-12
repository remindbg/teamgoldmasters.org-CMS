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
            <h4 class="card-title">Stream</h4>
            <div id="stream"></div>
            <div id="chat"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Recent News</h4>
            <p class="card-text">
                @foreach($articles as $article)
                    <div class="col-lg-9">
                        <a href="/articles/{{$article->id}}"><h5>{{$article->title}}</h5></a>
                        <small><i>Posted on {{$article->created_at}} By {{$article->user->name}}</i></small>
            <p>{{$article->body}}</p>
            <hr>
        </div>
        @endforeach
            </p>
        </div>
    </div>
@endsection

@section('css')
    <script src="https://embed.twitch.tv/embed/v1.js"></script>
@endsection

@section('scripts')
    <script type="text/javascript">
        var embed = new Twitch.Embed("stream", {
            width: 854,
            height: 480,
            channel: "fetzer",
            layout: "video",
            autoplay: false
        });

        embed.addEventListener(Twitch.Embed.VIDEO_READY, () => {
            var player = embed.getPlayer();
            player.play();
        });

    </script>
@endsection()
