<?php

	require("../../domain/connection.php");
	require("../../domain/vaga.php");

	class VagaProcess {
		var $vd;

		function doGet($arr){
			$vd = new VagaDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$vd = new VagaDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$vd = new VagaDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$vd = new VagaDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}