<?php
echo "<h2>Ajafunktsionid</h2>";
echo "<div id='kuupaev'>";
echo "Täna on".date("d.m.Y")."<br>";
date_default_timezone_set("Europe/Tallinn"); //mm.dd.yyyy h:m
echo "<strong>";
echo "Tänane Tallinna kuupäev ja kellaaeg on ".
    date("d.m.Y G:i", time())."<br>";
echo "</strong>";
echo "date('d.m.Y G:i', time())";
echo "<br>";
echo "d - kuupäev 1-31";
echo "<br>";
echo "m - kuu numbrina 1-12";
echo "<br>";
echo "Y - aasta neljakohane";
echo "<br>";
echo "G - tunniFormaat 0-23";
echo "<br>";
echo "i - minutid 0-59";
echo "</div>";
?>
<div id="hooaeg">
    <h2>Väljasta vastavalt hooajale pilt
        (kevad/suvi/sügis/talv)</h2>
    <?php
    $today=new DateTime();
    echo "Täna on".$today->format('23-8-2024')."<br>";
    //hooaja punktid - сезон
    $spring=new DateTime('March 20');
    $summer=new DateTime('June 21');
    $fall=new DateTime('September 22');
    $winter=new DateTime('December 22');

    switch (true){
        //kevad
        case $today>=$spring && $today<$summer:
            echo "Kevad";
            $pildi_aadress='kontent/img/spring.jpg';
            break;
            //suvi
        case $today>=$summer && $today<$fall:
            echo "Suvi";
            $pildi_aadress='kontent/img/summer.jpg';
            break;
        case $today>=$fall && $today<$winter:
            echo "Talv";
            $pildi_aadress='kontent/img/autum.jpg';
            break;
        case $today>=$winter && $today<$spring:
            echo "Talv";
            $pildi_aadress='kontent/img/winter.jpg';

    }
    ?>
    <img src="<?=$pildi_aadress?>" alt='hooaja pilt'>
</div>
