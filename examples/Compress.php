<?php

	include "../vendor/autoload.php";

	use \Atiksoftware\IMGModel\IMGModel;

	$img = new IMGModel();

	$img->load("input.png");
	$img->maxarea(1280,720);
	$img->save("output.png",false,70);
