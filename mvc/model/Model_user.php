<?php

include_once("model/User.php");

class Model_user {
	public function create_user($username, $groupname, $folder, $passw, $department)
	{
		$usuario=new User($username, $groupname, $folder, $passw, $department);
		echo "Before passtrhu";
		print_r($usuario);
		passthru('sudo ./add_user.sh '.$usuario->username.' '.$usuario->groupname.' '.$usuario->folder.' '.$usuario->passw.' '.$usuario->department , $retorno);
		echo "retorno de passthru add_user: ".$retorno;		
#		passthru('sudo ./change_password.sh '.$usuario->nom_user.' '.$usuario->passw, $retorno);
#		echo "retorno de passthru change password: ".$retorno;
#		passthru('sudo samba-tool user add '.$usuario->username.' --random-password', $retorno);
#		echo "retorno de passthru: ".$retorno;
		
		return $retorno;
	}
	public function list_user()
	{
		//echo "Model_user -> list_user()";
		passthru("./list_users.sh");
		$file = new SplFileObject("users.txt");
		// Loop until we reach the end of the file.
		while (!$file->eof()) {
			// Echo one line from the file.
			$u=$file->fgets();
			$u1=explode("@", $u);
			$passw='';
			$resultat_list[$u1[0]] = new User($u1[0], $u1[1], $u1[2], $passw);
		}
		//echo "Array generat a Model_user -> list_user()";
		//print_r($resultat_list);
		$file=null;
		return $resultat_list;
	}
	public function delete_user($username)
	{
		$usuario=new user($username, '', '', '');
		passthru("sudo ./deluser.sh ".$usuario->username, $retorno);
		echo "retorno de passthru: ".$retorno;
	}
}

?>