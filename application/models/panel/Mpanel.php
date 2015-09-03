<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

/**
 *
 * @subpackage fisico
 * @author Judelvis Rivas
 * @since Version 1.0
 *       
 */
class MPanel extends CI_Model {
	var $identificador = NULL;
	var $nombre = '';
	var $ubicacion = '';
	var $observacion = '';
	function __construct() {
		if (! isset ( $this->db )) {
			$this->load->database ();
		}
	}
	function __destruct() {
		$this->db->close ();
		unset ( $this->db );
	}
	
	/**
	 * funciones para paginas
	 */
	function listaRecientes() {
		$query = 'select * from serie
join(Select * from portafolio
	join(
		select oidser as idser,max(fecha)as fechaM from portafolio group by oidser)as a on a.idser= portafolio.oidser and a.fechaM = portafolio.fecha
	)as b on serie.id=b.oidser order by fechaM desc limit 1';
		$rec = $this->db->query ( $query );
		$lista = array ();
		if ($rec->num_rows () > 0)
			$lista ['lst'] = $rec->result ();
		else
			$lista ['lst'] = 0;
		$lista ['query'] = '';
		return $lista;
	}

	function buscarTipo($tipo) {
		$query = 'SELECT * FROM serie
  		LEFT join (select * from portafolio group by oidser,oidcat order by modificado desc  )as A on serie.id = A.oidser
  		where estatus=0 and oidcat=' . $tipo;
		$rec = $this->db->query ( $query );
		$lista = array ();
		if ($rec->num_rows () > 0)
			$lista ['lst'] = $rec->result ();
		else
			$lista ['lst'] = 0;
		$lista ['query'] = ' and oidcat=' . $tipo;
		return $lista;
	}

	function consulta($arr) {
		$query = 'SELECT * FROM serie
		LEFT join (select * from portafolio group by oidser order by fecha desc  )as A on serie.id = A.oidser
		where estatus=0 ';
		$donde = '';
		if ($arr != '')	$donde .= ' and id=' . $arr ;

		$rec = $this->db->query ( $query . $donde );
		$lista = array ();
		if ($rec->num_rows () > 0) $lista ['lst'] = $rec->result ();
		else $lista ['lst'] = 0;
		$lista ['query'] = $donde;
		return $lista;
	}


	/**
	 * funciones de galeria
	 */
	function registrarGaleria($arr) {
		$this->db->insert ( "portafolio", $arr );
		return "La imagen se registro correctamente";
	}
	function consultarGaleria($cod) {
		$imagenes = $this->db->query ( 'SELECT * FROM portafolio WHERE oidser=' . $cod );
		$obj = array ();
		$cant = $imagenes->num_rows ();
		if ($cant > 0) {
			$obj ['resp'] = 1;
			$rsImg = $imagenes->result ();
			$i = 0;
			foreach ( $rsImg as $fila ) {
				$i ++;
				$rImg = '<img src="' . __IMG__ . 'galeria/' . $fila->imagen . '" width=200></img> ';
				// $rImg = "epa";
				$cuep [$i] = array ("1" => $fila->oid,"2" => $fila->imagen,"3" => $fila->oidser,"4" => "","5" => $rImg);
			}
			$obj = array ("Cabezera" => $this->cab (),"Cuerpo" => $cuep,"Paginador" => 10,"Origen" => "json","msj" => "SI");
		} else {
			$obj = array ("msj" => "NO");
		}
		return json_encode ( $obj );
	}

    function consultarGaleriaSerie($oidser){
        $consulta = $this -> db -> query("Select * From portafolio join servicio on servicio.id = portafolio.oidser WHERE  oidser=".$oidser);
        $cant = $consulta -> num_rows();
        if($cant > 0){
            $porta = $consulta -> result();
        }else{
            $porta = 0;
        }
        return $porta;
    }

    function consultarServiciosCat($cat){
        $consulta = $this -> db -> query("Select * From servicio join (select * from portafolio group by oidser)as porta on servicio.id = porta.oidser WHERE  oidcat=".$cat );
        $cant = $consulta -> num_rows();
        if($cant > 0){
            $porta = $consulta -> result();
        }else{
            $porta = 0;
        }
        return $porta;
    }

    function nombreCat($cat){
        $query = $this->db->query("select * from categoria where oid=".$cat);
        $resul = $query -> result();
        $nombre = '';
        foreach($resul as $fila){
            $nombre = $fila->categoria;
        }
        return $nombre;
    }
	
