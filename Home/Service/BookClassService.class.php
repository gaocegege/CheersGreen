<?php
// to be tested
namespace Home\Service;
use Think\Model;
class BookClassService extends Model{

	public function listAll(){
		$bookClassModel = D('Bookclass');
		return $bookClassModel->listAll()->select();
	}
}