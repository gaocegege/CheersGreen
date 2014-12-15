<?php
// to be tested
namespace Home\Model;
use Think\Model;
class BookModel extends Model{
	// connect to the database

	public function listAll(){
		$bookModel = M("Book");
		return $bookModel;
	}

	public function getBookById($id){
		$bookModel = M("Book");
		return $bookModel->where("id = $id");
	}

	public function getBooksByName($name){
		$bookModel = M("Book");
		return $bookModel->where("bookname = $name");
	}

	public function getBooksByAuthor($authorName){
		$bookModel = M("Book");
		return $bookModel->where("author = $authorName");
	}

	public function getBooksBySearch($querys){
		$bookModel = M("Book");
		return $bookModel->where("author = $querys or bookname = $querys");
	}

	public function getBooksInPage($page, $pagenum){
		$bookModel = M("Book");
		return $bookModel->page("$page, $pagenum");
	}
}