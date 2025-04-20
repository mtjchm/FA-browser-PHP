<div class="row">
<?php
    require_once 'func/get_src.php';
    
    foreach(explode(" ", $_GET["links"]) as $gay => $gayest) {
        $src = get_src_x3($gayest);
        echo "<a href='$src'><img src='$src'></a>";
    }
    ?>
</div>