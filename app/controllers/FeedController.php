<?php

class FeedController extends \BaseController {

	public function index()
	{
	    // creating rss feed with our most recent 20 posts
	    $posts = POST::where('active','=','1')->orderBy('id', 'desc')->take(20)->get();
	    $feed = Feed::make();
	    // set your feed's title, description, link, pubdate and language
	    $feed->title = 'BTP Son Gönderiler';
	    $feed->description = 'Bağımsız Türkiye Partisi';
	    //$feed->logo = 'http://yoursite.tld/logo.jpg';
	    $feed->link = URL::to('feed');
	    $feed->pubdate = $posts[0]->publish_date;
	    $feed->lang = 'tr';

	    foreach ($posts as $post)
	    {
	        // set item's title, author, url, pubdate, description and content
	        $img="<img src='".asset($post->media)."' alt='".$post->head."' > ";
	        $content=$img.strip_tags($post->content);
	        $feed->add($post->head, "admin", URL::to('content/view/'.$post->id.'/'.$post->slug), $post->publish_date, Str::words(strip_tags($post->content),40), $content   );
	    }

	    // show your feed (options: 'atom' (recommended) or 'rss')
	    return $feed->render('rss');

	    // show your feed with cache for 60 minutes
	    // second param can be integer, carbon or datetime
	    // optional: you can set custom cache key with 3rd param as string
	    return $feed->render('rss', 60);

	    // to return your feed as a string set second param to -1
	    $xml = $feed->render('rss', -1);
	}

}