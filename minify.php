<body style="font-family: monospace;">
<?php
	include_once("minifier.php");
	
	/* FILES ARRAYs
	 * Keys as input, Values as output */ 
	
	$js = array(
	//	"js/application.js" 	=> "js/application.min.js",
		"public/js/flights.js" 			=> "public/js/flights.min.js"
	);
	
	$css = array(
		//"css/application.css"	=> "css/application.min.css",
		"public/css/template.css"			=> "public/css/template.min.css"
	);
	
	minifyJS($js);
	minifyCSS($css);
?>
</body>
