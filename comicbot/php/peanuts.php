<?php
$files = glob('../../comicbot/cartoon-*peanuts.png');
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
