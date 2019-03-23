<?php
namespace App\Http\Controllers\weixin;

use App\Http\Controllers\Controller;
use App\Model\WxUserModel;
use Illuminate\Support\Facades\Redis;
use GuzzleHttp\Client;

class WeixinController extends Controller
{
    public function lable(){

        $url = 'https://api.weixin.qq.com/cgi-bin/tags/create?access_token='.WxUserModel::getWXAccessToken();
        // echo $url;

        //$arr = json_decode(file_get_contents($url),true);
        // var_dump($arr);
        $client = new Client;
        $data = [
            'tag' => [
                'name' => 'asdhj哈'
            ]
        ];
        $r = $client->request('POST',$url,[
            'body'=>json_encode($data,JSON_UNESCAPED_UNICODE)
        ]);
        $response_arr = json_decode($r->getBody(),true);
        var_dump($response_arr);



    }

}
?>