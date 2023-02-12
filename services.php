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

          <li><a href="about-us.php">About Us</a></li>

           <!-- start here-->

          <li span class="active-item"><a href="services.php">Services</a></li>

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

    <div><img src="img/services_banner.jpg"> </div>

    <h1></h1>

  </div>

</section>

<section>

    <ul class="breadcrumb">

      <li><a href="index.php">Home</a></li>

      <li>Services</li>

      

    </ul>

</section>



<section>

  <!-- Body of the content -->

  <div id="latest-news" style="padding: 2em 2em;">

    <div class="line"> <br/>

      <div class="margin">



        <div class="s-12 m-12 l-12">

          <div class="news-text">

          



<!-- OUR WORK -->

<div id="our-work-services">

<div class="line"> 



<div class="tabs" >



<div class="tab-item tab-active"> <a class="tab-label active-btn">AMC</a>

  <div class="tab-content">

    <div class="margin">

      

      <div class="s-12 m-6 l-12">

      

<div class="s-12 m-12 l-4 hide-m hide-s margin-bottom" style="float:right;"> <img src="img/amc.jpg" alt="amc" style="PADDING-LEFT: 10px"></div>   

        <h3>Annual Maintenance Contract</h3>

		<p>AMC from Printstudio offers a broad spectrum of services to ensure that systems are in excellent condition and in an exceptional routine throughout the year. Because we understand that these systems are the critical part of the organizations business, so AMC is most important to them.</p><br> 



<b>Printstudio has a skilled team for:-</b><br> 

<br>

<ul>

<li>Computer Service</li>

<li>Printers</li>

<li>UPS</li>

</ul>

<br>

<p>We service Desktops (branded & assembled), laptops and accessories at low cost using genuine quality components and spares at low costs. Being dealers for HP, samsung, epson, zenith, asus, acer, lenovo, APC, Numeric, TVSE etc, helps us to give you components at cheap rates and without delay.</p>

<br>

<b>Printstudio have best AMC choices:-</b><br>

<br>

<ul>

<li>OEM ( HP, DELL, CISCO, etc ) & Multi brand AMC’s</li>

<li>PAN India presence & Support</li>

<li>Complete / Industry AMC’s</li>

<li>Labour only Annual Service Contracts ( ASC )</li>

<li>Labour + Spare Parts to a fixed amount / ON CALL Service.</li> 

</ul>

<br>

<b>Advantages offered by us:-</b><br>

<br>

<ul>

<li>Organized precautionary Preservation</li>

<li>Cutting-edge branded outfits and technologies in order to avoid unexpected and accidental maintenances of the systems</li>

<li>Retaining spare parts stock as per industry norms.</li>

<li>Supply of spare parts as per requirements.</li>

<li>Service on call 24/7 from qualified technicians / engineers.</li>

<li>Planned protective maintenance for ensuring maximum network-up time.</li>

</ul>

<br>

        

 </div>

      

       

      

    </div>

  </div>

</div>



<div class="tab-item"> <a class="tab-label">Managed IT Services</a>

  <div class="tab-content">

    <div class="margin">

      <div class="s-12 m-6 l-12"><a class="">

        <div class="">

<div class="s-12 m-12 l-4 hide-m hide-s margin-bottom" style="float:right;"> <img src="img/managed_it_services.jpg" alt="managed_it_services" style="PADDING-LEFT: 10px"></div>

<h3>Managed IT Services</h3>



<p>Print studio’s managed IT services supports the complete area of non-core business which comprise of services like AMC, FMS, Technology staffing solutions, Network operation center and Project management services.</p>

<br>

<p>Printstudio enables you to get the most out of the consumer efficiency through a cloud of extremely refined end user services like AMC, FMS, Technology staffing solutions, Network operation center and Project management services. We stream the best-fit amenities to meet your precise essentials and please the diverse roles and necessities of your users. Moreover our amenities are centrally accomplished and strongly distributed to cover every aspect of your business.</p>

<br>

<p>Facility Management Services from Printstudio guarantees constant admission and enactment of your IT frame as per the agreed Service Level Agreements which is offered through numerous support windows. Printstudio FMS team ensures the vital manpower with remote management support to keep your facilities up round the clock without any hindrance.</p>

