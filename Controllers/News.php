<?php

namespace Controllers;
use Controllers\Rest;
use Controllers\Site;
class News extends \Core\BaseController
{
    protected string $Model = "Users";
    public function index()
    {
        view('news/index');
    }

    public function getnews()
    { 
       $resp =  $this->invokePostApi() ;
       print_r($resp); 
    }

    
    private function invokePostApi(){	
		$url = config("news_api");
        $userAgent = 'user-agent';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp ;
	}

}