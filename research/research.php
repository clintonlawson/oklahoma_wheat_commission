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
<link href="research.css" rel="stylesheet" type="text/css">
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
    Supporting Research
    </p>
</cms:editable>
<br>
<hr>
<br>
<cms:editable name='text' type='richtext'>
<p>Twenty percent of all producer funds collected by the Oklahoma Wheat Commission are allocated to the Oklahoma Wheat Research Foundation, as required by law. In addition, the Commission supports numerous wheat research projects conducted by the Oklahoma State University Division of Agricultural Sciences and Natural Resources, all aimed at ensuring the future of Oklahoma wheat.  
</p>
</cms:editable>
<br>
<br>
<cms:editable name='researchareas' type='richtext'>
<p>
Specific areas of research include: Wheat breeding and genetics; end-use quality; production techniques; non-food uses for wheat; nutrition education of consumers; and utilization of wheat flours.
<br>
<br>
FY 2015-2016 Oklahoma Wheat Research Foundation Grants:
</p>
</cms:editable>	
<br>
<hr>
<br>
<cms:editable name='projects' type='richtext'>
<p>
2015-2016  Wheat Research Funded Projects

2015-2016  Small Grain Variety Testing Funded Projects

2015-2016  Weed Control Research in Oklahoma Winter Wheat

<br>
<br>

image here

<br>
<br>

Oklahoma Wheat Variety Trial Results 2014-2015

 </p>
</cms:editable>	
 <br>
 <hr>
 <br>
<cms:editable name='plainsgrains' type='richtext'> 
 <p>
 
 image
 
 <br>
 <br>
 
 Plains Grains Inc. (PGI) is designed to assist all levels of the wheat supply chain, both domestically and internationally, by providing wheat quality information to industry members, including everyone from the producer to the baker.

 </p>

</cms:editable>	
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