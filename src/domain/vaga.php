<?php

	class Vaga {
		var $id_vaga;
		var $entrada;
		var $saida;
		var $localizacao;
		var $id_veiculo;

		function getId_vaga(){
			return $this->id_vaga;
		}
		function setId_vaga($id_vaga){
			$this->id_vaga = $id_vaga;
		}

		function getEntrada(){
			return $this->entrada;
		}
		function setEntrada($entrada){
			$this->entrada = $entrada;
		}

		function getSaida(){
			return $this->saida;
		}
		function setSaida($saida){
			$this->saida = $saida;
		}

		function getLocalizacao(){
			return $this->localizacao;
		}
		function setLocalizacao($localizacao){
			$this->localizacao = $localizacao;
		}

		function getId_veiculo(){
			return $this->id_veiculo;
		}
		function setId_veiculo($id_veiculo){
			$this->id_veiculo = $id_veiculo;
		}
	}

	class VagaDAO {
		function create($vaga) {
			$result = array();
			$entrada = $vaga->getEntrada();
			$saida = $vaga->getSaida();
			$localizacao = $vaga->getLocalizacao();
			$id_veiculo = $vaga->getId_veiculo();
			$query = "INSERT INTO vaga (DEFAULT, '$entrada', '$saida', '$localizacao', '$id_veiculo')";
			try {
				$con = new Connection();
				if(Connection::getInstance()->exec($query) >= 1){
						$result = $vaga;
				}else{
					$result["erro"] = "Erro ao adicionar vaga";
				}
				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}
			return $result;
		}

		function read($id_vaga) {
			$result = array();
			$query = "SELECT * FROM vaga WHERE id_vaga = '$id_vaga'";
			try {
				$con = new Connection();
				$resultSet = Connection::getInstance()->query($query);
				while($row = $resultSet->fetchObject()){
					$vaga = new Vaga();
					$vaga->setIdVaga($row->id_vaga);
					$vaga->setEntrada($row->entrada);
					$vaga->setSaida($row->saida);
					$vaga->setLocalizacao($row->localizacao);
					$vaga->setIdVeiculo($row->id_veiculo);
					$result[] = $vaga;		
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function readAll() {
			$result = array();
			$query = "SELECT * FROM vaga";
			try {
				$con = new Connection();
				$resultSet = Connection::getInstance()->query($query);
				while($row = $resultSet->fetchObject()){
					$vaga = new Vaga();
					$vaga->setIdVaga($row->id_vaga);
					$vaga->setEntrada($row->entrada);
					$vaga->setSaida($row->saida);
					$vaga->setLocalizacao($row->localizacao);
					$vaga->setIdVeiculo($row->id_veiculo);
					$result[] = $vaga;		
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}


		function update($vaga) {
			$result = array();
			$id_vaga = $vaga->getIdVaga();
			$entrada = $vaga->getEntrada();
			$saida = $vaga->getSaida();
			$localizacao = $vaga->getLocalizacao();
			$id_veiculo = $vaga->getIdVeiculo():
			$query = "UPDATE vaga SET entrada = '$entrada', saida = '$saida', localizacao = '$localizacao', id_veiculo = '$id_veiculo' WHERE id_vaga = $id_vaga";
			try {
				$con = new Connection();
				$status = Connection::getInstance()->prepare($query);
				if($status->execute()){
						$result[] = $vaga;
				}else{
					$result["erro"] = "Não foi possivel atualizar os dados";
				}
				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}
			return $result;
		}

		function delete($id_vaga) {
			$result = array();
			$query = "DELETE FROM veiculo WHERE id_vaga = $id_vaga";
			try {
				$con = new Connection();
				if(Connection::getInstance()->exec($query) >= 1){
					$result["msg"] = "Vaga excluida com sucesso";
				}else{
					$result["erro"] = "Vaga não excluida";
				}
				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}
	}
