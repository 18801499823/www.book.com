<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <title>宿舍预定</title>
	<body>
		<div class="header">
			<span>宿舍预定</span>
			<a href="index.php?r=index/index" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="banner">
			<img src="img/self-report.png">
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
		    <span class="book-tit">校区</span>
		    <input type="text" name="name" id="schoolZone" placeholder="请选择你所在的校区" /> 
		    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">楼栋号</span>
		        <input type="text" name="name" id="building" placeholder="请填写您宿舍的楼栋号" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">宿舍类型</span>
		        <input type="text" name="name" id="roomType" placeholder="请填写您的宿舍类型" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">房间号</span>
		        <input type="text" name="name" id="roomNum" placeholder="请选择您的房间号" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">铺位</span>
		        <input type="text" name="name" id="roomNumber" placeholder="请选择您的床铺位置" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			
		</ul>
		<div class="step-btn">
				<a href="javascript:void(0);" id="last">上一步</a>
				<!-- <a href="arrive.html">下一步</a> -->
				<a href="javascript:void(0);" id="next">下一步</a>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="js/rem.js"></script>
      <script>
      $(document).on("click","#last",function (){
      	history.go(-1);
      })
      $(document).on('click','#next',function (){
    	var schoolZone = $("#schoolZone").val();                               // 校区
    	var building = $("#building").val();                                   // 楼栋号
    	var roomType = $("#roomType").val();                                   // 宿舍类型
    	var roomNum = $("#roomNum").val();                                     // 房间号
    	var roomNumber = $("#roomNumber").val();                               // 铺位
    	$.ajax({
    		type : "post",
    		url : "http://sina/dashixun/day1/yii/frontend/web/index.php?r=usercenter/checkcheck",
    		data : {schoolZone:schoolZone,building:building,roomType:roomType,roomNum:roomNum,roomNumber:roomNumber},
    		dataType : "jsonp",
    		jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
    		jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
    		success : function(json){
		    	if(json=="提交成功"){
		    	     location.href="http://sina/dashixun/day1/yii/frontend/web/index.php?r=arrive/index";
		    	}else{
		    		$("#list").html(json);
		    	}
		    },
		    error:function(){
		        alert('fail');
		    }
    	})
    })
      </script>	
	</body>
</html>
