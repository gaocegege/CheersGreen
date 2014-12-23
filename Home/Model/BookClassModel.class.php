<?php
// to be tested
namespace Home\Model;
use Think\Model;
class BookClassModel extends Model{
	// connect to the database

	public function listAll(){
		$bookClassModel = M("Bookclass");
		return $bookClassModel;
	}

	public function getBookClassById($id){
		$bookClassModel = M("Bookclass");
		return $bookClassModel->where("id = $id");
	}

	public function getBookClassByName($name){
		$bookClassModel = M("Bookclass");
		return $bookClassModel->where("classname = $name");
	}
}