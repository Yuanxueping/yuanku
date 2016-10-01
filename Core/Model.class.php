<?php

class Model{

	protected $dbLink=NULL;

	public function __construct()
	{
		global $C;

		$this->dbLink=mysql_connect($C['DB_HOST'],$C['DB_USER'],$C['DB_PWD']) or die('connect failed!');

		mysql_select_db($C['DB_NAME']);

		mysql_query("SET NAMES ".$C['DB_CHAR']);
	}

	public function Query($sql)
	{
		
		$res=mysql_query($sql) or exit(mysql_error());
		return $res;
	}

	public function Fetch($res,$type='array')
	{
		$func=$type=='array'?'mysql_fetch_array':'mysql_fetch_row';
		$row=$func($res);
		return $row;
	}
}

?>