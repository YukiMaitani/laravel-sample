<!doctype html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>つぶやきあぷり</h1>
    @if(session('success'))
        <p style="color: green;">{{session('success')}}</p>
    @endif
    <form action="{{route('tweet.create')}}" method="post">
        @csrf
        <label for="tweet-content">つぶやき</label>
        <span>140文字まで</span>
        <textarea name="tweet" id="tweet-content" cols="" rows="" placeholder="つぶやきを入力"></textarea>
        @error('tweet')
        <p style="color: red;">{{$message}}</p>
        @enderror
        <button type="submit">投稿</button>
    </form>
    @foreach($tweets as $tweet)
        <p>{{$tweet->content}}</p>
        <a href="{{route('tweet.update.index', ['tweetId'=> $tweet->id])}}">編集</a>
        <form action="{{route('tweet.delete', [ 'tweetId' => $tweet->id])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">削除</button>
        </form>
    @endforeach
</body>
</html>
