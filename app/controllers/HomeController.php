<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/



	public function getIndex()
	{

	    $cats = Cache::remember('catsHome', 60, function(){
	        $cats['genelBaskan']	=POST::where('active','=','1')->where('cat_id','=','1')->where('deleted','=','0')->limit(4)->orderBy('id','DESC')->get();
			$cats['demecler']		=POST::where('active','=','1')->where('cat_id','=','2')->where('deleted','=','0')->limit(4)->orderBy('id','DESC')->get();
			$cats['slider']			=POST::where('active','=','1')->where('deleted','=','0')->where('slider','=','1')->where('media','!=','')->limit(5)->orderBy('id','DESC')->get();
			$cats['hbkaleminden']	=POST::where('active','=','1')->where('cat_id','=','10')->where('deleted','=','0')->first();
			return $cats;
	    });
		return View::make('btp.home',compact('cats'));
	}

	public function biography(){
	    $biography = DB::select('SELECT * FROM teskilat WHERE id = ?',array('1'));
		return View::make('btp.singleuser',compact('biography'));
	}
	
	public function categories($id=1){
		$news=POST::where('deleted','=','0')->where('cat_id','=',$id)->orderBy('id', 'DESC')->paginate(5);
    	$cat=CAT::findOrFail($id);
    	return View::make('btp.news',compact('news','cat'));
	} 

	public function show($id=1){
		$article=POST::findOrFail($id);
		$article->view=$article->view+1;
		$article->save();
    	return View::make('btp.single',compact('article'));
	}
	

	public function gallery(){
		$media = Cache::remember('media', 60, function(){
			return $media=Albuminfo::where('deleted','=','0')->get();
		});
		return View::make('btp.medyaAlbumList',compact('media'));
	}

	public function galleryShow($id=1){
		//$album = Cache::remember('mediaShow', 60, function(){
			/*return*/ $album=Album::where('albuminfo_id','=',$id)->where('deleted','=','0')->get();
		//});
		return View::make('btp.medyaAlbumShow',compact('album'));
	}

	public function hbkaleminden(){
		//*[@id="slice5"]/div[2]/div[2]/ul/li[1]/div/a
		$url = 'http://www.yenimesaj.com.tr/';
		$htmllink = file_get_contents($url);

		if(!$htmllink) {throw new Exception('Failed to connection.');}

		libxml_use_internal_errors(true);   
		$domObj = new DOMDocument();
		$domObj->loadHTML($htmllink);
		$xPathObj = new DOMXPath($domObj);

		$xpathLink = '//*[@id="slice5"]/div[2]/div[2]/ul/li[1]/div/a/@href';
		$link = $xPathObj->query($xpathLink)->item(0)->firstChild->nodeValue;

		//CONTENT
		$contentUrl = 'http://www.yenimesaj.com.tr/'.$link;
		$htmlContent = file_get_contents($contentUrl);
		if(!$htmlContent) {throw new Exception('Failed to connection.');}

		preg_match('@<h1>(.*?)</h1>(.*?)<div class="copyright">@si',$htmlContent,$content);
		echo $content[1] . '<br>'.$content[2] . '<br>';
		$unique=Post::where('cat_id', '=', '10')->where('slug', 'LIKE', Str::slug($link))->count();
		if ($unique > 0) {
			echo 'false';
			} else {
				$post=new Post;
				$post->head= $content[1];
				$post->slug= Str::slug($link);
				$post->content= $content[2];
				$post->cat_id= 10;
				$save=$post->save();
				echo 'true';
				}
		


	}


	/*
	|--------------------------------------------------------------------------
	| CITY AJAX
	|--------------------------------------------------------------------------
	*/
	public function city(){
		 //AND T.region = CU.ilce_id
    $id=Input::get('id');
    $teskilat = DB::select(
        'SELECT 
        T.firstname, T.lastname, T.address, T.city, T.phone, T.email, T.city, T.region, T.role,
        C.il_ad, C.il_id
        FROM teskilat as T, city AS C 
        WHERE T.city = C.il_id
        AND T.role = 10
        AND T.city = ?', 
        array($id)
        );
    echo '
    <table id="teskilat" border="0" cellpadding="0" cellspacing="0" width="100%" style="font-family: sans-serif;
font-size: 12px;">
      <colgroup>
      <col width="100">
      <col width="100">
      <col width="120">
      <col>
      <col width="80">
      </colgroup>
      <thead>
        <tr>
          <th scope="col">İl - İlçe</th>
          <th scope="col">Başkanın Adı Soyadı</th>
          <th scope="col">Telefon</th>
          <th scope="col">Adres</th>
          <th scope="col">E-posta</th>
        </tr>
      </thead>
        ';
        foreach ($teskilat as $kisi) {
            # code...
        
            echo 
            '<tr>
            <td>'.$kisi->il_ad.'</td>
            <td>
            <span class="fullname">'.$kisi->firstname.' '.$kisi->lastname.'</span> </td>
            <td>'.$kisi->phone.'</td>
            <td>'.$kisi->address.'</td>
            <td> <a href="mailto:'.$kisi->email.'">'.$kisi->email.'</a></td>
            </tr>
            ';
        }
        echo '
    </table>';
	}
}
