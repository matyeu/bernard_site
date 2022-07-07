<?php require("infos-site.php");

$racine = false;
if ($_SERVER['PHP_SELF'] == "/localhost/index.php") {
    $racine = true;
} else {
    $racine = false;
}

if (!isset($page_title)) {
    $title = $name_site . " - Site";
} else {
    $title = $name_site ." - ". $page_title;
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
<header>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $title ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= $path_bootstrap; ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= $path_themify; ?>themify-icons.css">
    <link rel="stylesheet" href="<?= $path_slick; ?>/slick.css">
    <link rel="stylesheet" href="<?= $path_slick; ?>/slick-theme.css">
    <link rel="stylesheet" href="<?= $path_fancybox; ?>/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= $path_aos; ?>/aos.css">
    <link rel="stylesheet" href="<?= $path_css; ?>style.css">
</header>
