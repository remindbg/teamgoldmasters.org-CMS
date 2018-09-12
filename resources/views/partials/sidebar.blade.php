<div class="col-sm-3">
    <div class="card">
        <div class="card-body">
            <div class="card-title">General Info</div>
            <!-- /.panel-header -->
            <div class="info-box mb-3 bg-info">
                <span class="info-box-icon"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Clan Members</span>
                    <span class="info-box-number">13</span>
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
