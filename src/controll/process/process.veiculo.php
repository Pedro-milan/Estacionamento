<?php

	require("../../domain/connection.php");
	require("../../domain/veiculo.php");

	class VeiculoProcess {
		var $vd;

		function doGet($arr){
			$vd = new VeiculoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$vd = new VeiculoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$vd = new VeiculoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$vd = new VeiculoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}