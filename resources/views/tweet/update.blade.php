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
    <h1>つぶやきを編集する</h1>
    <div>
        <a href="{{route('tweet.index')}}">戻る</a>
        <p>投稿フォーム</p>
        @if(session('success'))
            <p style="color: green;">{{session('success')}}</p>
        @endif
        <form action="{{route('tweet.update.put', ['tweetId' => $tweet->id])}}" method="post">
            @method('PUT')
            @csrf
            <textarea name="tweet" id="">
                {{$tweet->content}}
            </textarea>
            @error('$message')
                <p style="color: red;">{{$message}}</p>
            @enderror
            <button type="submit">編集</button>
        </form>
    </div>
</body>
</html>
