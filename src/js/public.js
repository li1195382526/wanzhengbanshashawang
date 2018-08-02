//根据给定的id查找页面元素
function $id(id){
	return document.getElementById(id);
}
//获取任意区间值
function rand(min,max){
    return  Math.round( Math.random()*(max-min) + min )
}

//定义一个函数 功能获取一个随机的颜色值
function getColor(){
	var str = "0123456789abcdef";// 0--15
	//从str中随机获取六位 拼成一个颜色
	var color = "#";
	for( var i = 0 ; i < 6 ; i++ ){
		//德大str中 0--15随机下标
		var index = rand(0,15);
		color += str.charAt(index);
	}
	return color;
}