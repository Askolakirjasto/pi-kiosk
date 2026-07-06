<?php

$file = basename($_POST["file"]);

unlink("images/".$file);

header("Location: admin.php");