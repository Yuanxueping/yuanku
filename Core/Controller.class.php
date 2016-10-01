<?php
/**
 * 控制器父类
 * 
 * 控制用户输入
 *  
 */
class Controller{

	
	
	protected $view=NULL;

	public function __construct()
	{
		 // 实例化view.class
		 $this->view=new View();
	}

	function Run()
	{
		$this->Analysis();
		// 用户交互控制器
		$control=$_GET['c'];

		$action=$_GET['a'];


		$controlFile=ROOT_PATH.'/Controllers/'.$control.'.class.php';
		if (!file_exists($controlFile)) {
			exit($control.'.class.php no exists');
		}

		include($controlFile); 


		// 首字母大小
		$class=ucwords($control);

		$instance=new $class();

		// 判断方法是否存在
		// 把用户传参数，
		if (!method_exists($instance, $action)) {
			 exit('不存在的方法'.$action);
		}

		// 调用控制器下面的action
		$instance->$action();


	}

	function Analysis()
	{
		# code...
	}

	function display($file)
	{
		$this->view->display($file);
	}

	function assign($var,$value)
	{
		$this->view->assign($var,$value);
	}

	public function LoadModel($modelNmae)
	{
		 $modelFile=ROOT_PATH.'/Modles/'.$modelNmae.'.class.php';
		 !file_exists($modelFile) && exit('模型'.$modelNmae.'不存在');
		 include $modelFile;

		 $class=ucwords($modelNmae);

		 !class_exists($class) && exit('模型'.$modelNmae.'未定义');

		 $model=new $class();

		 return $model;

	}


}

?>