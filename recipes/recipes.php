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
<link href="recipes.css" rel="stylesheet" type="text/css">
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

<?php include '../top_menu_buttons.php';?> 

<body class="sc-content">

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
    Happy Baking
    </p>
</cms:editable>	
<br>
<hr>
<br>
<cms:editable name='page' type='richtext'>
	<p>
    
      Each year Oklahoma's wheat producers and the Oklahoma Wheat Commission sponsor the Oklahoma "Best of Wheat" (formerly Wheatheart) Bread Baking Contest held at the Oklahoma State Fair. From this event's more than 100 entries from counties all across the state we have collected a great sampling of Oklahoma's Best Breads.
</cms:editable>
	  <br>
<br>
<cms:editable name='best_of_wheat' type='richtext'>
   2015 "Best of Wheat" Bread Baking: <a href="files/countyrules.pdf">County Contest Rules</a>
<br>  
   2015 "Best of Wheat" Bread Baking: <a href="files/staterules.pdf">State Contest Rules</a>
</p>
</cms:editable>
	
    <br>
    <hr>
    <br>
    
    <p>
<cms:editable name='cookbook_text' type='richtext'>    
    	Announcing the newest edition of the Oklahoma’s Best Breads cookbook! To request the collection of winners from the 2014 State Best of Wheat Contest, contact the Oklahoma Wheat Commission 			        office at (405) 608-4350, e-mail us at info@okwheat.org, or for an electronic version: 
</cms:editable>        
		<br>
        <br>
<cms:editable name='best_of_wheat_image' type='richtext'> 	
        <p></p>
</cms:editable> 	
        <br>
        <br>
<cms:editable name='text' type='richtext'>		
        We hope you will use these recipes in your own kitchen as you savor the aroma and discover the fun of baking fresh bread

  New Cookbook done in partnership with the Wheat Foods Council.  Hope you will enjoy the 9 new yummy recipes!
</cms:editable>  
  <br>
  <br>
<cms:editable name='recipe_cookbook' type='richtext'>  
    <p></p>
</cms:editable>	
    </p>
    <br>
    <hr>
    <br>
    
    <p>
<cms:editable name='marks_bread' type='richtext'>    
    	  Additionally, on this page you will find Mark's Bread recipe, which is the dough used for the cinnamon rolls and bread that the OWC has become famous for. <a href="files/wholebread.pdf">OWC Bread & Cinnamon Roll Recipe - smaller quantity.</a>
          <br>
          <br>
          
          Mark's Whole-Grain Wheat Bread
<br>
<br>
6 lbs. White flour
<br>
5 lbs. Whole-wheat flour
<br>
3 c. brown sugar
<br>
5 c. powdered milk
<br>
4 Tbsp. salt
<br>
3 Tbsp. yeast
<br>
Mix dry ingredients together in mixer.
<br>
In a separate bowl mix together the following:
<br>
5 c. warm water
<br>
½ c. brown sugar
<br>
½ c. yeast
<br>
Let stand until yeast begins to work. Add to dry ingredients in mixer. Mix about 30 seconds. Add the following:
<br>
2 c. oil
<br>
¾ c. molasses
<br>
5 c. warm water
<br>
Adjust water to achieve dough consistency. Allow dough to double in size and punch down.
Divide dough into 1½ lb. loaves. Bake at 330 for 26 min. 
Yields 14 loaves
</cms:editable>    
    </p>
<br>
</div>
<hr>
<br>
<div class="gridContainer clearfix">

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