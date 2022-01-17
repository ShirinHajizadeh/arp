<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Arya Rayaneh Parsian</title>
<link href="photo/favicon.ico" rel="shortcut icon" type="image/x-icon" />	
<link href="account-form-English.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
var i=0;
function picchangetitle(){
	var arr=new Array("photo/title-2.jpg","photo/title-3.jpg","photo/title-4.jpg","photo/title-5.jpg","photo/title-6.jpg");
    var pic=document.getElementsByName("img-title").item(0);
	pic.src=arr[i];
	i++;
	if(i>arr.length-1){i=0;}
}
	 setInterval("picchangetitle()",1800);
	
	function picchangeleft2(){
	var arr=new Array("photo/product-2.png","photo/product-3.png","photo/product-4.png","photo/product-5.png","photo/product-6.png");
    var pic=document.getElementsByName("img-left2").item(0);
	pic.src=arr[i];
	i++;
	if(i>arr.length-1){i=0;}
}
	 setInterval("picchangeleft2()",1800);
	
	function date(){
    var d = new Date();
    document.getElementById("menutime").innerHTML = d;
	setInterval("date()",1000);	
}
	
</script>
</head>

<body onLoad="date()">
	<!main class>
	<div id="main">
		
	<!title class>	
		<div id="title">
		<div id="img-title"></div>	
		 <button id="button2-title" onClick="location.href='home-page-Persian.html'">Persian</button>	
		</div>
		
		<!menu class>
		<div id="menu">
		<div id="menutime" class="blinkingtext"></div>	
		<div id="menubar">	
		<ul>
		<li><a href="home-page-English.html">Home</a></li>
		<li class="dropdown">
			<a href="#">Products</a> 
			<div class="dropdown-content">
				<a href="product-Cisco-English.html" ><img src="photo/pro-cisco.png" alt="Cisco" class="img-top"></a>
				<a href=""><img src="photo/pro-Nexans.png" alt="Nexans" class="img-top"></a>
				<a href="product-HPE-English.html"><img src="photo/pro-HPE.png" alt="HPE" class="img-top"></a>
				<a href="#"><img src="photo/pro-Extreme.png" alt="Extreme" class="img-top"></a>
		        <a href="product-Juniper-English.html"><img src="photo/pro-Juniper.png" alt="Juniper" class="img-top"></a>
		        <a href="#"><img src="photo/pro_fortinet.png" alt="Fortinet" class="img-top"></a>
			</div> 
		</li>
		<li class="dropdown">
			<a href="about us-English.html">About us</a> 
		</li>
		<li><a href="contact us-English.html" target="_self">Contact us</a></li>
		</ul>
		</div>	
		</div>
		
		<!header class>
		<div id="header">
		  	<img src="photo/title-1.jpg" alt="Cisco" name="img-title">
		</div>
		<!right class>
		<div id="right">
		<h2>Sign up</h2>	
		<div id="right-left">
		<p>First name:</p>
		<p>Last name:</p>
		<p>National id:</p>
		<p>Birth date:</p>
		<p>Gender:</p>
		<p>Password:</p>
		<p>Phone number:</p>
		<p>E-mail:</p>
		</div>
	<div id="right-right">
		<input type="text" size="20"  maxlength="10" >
		<br>
		<input type="text" size="20" width="10px" height="15px" maxlength="10px" dir="rtl">
		<br>
		<input type="text" size="20" width="10px" height="15px" maxlength="10" >
		<br>
		<input type="date">
		<br>
		<input type="radio" name="gender">&nbsp;Famle&nbsp;&nbsp;
		<input type="radio" name="gender">&nbsp;Male
		<br>
		<input type="password" size="25" maxlength="12">
        <br>
		<input type="text" size="25" width="10px" height="15px" maxlength="11" >
		<br>
		<input type="email" size="25">
		<br><br>
		<input type="submit" value="Submit" class="button">&nbsp;&nbsp;
		<input type="reset" value="Reset" class="button">
		</div>
		</div>
		
		<!left class>
		<div id="left">
		   <div id="left1">
			   <p class="plink">Related Links:</p>
	            <a href="https://www.cisco.com/" target="_blank" class="a-left1">www.cisco.com</a>
		         <a href="https://www.nexans.com/" target="_blank" class="a-left1">www.nexans.com</a>
		         <a href="https://www.hpe.com/" target="_blank" class="a-left1">www.hpe.com</a>
		         <a href="https://www.extremenetworks.com/" target="_blank" class="a-left1">www.extremenetworks.com</a>
			     <a href="https://www.juniper.net" target="_blank" class="a-left1">www.juniper.net</a>
			     <a href="https://www.fortinet.com/" target="_blank" class="a-left1">www.fortinet.com</a>
			</div>
		   <div id="left2">
			   <p class="plink">Products:</p>
	             <div id="left2-2">
				<img src="photo/product-1.png" alt="Cisco" name="img-left2" class="img-left2-2">	 
	           </div>
			</div>
		   <div id="left3">
			   <body>
<?php
session_start();

	 create_image();
    display();
    function display()
    {
?>
            <div style="text-align:center;">
           
            <div class="img">
                <img src="captcha_image.png">
            </div>
            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                
            </form>
            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"/ >
                
                <input type="hidden" name="flag" value="1"/>
                
            </form>
            
            </div>  
<?php
	 }
    $str3="jkkkl";
    function  create_image()
    {
        $image = imagecreatetruecolor(200, 50);       
        $background_color = imagecolorallocate($image,255,198,226);  
        imagefilledrectangle($image,0,0,200,50,$background_color); 
 
        $line_color = imagecolorallocate($image, 64,64,64);
        $number_of_lines=rand(3,5);
 
        for($i=0;$i<$number_of_lines;$i++)
        {
            imageline($image,0,rand()%50,250,rand()%50,$line_color);
        }
 
        $pixel = imagecolorallocate($image, 0,0,255);
        for($i=0;$i<500;$i++)
        {
            imagesetpixel($image,rand()%200,rand()%50,$pixel);
        }  
 
        $allowed_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$str2=str_shuffle($allowed_letters);
		$str3=substr($str2,0,6);
		//echo "<div class='word'>$str3</div>";
		$word="  ".$str3[0]."  ".$str3[1]."  ".$str3[2]."  ".$str3[3]."  ".$str3[4]."  ".$str3[5];
        $text_color = imagecolorallocate($image, 0,0,0);
        
        for ($i = 0; $i<count($str3);$i++)
        {
            imagestring($image, 5,  5+($i*30), 20,$word, $text_color); 
			
        }
 
        //$_SESSION['captcha_string'] = $str3;
 
        imagepng($image, "captcha_image.png");
		$_SESSION['code']=$str3;
		//return $str3;
    }
	?>
			   <p class="plink">Sign in:</p><br>
			   <div id="left3-3">
			   <form method="post" action="captchaimagecode.php">	   
			   <lable>User name</lable><br>
	           <input type="text" size="20"  maxlength="10" placeholder="National id"><br>
	           <lable>Password</lable><br>
	           <input type="password" size="20"  maxlength="12" ><br>
			   <lable>security code</lable><br>	   
			   <input type="text" name="user_captcha"><br>
	           <input type="submit" value="Login" id="button-left3">
			   </form>	   
			  </div>   
			 </div>
		</div>
		
		<!footer class>
		<div id="footer">
			<img src="photo/logo-footer.png" alt="آریا رایانه پارسیان">
			<p>Copyright © ARP Co. All Rights Reserved.</p></div>
		</div>
</body>
</html>
