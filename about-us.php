<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Print Studio </title>
<link rel="stylesheet" href="css/components.css">
<link rel="stylesheet" href="css/responsee.css">
<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="owl-carousel/owl.theme.css">
<!-- CUSTOM STYLE -->
<link rel="stylesheet" href="css/template-style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/responsee.js"></script>

      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>

</script>

<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
<script language="JavaScript" type="text/javascript">
// JavaScript Document

function formload()
{
	document.Enquiry.name.focus();
}
function checkIfemailValid(emailStr)
{	
	var emailPat=/^(.+)@(.+)$/
	var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]"
	var validChars="\[^\\s" + specialChars + "\]"
	var quotedUser="(\"[^\"]*\")"
	var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/
	var atom=validChars + '+'
	var word="(" + atom + "|" + quotedUser + ")"
	var userPat=new RegExp("^" + word + "(\\." + word + ")*$")
	var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")
	var matchArray=emailStr.match(emailPat)
	
	function check (f)
	{
	var checked = false, e, i = 0;
	while (e = f.elements[i++]) {if (e.type == 'checkbox' && e.checked) checked = true};
	if (!checked) alert ();
	return checked;
	}
	
//	checking for name
	if (document.Enquiry.name.value == "")
	{
		alert("Please enter your name");
		document.Enquiry.name.focus();
		return false;
	}
	if (!isNaN(document.Enquiry.name.value))
	{
		alert("Please enter your name in alphabets");
		document.Enquiry.name.value = "";
		document.Enquiry.name.focus();
		return false;
	}

	
//	checking for phone
	if (document.Enquiry.phone.value == "")
	{
		alert("Please enter your phone number");
		document.Enquiry.phone.focus();
		return false;
	}
	if (isNaN(document.Enquiry.phone.value))
	{
		alert("Please enter a valid phone number");
		document.Enquiry.phone.value = "";
		document.Enquiry.phone.focus();
		return false;
	}

//	checking for email
	if(document.Enquiry.email.value == "")
	{
		alert("Please enter your email address");
		document.Enquiry.email.focus();
		return false;
	}
	if (matchArray==null) 
	{
		alert("email address seems incorrect");
		document.Enquiry.email.focus();
		return false;
	}
	var user=matchArray[1]
	var domain=matchArray[2]
	
	if (user.match(userPat)==null) 
	{
		alert("The username doesn't seem to be valid.");
		document.Enquiry.email.focus();
		return false;
	}
	
	var IPArray=domain.match(ipDomainPat)
	if (IPArray!=null) 
	{
    	for (var i=1;i<=4;i++) 
		{
			if (IPArray[i]>255) 
			{
				alert("Destination IP address is invalid!");
				document.Enquiry.email.focus();
				return false;
			}
		}
		return true;
	}
	
	var domainArray=domain.match(domainPat)
	if (domainArray==null) 
	{
		alert("The domain name doesn't seem to be valid. Please enter again.");
		document.Enquiry.email.focus();
		return false;
	}
	
	var atomPat=new RegExp(atom,"g")
	var domArr=domain.match(atomPat)
	var len=domArr.length
	if (domArr[domArr.length-1].length<2 || domArr[domArr.length-1].length>3) 
	{
		alert("The address must end in a three-letter domain, or two letter country.");
		document.Enquiry.email.focus();
		return false;
	}
	if (len<2) 
	{
		var errStr="This address is missing a hostname!  Please enter again."
		alert(errStr);
		document.Enquiry.email.focus();
		return false;
	}

//	checking for enquiry
	if (document.Enquiry.suggestions.value == "")
	{
		alert("Please write the product you are interested in and\n a brief message regarding the nature of enquiry.");
		document.Enquiry.suggestions.focus();
		return false;
	}

	return true;
}
</script>
</head>
<body class="size-1140">
<!-- TOP NAV WITH LOGO -->
<header>
  <div id="topbar">
    <div class="line">
      <div class="s-12 m-6 l-6">
        
      </div>
      <div class="s-12 m-12 l-12">
        <div class="social right"><p><a href="mailto:santhosh.r@printstudio.in" style="color:white;">santhosh.r@printstudio.in</a></p></div>
      </div>
    </div>
  </div>
  <nav>
    <div class="line">
      <div class="s-12 l-5"> 
        <div class="logo"> <a href="index.php"><img src="img/logo.png" width="173" height="67" style="max-width:173px; height:auto; background: #fff;  border-radius: 7px;"  ></a> </div>
      </div>

      <div class="top-nav s-12 l-7">
        <p class="nav-text"></p>
        <ul class="right top-ul chevron">
          <li><a href="index.php">Home</a></li>
          <li class="active-item"><a href="about-us.php">About Us</a></li>
           <!-- start here-->
          <li> <a href="services.php">Services</a></li>
          <li><a href="careers.php">Careers</a></li>        
          <li><a href="contact_us.php">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<section>
<section>
  <div id="insidepage_banner">
    <div><img src="img/About-Us-Banner.jpg"> </div>
    <h1></h1>
  </div>
</section>
<section>
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>About Us</li>
      
    </ul>
</section>

<section>
  <!-- Body of the content -->
  <div id="latest-news" style="padding: 2em 2em;">
    <div class="line"> <br/>
      <div class="margin">
        <div class="s-12 m-4 l-4">
          <div class="news-text1">
            <p><img src="img/8.jpg" alt=""></p>
          </div>
        </div>
        <div class="s-12 m-8 l-8">
          <div class="news-text">
            <div>
<h3>WHO WE ARE</h3><br>

Printstudio is one of the prominent service providers of AMC, Managed IT services, service of printers & peripherals, personal computers in the industry. Our services and elucidations are intended to support our client's environmental management systems with a strong presence in the managed printing service industry in South India. 
<br><br>
<h3>WHY US</h3><br>

