<?php

namespace App\Modules\Tags\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagsController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("Tags::welcome");
    }
}
