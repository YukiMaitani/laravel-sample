<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tweetId = $request->route('tweetId');
        $tweet = Tweet::where('id', $tweetId)->firstOrFail();
        $tweet->delete();
        return to_route('tweet.index')->with('success', '削除に成功しました。');
    }
}
