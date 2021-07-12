<?php

	require("../process/process.vaga.php");

	include("configs.php");

	$vp = new VagaProcess();

	switch($_SERVER['REQUEST_METHOD']) {
		case "GET":
			$vp->doGet($_GET);
			break;

		case "POST":
			$vp->doPost($_POST);
			break;

		case "PUT":
			$vp->doPut($_PUT);
			break;

		case "DELETE":
			$vp->doDelete($_DELETE);
			break;
	}