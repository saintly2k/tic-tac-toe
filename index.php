<?php 

session_start();

require("handler.php");

?>

<!DOCTYPE html>
<html lang="de">

<head>

    <title>Tic-Tac-Toe</title>
    <link href="style.css" type="text/css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <h3><span class="title">» Tic-Tac-Toe «</span></h3>

        <br><br><br><br>

        <div class="area">

            <form method="get" action="handler.php">

                <?php if(empty($_SESSION["top_left"])) { ?>
                <button type="submit" name="top_left" value="<?= $_SESSION["turn"] ?>"><?= $_SESSION["turn"] ?></button>
                <?php } else { ?>
                <?= $_SESSION["top_left"] ?>
                <?php } ?>
                |
                <?php if(empty($_SESSION["top_center"])) { ?>
                <button type="submit" name="top_center" value="<?= $_SESSION["turn"] ?>"><?= $_SESSION["turn"] ?></button>
                <?php } else { ?>
                <?= $_SESSION["top_center"] ?>
                <?php } ?>
                |
                <?php if(empty($_SESSION["top_right"])) { ?>
                <button type="submit" name="top_right" value="<?= $_SESSION["turn"] ?>"><?= $_SESSION["turn"] ?></button>
                <?php } else { ?>
                <?= $_SESSION["top_right"] ?>
                <?php } ?>
                <br>
                ---+---+---<br>
                <?php if(empty($_SESSION["middle_left"])) { ?>
                <button type="submit" name="middle_left" value="<?= $_SESSION["turn"] ?>"><?= $_SESSION["turn"] ?></button>
                <?php } else { ?>
                <?= $_SESSION["middle_left"] ?>
                <?php } ?>
                |
                <?php if(empty($_SESSION["middle_center"])) { ?>
                <button type="submit" name="middle_center" value="<?= $_SESSION["turn"] ?>"><?= $_SESSION["turn"] ?></button>
                <?php } else { ?>
                <?= $_SESSION["middle_center"] ?>
                <?php } ?>
                |
                <?php if(empty($_SESSION["middle_right"])) { ?>
                <button type="submit" name="middle_right" value="<?= $_SESSION["turn"] ?>"><?= $_SESSION["turn"] ?></button>
                <?php } else { ?>
                <?= $_SESSION["middle_right"] ?>
                <?php } ?>
                <br>
                ---+---+---<br>
                <?php if(empty($_SESSION["bottom_left"])) { ?>
                <button type="submit" name="bottom_left" value="<?= $_SESSION["turn"] ?>"><?= $_SESSION["turn"] ?></button>
                <?php } else { ?>
                <?= $_SESSION["bottom_left"] ?>
                <?php } ?>
                |
                <?php if(empty($_SESSION["bottom_center"])) { ?>
                <button type="submit" name="bottom_center" value="<?= $_SESSION["turn"] ?>"><?= $_SESSION["turn"] ?></button>
                <?php } else { ?>
                <?= $_SESSION["bottom_center"] ?>
                <?php } ?>
                |
                <?php if(empty($_SESSION["bottom_right"])) { ?>
                <button type="submit" name="bottom_right" value="<?= $_SESSION["turn"] ?>"><?= $_SESSION["turn"] ?></button>
                <?php } else { ?>
                <?= $_SESSION["bottom_right"] ?>
                <?php } ?>
                <br>
                <br><br>
                <button type="submit" name="reset">Reset</button>
            </form>

        </div>

        <br><br><br><br>

        <h3><span class="title">» 2022 <a href="https://h33t.moe/saintly" target="_blank">Selim B.</a>«</span></h3>

    </div>

</body>

</html>