	function eliminarGaleria($arr) {
		if ($this->db->query ( "DELETE FROM portafolio WHERE oid=" . $arr [0] )) {
			$archivo = BASEPATH . 'img/galeria/' . $arr [1];
			if (file_exists ( $archivo )) {
				if (unlink ( $archivo ))
					$msj = "El archivo fue borrado";
				else
					$msj = "El archivo no fue borrado";
			} else
				$msj = "El archivo no existe";
		} else {
			$msj = "No se elimino";
		}
		return $msj;
	}
	function cab() {
		$cabe = array ();
		$cabe [1] = array ("titulo" => "","oculto" => 1);
		$cabe [2] = array ("titulo" => "Imagen","atributos" => "width:30%;","buscar" => 0);
        $cabe [3] = array ("titulo" => "Serie");
		$cabe [4] = array ("titulo" => "#","tipo" => "bimagen","funcion" => 'eliminarGaleria',"parametro" => "1,2",	"ruta" => __IMG__ . "quitar.png",
				"atributos" => "text-align:center;" );
		$cabe [5] = array ("titulo" => "Ver","atributos" => "width:40%");
		return $cabe;
	}


    /**
     * Funciones para noticia
     */
    function registrarNoticia($arr) {
        $this->db->insert ( "noticias", $arr );
        return "La imagen se registro correctamente";
    }
    function consultarNoticia() {
        $imagenes = $this->db->query ( 'SELECT * FROM noticias order by fecha DESC ');
        $obj = array ();
        $cant = $imagenes->num_rows ();
        if ($cant > 0) {
            $obj ['resp'] = 1;
            $rsImg = $imagenes->result ();
            $i = 0;
            foreach ( $rsImg as $fila ) {
                $i ++;
                $rImg = '<img src="' . __IMG__ . 'noticia/' . $fila->imagen . '" width=200></img> ';
                // $rImg = "epa";
                $cuep [$i] = array ("1" => $fila->oid,"2" => $fila->imagen,"3" => $fila->titulo,"4" => $fila->descrip,"5" => "","6" => $rImg);
            }
            $obj = array ("Cabezera" => $this->cabNoticia (),"Cuerpo" => $cuep,"Paginador" => 10,"Origen" => "json","msj" => "SI");
        } else {
            $obj = array ("msj" => "NO");
        }
        return json_encode ( $obj );
    }

    function listarNoticia(){
        $query = 'Select * From noticias order by fecha DESC ';
        $consulta = $this -> db -> query($query );
        $cant = $consulta -> num_rows();
        if($cant > 0){
            $porta = $consulta -> result();
        }else{
            $porta = 0;
        }
        return $porta;
    }

    function verNoticia($id){
        $query = 'Select * From noticias where oid='.$id.' order by fecha DESC ';
        $consulta = $this -> db -> query($query );
        $cant = $consulta -> num_rows();
        if($cant > 0){
            $porta = $consulta -> result();
        }else{
            $porta = 0;
        }
        return $porta;
    }

    function eliminarNoticia($arr) {
        if ($this->db->query ( "DELETE FROM noticias WHERE oid=" . $arr [0] )) {
            $archivo = BASEPATH . 'img/noticia/' . $arr [1];
            if (file_exists ( $archivo )) {
                if (unlink ( $archivo ))
                    $msj = "El archivo fue borrado";
                else
                    $msj = "El archivo no fue borrado";
            } else
                $msj = "El archivo no existe";
        } else {
            $msj = "No se elimino";
        }
        return $msj;
    }
    function cabNoticia() {
        $cabe = array ();
        $cabe [1] = array ("titulo" => "","oculto" => 1);
        $cabe [2] = array ("titulo" => "Imagen","buscar" => 0);
        $cabe [3] = array ("titulo" => "Titulo","buscar" => 0);
        $cabe [4] = array ("titulo" => "Descripcion","buscar" => 0);
        $cabe [5] = array ("titulo" => "#","tipo" => "bimagen","funcion" => 'eliminarNoticia',"parametro" => "1,2",	"ruta" => __IMG__ . "quitar.png",
            "atributos" => "text-align:center;" );
        $cabe [6] = array ("titulo" => "Ver","atributos" => "width:40%");
        return $cabe;
    }
	
	/**
	 * Funciones para Categoria
	 */
	function registrarTipo($arr = null) {
		$ban = $this->db->insert ( 'categoria', $arr );
		if ($ban) {
			return "Se Registro con Exito";
		}
		return "No se pudo registrar";
	}
	function cabTipo() {
		$cabe = array ();
		$cabe [1] = array ("titulo" => "","oculto" => 1);
		$cabe [2] = array ("titulo" => "Nombre","buscar" => 0);

		
		return $cabe;
	}

