<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP tunnitööd</title>
    <link rel="stylesheet" href="style/style.css"></link
</head>
<body>
<header>
    <h1>PHP tunnitööd</h1>
</header>

<?php
//navigeeterimismenüü
include("nav.php");
?>
<section>
    <?php
    if(isset($_GET["leht"])){
        include("kontent/".$_GET["leht"]);
    } else {
        echo "Tere tulemast!";
    }
    ?>
</section>
<?php
    echo "David Lennuk &copy; ";
    echo date("Y");
?>
</body>
</html>