<br>

<p>We manage your resources across IT vendors and encode all service requests listed via mail, telephone or through the web.</p>

<br>

<b>Services available under Printstudio FMS</b><br><br>

<ul>

<li>Service desk management</li>

<li>Asset & Inventory Management</li>

<li>Vendor management</li>

<li>End User services for software services, mail management, OS, Network, laptops, Desktops, etc</li>

</ul>

<br>

<b>Benefits of Printstudio FMS</b><br><br>

<ul>

<li>Cost effective operations</li>

<li>Vindication of staffing cost</li>

<li>Service delivery aid</li>

<li>Increase uptime and service accessibility</li>

<li>Ensure core business optimization for the client.</li>

</ul>

<br>

<b>Services under Project management</b><br><br>

<ul>

<li>Large Projects roll out Pan‐India</li>

<li>Site Surveys&IT Audits</li>

<li>Process Documentation& IT Consulting</li>

<li>Infra Support Solutions</li>

<li>Asset Deployment</li>

<li>Tools and Services Automation</li>

<li>Operation and Management</li>

</ul>      



		</div>

	</div>

  </div>

</div>

  </div>





<div class="tab-item"> <a class="tab-label">Print Services</a>

  <div class="tab-content">

    <div class="margin">

      <div class="s-12 m-6 l-12"><a class="">

        <div class="">

<div class="s-12 m-12 l-4 hide-m hide-s margin-bottom" style="float:right;"> <img src="img/managed_print_services.jpg" alt="managed_print_services" style="PADDING-LEFT: 10px"></div>

<h3>Managed Print Services</h3>

<b>Managed Print & Pay Service / Printer and Photocopier Rental Services</b><br><br>

<p>Business printing outsourcing one of the latest trend in the industry to save the cost of maintenance and investment in printers. Printstudio take cares of the outsourcing of print & Pay service with many value-added services being one of them.</p>

<br>

<b>Services available under Printstudio FMS</b><br><br>

<ol>

<li>Organized safety and security for the equipment’s</li>

<li>Best solution for cost effective printing needs.</li>

<li>Enables enterprises to manage costs</li>

<li>Increase returns up to 20% </li>

</ol> 

      </div>

    </div>

  </div>

</div>

  </div>



<div class="tab-item"> <a class="tab-label">Networking</a>

  <div class="tab-content">

    <div class="margin">

      <div class="s-12 m-6 l-12"><a class="">

        <div class="">

<div class="s-12 m-12 l-4 hide-m hide-s margin-bottom" style="float:right;"> <img src="img/networking.jpg" alt="networking" style="PADDING-LEFT: 10px"></div>

<h3>Networking</h3>

<p>NOC of Printstudio is a 24/7 sheltered nursing facility, constantly inspecting your systems for budding concerns, with instant warnings and corrective involvements to elude interruption. </p><br>



<b>NOC from Printstudio includes</b><br><br>

<ol>

<li>Server & Networks – Administration & Intensive care</li>

<li>EPM – Asset management, Remote Control, Patch & Software updates</li>

<li>FCR</li>

<li>Vendor Management</li>

<li>Organized Repairs Undertakings and Backup</li>

<li>Service desk management</li>

</ol>

<br>

<p>Business environments are becoming more complex day by day, in this condition successful project management at a nearer pace constantly shows a major part.Printstudio’s SME’s with thorough knowledge across various domains and heterogeneous environment are bringing it in to a higher competent level in the market.</p>

      </div>

    </div>

  </div>

</div>

  </div>

  

  <div class="tab-item"> <a class="tab-label">Sales & Installation</a>

  <div class="tab-content">

    <div class="margin">

      <div class="s-12 m-6 l-12"><a class="">

        <div class="">

<div class="s-12 m-12 l-4 hide-m hide-s margin-bottom" style="float:right;"> <img src="img/sales_and_installation.jpg" alt="sales_and_installation" style="PADDING-LEFT: 10px"></div>

<h3>Sales & Installation of Computers and Printers</h3>



