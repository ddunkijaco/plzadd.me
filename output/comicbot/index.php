<html>
<style type="text/css">
body{text-align:center;background-color: #647684;}
</style>
<body>
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.lazyload.js" type="text/javascript"></script>
<?php
$files = glob('../comicbot/cartoon-*.png');
rsort($files);

foreach($files as $file) {
   echo '<img class="lazy" src="a.png" data-original="' . $file . '" /><br /><br />';
}
?>
 <script type="text/javascript">
    $(document).ready(function() {
        $("img.lazy").lazyload();
    });
</script> 
</body></html>
