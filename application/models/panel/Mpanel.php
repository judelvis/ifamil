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
		$this->db->insert ( "t_galeria", $arr );
		return "<h4>La imagen se registro correctamente</h4>";
	}
	function consultarGaleria($cod) {
		$imagenes = $this->db->query ( 'SELECT * FROM t_galeria WHERE oidpor=' . $cod );
		$obj = array ();
		$cant = $imagenes->num_rows ();
		if ($cant > 0) {
			$rsImg = $imagenes->result ();
			foreach ( $rsImg as $fila ) {
				$rImg = '<img src="' . __IMG__ . 'galeria/' . $fila->imagen . '" width=200></img> ';
				// $rImg = "epa";
				$cuep [] = array ($fila->oid,$fila->imagen,$fila->oidpor,$rImg);
			}
            $cab=array("id","Archivo","Producto","Imagen");
			$obj[] = array ("cabecera" => $cab,"cuerpo" => $cuep);
		} else {
			$obj = array ("msj" => "NO");
		}
		return json_encode ( $obj );
	}

    function consultarGaleriaPortafolio($oidser){
        $consulta = $this -> db -> query("Select *,t_portafolio.titulo as tit From t_galeria join t_portafolio on t_portafolio.id = t_galeria.oidpor WHERE  oidpor=".$oidser);
        $cant = $consulta -> num_rows();
        if($cant > 0){
            $porta = $consulta -> result();
        }else{
            $porta = 0;
        }
        return $porta;
    }

    function consultarPortafolioCat($cat){
        $consulta = $this -> db -> query("Select * From t_portafolio left join (select * from t_galeria group by oidpor)
          as porta on t_portafolio.id = porta.oidpor
          WHERE  oidcat=".$cat );
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
		if ($this->db->query ( "DELETE FROM t_galeria WHERE oid=" . $arr [0] )) {
			$archivo = BASEPATH . 'img/galeria/' . $arr [1];
			if (file_exists ( $archivo )) {
				if (unlink ( $archivo ))
					$msj = "<h4>El archivo fue borrado</h4>";
				else
					$msj = "<h4>El archivo no fue borrado</h4>";
			} else
				$msj = "<h4>El archivo no existe</h4>";
            $archivo = BASEPATH . 'img/galeria/medio/' . $arr [1];
            if (file_exists ( $archivo )) {
                if (unlink ( $archivo ))
                    $msj = "<h4>El archivo fue borrado</h4>";
                else
                    $msj = "<h4>El archivo no fue borrado</h4>";
            } else
                $msj = "<h4>El archivo no existe</h4>";
		} else {
			$msj = "<h4>No se elimino</h4>";
		}
		return $msj;
	}


    /**
     * Funciones para noticia
     */
    function registrarNoticia($arr) {
        $this->db->insert ( "t_noticias", $arr );
        return "La noticia se registro correctamente";
    }
    function consultarNoticia() {
        $imagenes = $this->db->query ( 'SELECT * FROM t_noticias order by fecha DESC ');
        $obj = array ();
        $cab = array ("id","Archivo","Titulo","Descripcion","Resumen","Imagen");
        $cant = $imagenes->num_rows ();
        if ($cant > 0) {
            $rsImg = $imagenes->result ();
            foreach ( $rsImg as $fila ) {
                $rImg = '<img src="' . __IMG__ . 'noticia/medio/' . $fila->imagen . '" width=200></img> ';
                $cuep[] = array ($fila->oid,$fila->imagen,$fila->titulo,$fila->descrip,$fila ->resumen,$rImg);
            }
            $obj[] = array ("cabecera" => $cab,"cuerpo" => $cuep);
        } else {
            $obj = array ("msj" => "NO");
        }
        return json_encode ( $obj );
    }

    function modificarNoticia($arr){
        $resp = $this -> db -> query('Update t_noticias set titulo="'.$arr[1].'",descrip="'.$arr[2].'",resumen="'.$arr[3].'" where oid='.$arr[0]);
        if($resp) return "<h4>Se Actualizo con exito</h4>";
        return "<h4>No se pudo modificar</h4>";
    }

    function listarNoticia(){
        $query = 'Select * From t_noticias order by fecha DESC ';
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
        $query = 'Select * From t_noticias where oid='.$id.' order by fecha DESC ';
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
        if ($this->db->query ( "DELETE FROM t_noticias WHERE oid=" . $arr [0] )) {
            $archivo = BASEPATH . 'img/noticia/' . $arr [1];
            if (file_exists ( $archivo )) {
                if (unlink ( $archivo ))
                    $msj = "<h4>El archivo fue borrado</h4>";
                else
                    $msj = "<h4>El archivo no fue borrado</h4>";
            } else
                $msj = "<h4>El archivo no existe</h4>";
            $archivo = BASEPATH . 'img/noticia/medio/' . $arr [1];
            if (file_exists ( $archivo )) {
                if (unlink ( $archivo ))
                    $msj = "<h4>El archivo fue borrado</h4>";
                else
                    $msj = "<h4>El archivo no fue borrado</h4>";
            } else
                $msj = "<h4>El archivo no existe</h4>";
        } else {
            $msj = "<h4>No se elimino</h4>";
        }
        return $msj;
    }
	
	/**
	 * Funciones para Categoria
	 */
	function registrarTipo($arr = null) {
		$ban = $this->db->insert ( 't_categoria', $arr );
		if ($ban) {
			return "<h4>Se Registro con Exito</h4>";
		}
		return "<h4>No se pudo registrar</h4>";
	}

	function listaTipo() {
		$query = 'SELECT * FROM t_categoria';
        $cabe  = array ("id","Nombre","Descripcion");
		$tipo = $this->db->query ( $query );
		$obj = array ();
		$cant = $tipo->num_rows ();
		if ($cant > 0) {
			$rsTip = $tipo->result ();
			foreach ( $rsTip as $fila ) {
				$cuep [] = array ($fila->oid,$fila->categoria,$fila->descrip);
			}
			$obj[] = array ("cabecera" => $cabe,"cuerpo" => $cuep);
		} else {
			$obj = array ("resp" => 0);
		}
		
		return json_encode ( $obj );
	}
	function cmbTipo() {
		$zona = $this->db->query ( 'Select * from t_categoria' );
		$rs = $zona->result ();
		$lista = array ();
		
		foreach ( $rs as $fila ) {
			$lista [$fila->oid] = $fila->categoria;
		}
		//$lista[0]='SELECCIONE ZONA';
		return json_encode ( $lista );
	}

    function mostrarTipo($oid){
        $consulta = $this -> db ->query("SELECT * from t_categoria where oid=".$oid);
        $resultado = $consulta -> result();
        $cate = "";
        foreach($resultado as $resp){
            $cate = $resp -> categoria;
        }
        return $cate;
    }

    function modTipo($datos){
        $res = $this ->db ->query('update t_categoria set categoria="'.$datos[1].'",descrip="'.$datos[2].'" where oid='.$datos[0]);
        if($res) return "<h4>Se Modifico Con Exito</h4>";
        else return "<h4>No Se Pudo Modificar. Verifique los datos</h4>";
    }
	
	/**
	 * Funciones para Serie
	 */
	function registrarSerie($arr = null) {
		$ban = $this->db->insert ( 't_portafolio', $arr );
		
		if ($ban) {
			return $this->db->insert_id ();
		}
		return "<h4>No se pudo registrar</h4>";
	}
	function modificarSerie($arr) {
        $descrip =$this->db->escape($arr[3]);
        $resumen =$this->db->escape($arr[2]);
        $query = 'Update t_portafolio set titulo="'.$arr[1].'",resumen="'.$resumen.'",descrip="'.$descrip.'"';
        if($arr[5] != 'Activo' && $arr[5] != 'Inactivo') $query.=',estatus='.$arr[5];
        $query .=' where id='.$arr[0];
        //return $query;
		$ban = $this->db->query ( $query);
		if ($ban) {
			return "<h4>Se modifico con exito</h4>";
		}
		return "<h4>No se pudo modificar</h4>";
	}
	function eliminarSerie($id) {
		$ban = $this->db->query ( 'DELETE FROM t_portafolio where id=' . $id );
		if ($ban) {
			$rs = $this->db->query ( "select * from t_galeria where oidpor=" . $id );
			$rsG = $rs->result ();
			foreach ( $rsG as $fila ) {
				$arr [0] = $fila->oid;
				$arr [1] = $fila->imagen;
				$this->eliminarGaleria ( $arr );
			}
			return "<h4>Se elimino con exito</h4>";
		}
		return "<h4>No se elimino</h4>";
	}
	function listaSerie() {
        $cabe = array ('Id','Nombre','Resumen','Descripcion','Fecha','Estatus');
		$query = 'SELECT *,if(estatus=0,"Activo","Inactivo")as est FROM t_portafolio order by fecha desc ;';
		$tipo = $this->db->query ( $query );
		$obj = array ();
		$cant = $tipo->num_rows ();
		if ($cant > 0) {
			$rsTip = $tipo->result ();
			foreach ( $rsTip as $fila ) {
				$cuep[] = array ($fila->id,$fila->titulo,$fila->resumen,$fila->descrip,$fila->fecha,$fila->est);
			}
			$obj[] = array ("cabecera" => $cabe,"cuerpo" => $cuep);
		} else {
			$obj = array ("msj" => 0);
		}
		
		return json_encode ( $obj );
	}
	function cmbSerie() {
		$zona = $this->db->query ( 'Select * from t_portafolio' );
		$rs = $zona->result ();
		$lista = array ();
		
		foreach ( $rs as $fila ) {
			$lista [$fila->id] = $fila->titulo;
		}
		return json_encode ( $lista );
	}

    /*
     * funciones para empresa
     */
    function registrarEmpresa($arr){
        $ban = $this->db->insert ( 't_empresa', $arr );

        if ($ban) {
            return "<h4>Se regristro con exito</h4>";
        }
        return "<h4>No se pudo registrar</h4>";
    }

    function listaEmpresa() {
        $cabe = array ('Id','Empresa','Imagen','nombre');
        $query = 'SELECT * FROM t_empresa;';
        $tipo = $this->db->query ( $query );
        $obj = array ();
        $cant = $tipo->num_rows ();
        if ($cant > 0) {
            $rsTip = $tipo->result ();
            foreach ( $rsTip as $fila ) {
                $rImg = '<img src="' . __IMG__ . 'empresa/' . $fila->imagen . '" width=100></img> ';
                $cuep[] = array ($fila->id,$fila->nombre,$rImg,$fila -> imagen);
            }
            $obj[] = array ("cabecera" => $cabe,"cuerpo" => $cuep);
        } else {
            $obj = array ("msj" => 0);
        }

        return json_encode ( $obj );
    }

    function listarEmpresa(){
        $query = 'Select * From t_empresa';
        $consulta = $this -> db -> query($query );
        $cant = $consulta -> num_rows();
        if($cant > 0){
            $porta = $consulta -> result();
        }else{
            $porta = 0;
        }
        return $porta;
    }

    function eliminarEmpresa($arr){
        if ($this->db->query ( "DELETE FROM t_empresa WHERE id=" . $arr [0] )) {
            $archivo = BASEPATH . 'img/empresa/' . $arr [1];
            if (file_exists ( $archivo )) {
                if (unlink ( $archivo ))
                    $msj = "<h4>El archivo fue borrado</h4>";
                else
                    $msj = "<h4>El archivo no fue borrado</h4>";
            } else
                $msj = "<h4>El archivo no existe</h4>";
            $archivo = BASEPATH . 'img/empresa/medio/' . $arr [1];
            if (file_exists ( $archivo )) {
                if (unlink ( $archivo ))
                    $msj = "<h4>El archivo fue borrado</h4>";
                else
                    $msj = "<h4>El archivo no fue borrado</h4>";
            } else
                $msj = "<h4>El archivo no existe</h4>";
        } else {
            $msj = "<h4>No se elimino</h4>";
        }
        return $msj;
    }
}
?>