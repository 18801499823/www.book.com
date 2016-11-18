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
  <title>抵校登记</title>
	<body>
		<div class="header">
			<span>抵校登记</span>
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
    			<span class="step-icon passbg">3</span>
    			<p class="step-txt">抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line1.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
			<div class="show-btn">
			    <span class="book-tit">交通方式</span>
			    <input type="text" name="0" id="transportation" placeholder="请选择您到达学校的交通工具"disabled="disabled"/> 
		   </div>
		    <span class="goin"><i class="iconfont icon-right"></i></span>
		    <div class="checkshow">
	        	<p class="transportation">飞机</p>
	        	<p class="transportation">火车</p>
	        	<p class="transportation">汽车</p>
	       </div>
			</li>
			<li>
				<span class="book-tit">接站站点</span>
		        <input type="text" name="name" id="cityUrl" placeholder="请选择您目的地的站点位置" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">出发时间</span>
		        <input type="text" name="name" id="goTime" placeholder="请填写您的出发时间" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">到达时间</span>
		        <input type="text" name="name" id="atTime" placeholder="请选择您的预计到达时间" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<div class="show-btn">					
					<span class="book-tit">是否陪同</span>
			        <input type="text" name="name" id="isEscort" placeholder="请选择是否有人陪同" disabled="disabled"/>  
		        </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow">
	        	<p class="isEscort">是</p>
	        	<p class="isEscort">否</p>
	       </div>
			</li>
			<li>
				<span class="book-tit">陪同人数</span>
		        <input type="text" name="name" id="ecortNum" placeholder="请填写您的陪同人数" />  
			</li>
		</ul>
		<div class="step-btn">
		<div id="list"></div>
			    <a href="javascript:void(0);" id="last">上一步</a>
				<!-- <a href="reportCard.html">下一步</a> -->
				<a href="javascript:void(0);" id="btn">下一步</a>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/basic.js"></script>	
      <script type="text/javascript" src="js/rem.js"></script>	
      <script>
	      $(document).on("click","#last",function (){
	      	history.go(-1);
	      })
          // 交通方式
          $(document).on("click",".transportation",function(){
          	   var transportation = $(this).text();
          	   $("#transportation").attr("value",transportation);
          })
          // 是否陪同
          $(document).on("click",".isEscort",function(){
          	   var isEscort = $(this).text();
          	   $("#isEscort").attr("value",isEscort);
          })
          // 传值、入库后返回的数据接口
          $(document).on("click","#btn",function(){
              //获取表单的所有值 
          	  var transportation = $("#transportation").val();// 交通方式
          	  var cityUrl = $("#cityUrl").val();// 接站地点
          	  var goTime = $("#goTime").val();// 出发时间
          	  var atTime = $("#atTime").val();// 到达时间
          	  var isEscort = $("#isEscort").val();// 是否陪同
          	  var ecortNum = $("#ecortNum").val();// 陪同人数
          	$.ajax({
			    type : "post",
			    url : "http://sina/dashixun/day1/yii/frontend/web/index.php?r=arrive/json",
			    data:{transportation:transportation,cityUrl:cityUrl,goTime:goTime,atTime:atTime,isEscort:isEscort,ecortNum:ecortNum},
			    dataType : "jsonp",
			    jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
			    jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
			    success : function(json){
			    	if(json=="成功"){
			    	    location.href='http://sina/dashixun/day1/yii/frontend/web/index.php?r=reportcard/index';
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
              
          	  // document.write(transportation+","+cityUrl+","+goTime+","+atTime+","+isEscort+","+ecortNum+",");
          	  // var url='http://sina/dashixun/day1/yii/frontend/web/index.php?r=arrive/json?callback=?';
			  // var title=$('input').val();
			  // var data={'title':title};
	    //       $.getJSON(url,function(msg){
			  //     alert(msg)
			  // });
    //       $.get(url,function(msg){
		  //     alert(msg)
		  // },'jsonp');

          })
      </script>
	</body>
</html>
