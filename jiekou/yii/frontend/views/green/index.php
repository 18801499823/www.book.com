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
		<title>绿色通道</title>
		<body>
			<div class="header">
				<span>绿色通道</span>
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
							<span class="book-tit">申请类型</span>
							<input type="text" name="name" id="applyType" placeholder="请选择您的申请类型" disabled="disabled" />
						</div>
						<div class="checkshow">
							<h4 class="ta-center">申请类型</h4>
							<p class="applyType">缓交学费</p>
							<p class="applyType">助学贷款</p>
							<p class="applyType">免交学费</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="greenway">
					<ul class="hd clearfix">
						<li class="active">个人信息</li>
						<li>家庭情况</li>
						<li>申请原因</li>
						<li>证明材料</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit">姓名</span>
									<input type="text" name="name" id="username" placeholder="请输入姓名" />
									<div class="sex" id="sex">
										<label class="sex-check">男</label>
										<label>女</label>
									</div>
								</li>
								<li>
									<span class="book-tit">民族</span>
									<input type="text" name="name" id="nation" placeholder="请填写您的民族类别" />
								</li>
								<li>
									<span class="book-tit">手机</span>
									<input type="text" name="name" id="phone" placeholder="请填写您的个人手机号码" />
								</li>
								<li>
									<span class="book-tit">出生年月</span>
									<input type="text" name="name" id="birth" placeholder="请填写您的出生日期" />
								</li>
								<li>
									<span class="book-tit">身份证号</span>
									<input type="text" name="name" id="idNumber" placeholder="请填写您的身份证号码" />
								</li>
								<li>
									<span class="book-tit">联系手机</span>
									<input type="text" name="name" id="telephone" placeholder="请填写您的手机联系号码" />
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">户籍类型</span>
										<input type="text" name="name" id="isHouse" placeholder="请选择您的户籍类型" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<h4 class="ta-center">户籍类型</h4>
										<p class="isHouse">是</p>
										<p class="isHouse">否</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">政治面貌</span>
										<input type="text" name="name" id="politicalLandscape" placeholder="请选择您的政治面貌" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<p class="politicalLandscape">群众</p>
										<p class="politicalLandscape">团员</p>
										<p class="politicalLandscape">党员</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									<a href="index.php?r=adress/index">
										<span class="book-tit">居住地址</span>
										<input type="text" name="name" id="whereUrl" placeholder="请所在地地址" disabled="disabled" />
									</a>
									<span class="goin"><i class="iconfont icon-right"></i></span>
								</li>
								<li>
									<span class="book-tit">详细地址</span>
									<input type="text" name="name" id="detailedURL" placeholder="请填写您的详细地址" />
								</li>
							</ul>
						</div>
						<div>
							<ul class="dorm-book">
								<li>
									<span class="book-tit house">家庭成员1</span>
									<input type="text" name="name" id="housePeople" placeholder="请填写家庭成员1的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" id="filiation" placeholder="请填写您与家庭成员1的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" id="workUnit" placeholder="请填写家庭成员1的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" id="annuallIncome" placeholder="请填写家庭成员1的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员2</span>
									<input type="text" name="name" id="housePeople2" placeholder="请填写家庭成员2的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" id="filiation2" placeholder="请填写您与家庭成员2的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" id="workUnit2" placeholder="请填写家庭成员2的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" id="annuallIncome2" placeholder="请填写家庭成员2的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员3</span>
									<input type="text" name="name" id="housePeople3" placeholder="请填写家庭成员3的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" id="filiation3" placeholder="请填写您与家庭成员3的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" id="workUnit3" placeholder="请填写家庭成员3的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" id="annuallIncome3" placeholder="请填写家庭成员3的年收入情况" class="house-input" />
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea id="speakContent"  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
						<div class="prove clearfix">
							<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
								<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
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
                // 交通方式
                $(document).on("click",".applyType",function(){
          	        var applyType = $(this).text();
          	        $("#applyType").attr("value",applyType);
                })
                // 户籍类型
                $(document).on("click",".isHouse",function(){
          	        var isHouse = $(this).text();
          	        $("#isHouse").attr("value",isHouse);
                })
                // 政治面貌
                $(document).on("click",".politicalLandscape",function(){
          	        var politicalLandscape = $(this).text();
          	        $("#politicalLandscape").attr("value",politicalLandscape);
                })
                $(document).on('click','#bttn',function (){
                	var applyType = $("#applyType").val();                   // 申请类型
                	var username = $("#username").val();                     // 姓名
                	var nation = $("#nation").val();                         // 民族
                	var phone = $("#phone").val();                           // 电话
                	var birth = $("#birth").val();                           // 出生年月
                	var idNumber = $("#idNumber").val();                     // 身份证号
                	var telephone = $("#telephone").val();                   // 联系手机
                	var isHouse = $("#isHouse").val();                       // 居住类型
                	var politicalLandscape = $("#politicalLandscape").val(); // 政治面貌
                	var whereUrl = $("#whereUrl").val();                     // 居住地址
                	var detailedURL = $("#detailedURL").val();               // 详细地址
                	var housePeople = $("#housePeople").val();               // 家庭成员
                	var filiation = $("#filiation").val();                   // 关系
                	var workUnit = $("#workUnit").val();                     // 工作单位
                	var annuallIncome = $("#annuallIncome").val();           // 年收入
                	var housePeople2 = $("#housePeople2").val();             // 家庭成员2
                	var filiation2 = $("#filiation2").val();                 // 关系2
                	var workUnit2 = $("#workUnit2").val();                   // 工作单位2
                	var annuallIncome2 = $("#annuallIncome2").val();         // 年收入2
                	var housePeople3 = $("#housePeople3").val();             // 家庭成员3
                	var filiation3 = $("#filiation3").val();                 // 关系3
                	var workUnit3 = $("#workUnit3").val();                   // 工作单位3
                	var annuallIncome3 = $("#annuallIncome3").val();         // 年收入3
                	var speakContent = $("#speakContent").val();             // 申请原因
                	$.ajax({
                		type : "post",
                		url : "http://sina/dashixun/day1/yii/frontend/web/index.php?r=green/check",
                		data : {applyType:applyType,username:username,nation:nation,phone:phone,birth:birth,idNumber:idNumber,telephone:telephone,isHouse:isHouse,politicalLandscape:politicalLandscape,whereUrl:whereUrl,detailedURL:detailedURL,housePeople:housePeople,filiation:filiation,workUnit:workUnit,annuallIncome:annuallIncome,housePeople:housePeople,filiation:filiation,workUnit:workUnit,annuallIncome:annuallIncome,housePeople:housePeople,filiation:filiation,workUnit:workUnit,annuallIncome:annuallIncome,speakContent:speakContent},
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

</html>