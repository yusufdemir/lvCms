<?php
		Cron::add('example2', '*/2 * * * *', function() {
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

			/*CONTENT*/
			$contentUrl = 'http://www.yenimesaj.com.tr/'.$link;
			$htmlContent = file_get_contents($contentUrl);
			if(!$htmlContent) {throw new Exception('Failed to connection.');}

			preg_match('@<h1>(.*?)</h1>(.*?)<div class="copyright">@si',$htmlContent,$baslik);
			//echo $baslik[2];
			$post=new Post;
			$post->head= 'cron '.date('l jS \of F Y h:i:s A');
			$post->slug= Str::slug('cRON'.date('l jS \of F Y h:i:s A'));
			$post->content= 'CRON İŞLEMLERİ';
			$save=$post->save();
            return false;
        }, true);
