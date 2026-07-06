<?php

$dir = "images/";
$files = array_filter(scandir($dir), function($file) use ($dir) {
    return preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file);
});

?>

<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Aulanäytön hallinta</title>

<style>

body{
    font-family:Arial;
    width:800px;
    margin:auto;
}

img{
    width:120px;
    border:1px solid #ccc;
}

.card{
    display:flex;
    align-items:center;
    margin:15px 0;
    gap:20px;
}

button{
    padding:8px 16px;
}

</style>

</head>

<body>

<h1>Aulanäytön hallinta</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">

<input type="file" name="images[]" multiple>

<button>Lataa kuvat</button>

</form>

<hr>

<?php foreach($files as $file){ ?>

<div class="card">

<img src="images/<?php echo $file; ?>">

<div>

<b><?php echo $file; ?></b>

<br><br>

<form action="delete.php" method="post">

<input type="hidden" name="file" value="<?php echo $file; ?>">

<button>Poista</button>

</form>

</div>

</div>

<?php } ?>

</body>

</html>h