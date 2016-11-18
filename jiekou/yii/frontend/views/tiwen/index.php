<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
		<title>我要提问</title>

		<body>
			<div class="header">
				<span>我要提问</span>
				<a href="index.php?r=ask/index" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain"  style="padding-top:3%;">
				 <div class="reason">	
				<textarea  placeholder="请您在此输入您的申请原因，以便通过审核" id="qname"></textarea>
			</div>
			<div><input type="button" id="btn" value="我要提问"></div>
			<div id="list"></div>
			</div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
			<script>
			 $(document).on("click","#btn",function(){
              //获取表单的所有值 
          	  var qname = $("#qname").val();// 提问
	          	$.ajax({
				    type : "post",
				    url : "http://sina/dashixun/day1/yii/frontend/web/index.php?r=tiwen/json",
				    data:{qname:qname},
				    dataType : "jsonp",
				    jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
				    jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
				    success : function(json){
				    	if(json=="成功"){
				    	    $("#list").html(json);
				    	}else{
				    		$("#list").html(json);
				    	}
				    	//alert(json);
				  //     var obj = eval(json);  
						// for(var i=0;i<obj.length;i++){   
						// alert(obj[i]);  
					 //   } 
				    },
				    error:function(){
				        alert('fail');
				    }
				})
	          })
			</script>
		</body>

</html>