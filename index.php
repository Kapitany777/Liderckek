<?php
include_once "include/inc_page.php";
?>

<!DOCTYPE html>

<html lang="hu">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="felulet/liderckek.css" type="text/css">
    <title>Lidérckék - Főoldal</title>
</head>

<body>

<div id="container">

    <?php
    Menu();
    ?>

    <div id="txt">
        <h1>Főoldal</h1>

        <p>
            Üdvözlet a Lidérckék képregénysorozat oldalán!
        </p>

        <p>
            A Lidérckék a <a href="https://www.lidercfeny.hu/" target="_blank">Lidércfény Online Kulturális Magazin</a>
            gondozásában megjelenő képregénysorozat. Ötlete egy 2006-os év végi számítástechnikai klubgyűlésen vetődött fel,
            s néhány hét múlva meg is valósult.
        </p>

        <p>
            A Lidérckék célja az, hogy valamelyest vicces, humoros formában olyan mondanivalót közvetítsen, amely elgondolkodtat.
            Ezek vagy saját magunk által kitalált rövid szösszenetek, vagy nagy gondolkodók idézeteit feldolgozó képsorok, melyek
            általában nem kapcsolódnak közvetlenül egymáshoz, viszont időnként aktuális témával foglalkoznak.
        </p>

        <p>
            A figurák szándékosan hasonlítanak ennyire egymásra, utalva arra, hogy bár mindannyian másfélék szeretnénk lenni, valamilyen
            szinten mégis ugyanolyanok maradunk. Természetesen felbukkannak mindenféle tárgyak, eszközök, amelyeket persze nem önös
            céllal jelenítünk meg - vagyis nem azért tesszük be, hogy ott legyen.
        </p>

        <p>
            Köszönjük, hogy ellátogattál eme kulturális mocsárba!
        </p>

        <hr>

        <p class="title">
            A legújabb rész:
        </p>

        <p class="comics">
            <img src="liderckek/liderckek.jpg" alt="Lidérckék">
        </p>
    </div>

    <?php
    Footer();
    ?>

</div>

</body>
</html>
