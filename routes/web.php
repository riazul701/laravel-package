<?php

use Illuminate\Support\Facades\Route;
//use DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('sitemap', function(){
    /* create new sitemap object */
    $sitemap = App::make("sitemap");


    /* add item to the sitemap (url, date, priority, freq) */
    $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');


    $posts = DB::table('post')
        ->select('post.*'
            ,'post.title as postTitle','post.slug as postSlug'
            ,'post_image.image as image','post.updated_at as postUpdated_at')
        ->join('post_image','post_image.post_id','=','post.id')
        ->orderBy('created_at','desc')
        ->groupBy('post.id')
        ->get();


    $postResult = array();
    if(!empty($posts)){
        foreach ($posts as $key => $value) {
            $postResult[$value->id]['id'] = $value->id;
            $postResult[$value->id]['slug'] = $value->postSlug;
            $postResult[$value->id]['postTitle'] = $value->postTitle;
            $postResult[$value->id]['postUpdated_at'] = $value->postUpdated_at;
            $postResult[$value->id]['image'][] = $value->image;
        }
    }


    /* add every post to the sitemap */
    foreach ($postResult as $key=>$value)
    {
        $images = array();
        foreach ($value['image'] as $key2 => $value2) {
            $images[] = array(
                'url' => URL::to('/')."/uploadImages/post/".$value2,
                'title' => $value['slug'],
                'caption' => $value['postTitle']
            );
        }
        $sitemap->add(URL::route('front.post',$value['slug']), $value['postUpdated_at'], '1.0', 'daily', $images);
    }


    /* show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf') */
    return $sitemap->render('xml');
});


Route::get('mysitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to(), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
    $sitemap->add(URL::to('page'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

    // get all posts from db
    $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();

    // add every post to the sitemap
    foreach ($posts as $post)
    {
        $sitemap->add($post->slug, $post->modified, $post->priority, $post->freq);
    }

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'mysitemap');
    // this will generate file mysitemap.xml to your public folder

});
