<?php
require_once 'func/get_src.php';
$i = 0;
if (isset($_GET["index"])) {
    $i = $_GET["index"];
}
if (! isset($_GET["links"]))
    exit();

    $linkzzzx3 = explode(" ", $_GET["links"]);
    $src = get_src_x3($linkzzzx3[$i]);
?>
<div style="height: 10vh"> </div> <!-- margin like a pro B) -->
<div
	style="display: flex; height: 75vh; justify-content: space-between;">
	<?php

if ($i > 0) {
    printf("
	<button>
		<a
			href='index.php?links=%s&singleView=1&index=%d'><</a>
	</button>
	", $_GET['links'], $i - 1);
} else {
    echo "<div style='min-width: 7.5rem;'> </div>";
}
?>
	<a href="<?= $src ?>"> <img style="max-height: 75vh" src="<?= $src ?>">
	</a>
	<?php
if ($i < count($linkzzzx3) - 1) {
    printf("
	<button>
		<a
			href='index.php?links=%s&singleView=1&index=%d'>></a>
	</button>
	", $_GET['links'], $i + 1);
} else {
    echo "<div style='min-width: 7.5rem;'> </div>";
}
?>
</div>