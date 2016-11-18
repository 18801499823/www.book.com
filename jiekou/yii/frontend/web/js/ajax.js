function ajax(url,data=''){
	var str=''
	$.ajax({
			    type : "post",
			    url : "http://sina/dashixun/day1/yii/frontend/web/index.php?r="+url,
			    data:data,
			    dataType : "jsonp",
			    jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
			    jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
			    // async:false;
			    success : function(json){
			    	str = json
			    	return true
			    	// str = st
			    },
			    error:function(){
			        alert('fail');
			    }
			
	})
	return str
}
var json = ajax('arrive/json',data)
          	  // alert(json)
          	  	if(json){
			    	    location.href='http://sina/dashixun/day1/yii/frontend/web/index.php?r=reportcard/index';
			    	}else{
			    		$("#list").html(json);
			    	}