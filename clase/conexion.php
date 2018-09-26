<?php
	class Conection
	{
		private $host;
		private $user;
		private $password;
		private $bbdd;
		public $conexion;

		function __construct($host,$user,$password,$bbdd)
		{
			$this->host = $host;
			$this->user = $user;
			$this->password = $password;
			$this->bbdd = $bbdd;
			$this->conexion = new mysqli($host,$user,
				$password,$bbdd);

			if($this->conexion->errno){
				echo ("hubo un error al conectar con 
					la base de datos".$this->conexion->error);
				die();
			}
		}
		public function verificar_usuario($query,$parametro1){
			 $result = $this->conexion->query($query);
			 if($result->num_rows > 0){
			 	while ($row = $result->fetch_object()){
					if($row->pass == $parametro1){
						/*
						session_start();
						
						$_SESSION['id'] = $row->id;
						$_SESSION['usuario'] = $row->usuario;
						$_SESSION['contraseña'] = $row->usuario;
						header("Location: ../Geometry_dash/index.php");
						*/
						echo "<p> Welcome Welcome!<p>";
						echo "<p>Id : <b><u>".$row->id."</u></b> </p>";
						echo "<p>Nombre : <b><u>".$row->nombre."</u></b> </p>";
						echo "<p>Contraseña : <b><u>".$row->pass."</u></b> </p>";

					}else{
						echo "el usuario o la contraseña no coinciden. <br>";
						echo "<input type='button' value='volver' onclick='javascript:history.back();'> ";
					}
				}
			 }else{
			 	echo "el usuario o la contraseña no existe.<br>";
			 	echo "<input type='button' value='volver' onclick='javascript:history.back();'> ";
			 }	
		}

}
	

?>