<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$book_types = array("人文"=>array("历史","政治","地理"),
    						"数学"=>array("概率统计","数学分析","高等数学"),
    						"网页"=>array("PS","Flash"),
    						"艺术摄影"=>array("摄像机使用指南","摄影入门教程"),
    						"机械"=>array("工程制图","制造工艺"),
    						"能源化工"=>array("能源结构导论","化学工业基础"),
    						"旅行"=>array("国家地理","旅游学导论"));
        $this->assign('title','CheersGreen');
        $this->assign('book_types',$book_types);
        //dump($book_types);
    	$this->show();
    }

    public function search(){
        $this->assign('title','CheersGreen');
        // get the class, "all" || "price" || "reputation"
        $id = $_GET['class'];
        $id = $id==""?"all":$id;
        if($id=="all"){
            $bookService = D('Book', 'Service');
            $books = $bookService->listAll();
            trace($books);
        }
        $this->assign('nav_active',$id);
        $this->assign('books',$books);
        $this->show();
    }

    public function test(){
        $sort = $_POST['sort'];
        $bookModel = M("Book");
        $books = $bookModel->where("id=2")->find();
        //$this->ajaxReturn($books);
        $msg = "<div class='book-box-container' id='$book".$books['id'].">
                    <div class='row'>
                        <div class='col-sm-2'>
                            <div class='book-img'><img src='http://localhost/CheersGreen".$books['image']."' id='bookImage".$books['id']."></div>
                        </div>
                        <div  class='col-sm-3' style='font-weight:bold'><p>书名：<span id='bookName".$books['id']."'>".$books['bookname']."</span></p>
                            <p>作者：<span id='bookAuthor".$books['id']."'>".$books['author']."</span></p>
                            <p>出版日期：<span id='bookVersion".$books['id']."'>".$books['version']."</span></p>
                            <p style='display:none'><span id='bookDescription".$books['id']."'>.".$books['description']."</span></p>
                        </div>
                        <div class='col-sm-5' style='font-weight:bold'>
                            <p>卖家昵称：<span id='bookStore".$books['id']."'>".$books['store']."</span></p>
                        </div>
                        <div class='col-sm-2' style='text-align:center;'>
                            <h4>￥".$books['price']."</h4>
                            <button class='btn' style='background-color:#A33B32;color:#fff;'>下单</button>
                        </div>
                    </div>
                </div>";
        echo $msg;
    }
    public function user(){
        $this->assign("user_portrait","http://localhost/CheersGreen/Public/images/portrait.jpg");
        $this->assign("user_sex","man");
        $this->assign("user_name","未饮心先醉");
        $this->assign("user_level","3");
        $this->assign("user_email","tanglaoya@sjtu.edu.cn");
        $this->assign("user_tel","18818188181");
        $this->assign("user_qq","517896665");
        $this->assign("transaction_time","2014-09-14 23:50");
        $bookModel = M("Book");
        $books = $bookModel->select();
        $this->assign('books',$books);
        $this->show();
    }
    public function sell(){
        $this->assign('nav_active',"index");
        $this->show();
    }
    public function sell_one_book(){

    }
    public function upload_bookpicture(){
        
    }
}