<?php
// to be tested
namespace Home\Service;
use Think\Model;
class BookService extends Model{

	public function listAll(){
		$bookModel = D('Book');
		return $bookModel->listAll()->join("think_bookclass on think_book.classid = think_bookclass.id")->select();
	}

	public function getDefaultSearchResult($page, $pagenum, $class){
		$bookModel = D('Book');
		return $bookModel->getBooksInPage($page, $pagenum)->order('id desc')->select();
	}

	public function getSearchResult($querys){
		$bookModel = D('Book');
		return $bookModel->getBooksBySearch($querys)->select();
	}

	public function getOneBookById($id){
		$bookModel = D('Book');
		return $bookModel->getBookById($id)->find();
	}
}