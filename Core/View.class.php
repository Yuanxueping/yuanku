<?php
// 基类
class ViewBase{
	protected $vars=array();

	protected function assign()
	{
		# code...
	}
	protected function display()
	{
		# code...

	}

}

class View extends ViewBase{
	public function assign($var,$assign_value)
	{
		 if (is_array($var)) {
		 	$this->vars=array_merge($this->vars,$var);
		 }else{
		 	$this->vars[$var]=$assign_value;
		 }
	}
	public function display($file)
	{
		include ROOT_PATH.'/Core/smarty/Smarty.class.php';
		$template=new Smarty();

		$template->template_dir=ROOT_PATH.'/views/';

		$tempate->caching=false;

		$tempate->compile_dir=ROOT_PATH.'/cache/';

		// 模版文件地址
		$templateFile=ROOT_PATH.'/views/'.$file;

		if (!file_exists($templateFile)) {
			exit('模版文件'.$file.'不存在');
		}

		$template->display($file,$this->vars);



	}
}


?>