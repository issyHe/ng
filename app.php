<?php
if(empty($_SERVER["angular-demo-token"]) || $token !== 'miaomiao'){
	header('HTTP/1.1 401');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		ul,li {
			list-style: none;
		}
	</style>
</head>
<body ng-app="com.ngnice.app">
<div ng-controller="someCtrl">{{message}}</div>
<app-layout></app-layout>
<link rel="stylesheet" type="text/css" href="js/bootstrap.css">
<script type="text/javascript" src="js/underscore.min.js"></script>
<script type="text/javascript" src="js/angular.js"></script>
<script type="text/javascript" src="js/angular-animate.js"></script>
<script type="text/javascript" src="js/angular-resource.js"></script>
<script type="text/javascript" src="js/angular-cookie.js"></script>
<script type="text/javascript" src="js/angular-sanitize.js"></script>
<script type="text/javascript" src="js/angular-ui-router.js"></script>
<script type="text/javascript" src="js/ui-bootstrap-tpls.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="configs/config.js"></script>
<script type="text/javascript" src="services/sao/Reader.js"></script>
<script type="text/javascript" src="services/ui/ui.js"></script>
<script type="text/javascript" src="configs/router.js"></script>
<script type="text/javascript" src="controllers/home/index.js"></script>
<script type="text/javascript" src="controllers/reader/create.js"></script>
<script type="text/javascript" src="components/layout/_layout.js"></script>
<script type="text/javascript" src="components/layout/footer.js"></script>
<script type="text/javascript" src="constants/Errors.js"></script>
<script type="text/javascript" src="decorators/fieldError.js"></script>
<script type="text/javascript" src="filters/error.js"></script>
<script type="text/javascript" src="decorators/assertSameAs.js"></script>
<script type="text/javascript" src="decorators/captcha.js"></script>
<script type="text/javascript" src="controllers/thread/list.js"></script>
<script type="text/javascript" src="filters/page.js"></script>
<script type="text/javascript" src="decorators/pagination.js"></script>
<script type="text/javascript" src="services/ui/Pagination.js"></script>
<script type="text/javascript" src="services/interceptors/AuthHandler.js"></script>
<script type="text/javascript" src="services/sao/Login.js"></script>
<script type="text/javascript" src="controllers/reader/create.js"></script>
<script type="text/javascript" src="controllers/reader/list.js"></script>
<script type="text/javascript" src="services/sao/Reader.js"></script>
<script type="text/javascript" src="controllers/thread/tree.js"></script>
<script type="text/javascript" src="controllers/thread/show.js"></script>
<script type="text/javascript" src="services/ui/tree.js"></script>
<script type="text/javascript" src="decorators/recurse/template.js"></script>
<script type="text/javascript" src="decorators\recurse\recurse.js"></script>
<script type="text/javascript" src="decorators\checkIndeterminate.js"></script>
</body>
</html>