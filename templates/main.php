<!DOCTYPE html>
<html>
<head>

<title>PHP-Proxy</title>

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
	background-image: url("bg.gif");
}
#container{
	background-color: white;
	border: 3px solid black;
    border-radius: 5px 2px;
}

.blinking{
    animation:blinkingText 0.8s infinite;
}
@keyframes blinkingText{
    0%{     color: #000;    }
	20%{	color: pink;	}
    49%{    color: yellow; }
    50%{    color: wheat; }
    99%{    color:black;  }
    100%{   color: red;    }
}
#para{
	font-size:15pt;
}

#go{
	padding: 5px;
	background-color: green;
	color: white;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	padding:10px 15px;
	background-color:red;
	
	border:1px solid #818181;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>

</head>

<body>


<div id="container">

	<div style="text-align:center;">
		<h1 id="Thu" style="color:blue;">Thu Vo- Web Proxy</h1>
		<p id="para" class="blinking">Please don't use it for any illegal purposes!!!</p>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo $error_msg; ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="http://" />
			<input id="go" type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	
</div>

<div id="footer">
	Powered by <a href="//www.php-proxy.com/" target="_blank">PHP-Proxy</a> <?php echo $version; ?>
</div>


</body>
</html>