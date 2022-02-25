<?php

session_start();

$start = "x";

if(empty($_SESSION["turn"])) {
    $_SESSION["turn"] = $start;
}

if(isset($_GET["top_left"])) {
    $_SESSION["top_left"] = $_GET["top_left"];
    if($_SESSION["turn"]=="x") {
        $_SESSION["turn"] = "o";
    } else {
        $_SESSION["turn"] = "x";
    }
    header("location: index.php");
}

if(isset($_GET["top_center"])) {
    $_SESSION["top_center"] = $_GET["top_center"];
    if($_SESSION["turn"]=="x") {
        $_SESSION["turn"] = "o";
    } else {
        $_SESSION["turn"] = "x";
    }
    header("location: index.php");
}

if(isset($_GET["top_right"])) {
    $_SESSION["top_right"] = $_GET["top_right"];
    if($_SESSION["turn"]=="x") {
        $_SESSION["turn"] = "o";
    } else {
        $_SESSION["turn"] = "x";
    }
    header("location: index.php");
}

if(isset($_GET["middle_left"])) {
    $_SESSION["middle_left"] = $_GET["middle_left"];
    if($_SESSION["turn"]=="x") {
        $_SESSION["turn"] = "o";
    } else {
        $_SESSION["turn"] = "x";
    }
    header("location: index.php");
}

if(isset($_GET["middle_center"])) {
    $_SESSION["middle_center"] = $_GET["middle_center"];
    if($_SESSION["turn"]=="x") {
        $_SESSION["turn"] = "o";
    } else {
        $_SESSION["turn"] = "x";
    }
    header("location: index.php");
}

if(isset($_GET["middle_right"])) {
    $_SESSION["middle_right"] = $_GET["middle_right"];
    if($_SESSION["turn"]=="x") {
        $_SESSION["turn"] = "o";
    } else {
        $_SESSION["turn"] = "x";
    }
    header("location: index.php");
}

if(isset($_GET["bottom_left"])) {
    $_SESSION["bottom_left"] = $_GET["bottom_left"];
    if($_SESSION["turn"]=="x") {
        $_SESSION["turn"] = "o";
    } else {
        $_SESSION["turn"] = "x";
    }
    header("location: index.php");
}

if(isset($_GET["bottom_center"])) {
    $_SESSION["bottom_center"] = $_GET["bottom_center"];
    if($_SESSION["turn"]=="x") {
        $_SESSION["turn"] = "o";
    } else {
        $_SESSION["turn"] = "x";
    }
    header("location: index.php");
}

if(isset($_GET["bottom_right"])) {
    $_SESSION["bottom_right"] = $_GET["bottom_right"];
    if($_SESSION["turn"]=="x") {
        $_SESSION["turn"] = "o";
    } else {
        $_SESSION["turn"] = "x";
    }
    header("location: index.php");
}

if(isset($_GET["reset"])) {
    session_unset();
    session_destroy();
    header("location: index.php");
}

?>
