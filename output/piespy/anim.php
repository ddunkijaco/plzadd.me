<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
    <?php 
    $i = -3; 
    $dir = 'banana/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
?>
    <script language="javascript" type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.jsmovie.1.4.1.min.js" ></script>
    <script language="javascript" type="text/javascript">
	$(document).ready(function(){
    $('#movie').jsMovie({
		sequence : "banana/banana-########.png",
		folder   : "./", 
		from     : <?php echo $i - 100?>,
		to       : <?php echo $i?>,
		fps      : 5,
		width    : 832,
		height   : 832,
		showPreLoader : true,
		playOnLoad : false,
		loader   : {path:"./loader.png",height:40,width:40,rows:4,columns:4}
      });
    $('#movie').jsMovie("play",<?php echo $i - 100?>,<?php echo $i?>,false,false);
    $('#play').click(function(){
        $('#movie').jsMovie('play',<?php echo $i - 100?>,<?php echo $i?>,false,false);
    });

	$('#stop').click(function(){
      	$('#movie').jsMovie('stop');
    	});

	$('#pause').click(function(){
        $('#movie').jsMovie('pause');
    });
	
	$('#nextFrame').click(function(){
        $('#movie').jsMovie('nextFrame');
    });
	
	$('#prevFrame').click(function(){
        $('#movie').jsMovie('previousFrame');
    });
});
	</script>
	<style  type="text/css">
	body
{background-color: #647684;}
	</style>
</head>
    <body>
        <center><div id='movie'></div>
	<img id="prevFrame" src="img/prev.png" alt="Previous Frame" />
        <img id="play" src="img/play.png" alt="Play" />
        <img id='pause' src="img/pause.png" alt="Pause" />
	<img id='stop' src="img/stop.png" alt="Stop" />
	<img id='nextFrame' src="img/next.png" alt="Next Frame" />
	</center>
    </body>
</html>