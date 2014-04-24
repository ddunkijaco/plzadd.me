<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
    <?php 
    $i = -2; 
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
        from     : 1,
        to       : <?php echo $i?>,
        fps      : 5,
 	    width    : 832,
        height   : 468,
        showPreLoader : true,
        playOnLoad : true,
	    loader   : {path:"./loader.png",height:40,width:40,rows:4,columns:4}
      });
    $('#movie').jsMovie("play");
    $('#play').click(function(){
        $('#movie').jsMovie('play');
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
</head>
    <body>
<center>
        <div id='movie'></div>
		<img id="prevFrame" src="img/prev.png" alt="Previous Frame" />
        <img id="play" src="img/play.png" alt="Play" />
        <img id='pause' src="img/pause.png" alt="Pause" />
		<img id='stop' src="img/stop.png" alt="Stop" />
		<img id='nextFrame' src="img/next.png" alt="Next Frame" />
</center>
    </body>
</html>