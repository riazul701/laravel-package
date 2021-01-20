<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCURL()
    {
        $response = Curl::to('https://jsonplaceholder.typicode.com/posts')
            ->get();

        dd($response);
    }

    // CURL Post Request
    public function getPostCURL()
    {
        $response = Curl::to('https://example.com/posts')
            ->withData(['title'=>'Test', 'body'=>'sdsd', 'userId'=>1])
            ->post();

        dd($response);
    }

    // CURL Put Request
    public function getPutCURL()
    {
        $response = Curl::to('https://example.com/posts/1')
            ->withData(['title'=>'Test', 'body'=>'sdsd', 'userId'=>1])
            ->put();

        dd($response);
    }

    // CURL Patch Request
    public function getPatchCURL()
    {
        $response = Curl::to('https://example.com/posts/1')
            ->withData(['title'=>'Test', 'body'=>'sdsd', 'userId'=>1])
            ->patch();

        dd($response);
    }

    // CURL Delete Request
    public function getDeleteCURL()
    {
        $response = Curl::to('https://example.com/posts/1')
            ->delete();

        dd($response);
    }
}
