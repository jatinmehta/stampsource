{*smarty*}
{config_load file="site.conf"}
{load_presentation_object filename="base" assign="obj"}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{#site_title#}</title>
	{literal}
	<script src="styles/bootstrap/js/jquery.js"></script>
	
	<link href="styles/bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css" />
	<link href="styles/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="styles/bootstrap/css/docs.css" rel="stylesheet" type="text/css" />
	<link href="styles/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="styles/navigation/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="styles/colorbox/css/colorbox.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="styles/colorbox/js/jquery.colorbox.js"></script>
	<script src="styles/bootstrap/js/bootstrap-dropdown.js"> </script>
	
	<style type="text/css">
		
	</style>
	
	<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".group1").colorbox({rel:'group1', transition:"fade"});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"fade"});
				$(".group4").colorbox({rel:'group4', transition:"fade"});
				$(".group5").colorbox({rel:'group5', transition:"fade"});
				$(".group6").colorbox({rel:'group6', transition:"fade"});
				$(".group7").colorbox({rel:'group7', transition:"fade"});
				$(".group8").colorbox({rel:'group8', transition:"fade"});
				$(".group9").colorbox({rel:'group9', transition:"fade"});
				$(".group10").colorbox({rel:'group10', transition:"fade"});
				$(".group11").colorbox({rel:'group11', transition:"fade"});
				$(".group12").colorbox({rel:'group12', transition:"fade"});
				$(".group13").colorbox({rel:'group13', transition:"fade"});
				$(".group14").colorbox({rel:'group14', transition:"fade"});
				$(".group15").colorbox({rel:'group15', transition:"fade"});
				$(".group16").colorbox({rel:'group16', transition:"fade"});
				$(".group17").colorbox({rel:'group17', transition:"fade"});
				$(".group18").colorbox({rel:'group18', transition:"fade"});
				$(".group19").colorbox({rel:'group19', transition:"fade"});
				$(".group20").colorbox({rel:'group20', transition:"fade"});

				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
	{/literal}
</head>

<body>
	
	<div class="page-header" id="banner" style="background-color:#AFA1BA; ">
		{include file=$obj->mHeader}
	</div>
	
	<div class="container">
		
		<div class="span10">
			{include file=$obj->mCell}
		</div>	
	</div>

	
</body>

</html>