Printstudio has established on 2009 and has matured by soaking trust, commitment, mutual respect and its eternal relationships. Over past years, our frontrunners have cherished excellence and best management crew by walking the talk. Conveying on their assurances time to time the entire Printstudio team believes in a hands-on, customer centric approach which resulted with a delighted client base. 
 <br><br>
<h3>WHAT WE DO</h3>
<br>
Printstudio, As a leading managed Print & IT service providers and suppliers of printer cartridges, laser printers and ink jet printer cartridges, our services are based on the latest technology and the industry standards; We continuously keep tracking on the changing know-hows and upgrade our tools from time to time in order to keep ourselves up in the competition.
</div><br>
<div>
<b>Owing to our qualitative approach in all our dealings, we are able to serve many eminent clients in the country. Some of our major clients are:</b><br>
<br>
<ol style="font-size: 13.008px;"><li><span style="font-size: medium;">Kerala Secretariat</span></li>
<li><span style="font-size: medium;">Madras Engineer Group and Center - Ulsoor, Bangalore.</span></li>
<li><span style="font-size: medium;">Aircraft System Testing Establishment (Airforce) - Iblur, Bangalore.&nbsp;</span></li>
<li><span style="font-size: medium;">Alpha Design Technologies&nbsp;</span></li>
<li><span style="font-size: medium;">Anutone Acoustics Ltd</span></li>
<li><span style="font-size: medium;">AllGo Embedded Systems Pvt. Ltd&nbsp;</span></li>
<li><span style="font-size: medium;">Pride &amp; Expert Builders and developers&nbsp;</span></li>
<li><span style="font-size: medium;">Income Tax Department&nbsp;</span></li>
<li><span style="font-size: medium;">Myshore IT Solution</span></li>
</ol>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- CONTACT -->
<div id="contact">
  <div class="line">
    <h2 class="section-title">CONTACT</h2>
    <div class="margin">
      <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align"> <img src="img/contact1.jpg" alt=""> </div>
      <div class="s-12 m-12 l-4 margin-bottom right-align">
        <h3>Print Studio India Pvt. Ltd.</h3>
        <address>
        <div id="contentleft">
<p>#-M30,Sector 11<br>
Jeevan Bheema Nagar Main Road<br>
Bangalore - 560-075<br>

<strong>Tel:</strong> +91-9591989510 / +91-9591989511<br>
<br>
<strong>E-mail:</strong><br>
<a href="mailto:sales@printstudio.in">sales@printstudio.in</a><br>
<a href="mailto:santhosh.r@printstudio.in">santhosh.r@printstudio.in</a></p>
       </address>
        <br />
        
      </div>
      <div class="s-12 m-12 l-5">
        <h3>CONTACT</h3>


<div>

<form action="mail.php" method="post" name="Enquiry" id="Enquiry" onSubmit="return checkIfemailValid(document.Enquiry.email.value)">
  <div class="variants"><span class="orange"></span> </div>
<div class="fields">
  <label>
  <input name="name" type="text" placeholder="Type Name *" id="name"  style="width:87%" />
  </label>
</div>
<br clear="all" />

<div class="variants"> <span class="orange"></span> </div>
<div class="fields">
  <label>
  <input  name="phone" type="text" placeholder="Type Phone Number *"  id="phone"  style="width:87%"/>
  </label>
</div>
<br clear="all" />

<div class="variants"><span class="orange"></span> </div>
<div class="fields">
  <label>
  <input name="email" type="text" placeholder="Type E-mail ID *" id="email" style="width:87%"  />
  </label>
</div>
<br clear="all" />
<div class="variants" >  <span class="orange"></span> </div>
<div class="fields">
  <label>
  <textarea placeholder="Type Enquiry / suggestions *"  name="suggestions" cols="23" rows="4" id="suggestions" style="width:87%"></textarea>
  </label>
</div>
<br clear="all" />

<div class="fields">
  <label>
  <input type="submit" name="Submit" value="Submit" />
  </label>
  <label>
  <input name="reset" type="reset" id="reset" value="Reset" />
  </label>
</div>
<br clear="all" />

</form>

</div>

      </div>
    </div>
  </div>
</div>
<!-- MAP -->

</section>
<!-- FOOTER -->
<footer>
  <div class="line">
  <a href="#" id="toTop" class="toTop fa fa-angle-up" style="display: block; right:30px; position:absolute; color:#fff; text-align:right;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
<symbol id="BackToTopNormal_1_" viewBox="-144.067 -146.154 288.135 292.31">
	<path fill="none" stroke="#A9A9A9" stroke-width="20" d="M0.003-136.154c73.922,0,134.064,61.075,134.064,136.154   c0,75.08-60.143,136.155-134.064,136.155c-73.928,0-134.07-61.075-134.07-136.155C-134.067-75.079-73.925-136.154,0.003-136.154   L0.003-136.154z M-77.727-29.896L0.003,47.834l77.729-77.729"/>
</symbol>
<g id="BackToTopNormal">
	
		<use xlink:href="#BackToTopNormal_1_" width="288.37" height="292.543" x="-144.067" y="-146.154" transform="matrix(1 0 0 -1 150.0674 150.8594)" overflow="visible"/>
</g>

</svg></a>
    <div class="s-12 l-6">
      <p>Copyright 2017, Print Studio India Pvt. Ltd.</p> 
    </div>
     <a style="float: right;" href="http://echopx.com/" target="_blank">EchoPx Technologies</a> 
    <span style="float: right;"><p>Website design:&nbsp;</p></span>
	</div>
</footer>

      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        }); 
      </script>     
 </body>
</html>