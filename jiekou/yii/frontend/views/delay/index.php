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
		<title>推迟报到</title>

		<body>
			<div class="header">
				<span>推迟报到</span>
				<a href="index.php?r=index/index" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain">
				<ul class="dorm-book">
					<li class="state-box">
						申请状态：
						<span class="state-img"><img src="img/state.png"></span>
						<span class="state">审核通过</span>
					</li>
				</ul>
				<ul class="dorm-book mt3">
					<li>
						<div class="show-btn">
							<span class="book-tit delay">推迟报到类型</span>
							<input type="text" name="name" placeholder="请选择" id="holiday" disabled="disabled" class="delayinput"/>
						</div>
						<div class="checkshow">
							<h4 class="ta-center">推迟报到类型</h4>
							<p class="holiday">事假</p>
							<p class="holiday">病假</p>
							<p class="holiday">服兵役</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="delayReport">
					<ul class="hd clearfix">
						<li class="active">个人申请信息</li>
						<li>申请原因</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit delay">姓名</span>
									<input type="text" name="name" placeholder="请填写您的姓名" id="username" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">考生号</span>
									<input type="text" name="name" placeholder="请填写您的考生号" id="number" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">学院</span>
									<input type="text" name="name" placeholder="请填写您所在的学院" id="school" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">专业</span>
									<input type="text" name="name" placeholder="请填写您的专业" id="job" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">身份证号</span>
									<input type="text" name="name" placeholder="请填写您的身份证号码" id="idNumber" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">推迟报到时间</span>
									<input type="text" name="name" placeholder="请填选择" class="delayinput" id="lateTime" disabled="disabled"/>
									<span class="goin"><i class="iconfont icon-right"></i></span>
								</li>
							</ul>
						</div>
						<div class="reason">

							<textarea  placeholder="请您在此输入您的申请原因，以便通过审核" id="content"></textarea>
						</div>
					</div>
				</div>
			</div>
			
			<div class="step-btn">
					<div id="list"></div>
					<a href="javascript:void(0);" class="ta-center db" id="bttn">提交</a>
			</div>
			<div class="cover-bg"></div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
			<script>
				// 推迟报道类型
                $(document).on("click",".holiday",function(){
          	        var holiday = $(this).text();
          	        $("#holiday").attr("value",holiday);
                })
                $(document).on('click','#bttn',function (){
                	var holiday = $("#holiday").val();                       // 推迟
                	var username = $("#username").val();                     // 姓名
                	var number = $("#number").val();                         // 学号
                	var school = $("#school").val();                         // 学院
                	var job = $("#job").val();                               // 专业
                	var idNumber = $("#idNumber").val();                     // 身份证号
                	var lateTime = $("#lateTime").val();                     // 推迟时间
                	var content = $("#content").val();                       // 原因
                	$.ajax({
                		type : "post",
                		url : "http://sina/dashixun/day1/yii/frontend/web/index.php?r=delay/check",
                		data : {holiday:holiday,username:username,number:number,school:school,job:job,idNumber:idNumber,lateTime:lateTime,content:content},
                		dataType : "jsonp",
                		jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
                		jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
                		success : function(json){
					    	if(json){
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