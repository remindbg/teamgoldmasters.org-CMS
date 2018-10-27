<div class="col-sm-3">
    <div class="card">
        <div class="card-body">
            <div class="card-title small">Profile</div>
            <div class="card-body">
                @if (Auth::guest())
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @else

                @if(Auth::user()->role == 'admin')
                        <a href="/admin/">Admin Panel</a> <br>
                 @endif
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                @endif

            </div>

        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-title">General Info</div>
            <!-- /.panel-header -->
            <div class="info-box mb-3 bg-info">
                <span class="info-box-icon"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Clan Members</span>
                    <span class="info-box-number">{{$members->count()}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-title">Recent News</div>
            @foreach($allarticles as $article)
                <a href="/articles/{{$article->id}}"><span>{{$article->title}}</span></a> - <i class="small">{{$article->created_at}}</i>
                <hr>
            @endforeach
        </div>

    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-title">News Categories</div>
            @foreach($allcategories as $allcat)
                <a href="/cat/{{$allcat->id}}/"><span>{{$allcat->name}}</span></a></i>
                <hr>
            @endforeach
        </div>

    </div>
</div>
