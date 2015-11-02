<?php

require 'model/UsersModel.php';

class UsersController {

    // Função responsável por retornar todos os professores
    public function retrieve() {
        $users = UsersModel::find('all',array('order' => 'username'));
        $retorno = array();
        foreach($users as $key => $value ) {
            $obj['id'] = $value->id;
            $obj['username'] = $value->username;
            $obj['password'] = $value->password;
            $retorno[] = $obj;
        }
        return $retorno;
    }

	public function login($username,$password){
		$user = UsersModel::all(array('conditions' => array('username = ? AND password = ?',$username,$password)));
		if($user != null){
		  return true;
		}
		else{
		  return false;
		}
	}
	

	/*
	public function retrieveSenha($matricula, $email) {
		$esqueceu = UsuariosModel::find("all", array("conditions" => "matricula = ? AND email = ? ",$matricula, $email));
		
		if($esqueceu != null)
		{
			return $esqueceu->nome;
		}
		else
		{
			return "";
		}
    }*/
	
	public function changePassword($username, $newpassword)
	{
		$change = UsersModel::find("all", array("conditions" => "username = ?",$username));
		if($change != null)
		{
			$change->password = $newpassword;
			$change->update_attributes($change);
			return true;
		}
		else
		{
			return false;
		}
	}
}