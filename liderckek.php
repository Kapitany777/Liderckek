<?php
include_once "include/inc_page.php";
?>

<!DOCTYPE html>

<html lang="hu">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="felulet/liderckek.css" type="text/css">
    <title>Lidérckék - Képregény</title>

    <?php
    function Lapozo($kep_id)
    {
        print("<p style=\"text-align: center;\">\n");

        print("<a href=\"liderckek.php?kep_id=1\">");
        print("<img src=\"felulet/elso.jpg\" title=\"Első rész\" alt=\"Első rész\">");
        print("</a>\n");
        print("<a href=\"liderckek.php?kep_id=" . ($kep_id > 1 ? $kep_id - 1 : LIDERCKEK_MAX) . "\">");
        print("<img src=\"felulet/elozo.jpg\" title=\"Előző rész\" alt=\"Előző rész\">");
        print("</a>\n");
        print("<a href=\"liderckek.php?kep_id=" . ($kep_id < LIDERCKEK_MAX ? $kep_id + 1 : 1) . "\">");
        print("<img src=\"felulet/kovetkezo.jpg\" title=\"Következő rész\" alt=\"Következő rész\">");
        print("</a>\n");
        print("<a href=\"liderckek.php?kep_id=" . LIDERCKEK_MAX . "\">");
        print("<img src=\"felulet/utolso.jpg\" title=\"Utolsó rész\" alt=\"Utolsó rész\">");
        print("</a>\n");
        print("</p>\n");
    }

    ?>
</head>

<body>

<?php
include("liderckek_max.php");

if (isset($_GET["kep_id"]))
{
    $kep_id = (integer)$_GET["kep_id"];

    if ($kep_id < 1 || $kep_id > LIDERCKEK_MAX) $kep_id = 1;
}
else
{
    $kep_id = 1;
}
?>

<div id="container">

    <?php
    Menu();
    ?>

    <div id="txt">
        <h1>Lidérckék képregény</h1>

        <?php
        Lapozo($kep_id);
        ?>

        <p class="comics">
            <?php print("<img src=\"liderckek/liderckek" . $kep_id . ".jpg\" alt=\"Lidérckék\">\n"); ?>
        </p>

        <?php
        Lapozo($kep_id);
        ?>
    </div>

    <?php
    Footer();
    ?>

</div>

</body>
</html>
