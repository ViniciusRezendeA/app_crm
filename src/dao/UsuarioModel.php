<?php
 namespace src\dao;
 use src\component\Log;
 use src\component\Notificacao;
 use src\BD;
 use src\interfaces\ICadastro;
 use src\interfaces\Ilog;
 use src\interfaces\INotificacao;
 class UsuarioModel extends BD implements ICadastro,Ilog,INotificacao{
    public function salvar(){

    }
    public function registrarLog(Log $log){

    }
    public function enviarNotificacao(Notificacao $notificacao){

    }
}