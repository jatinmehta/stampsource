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
	<link href="styles/style.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="styles/colorbox/css/colorbox.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="styles/colorbox/js/jquery.colorbox.js"></script>
	<script src="styles/bootstrap/js/bootstrap-dropdown.js"> </script>
	
	<style type="text/css">
		
	</style>
	
	
	{/literal}
</head>

<body>
	
	<div class="page-header" id="banner" style="background-color:#ccc;background:url('images/bg_header.jpg'); height:55px;">
		<br/>
		{include file=$obj->mHeader}
	</div>
	
	<div class="container">
		
		<div class="span11">
			{include file=$obj->mCell}
		</div>	
	</div>

	
</body>

</html>