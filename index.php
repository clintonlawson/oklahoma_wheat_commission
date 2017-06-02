<?php require_once( 'WmGma3GdZV/cms.php' );?>
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
<link href="index.css" rel="stylesheet" type="text/css">
<link href="mainarticles.css" rel="stylesheet" type="text/css">
<link href="menu_styles.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="menu_script.js"></script>
<script src="respond.min.js"></script>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script>
function expandcommand1() {
    document.getElementById("ul li ul li").style.display = "block";
}
</script>
</head>

<body>

<?php include 'top_menu_buttons.php';?> 

<div>



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
<div>
<cms:editable name='whole_page' type='richtext'>
<p style="margin:0 auto; text-align:center; font-size:20px; color:#667;">
    
    	Our Producers Determine Our Priorities!

	</p> 
</cms:editable>
</div>	
	<br>
<hr>

<br>


    <br>
    </div>

	<div id="topimages">
    
    	<figure id="topimagessize">
    		<img src="images/figure1.jpg" style="-webkit-box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75);
box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75); -webkit-appearance: none; border-radius:1px;">
    	</figure>
            
        <figure id="topimagessize">
    		<img src="images/figure3.jpg" style="-webkit-box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75);
box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75); -webkit-appearance: none; border-radius:1px;">
    	</figure>
            
        <figure id="topimagessize">
    		<img src="images/figure2.jpg" style="-webkit-box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75);
box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75); -webkit-appearance: none; border-radius:1px;">
    	</figure>
        
        <figure id="topimagessize">
    		<img src="images/figure4.jpg" style="-webkit-box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75);
box-shadow: 10px 10px 4px -5px rgba(0,0,0,0.75); -webkit-appearance: none; border-radius:1px;">
    	</figure>
        
	</div>
  




<hr>


<section id="wrappers">

<div id="rightwrapper" class="sc-content">

		<section style="height:35px; width:250px; background-color:#458B00;  padding-top:15px; font-weight:bold; margin:0 auto; text-align:center;">

			<p class="sc-content" style="margin:0 auto; text-align:center; font-size:17px; color:#F1F1F1;">
            	Announcements
			</p>

		</section>
<cms:editable name='announcements' type='richtext'>		
        <section id="rightwrapperitem">
            <hr>
            <p>
            	2015 OSU Wheat Field Days are posted on the OWC calendar.
			</p>
            <hr>
		</section>
</cms:editable>	
</div>
<br id="mobilebreak">
<br id="mobilebreak">
<div id="leftwrapper">

		<section style="height:35px; width:250px; background-color:#458B00; padding-top:15px; font-weight:bold; margin:0 auto; text-align:center;">

			<p style="margin:0 auto; text-align:center; font-size:17px; color:#F1F1F1;">
            	Resource Links
			</p>

		</section>
<cms:editable name='resource_links' type='richtext'>			
        <section id="leftwrapperitem">
        	<hr>
			<p>
            	<a href="http://www.oda.state.ok.us/mktdev/marketnews.htm">Commodity Prices</a>
			</p>
            <hr>
            <p>
            	<a href="http://www.uswheat.org/?OpenPage">U.S. Wheat Associates</a>
			</p>
            <hr>
		</section>
</cms:editable>	
</div>
</section>
<br>
<hr id="spacing001">
<div class="gridContainer clearfix">
<cms:editable name='biography' type='richtext'>
	<p>
		In 1965, the Oklahoma Wheat Resources Act established the Oklahoma Wheat Commission, and with it a framework for Oklahoma wheat producers to invest in the promotion of their product, Hard Red Winter wheat.
<br>
<br>
		The Oklahoma Wheat Commission is entirely producer-controlled. Oklahoma wheat producers elect their fellow producers to serve as commissioners in district elections. Each district has an opportunity to elect a commissioner every 5 years. Once selected, commissioners are appointed by the Governor of Oklahoma to serve a 5-year term. Five Oklahoma wheat producers make up the board of commissioners.
<br>
<br>
   		The Oklahoma Wheat Commission promotes greater utilization of wheat in domestic and international markets through research, market development and public education.

	</p>
</cms:editable>
<br>

</div>

<div class="gridContainer clearfix">

<hr>

<br>

	<p>
<cms:editable name='ok_harvest_report' type='richtext'>
  
		<a href="files/june10harvestreport.pdf">Oklahoma Harvest Report</a>
</cms:editable>
	



		


        	</p>

<cms:editable name='smallgrains_plaingrains' type='richtext'>


		<p>








		</p>
</cms:editable>

<br>

<hr>

<br>

	<p>
    "Humans have been growing and eating wheat for thousands of years, and the assertion that wheat's nutritional value has been changed is patently untrue. Eliminating wheat foods means eliminating an important source of healthful nutrients that are vital to our bodies functioning properly, like fiber, iron, B vitamins, antioxidants, and folic acid, which is especially important to women of childbearing age." 

	<br>
<br>
<a href="http://www.wheatworld.org/">NAWG (National Association of Wheat Growers)</a> | <a href="http://wheatfoods.org/">WFC (Wheat Foods Council)</a>
<br>
<br>
</p>
<hr>
<br>
	<p>
		<?php include_once( 'developer.php' );?>
<br>
		<p>info@okwheat.org</p>
     </p>

</div>

<br>
<?php include_once( 'facebook.php' );?>
<br>


</div>
</body>
</html>
<?php COUCH::invoke();?>