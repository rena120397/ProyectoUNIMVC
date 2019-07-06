<?php
# alumno.php
class Cliente{
	private $pdo;
    
    public $id;
    public $ruc;
    public $nombre;

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
			$stm = $this->pdo->prepare("SELECT * FROM clientes");
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
			          ->prepare("SELECT * FROM clientes WHERE id = ?");
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
			            ->prepare("DELETE FROM clientes WHERE id = ?");			          

			$stm->execute(array($id));
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	public function Actualizar($data){
		try{
			$sql = "UPDATE clientes SET 
						ruc          = ?, 
						nombre        = ?
				    WHERE id = ?";
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->ruc, 
                        $data->nombre,
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
		$sql = "INSERT INTO clientes (ruc,nombre) 
		        VALUES (?, ?)";
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->ruc,
                    $data->nombre
                )
			);
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
}