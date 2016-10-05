<?php
/**
  * wechat php test
  */

//define your token
define("TOKEN", "lidong");
$wechatObj = new wechatCallbackapiTest("APPID", "SECRET");

// 第一次在微信后台配置提交的时候，用到。
// $wechatObj->valid();

// 自定义创建菜单
// 第一步：获取token
$token=$wechatObj->getAccessToken();
define("ACCESS_TOKEN",$token);

// $wechatObj->create_menu();
// $wechatObj->create_menu();

$weixin_msg_a=$wechatObj->getPostURL();

// 接收文本消息
if ($weixin_msg_a['MsgType']=='text') {
 
  
    // 一、被动回复这个消息 
    $weixin_msg_a['FromUserName'];
    if ($weixin_msg_a['Content']=='在吗') {
      $wechatObj->responseMsg('text','在的？');
    }


   // 二、客服在后台回复消息
   // 订单为什么还没有发货？
    $weixin_msg_a['Content'];
   // 保存到数据库 内容、openid、消息类型
    // insert into msg_info 
   // select openID from  msg_info 
   $wechatObj->sendMSG($openID,$msgInfo,$msgType='text'){ 
}
// 图片消息
elseif ($weixin_msg_a['MsgType']=='image') {
    // 获取临时素材（即下载临时的多媒体文件）
    $pic_url=$this->get_msg_pic($weixin_msg_a['MediaId']);
    // php 保存远程图片
    // 保存到数据库 内容、openid、消息类型
    // insert into msg_info 
}
// 视频消息
elseif ($weixin_msg_a['MsgType']=='video') {
     // 获取临时素材（即下载临时的多媒体文件）
    $pic_url=$this->get_msg_pic($weixin_msg_a['MediaId']);
    // php 保存远程图片
    // 保存到数据库 内容、openid、消息类型
    // insert into msg_info 
}
// 语言消息
elseif ($weixin_msg_a['MsgType']=='voice') {
     // 获取临时素材（即下载临时的多媒体文件）
    $pic_url=$this->get_msg_pic($weixin_msg_a['MediaId']);
    // php 保存远程图片
    // 保存到数据库 内容、openid、消息类型
    // insert into msg_info 
}
// 事件消息
elseif ($weixin_msg_a['MsgType']=='event') {
  // 扫描二维码关注
  if (!empty($weixin_msg_a['EventKey'])) {
    # code...
  }
  // 自定义菜单事件
  elseif ($weixin_msg_a['Event']=='CLICK') {
     if ($weixin_msg_a['EventKey']=='V1001_GOOD') {
      
       # 一个人？的菜单" 
     }else if ($weixin_msg_a['EventKey']=='V2002_GOOD') {
      
       # 两个人？的菜单" 
     }
  }

  else{
      if ($weixin_msg_a['Event']=='subscribe') {//订阅
       // FromUserName 请求获取用户信息的接口
       
       // 保存到数据库 的用户表 
       // insert into user 
        
     }else{//取消订阅
       # code...
      // update   user  set weixin_sub_status=0 
        
     }
  }
   
   

}




class wechatCallbackapiTest
{
  private $appId;
  private $appSecret;

  public function __construct($appId, $appSecret) {
    $this->appId = $appId;
    $this->appSecret = $appSecret;
  }


	public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }

    // 自定义菜单的创建
    public function create_menu()
    {
      $data='{
         "button":[
          {
               "name":"开始游戏",
               "sub_button":[
               {  
                   "type":"view",
                   "name":"好友组队",
                   "url":"http://www.soso.com/"
                },
                {
                   "type":"view",
                   "name":"随机分配",
                   "url":"http://v.qq.com/"
                },
                {
                   "type":"click",
                   "name":"一个人？",
                   "key":"V1001_GOOD"
                },
                {
                   "type":"click",
                   "name":"两个人？",
                   "key":"V2002_GOOD"
                }]
           },
           {  
              "type":"view",
              "name":"投票",
               "url":"http://lidong.com/tou"
            },
            {  
              "type":"clcik",
              "name":"帮助",
              "key":"help_click",
            }
          ]
     }
';
  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".ACCESS_TOKEN);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $tmpInfo = curl_exec($ch);
    if (curl_errno($ch)) {
      echo curl_error($ch);
    }

    curl_close($ch);

       
    }
 // 自定义个性化菜单的创建
    public function create_group_menu()
    {
      $data='{
  "button":[
  { 
      "type":"click",
      "name":"今日歌曲",
      "key":"V1001_TODAY_MUSIC" 
  },
  { 
    "name":"菜单",
    "sub_button":[
    { 
      "type":"view",
      "name":"搜索",
      "url":"http://www.soso.com/"
    },
    {
      "type":"view",
      "name":"视频",
      "url":"http://v.qq.com/"
    },
    {
      "type":"click",
      "name":"赞一下我们",
      "key":"V1001_GOOD"
    }]
 }],
"matchrule":{
  "tag_id":"2",
  "sex":"1",
  "country":"中国",
  "province":"广东",
  "city":"广州",
  "client_platform_type":"2",
  "language":"zh_CN"
  }
}
';
  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".ACCESS_TOKEN);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $tmpInfo = curl_exec($ch);
    if (curl_errno($ch)) {
      echo curl_error($ch);
    }

    curl_close($ch);

       
    }
    
	public function checkSignature()
	{
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }
        
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}


    public function httpGet($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
        // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_URL, $url);

        $res = curl_exec($curl);
        
        // echo $res;exit();

        curl_close($curl);



        return $res;
      }
       public function getAccessToken() {
            // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
            $data = json_decode($this->get_php_file("access_token.php"));
           
            // 第三步：超过两小时access_token.php

            // if ($data->expire_time < time()) {
              // 如果是企业号用以下URL获取access_token
              // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
             
              // 第一步：获取token的api地址
              $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
              
              $res = json_decode($this->httpGet($url));
              $access_token = $res->access_token;

              if ($access_token) {
                $data->expire_time = time() + 7000;
                $data->access_token = $access_token;
                // 第二步：保存到access_token.php里面
                $this->set_php_file("access_token.php", json_encode($data));
              }
            // } else {
            //   $access_token = $data->access_token;
            // }
            return $access_token;
          }

      public function get_php_file($filename) {
        return trim(substr(file_get_contents($filename), 15));
      }
      public function set_php_file($filename, $content) {
        $fp = fopen($filename, "w");
        fwrite($fp, "<?php exit();?>" . $content);
        fclose($fp);
      }


      // 解析xml
    public function getPostURL()
    { 
      libxml_disable_entity_loader(true);

      $this->postObj = simplexml_load_string(WEIXIN, 'SimpleXMLElement', LIBXML_NOCDATA);

      return $this->postObj;
        
    }

    // 被动发送/回复消息
     public function responseMsg($msgType,$title,$short_desc='',$thumb_img='',$Url='')
    {
      //get post data, May be due to the different environments
       

          //extract post data
      if (!empty($this->postObj)){
        
                  /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
                     the best way is to check the validity of xml by yourself */
                  
                  $fromUsername = $this->postObj->FromUserName;
                  $toUsername = $this->postObj->ToUserName;
                  $keyword = trim($this->postObj->Content);
                  $time = time();
                 if ($msgType=='news') {
                    $textTpl = "<xml>
                <ToUserName><![CDATA[%s]]></ToUserName>
                <FromUserName><![CDATA[%s]]></FromUserName>
                <CreateTime>%s</CreateTime>
                <MsgType><![CDATA[%s]]></MsgType>
                <ArticleCount>1</ArticleCount>
                <Articles>
                <item>
                <Title><![CDATA[%s]]></Title> 
                <Description><![CDATA[%s]]></Description>
                <PicUrl><![CDATA[%s]]></PicUrl>
                <Url><![CDATA[%s]]></Url>
                </item>
                </Articles>
                </xml>"; 
                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $title,$short_desc,$thumb_img,$Url);
                  }elseif($msgType=='text'){ 
                     $textTpl = "<xml>
                <ToUserName><![CDATA[%s]]></ToUserName>
                <FromUserName><![CDATA[%s]]></FromUserName>
                <CreateTime>%s</CreateTime>
                <MsgType><![CDATA[%s]]></MsgType>
                <Content><![CDATA[%s]]></Content>
                </xml>"; 
                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $title);

                  }elseif($msgType=='transfer_customer_service'){ 
                     $textTpl = "<xml>
                <ToUserName><![CDATA[%s]]></ToUserName>
                <FromUserName><![CDATA[%s]]></FromUserName>
                <CreateTime>%s</CreateTime>
                <MsgType><![CDATA[%s]]></MsgType>
                </xml>"; 
                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType);

                  }
                  
                  

                     
                    echo $resultStr;
                  


          }else {
            echo "";
            exit;
          }
    }


    //客服主动发送消息，48小时之内有效
  public function sendMSG($openID,$msgInfo,$msgType='text'){ 
      if ($msgType=='text') {
        $data = '{
            "touser":"'.$openID.'",
            "msgtype":"text",
            "text":
            {
                 "content":"'.$msgInfo.'"
            }
        }';
      }elseif ($msgType=='news') {
        $data = '{
            "touser":"'.$openID.'",
            "msgtype":"news",
            "news":{
              "articles": '.$msgInfo.'
            }
        }';
      }elseif ($msgType=='image') {
        $data = '{
            "touser":"'.$openID.'",
            "msgtype":"image",
            "image":{
              "media_id": "'.$msgInfo.'"
            }
        }';
      }
      
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=".ACCESS_TOKEN);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $tmpInfo = curl_exec($ch);
    if (curl_errno($ch)) {
      echo curl_error($ch);
    }

    curl_close($ch);

  }

  public function get_msg_pic($media_id)
  {
    return $this->httpGet('https://api.weixin.qq.com/cgi-bin/media/get?access_token='.ACCESS_TOKEN.'&media_id='.$media_id);
  }

}

?>