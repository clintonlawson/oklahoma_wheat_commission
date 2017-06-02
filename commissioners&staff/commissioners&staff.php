<?php require_once( '../WmGma3GdZV/cms.php' );?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Oklahoma Wheat Commission</title>
<link rel="icon" type="jpg" href="images/icon1.jpg">
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="commissioners&staff.css" rel="stylesheet" type="text/css">
<link href="../mainarticles.css" rel="stylesheet" type="text/css">
<link href="../menu_styles.css" rel="stylesheet" type="text/css">
 
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="../menu_script.js"></script>
<script src="../respond.min.js"></script>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script>
function expandcommand1() {
    document.getElementById("ul li ul li").style.display = "block";
}
</script>
</head>

<body class="sc-content">

<?php include '../top_menu_buttons.php';?> 

<div class="gridContainer clearfix">
</div>

<section id="slideshowbackground">



<script type="text/javascript">

var slideimages=new Array()

function slideshowimages()

{

     for (i=0;i<slideshowimages.arguments.length;i++){

         slideimages[i]=new Image()

         slideimages[i].src=slideshowimages.arguments[i]

    }

}

</script>
<script type="text/javascript">
var slideimages=new Array()
function slideshowimages()
{
     for (i=0;i<slideshowimages.arguments.length;i++){
         slideimages[i]=new Image()
         slideimages[i].src=slideshowimages.arguments[i]
    }
}
</script>
<img src="" alt="Slideshow Image Script" name="slide" title="" id="slideshow"/>
<script type="text/javascript">
slideshowimages("images/slider001.jpg","images/slider002.jpg", "images/slider003.jpg","images/slider004.jpg","images/slider005.jpg","images/slider006.jpg")
var slideshowspeed=5000
var whichimage=0
function slideit()
{
     if (!document.images)
           return
     document.images.slide.src=slideimages[whichimage].src
     if (whichimage<slideimages.length-1)
              whichimage++
     else
              whichimage=0
      setTimeout("slideit()",slideshowspeed)
}
 slideit()
</script>
<br>
</section>

<section id="topbar">
</section>


    
<div id="iconholder">   
    <img src="images/50icon.jpg" id="icon">
</div>
<br>

<div class="gridContainer clearfix">
<cms:editable name='header' type='richtext'> 
	<p style="margin:0 auto; text-align:center; font-size:20px; color:#667;">
    Oklahoma Wheat Commission Board
    </p>
</cms:editable> 	
<br>
<hr>
<br>
<cms:editable name='summary' type='richtext'> 
	<p>
      Our Commissioner’s develop policy and programs; oversee the implementation of policy and programs; approve association expenditures; direct the funding for research, market development and public education; represent district producer interests; and promote Oklahoma wheat!   
    </p>
</cms:editable> 	
<br>
    </div>
<hr>
    <div class="gridContainer clearfix"
<br>
<br>

<cms:editable name='commissioners' type='richtext'> 
    <p style="margin:0 auto; text-align:center; font-size:20px; color:#667;">
    Commissioners:
    </p>
    
    <p>
<br>
	Chairman: Kenneth Failes; <br> Cherokee - District 1                     
<br>
<br>
	Vice Chairman: Tom Stephens; <br> Guymon - District 2 
<br>
<br>
	Secretary Treasurer: Michael Peters; <br> Okarche - District 3    
<br>
<br>
	Member: David Gammill; <br> Chattanooga - District 4    
<br>
<br>
	Member: Don Schieber; <br> Ponca City - District 5       
<br>
<br>
	Ex-Officio: Jim Reese; <br> Secretary of Agriculture,
		Oklahoma Department of Agriculture, Food & Forestry
<br>
<br>
	Ex-Officio: Dr. Thomas Coon; <br> Dean of Agriculture, Oklahoma State University
    </p>
</cms:editable>     
<br>
<hr>
<br>
<cms:editable name='staff' type='richtext'> 
	<p style="margin:0 auto; text-align:center; font-size:20px; color:#667;">
    Oklahoma Wheat Commission Staff:
    </p>
    <br>
    <p>
    
     Executive Director: Mike Schulte
<br>
<br>     
	 Business Manager: Fonda Gentry
<br>
<br>       
	 Director of Marketing and Communications: Chris Kirby
 
    
    </p>
</cms:editable>     
<br>
<hr>
<br>
	<section style="margin:0 auto; text-align:center;">
    
    	<a href="files/districts.pdf"><img src="images/districts.svg"></a>
    
    </section>
   	
<br>
<hr >
<br>
	<p id="maintext">
		<?php include_once( '../developer.php' );?>
<br>
		<p>info@okwheat.org</p>
     </p>

</div>

<br>
<?php include_once( '../facebook.php' );?>
<br>


</div>
</body>
</html>
<?php COUCH::invoke();?>