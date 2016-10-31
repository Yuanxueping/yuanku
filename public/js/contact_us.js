$.fn.extend({
	isEmpty : function(){
          var reg = /^\S+$/;  
          return reg.test(this.val());
        },
	// 邮箱格式检查插件
    isEmail : function(){
      var reg = /^[a-z\d]+(\.[a-z\d]+)*@([\da-z](-[\da-z])?)+(\.{1,2}[a-z]+)+$/;  
      return reg.test(this.val());
    }
});
$(function(){
	var $submit = $('#submit');//发送信息按钮

	var $fb_name = $('#fb_name');//用户姓名的输入框
	var $warn = $('#warn');//内容不能为空的警告框
	var $checkBlank=$('#checkBlank');//不能有空格的警告框

	var $fb_email = $('#fb_email');//用户邮箱的输入框
	var $warn1 = $('#warn1');//内容不能为空的警告框
	var $checkEmail = $('#checkEmail');


	var $fb_theme = $('#fb_theme');
	var $warn2 = $('#warn2');

	var $fb_msg = $('#fb_msg');
	var $warn3 = $('#warn3');

	var $close = $('.close');//关闭的×按钮

	$submit.click(function(){
		// 用户名为空
		if (!$fb_name.val()) {
			$warn.queue(function() {
				$(this).css('display','block').dequeue();
			}).delay(2000).queue(function() {
				$(this).css('display','none').dequeue();
			});
			$fb_name.focus();
			return false;
		}
		// 邮箱为空
		if (!$fb_email.val()) {
			$warn1.queue(function() {
				$(this).css('display','block').dequeue();
			}).delay(2000).queue(function() {
				$(this).css('display','none').dequeue();
			});
			$fb_email.focus();
			return false;
		}
		// 邮箱格式不正确
		if(!$fb_email.isEmail()){
			$checkEmail.queue(function() {
				$(this).css('display','block').dequeue();
			}).delay(2000).queue(function() {
				$(this).css('display','none').dequeue();
			});
			$fb_email.focus();
			return false;
		}
		// 主题为空
		if (!$fb_theme.val()) {
			$warn2.queue(function() {
				$(this).css('display','block').dequeue();
			}).delay(2000).queue(function() {
				$(this).css('display','none').dequeue();
			});
			$fb_theme.focus();
			return false;
		}
		// 反馈内容为空
		if (!$fb_msg.val()) {
			console.log('aaa');
			$warn3.queue(function() {
				$(this).css('display','block').dequeue();
			}).delay(2000).queue(function() {
				$(this).css('display','none').dequeue();
			});
			$fb_msg.focus();
			return false;
		}
	});


	$close.click(function(){
		$warn.css('display','none');
		$checkBlank.css('display','none');
		return false;
	});


	//用户姓名空格检查
	$fb_name.change(function(){
		var str=$fb_name.val();
		var Bnum=0;
		for(var i=0;i<str.length;i++){
			if(str.charCodeAt(i)==32){
				Bnum++;
			}
		}
		if(Bnum>0){
			$checkBlank.queue(function() {
				$(this).css('display','block').dequeue();
			}).delay(2000).queue(function() {
				$(this).css('display','none').dequeue();
			});
			$fb_name.focus();
		}else{
			$('#checkBlank').css('display','none');
		}
	});
})



/*<div class="message">
	<div id="warn" class="alert alert-warning alert-dismissable" style="display: none;"> 
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>警告！&nbsp;&nbsp;</strong><span id="warningHtml">用户姓名</span>不能为空！
	</div>
	<div id="checkBlank" class="alert alert-warning alert-dismissable" style="display: none;"> 
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>警告！&nbsp;&nbsp;</strong>用户姓名不能含有空格字符！
	</div>
</div>*/
/*// 自定义用户邮箱格式判断插件
$.fn.extend({
    isEmail : function(){
      var reg = /^[a-z\d]+(\.[a-z\d]+)*@([\da-z](-[\da-z])?)+(\.{1,2}[a-z]+)+$/;  
      return reg.test(this.val());
    }
});
$(function(){
	var $submit = $('#submit');//发送信息按钮
	var $fb_name = $('#fb_name');//用户姓名的输入框
	var $warn = $('#warn');//内容不能为空的警告框
	var $fb_email = $('#fb_email');//用户邮箱的输入框
	var $close = $('.close');//关闭的×按钮
	var $checkBlank=$('#checkBlank');//不能有空格的警告框
	var $warningHtml = $('#warningHtml');//警告框提示文字
	var $fb_theme = $('#fb_theme');
	var $fb_msg = $('#fb_msg');

	$submit.click(function(){
		// 用户名为空
		if (!$fb_name.val()) {
			$warningHtml.html('用户姓名');
			showWarning();
			$fb_name.focus();
			return false;
		}
		// 邮箱为空
		if (!$fb_email.val()) {
			$warningHtml.html('用户邮箱');
			showWarning();
			$fb_email.focus();
			return false;
		}
		// 邮箱格式不正确
		if(!$fb_email.isEmail()){
			$warningHtml.html('正确格式的用户邮箱');
			showWarning();
			$fb_email.focus();
			return false;
		}
		// 主题为空
		if (!$fb_theme.val()) {
			$warningHtml.html('主题');
			showWarning();
			$fb_theme.focus();
			return false;
		}
		// 反馈内容为空
		if (!$fb_msg.val()) {
			$warningHtml.html('内容描述');
			showWarning();
			$fb_msg.focus();
			return false;
		}
	});


	$close.click(function(){
		$warn.css('display','none');
		$checkBlank.css('display','none');
		return false;
	});


	//字符串空格检查
	$fb_name.change(function(){
		var str=$fb_name.val();
		var Bnum=0;
		for(var i=0;i<str.length;i++){
			if(str.charCodeAt(i)==32){
				Bnum++;
			}
		}
		if(Bnum>0){
			$checkBlank.queue(function() {
				$(this).css('display','block').dequeue();
			}).delay(2000).queue(function() {
				$(this).css('display','none').dequeue();
			});
			$fb_name.focus();
		}else{
			$('#checkBlank').css('display','none');
		}
	});

	// 显示警告框
	var showWarning = function(){
		$warn.queue(function() {
			$(this).css('display','block').dequeue();
		}).delay(2000).queue(function() {
			$(this).css('display','none').dequeue();
		});
	}

})
*/