<p>CISS stands for 'Continuous Ink Supply System'. A CISS is used instead of standard inkjet cartridges. Simply explained the CISS is a self-contained unit with its own cartridges fed by tubing from a large ink reservoir which sits beside your printer. The system acts like a giant cartridge by feeding ink to the printer when required and can save up to 95% over the cost of using cartridges. CISS is a permanent solution for EPSON, and certain HP printers using cartridges with chips.</p>

      </div>

    </div>

  </div>

</div>

  </div>

  

<div class="tab-item"> <a class="tab-label">Technical Support</a>

  <div class="tab-content">

    <div class="margin">

      <div class="s-12 m-6 l-12"><a class="">

        <div class="">

<div class="s-12 m-12 l-4 hide-m hide-s margin-bottom" style="float:right;"> <img src="img/technical_support.jpg" alt="technical_support" style="PADDING-LEFT: 10px"></div>

<h3>Qualitative Technical Support</h3>



<p>We always give prime importance to the quality of services we render. To serve clients in a better manner, we also offer technical support to assist our valued clients. Our experts are well experienced in this field and offer their services with full dedication. In addition, we also have a customer care department to look after the queries or problems faced by our clients regarding the use of the equipment. We are facilitated with modern communication systems to offer premium after sales services.</p>



      </div>

    </div>

  </div>

</div>

  </div>

  

<div class="tab-item"> <a class="tab-label">Toner Cartridges</a>

  <div class="tab-content">

    <div class="margin">

      <div class="s-12 m-6 l-12"><a class="">

        <div class="">

<div class="s-12 m-12 l-4 hide-m hide-s margin-bottom" style="float:right;"> <img src="img/toner_cartridges.jpg" alt="toner_cartridges" style="PADDING-LEFT: 10px"></div>

<h3>Toner Cartridges</h3>

<b>Printer Cartridge Refilling and Re-Manufacturing</b><br><br>

<p>Printstudio is one of the trustable supplier for printer cartridge and refiles, we have all brands of equipment parts which is required for a printer. Cartridge refilling means inserting new ink, laser powder or new ribbon (depending on the printer make) of the cartridge by keeping outer body as same.</p>

<br>

<p>Printstudio is an expert in remanufacturing of toner cartridges for helping to improve the quality and yield of a cartridge from the remanufactured cartridge to the fresh OEM cartridge. We also do the partial refurbishing of toner cartridges in the time of replacing only the defective toner parts for cost effective printing and offering more value of money to the customers. Any components changed so will be provided a warranty for next two cycles of the same or 90 days whichever is earlier.</p><br>



<b>Printstudio recommends recycling of your printer cartridge for the following reasons:</b><br><br>

<ol>

<li>Cost cutting without compromising on quality:-</li><p>Refill & Re-Use your printer cartridges - at Printstudio stores our technician refills your printer cartridges and offers you up to 75% savings as compared to buying a new one.Printstudio guarantees the quality and quantity of the refilled cartridge with respect to the ink/toner refilled.</p><br>

<li>Saving cost and the Environmental Values:-</li>

<ol>

<li><p>The size of one Inkjet Cartridge is 21 sq cm & Laser TonerCartridge is 480.sq cm.</p></li>

<li><p>If you place all the cartridges, side by side, collected for 10 years they will spread across 2,17,676 sq km.</p></li>

<li><p>Approx. 3/4 gallon of fossil fuel is burnt by manufacturing 1 Laser cartridge.</p></li>

<li><p>In 10 years we shall be burning about 97 million gallons of precious non-renewable fossil fuels.</p></li>

<li><p>1 cartridge takes about 450 to 1000 years to decompose.</p></li>

</ol>

</ol>

<br>

<b>Compatible Toner Cartridges</b><br>

<p>Business environments are becoming more complex day by day, in this condition successful project management at a nearer pace constantly shows a major part.Printstudio’s SME’s with thorough knowledge across various domains and heterogeneous environment are bringing it in to a higher competent level in the market.</p>

      </div>

    </div>

  </div>

</div>

  </div>    

  

</div>

  </div>

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

	

	<script src="js/tm-scripts.js"></script>

    

 </body>

</html>