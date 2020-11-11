<?php

function assets($path){
	echo "/assets/plugins/".$path;
}

?>

<title>Challenge ME <?= $title ?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

<link rel="shortcut icon" type="image/x-icon" sizes="32x32" href="favicon.ico">
<link rel="stylesheet" href="<?php assets('bootstrap/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?php assets('slick/slick.css') ?>">
<link rel="stylesheet" href="<?php assets('slick/slick-theme.css') ?>">

<script src="<?php assets('jquery/jquery.min.js') ?>"></script>
<script src="<?php assets('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php assets('slick/slick.min.js') ?>"></script>