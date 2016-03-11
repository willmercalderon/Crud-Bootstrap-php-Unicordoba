<?php
class Crud
{
	private $Id_Proyecto;
	private $NomProyecto;
	private $NomUno;
	private $NomDos;
	private $NomTres;
	private $NomAsesor;
	private $Fecha;
	private $Nota;
	private $Linea;
	

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}