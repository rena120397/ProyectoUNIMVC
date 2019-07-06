<?php
# alumno.php
class Producto{
	private $pdo;
    
    public $id;
    public $nombre;
    public $precio;

	#=================
	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::Iniciar();     
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	public function Listar(){
		try{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM productos");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	public function Obtener($id){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM productos WHERE id = ?");
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	public function Eliminar($id){
		try{
			$stm = $this->pdo
			            ->prepare("DELETE FROM productos WHERE id = ?");			          

			$stm->execute(array($id));
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	public function Actualizar($data){
		try{
			$sql = "UPDATE productos SET 
						nombre         = ?, 
						precio        = ?
				    WHERE id = ?";
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->precio,
                        $data->id
					)
				);
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
#=================
	public function Registrar($data){
		try{
		$sql = "INSERT INTO productos (nombre,precio) 
		        VALUES (?, ?)";
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->precio
                )
			);
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
}