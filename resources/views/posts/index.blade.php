
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Laravel News</h1>
            <h3>一覧ページ</h3>
            <!-- <a href="{{route('posts.create')}}" class="btn btn-primary">新規投稿</a> -->

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('posts.store') }}" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>内容</label>
                    <br>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">作成する</button>
            </form>


            <div class="card text-center">
                @foreach($posts as $post)
                    <div class="card-body">
                        <hr>
                        <h5 class="card-title">タイトル:{{$post ->title}}</h5>
                        <p class="card-text">内容:{{$post -> body}}</p>
                        <a href="{{route('comments.show' , $post->id)}}" class="btn btn-primary">投稿詳細を見る</a>
                    </div>
                <div class="card-footer text-muted">
                    <!-- 投稿日:{{$post -> created_at}} -->
                </div>
            </div>

                 @endforeach
                    
        </div>
    </div>
</div>
