<?php
return array(
	//'配置项'=>'配置值'
	
	//自定义成功和错误提示模版页面
	// 'TMPL_ACTION_SUCCESS'=>'public/success',
	'AUTH_CONFIG' => array(
    'AUTH_ON' => true, //认证开关
    'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
    'AUTH_GROUP' => 'think_auth_group', //用户组数据表名
    'AUTH_GROUP_ACCESS' => 'think_auth_group_access', //用户组明细表
    'AUTH_RULE' => 'think_auth_rule', //权限规则表
    'AUTH_USER' => 'admin_user'//用户信息表
  )
);