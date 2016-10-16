<?php
	die();
	function getRandomUserAgent()
	{
		$userAgents=array(
			"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6",
			"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)",
			"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)",
			"Opera/9.20 (Windows NT 6.0; U; en)",
			"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.50",
			"Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.02 [en]",
			"Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; fr; rv:1.7) Gecko/20040624 Firefox/0.9",
			"Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/48 (like Gecko) Safari/48"       
		);
		$random = rand(0,count($userAgents)-1);
	 
		return $userAgents[$random];
	}
		
	$url = 'http://www.thetechgame.com/scripts/json/user.php?action=user_list_ac&term=sean';
	$data = OpenURLcloudflare($url);
	var_dump($data);


	function OpenURLcloudflare($url)
	{
		//get cloudflare ChallengeForm
		$data = OpenURL($url);
		preg_match('/<form id="ChallengeForm" .+ name="act" value="(.+)".+name="jschl_vc" value="(.+)".+<\/form>.+jschl_answer.+\(([0-9\+\-\*]+)\);/Uis',$data,$out);
		if(count($out)>0) {
			eval("\$jschl_answer=$out[3];");
			$post['act']            = $out[1];
			$post['jschl_vc']        = $out[2];
			$post['jschl_answer']    = $jschl_answer;
			//send jschl_answer to the website
			$data = OpenURL($url, $post);
		}
		return($data);
	}

	function OpenURL($url, $post=array()) {
		$ip = "86.29.130.73";
		$headers[] = 'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:13.0) Gecko/20100101 Firefox/13.0.1';
		$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
		$headers[] = 'Accept-Language: ar,en;q=0.5';
		$headers[] = 'Connection: keep-alive';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_VERBOSE, TRUE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		if(count($post)>0) {
			curl_setopt($ch, CURLOPT_POST, TRUE);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		curl_setopt($ch,CURLOPT_COOKIE, '__cfduid=d77b33ca495e605ba67bc28bb2f5708961410017536841; __gads=ID=02c1b3cddcd4c19a:T=1410017541:S=ALNI_MZY2CHoT3vn_0vFzzvUgSjJDEQOLw; HIRO_COOKIE=data=&newSession=false&id=2258285908130&timestamp=1410018167928; memawaychat=1; memawaytime=1410092578; user=MzMyNjM2Oml5b3A0NTozM2UwNTkwM2YzYjJiNzc0ZGZlNDk2YzA4ZDA0NDM3Yg%3D%3D; PHPSESSID=03372eaa2fb2754e5c82402074627487; thetechgame_t=a%3A1%3A%7Bi%3A6742589%3Bi%3A1410780085%3B%7D; cookie_userslist_searchoptions=block; __utma=14798067.447050965.1410266196.1410783996.1410786665.21; __utmb=14798067.1.10.1410786665; __utmc=14798067; __utmz=14798067.1410266196.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); cookie_status_update=block;');
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: $ip", "HTTP_X_FORWARDED_FOR: $ip"));
		$data = curl_exec($ch);
		return($data);
	}
		
	/*
	$url = 'http://www.thetechgame.com/index.php';
	$fields = array(
							'user_status' => urlencode('test123'),
							'op' => urlencode('ajax_account'),
							'subop' => urlencode('save_status')
					);

	//url-ify the data for the POST
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');

	//open connection
	$ch = curl_init();

	$userCookie = urlencode(base64_encode("332636:iyop45:33e05903f3b2b774dfe496c08d04437b"));
	//die($userCookie);
	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	//curl_setopt($ch,CURLOPT_COOKIE, 'memawaychat=1; user='.$userCookie.' memawaytime=1410092578;');
	curl_setopt($ch,CURLOPT_COOKIE, '__cfduid=d77b33ca495e605ba67bc28bb2f5708961410017536841; __gads=ID=02c1b3cddcd4c19a:T=1410017541:S=ALNI_MZY2CHoT3vn_0vFzzvUgSjJDEQOLw; HIRO_COOKIE=data=&newSession=false&id=2258285908130&timestamp=1410018167928; memawaychat=1; memawaytime=1410092578; user=MzMyNjM2Oml5b3A0NTozM2UwNTkwM2YzYjJiNzc0ZGZlNDk2YzA4ZDA0NDM3Yg%3D%3D; PHPSESSID=03372eaa2fb2754e5c82402074627487; thetechgame_t=a%3A1%3A%7Bi%3A6742589%3Bi%3A1410780085%3B%7D; cookie_userslist_searchoptions=block; __utma=14798067.447050965.1410266196.1410783996.1410786665.21; __utmb=14798067.1.10.1410786665; __utmc=14798067; __utmz=14798067.1410266196.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); cookie_status_update=block;');
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

	//execute post
	$result = curl_exec($ch);

	//close connection
	curl_close($ch);
	*/
?>