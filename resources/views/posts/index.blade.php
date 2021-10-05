@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>一覧ページ</h1>
            <a href="{{route('posts.create')}}" class="btn btn-primary">新規投稿</a>
                    </div>
            <div class="card text-center">
                <div class="card-header">
                    laravel news
                </div>
                    <div class="card-body">
                        <h5 class="card-title">タイトル</h5>
                        <p class="card-text">内容</p>
                        <a href="#" class="btn btn-primary">詳細ボタン</a>
                    </div>
                <div class="card-footer text-muted">
                    投稿日
                </div>
</div>
        </div>
    </div>
</div>
@endsection