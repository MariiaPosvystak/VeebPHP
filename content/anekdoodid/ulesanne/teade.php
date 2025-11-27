<?php require("p3is.php"); ?>
<h2>Värske teade</h2>
<div style="text-align:center; padding:20px;">
    <?php
    echo nl2br(file_get_contents(".txt"));
    ?>
</div>
<?php require("jalus_ul.php"); ?>

