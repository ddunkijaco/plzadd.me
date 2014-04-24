<html>
<style type="text/css">
body{text-align:center;background-color: #647684;}
a
{
    text-decoration: none;
}
a:link
{
    color: #bdcddd;
}
a:visited
{
    color: #bdcddd;
}
a:hover
{
    color: #bdcddd;
    text-decoration: underline;
    font-weight: none;
}
a.background
{
    color: none;
    text-decoration: none;
}
a.background:link
{
    color: #314151;
}
a.background:visited
{
    color: #415161;
}
a.background:hover
{
    color: #003c60;
    text-decoration: underline;
}
</style>
<body>
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.lazyload.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("img.lazy").lazyload();
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
<a class="comic" href="#">Yeah</a> | 
<div id="content">
<?php
$files = glob('../comicbot/cartoon-*.png');
rsort($files);

foreach($files as $file) {
   echo '<img class="lazy" src="a.png" data-original="' . $file . '" /><br /><br />';
}
?></div>
</body></html>
