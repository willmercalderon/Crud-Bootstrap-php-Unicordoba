<?php
class CrudModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=tesis', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM requisito");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Crud();

	

				$alm->__SET('Id_Proyecto', $r->Id_Proyecto);
				$alm->__SET('NomProyecto', $r->NomProyecto);
				$alm->__SET('NomUno', $r->NomUno);
				$alm->__SET('NomDos', $r->NomDos);
				$alm->__SET('NomTres', $r->NomTres);
				$alm->__SET('NomAsesor', $r->NomAsesor);
				$alm->__SET('Fecha', $r->Fecha);
				$alm->__SET('Nota', $r->Nota);
				$alm->__SET('Linea', $r->Linea);


				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($Id_Proyecto)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM requisito WHERE Id_Proyecto = ?");
			          

			$stm->execute(array($Id_Proyecto));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new Crud();


				$alm->__SET('Id_Proyecto', $r->Id_Proyecto);
				$alm->__SET('NomProyecto', $r->NomProyecto);
				$alm->__SET('NomUno', $r->NomUno);
				$alm->__SET('NomDos', $r->NomDos);
				$alm->__SET('NomTres', $r->NomTres);
				$alm->__SET('NomAsesor', $r->NomAsesor);
				$alm->__SET('Fecha', $r->Fecha);
				$alm->__SET('Nota', $r->Nota);
				$alm->__SET('Linea', $r->Linea);

			return $alm;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($Id_Proyecto)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM requisito WHERE Id_Proyecto = ?");			          

			$stm->execute(array($Id_Proyecto));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Crud $data)
	{
		try 
		{
			$sql = "UPDATE requisito SET 

						
						NomProyecto       = ?,
						NomUno           = ?, 
						NomDos = ?,
						NomTres = ?,
						NomAsesor = ?,
				    	Fecha=?,
				    	Nota=?,  
				    	Linea=?
				    	WHERE Id_Proyecto = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					 
					$data->__GET('NomProyecto'), 
					$data->__GET('NomUno'),
					$data->__GET('NomDos'),
					$data->__GET('NomTres'),
					$data->__GET('NomAsesor'),
					$data->__GET('Fecha'),
					$data->__GET('Nota'),
					$data->__GET('Linea'),
					$data->__GET('Id_Proyecto')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Crud $data)
	{
		try 
		{
		$sql = "INSERT INTO requisito (Id_Proyecto,NomProyecto,NomUno,NomDos,NomTres,NomAsesor,Fecha,Nota,Linea) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('Id_Proyecto'), 
					$data->__GET('NomProyecto'), 
					$data->__GET('NomUno'),
					$data->__GET('NomDos'),
					$data->__GET('NomTres'),
					$data->__GET('NomAsesor'),
					$data->__GET('Fecha'),
					$data->__GET('Nota'),
					$data->__GET('Linea')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}