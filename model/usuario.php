<?php
# usuario.php
class Usuario{
	private $pdo;
    
    public $id;
    public $login;
    public $password;

	#=================
	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::Iniciar();     
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	#=================
	public function Obtener($login,$password){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuarios WHERE login = ? and password = ?");
			$stm->execute(array($login,$password));
			return $stm->fetch(PDO::FETCH_OBJ);
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
}