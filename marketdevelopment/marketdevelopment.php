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
<link href="marketdevelopment.css" rel="stylesheet" type="text/css">
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
    International & Domestic Marketing
    </p>
</cms:editable> 	
<br>
<hr>

<br>
<cms:editable name='summary' type='richtext'> 
	<p>
    
       The Oklahoma Wheat Commission is committed to ensuring the competitiveness of Oklahoma wheat in national and international markets. The Commission invests producer contributions in market development through the Wheat Foods Council and U.S. Wheat Associates.
    
    </p>
</cms:editable> 	
    <br>
    </div>
    <hr>
    <div class="gridContainer clearfix">
    <br>
    <br>
    <section style="margin:0 auto; text-align:center;">
    <a href="http://www.uswheat.org/?OpenPage"><img src="images/uswa.jpg" style="height:90px; width:300px; border-style:solid; border-width:2px; border-radius:1px; border-color:#458B00; margin:0 auto; text-align:center; float:none; margin-bottom:20px; display:inline-block;"></a>
    </section>
    <p>
    U.S. Wheat Associates is the export development organization representing the U.S. wheat industry. USW promotes global exports by demonstrating the consistent quality, reliability and availability of U.S. wheat. With the support of 19 state wheat commissions and matching contributions from the USDA Foreign Agricultural Service, USW conducts market analysis, trade servicing, technical assistance and consumer promotion in 130 countries.
    </p>
    
    <br>
    <hr>
    <br>

    <br>
    <section style="margin:0 auto; text-align:center;">
    <a href="http://wheatfoods.org/"><img src="images/wfc.jpg" style="height:125px; width:200px; border-style:solid; border-width:2px; border-radius:1px; border-color:#458B00; margin:0 auto; text-align:center; float:none; margin-bottom:20px; display:inline-block;"></a>
    </section>
    
    <p>
    
    The Wheat Foods Council uses various national promotions to raise consumer awareness about the important role wheat-based foods play in a balanced, healthy diet. Producer contributions are matched dollar for dollar by milling and baking industries in support of the WFC. 
    
    </p>
    
    
    
    <hr>
    
    
    
    
    <br>
    
    
	<p>
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