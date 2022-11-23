<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\UpdateRequest;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request)
    {
        $tweetId = $request->id();
        $tweet = Tweet::where('id', $tweetId)->firstOrFail();
        $tweet->content = $request->tweet();
        $tweet->save();
        return to_route('tweet.update.index', ['tweetId' => $tweetId])->with('success', 'つぶやきを編集しました');
    }
}
