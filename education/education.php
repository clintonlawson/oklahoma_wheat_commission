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
<link href="education.css" rel="stylesheet" type="text/css">
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
    Educating the Public
    </p>
</cms:editable> 	
<br>
<hr>
<br>
<cms:editable name='paragraphs' type='richtext'> 
	<p>
    
    The Oklahoma Wheat Commission works to educate the public about wheat production and industry operations through educational programs such as the <a href="files/jrws.pdf">Junior Wheat Show</a>, the "Best of Wheat" (formerly Wheatheart) Bread Baking Contest (see Recipe Page) and various Oklahoma Farm Shows across the State.
<br>
<br>
    Just released: <a href="files/jrws.pdf">2015 Junior Wheat Show Rules</a>
 
   The Commission also supports the development and utilization of materials produced by the <a href="http://wheatfoods.org/">Wheat Foods Council</a> emphasizing the importance of wheat in a balanced, healthy diet.

  <a href="http://oklahoma4h.okstate.edu/aitc/">Oklahoma Ag in the Classroom</a>: The purpose of Oklahoma Ag in the Classroom is to help familiarize Oklahoma school children with Oklahoma's number one industry--the food and fiber industry.
</p>
<br>
</div>
<hr>
<div class="gridContainer clearfix">
<br>
<p>
  <a href="files/wheattrivia.pdf">Wheat Trivia</a>: This easy download is a simply way to teach anyone about wheat. Simply print it off and tantalize trivia loving minds with a few wheat facts!

Did you know?
<br>
<br>
■ Wheat is grown in 42 states in the United States?
<br>
<br>
■ U.S. farmers grow nearly 2.4 billion bushels of wheat on 63 million acres of land? (Source: USDA)
<br>
<br>
■ A one and a half pound loaf of commercial wheat bread contains 24 slices?
<br>
<br>
■ Wheat foods are considered a reliable source of iron, which transports oxygen to every cell in your body?
<br>
<br>
■ It is reported that as early as 6,700 B.C. man ground grains with rocks for nourishment?
<br>
<br>
■ That approximately three-quarters of all U.S. grain products are made from wheat flour? (Source: USDA)
<br>
<br>
■ The only way to have sliced bread before 1930 was to do it by hand?
<br>
<br>
■ That one acre of land, or one football field, can grow enough wheat to make bread for your family for almost 12 years?
</p>
<br>
<br>
<hr>
<br>
<p>
The Power of Wheat and Whole Grains...
<br>
<br>
   Whole grains have been proven to lower cholesterol and protect the heart. So, celebrate with the OWC by using our <a href="files/wholebread.pdf">Whole Wheat Bread Recipe</a> to add whole grains and fiber as a step to better heart health.
<br>
<br>
   Team up with the <a href="../index.html">Oklahoma Wheat Commission</a> and the <a href="http://wheatfoods.org/">Wheat Foods Council</a> to promote the benefits of whole grains in a balanced diet. Open and download this <a href="files/nutrition.pdf">Nutritional Fact Sheet</a> on the benefits of whole grains.
    
    </p>
</cms:editable> 	
<br>
<hr>
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