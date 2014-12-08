<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title><?php echo ($title); ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script type="text/javascript" src="/~gaoce/Public/dist/js/jquery.min.js"></script>
	<script type="text/javascript" src="/~gaoce/Public/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/~gaoce/Public/dist/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="/~gaoce/Public/css/index.css">
<script type="text/javascript">
	
</script>
</head>
<body>
<div class="login-box">
	<img src="/~gaoce/Public/images/login.png" style="width:100%;height:100%">
</div>
<div class="container">
    <div class="row">
    	<div class="col-xs-6 col-sm-3"><img src="/~gaoce/Public/images/index-logo.png" width="100%"></div>
    	<div class="col-xs-6 col-sm-9">
    		<div class="row">
    			<img src="/~gaoce/Public/images/index-logo2.png" style="width:100%">
    		</div>
    		<div class="row">
    			<div class="col-sm-8">
    			    <div class="input-group" style="border:4px solid #C05B40;">
    			    	<input type="text" class="form-control" style="background-color:#F8E2BD;height:100%;border:0px">
    			    	<span class="input-group-addon" style="color:#C05B40;background-color:#F8E2BD;border:0;cursor:pointer"  title="搜索"><span class="glyphicon glyphicon-search"></span></span>
    			    </div>
    				
    			</div>
    			<div class="col-sm-2">
    				<button class="btn" style="background-color:#C05B40;width:100%;height:40px;color:#fff;font-size:1.2em">搜索</button>
    			</div>
    			<div class="col-sm-2">
    				<button class="btn" style="background-color:#C05B40;width:100%;height:40px;color:#fff;font-size:1.2em">我要卖</button>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-4">
	    			<div class="book-type-container">
	    				<div class="book-type-heading">
	    					书籍分类
	    				</div>
	    				<div class="book-type-body">
	    					<div class="panel-group" id="accordion">
		    					<?php if(is_array($book_types)): $i = 0; $__LIST__ = $book_types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$types): $mod = ($i % 2 );++$i;?><div class="panel" style="margin:0px;border:0px" >
								      <div class="panel-heading" style="height:40px;" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo ($key); ?>">
								            <?php echo ($key); ?><span class="badge pull-right" style="background-color:#F8E2BD;"><img src="/~gaoce/Public/images/down-arrow.png"></span>
								            <div class="horizontal-line"></div>
								      </div>
								      <div id="collapse<?php echo ($key); ?>" class="panel-collapse collapse" style="background-color: #F8E2BD;">
								           <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><table class="table table-hover" style="color:#C05B40">
								           			<tr style="cursor:pointer;"onclick="show_image('<?php echo ($type); ?>')"><td style="padding-left:15px;"><?php echo ($type); ?></td></tr>
								           		</table><?php endforeach; endif; else: echo "" ;endif; ?>
								      </div>
								   </div><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
	    				</div>
	    			</div>
    			</div>
    			<div class="col-sm-8">
    				<div class="book-type-container">
    					<div class="book-type-heading">
	    					热门推荐
	    				</div>
    				</div>
    				<div class="book-image-container">
    				    <div style="width:1200px">
    					<div class="book-image-box"></div><div class="book-image-box"></div><div class="book-image-box"></div>
    					<div class="book-image-box"></div><div class="book-image-box"></div><div class="book-image-box"></div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
</body>
<script type="text/javascript">
function show_image(type){
	alert(type);
	//window.location = "index/id/2";
}
</script>
<script type="text/javascript">
var last_div=null;
$(".panel-heading").on("click",null,function(e){
	var current_div = e.target.childNodes[1].childNodes[0];
	var current_src = current_div.src.slice(current_div.src.lastIndexOf("/")+1);
	if(last_div){	
		last_div.src="/~gaoce/Public/images/down-arrow.png";
	}
	if(last_div!=current_div)
	    current_div.src="/~gaoce/Public/images/up-arrow.png";
	else{
		if(current_src=="up-arrow.png") 
			current_div.src="/~gaoce/Public/images/down-arrow.png"
		else current_div.src="/~gaoce/Public/images/up-arrow.png";
	}
    last_div = current_div;
});
</script>
</body>
</html>