<?php
namespace Home\Controller;
use Think\Controller;

class InterfaceController extends Controller {
	public function index() {
		$secret = '5e9292629daa9197cd762090a0e1f2a2';
    	$short_name = 'lid';
    	$last_log_id = '';

	    /**
	     *
	     * 获取评论数据
	     *
	     */
	     
        if (check_signature($_POST)) {

            $limit = 20;

            $params = array(
                'limit' => $limit,
                'order' => 'asc',
            );


            $posts = array();

            if (!$last_log_id)
                $last_log_id = 0;

            $params['since_id'] = $last_log_id;
            //自己找一个php的 http 库
            $response = $http_client->request('GET', 'http://api.duoshuo.com/log/list.json', $params);

            if (!isset($response['response'])) {
                //处理错误,错误消息$response['message'], $response['code']
                //...

            } else {
                //遍历返回的response，你可以根据action决定对这条评论的处理方式。
                foreach($response['response'] as $log){

                    switch($log['action']){
                        case 'create':
							$news_commont = D('news_commont');
							$_POST['post_id'] = $log['meta']['post_id'];
							$_POST['author_name'] = $log['meta']['author_name'];
							$_POST['message'] = $log['meta']['message'];
							$_POST['created_at'] = $log['meta']['created_at'];
							if($news_commont->create()) {
								$news_commont->add();
							}
                            //这条评论是刚创建的
                            break;
                        case 'approve':
                            //这条评论是通过的评论
                            break;
                        case 'spam':
                            //这条评论是标记垃圾的评论
                            break;
                        case 'delete':
                            //这条评论是删除的评论
                            break;
                        case 'delete-forever':
                            //彻底删除的评论
                            break;
                        default:
                            break;
                    }

                    //更新last_log_id，记得维护last_log_id。（如update你的数据库）
                    if (strlen($log['log_id']) > strlen($last_log_id) || strcmp($log['log_id'], $last_log_id) > 0) {
                        $last_log_id = $log['log_id'];
                    }
                }
            }
        }
	}
}
	 /**
     *
     * 检查签名
     *
     */
    function check_signature($input){
        $signature = $input['signature'];
        unset($input['signature']);

        ksort($input);
        $baseString = http_build_query($input, null, '&');
        $expectSignature = base64_encode(hmacsha1($baseString, $secret));
        if ($signature !== $expectSignature) {
            return false;
        }
        return true;
    }

    // from: http://www.php.net/manual/en/function.sha1.php#39492
    // Calculate HMAC-SHA1 according to RFC2104
    // http://www.ietf.org/rfc/rfc2104.txt
    function hmacsha1($data, $key) {
        if (function_exists('hash_hmac'))
            return hash_hmac('sha1', $data, $key, true);

        $blocksize=64;
        if (strlen($key)>$blocksize)
            $key=pack('H*', sha1($key));
        $key=str_pad($key,$blocksize,chr(0x00));
        $ipad=str_repeat(chr(0x36),$blocksize);
        $opad=str_repeat(chr(0x5c),$blocksize);
        $hmac = pack(
                'H*',sha1(
                        ($key^$opad).pack(
                                'H*',sha1(
                                        ($key^$ipad).$data
                                )
                        )
                )
        );
        return $hmac;
    }
?>