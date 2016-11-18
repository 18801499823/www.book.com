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
  <title>个人信息</title>
	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="index.php?r=usercenter/index" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
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
    	<span class="pro-line"><img src="img/pro-line4.png"></span>
		</div>
		<ul class="dorm-book">
			<li class="upload-head ta-center">
				<span>
					<img src="img/take-photo.png">
					<input type="file" />
				</span>
				<p>上传头像</p>
			</li>
			<li>
			    <span class="book-tit">姓名</span>
			    <input type="text" name="" id="username" placeholder="请输入姓名" /> 
			    <div class="sex">
			    	<label class="sex-check">男</label>
			    	<label>女</label>
			    </div>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" name="name" id="email"  placeholder="请填写您的个人邮箱地址" />  
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" name="name" id="phone" placeholder="请填写您的个人手机号码" />  
			</li>
			<li>
				<span class="book-tit">家庭主机</span>
		        <input type="text" name="name" id="homeHost" placeholder="请填写您的家庭主机号码" />  
			</li>
			<li>
				<span class="book-tit">移动电话</span>
		        <input type="text" name="name" id="mobilePhone" placeholder="请填写您的家庭移动电话号码" />  
			</li>
			<li>
				<div class="show-btn">
					<span class="book-tit">户口迁移</span>
			        <input type="text" name="name" placeholder="请选择户口是否迁移" id="accountMigration" disabled="disabled" />  
		       </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow">
		        	<p class="accountMigration">是</p>
		        	<p class="accountMigration">否</p>
		        </div>
			</li>
			<li>
				<div class="show-btn">
				<span class="book-tit">党员关系</span>
		        <input type="text" name="name" placeholder="请选择您的政治面貌" disabled="disabled" id="partyMember" />  
		       </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow">
		        	<p class="partyMember">群众</p>
		        	<p class="partyMember">团员</p>
		        	<p class="partyMember">党员</p>
		        </div>
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" name="name" id="uname" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="name" id="nexus" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" name="name" id="usname" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="name" id="nexus1" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">所在地地址</span>
			    <input type="text" name="name" id="adress" placeholder="所在地地址"/> 
			    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" name="name" id="detailedAdress" placeholder="请填写您的详细地址" />  
			</li>
		</ul>
		<div class="step-btn">
				<!-- <a href="dorm-book.html" class="ta-center db">下一步</a> -->
				<div id="list"></div>
				<a href="javascript:void(0);" class="ta-center db" id="bttn">下一步</a>
		</div>
  <script src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="js/basic.js"></script>	
  <script type="text/javascript" src="js/rem.js"></script>
  <script>
  	 // 户口是否迁移？
    $(document).on("click",".accountMigration",function(){
	        var accountMigration = $(this).text();
	        $("#accountMigration").attr("value",accountMigration);
    })
    // 政治面貌
    $(document).on("click",".partyMember",function(){
	        var partyMember = $(this).text();
	        $("#partyMember").attr("value",partyMember);
    })
    $(document).on('click','#bttn',function (){
    	var username = $("#username").val();                                     // 姓名
    	var email = $("#email").val();                                           // 邮箱
    	var phone = $("#phone").val();                                           // 手机
    	var homeHost = $("#homeHost").val();                                     // 家庭主机
    	var mobilePhone = $("#mobilePhone").val();                               // 移动电话
    	var accountMigration = $("#accountMigration").val();                     // 户口迁移
    	var partyMember = $("#partyMember").val();                               // 党员关系
    	var uname = $("#uname").val();                                           // 紧急联系人1电话
    	var nexus = $("#nexus").val();                                           // 与当事人关系
    	var usname = $("#usname").val();                                         // 紧急联系人1电话
    	var nexus1 = $("#nexus1").val();                                         // 与当事人关系
    	var adress = $("#adress").val();                                         // 所在地地址
    	var detailedAdress = $("#detailedAdress").val();                         // 详细地址
    	$.ajax({
    		type : "post",
    		url : "http://sina/dashixun/day1/yii/frontend/web/index.php?r=usercenter/check",
    		data : {username:username,email:email,phone:phone,homeHost:homeHost,mobilePhone:mobilePhone,accountMigration:accountMigration,partyMember:partyMember,uname:uname,nexus:nexus,usname:usname,nexus1:nexus1,adress:adress,detailedAdress:detailedAdress},
    		dataType : "jsonp",
    		jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
    		jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
    		success : function(json){
		    	if(json=="提交成功"){
		    	     location.href="http://sina/dashixun/day1/yii/frontend/web/index.php?r=usercenter/dormbook";
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
