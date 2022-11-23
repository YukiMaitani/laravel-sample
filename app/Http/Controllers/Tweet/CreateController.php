<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\CreateRequest;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request)
    {
        $tweet = new Tweet();
        $tweet->content = $request->tweet();
        $tweet->save();
        return to_route('tweet.index');
    }
}
