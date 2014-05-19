<html>
<head>
<link rel="stylesheet" type="text/css" href="../../pisg/layout/justgrey.css">
<style  type="text/css">
body{text-align:center}
</style>
</head>
<body>
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.lazyload.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("img.lazy").lazyload();
        $(window).resize();
    });
	$(document).ready(function() {
	$('a.comic').click(function() {
    	var file = $(this).text().toLowerCase() + '.php';
    	$.ajax({
    		url:'php/'+file,
    		cache:false,
    		success: function(response) {
    			$('#content').html(response);
    		}
			});
			return false;
		});
    });
</script>
<span class="title">
	<a class="comic" href="#">All</a> | 
	<a class="comic" href="#">Alien</a> | 
	<a class="comic" href="#">BeanieBears</a> | 
	<a class="comic" href="#">Dane</a> | 
	<a class="comic" href="#">DCStrip</a> | 
	<a class="comic" href="#">Dino</a> | 
	<a class="comic" href="#">Kittens</a> | 
	<a class="comic" href="#">Macs</a> | 
	<a class="comic" href="#">Minecraft</a> | 
	<a class="comic" href="#">Peanuts</a> | 
	<a class="comic" href="#">Pies</a> | 
	<a class="comic" href="#">Rifle</a> | 
	<a class="comic" href="#">Rock</a> | 
	<a class="comic" href="#">RollingStones</a> | 
	<a class="comic" href="#">Skimask</a> | 
	<a class="comic" href="#">Stickfig</a> | 
	<a class="comic" href="#">Tractor</a> | 
	<a class="comic" href="#">Yeah</a><br/><br/>
</span>
<div id="content">
<?php
$files = glob('../comicbot/cartoon-*.png');
rsort($files);

foreach($files as $file) {
   echo '<img class="lazy" src="a.png" data-original="' . $file . '" /><br /><br />';
}
?></div>
</body></html>
