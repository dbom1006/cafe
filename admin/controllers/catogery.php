<?php if(!defined('PATH_SYSTEM')) die('Bad requested!');
	
class CatogeryController{

	public function index(){
		echo '<h1> Quản lý Catogery <h1>';
		echo '<a href="'.BASE_URL.'admin.php?c=catogery&a=create">TẠO MỚI</a><br>';
		echo '<a href="'.BASE_URL.'admin.php?c=catogery&a=edit">CHỈNH SỬA</a>';
	}

	public function create(){
		echo '<h1> Tạo mới Catogery <h1>';
		echo '<a href="'.BASE_URL.'admin.php?c=catogery">QUẢN LÝ</a>';
	}

	public function edit(){
		echo '<h1> Chỉnh sửa Catogery <h1>';
		echo '<a href="'.BASE_URL.'admin.php?c=catogery">QUẢN LÝ</a>';
	}
}

?>