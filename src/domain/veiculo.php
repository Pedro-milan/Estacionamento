<?php

	class Veiculo {
		var $id_veiculo;
		var $modelo;
		var $marca;
		var $placa;
		var $cor;

		function getId_veiculo(){
			return $this->id_veiculo;
		}
		function setId_veiculo($id_veiculo){
			$this->id_veiculo = $id_veiculo;
		}

		function getModelo(){
			return $this->modelo;
		}
		function setModelo($modelo){
			$this->modelo = $modelo;
		}

		function getMarca(){
			return $this->marca;
		}
		function setMarca($marca){
			$this->marca = $marca;
		}

		function getPlaca(){
			return $this->placa;
		}
		function setPlaca($placa){
			$this->placa = $placa;
		}

		function getCor(){
			return $this->cor;
		}
		function setCor($cor){
			$this->cor = $cor;
		}
	}

	class VeiculoDAO {
		function create($veiculo) {
			$result = array();

			try {
				$query = "INSERT INTO table_name (column1, column2) VALUES (value1, value2)";

				$con = new Connection();

				if(Connection::getInstance()->exec($query) >= 1){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function read() {
			$result = array();

			try {
				$query = "SELECT column1, column2 FROM table_name WHERE condition";

				$con = new Connection();

				$resultSet = Connection::getInstance()->query($query);

				while($row = $resultSet->fetchObject()){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function update() {
			$result = array();

			try {
				$query = "UPDATE table_name SET column1 = value1, column2 = value2 WHERE condition";

				$con = new Connection();

				$status = Connection::getInstance()->prepare($query);

				if($status->execute()){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function delete() {
			$result = array();

			try {
				$query = "DELETE FROM table_name WHERE condition";

				$con = new Connection();

				if(Connection::getInstance()->exec($query) >= 1){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}
	}
