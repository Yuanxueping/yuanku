<?php


function get_new_list(){
	$news = M('News');
		 
		$news_list=$news
						 -> order('id desc')
						 -> limit(3)
						 -> select();
//				http://localhost/lidong/yuanku/index.php/Home/Index/news_detail/id/26.html
//				http://localhost/lidong/yuanku/Index/news_detail/id/26/html		 
	foreach ($news_list as $key => $value) {
//					.U('News/sort','page_num='.$i).
		$f_html.="<li><a href=".U('Index/news_detail','id='.$value['id'])."><span class='size'><img src='/Public/".$value['img']." '/></span><span>".mb_substr($value['title'],0,6,'utf-8')."</span></a></li><br/>";
	}
	return $f_html;
}



function subtext($text, $length)
{
    if(mb_strlen($text, 'utf8') > $length) 
    return mb_substr($text, 0, $length, 'utf8').'...';
    return $text;
}

?>