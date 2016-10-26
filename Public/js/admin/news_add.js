$(function() {
	$('.dropify').dropify();
	$('.dropify-clear').html('删除');
	$('.dropify-message').find('p').eq(0).html('点击添加图片');
	$('.dropify-error').html('添加错误');
	$('.dropify-infos-message').html('拖放或单击以替换');
	
});
