<?php
# alumno.php
class Venta{
	private $pdo;
    
    public $id;
    public $id_cliente;
    public $id_producto;
    public $cantidad;
    public $importe;

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
			$stm = $this->pdo->prepare("SELECT * FROM ventas");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function Graficar(){
		try{
			$result = array();
			$stm = $this->pdo->prepare("SELECT id_producto,sum(cantidad) as cantidad FROM ventas group by id_producto");
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
			          ->prepare("SELECT * FROM ventas WHERE id = ?");
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
			            ->prepare("DELETE FROM ventas WHERE id = ?");			          

			$stm->execute(array($id));
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	public function Actualizar($data){
		try{
			$sql = "UPDATE ventas SET 
						id_cliente          = ?, 
                        id_producto         = ?,
                        cantidad          = ?, 
                        importe          =?
				    WHERE id = ?";
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->id_cliente, 
                        $data->id_producto,
                        $data->cantidad,
                        $data->importe,
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
		$sql = "INSERT INTO ventas (id_cliente, id_producto, cantidad, importe) 
		        VALUES (?, ?, ?, ?)";
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_cliente,
                    $data->id_producto,
                    $data->cantidad,
                    $data->importe
                )
			);
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
}