	function listaTipo() {
		$query = 'SELECT * FROM categoria';
		$tipo = $this->db->query ( $query );
		$obj = array ();
		$cant = $tipo->num_rows ();
		if ($cant > 0) {
			$rsTip = $tipo->result ();
			$i = 0;
			foreach ( $rsTip as $fila ) {
				$i ++;
				$cuep [$i] = array ("1" => $fila->oid,"2" => $fila->categoria);
			}
			$obj = array ("Cabezera" => $this->cabTipo (),"Cuerpo" => $cuep,"Paginador" => 5,"Origen" => "json","msj" => 1);
		} else {
			$obj = array ("msj" => 0);
		}
		
		return json_encode ( $obj );
	}
	function cmbTipo() {
		$zona = $this->db->query ( 'Select * from categoria' );
		$rs = $zona->result ();
		$lista = array ();
		
		foreach ( $rs as $fila ) {
			$lista [$fila->oid] = $fila->categoria;
		}
		//$lista[0]='SELECCIONE ZONA';
		return json_encode ( $lista );
	}

    function mostrarTipo($oid){
        $consulta = $this -> db ->query("SELECT * from categoria where oid=".$oid);
        $resultado = $consulta -> result();
        $cate = "";
        foreach($resultado as $resp){
            $cate = $resp -> categoria;
        }
        return $cate;
    }
	
	/**
	 * Funciones para Serie
	 */
	function registrarSerie($arr = null) {
		$ban = $this->db->insert ( 'servicio', $arr );
		
		if ($ban) {
			return $this->db->insert_id ();
		}
		return "No se pudo registrar";
	}
	function modificarSerie($arr = null, $id) {
		$this->db->where ( 'id', $id );
		$ban = $this->db->update ( 'servicio', $arr );
		if ($ban) {
			return "Se modifico con exito";
		}
		return "No se pudo modificar";
	}
	function eliminarSerie($id) {
		$ban = $this->db->query ( 'DELETE FROM serie where id=' . $id );
		if ($ban) {
			$rs = $this->db->query ( "select * from portafolio where oidser=" . $id );
			$rsG = $rs->result ();
			foreach ( $rsG as $fila ) {
				$arr [0] = $fila->oid;
				$arr [1] = $fila->imagen;
				$this->eliminarGaleria ( $arr );
			}
			return "Se elimino con exito";
		}
		return "No se elimino";
	}
	function cabSer() {
		$cabe = array ();
		$cabe [1] = array ("titulo" => "Id","oculto" => 1);
		$cabe [2] = array ("titulo" => "Nombre","buscar" => 0);
		$cabe [3] = array ("titulo" => "Descripcion","buscar" => 0 ,"tipo"=>"texto");
		$cabe [4] = array ("titulo" => "Fecha","buscar" => 0,"tipo"=>"calendario");
		$cabe [5] = array ("titulo" => "Estatus","tipo"=>"combo_fijo");
		$cabe [6] = array ("titulo" => "Modificar","tipo" => "bimagen","funcion" => 'modificarSerie',"parametro" => "1,3,4,5","ruta" => __IMG__ . "botones/aceptar1.png",
				"atributos" => "text-align:center;height:50px;padding:20px;","mantiene" => 1);
		$cabe [7] = array ("titulo" => "Eliminar","tipo" => "bimagen","funcion" => 'eliminarSerie',"parametro" => "1","ruta" => __IMG__ . "botones/quitar.png",
				"atributos" => "text-align:center;height:50px;padding:20px;" );
		return $cabe;
	}
	function listaSerie() {
		$cmbEstatus = array ("1" => "Inactivo","0" => "Activo");
		$cmb = array ("5" => $cmbEstatus);
		$query = 'SELECT * FROM servicio order by fecha desc ;';
		$tipo = $this->db->query ( $query );
		$obj = array ();
		$cant = $tipo->num_rows ();
		if ($cant > 0) {
			$rsTip = $tipo->result ();
			$i = 0;
			foreach ( $rsTip as $fila ) {
				$i ++;
				$cuep [$i] = array (
						"1" => $fila->id,
						"2" => $fila->nombre,
						"3" => $fila->descrip,
						"4" => $fila->fecha,
						"5" => $fila->estatus,
						"6" => '',
						"7" => ''
				);
			}
			$obj = array ("Cabezera" => $this->cabSer (),"Cuerpo" => $cuep,"Paginador" => 10,"Origen" => "json","msj" => 1,"Objetos" => $cmb);
		} else {
			$obj = array ("msj" => 0);
		}
		
		return json_encode ( $obj );
	}
	function cmbSerie() {
		$zona = $this->db->query ( 'Select * from servicio where estatus=0' );
		$rs = $zona->result ();
		$lista = array ();
		
		foreach ( $rs as $fila ) {
			$lista [$fila->id] = $fila->nombre;
		}
		return json_encode ( $lista );
	}
}
?>