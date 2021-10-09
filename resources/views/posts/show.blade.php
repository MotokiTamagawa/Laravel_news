
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><a href ="/posts"> Laravel News </a></h1>
            <h3>詳細ページ</h3>
            <!-- <a href="{{route('posts.create')}}" class="btn btn-primary">新規投稿</a>
            <div class="card text-center">
                <div class="card-header">
                    laravel news
                </div> -->
                    <div class="card-body">
                        <h5 class="card-title">タイトル:{{$post ->title}}</h5>
                        <p class="card-text">内容:{{$post -> body}}</p>
                    </div>
                    <!-- <a href="{{route('posts.show' , $post->id)}}" class="btn btn-primary">詳細ボタン</a> -->
                <div class="card-footer text-muted">
                    <!-- 投稿日:{{$post -> created_at}} -->
                </div>
            </div>  
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('comments.store') }}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <br>
                <div class="form-group">
                    <textarea class="form-control" 
                     placeholder="コメントを入力してください" rows="5" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">コメントする</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($comments as $comment)
            <div class="card mt-3">
                <!-- <h5 class="card-header">投稿者：{{ $comment->user->name }}</h5> -->
                <div class="card-body">
                    <!-- <h5 class="card-title">投稿日時：{{ $comment->created_at }}</h5> -->
                    <hr>
                    <p class="card-text">コメント：{{ $comment->body }}</p>
                    <form action='{{ route('comments.destroy', $comment->id) }}' method='post'>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type='submit' value='削除' class="btn btn-danger" onclick='return confirm("削除しますか？？");'>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
