'use strict';

// 这里只创建模块，不要写逻辑，所依赖的模块可以根据需要裁减
angular.module('com.ngnice.app', [
  'ngAnimate',  // 动画效果
  'ipCookie',  // 在程序中访问Cookie
  'ngSanitize', // 对html内容进行净化，以防范xss等前端攻击
  'ngResource', // 访问REST对象
  'ui.router',  // 第三方的路由访问器
  'ui.bootstrap'// 第三方界面库

]);
angular.module('com.ngnice.app').config(function($provide){
	//console.log(greetingProvider.setName(' miao'));
	// $provide.decorator("greeting",function($delegate){
	// 	console.log($delegate);
	// 	return $delegate;
	// })
})

angular.module('com.ngnice.app').controller("someCtrl", function($scope){
	
	//$scope.message = greeting.msg;
});




