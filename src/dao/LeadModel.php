<?php
 namespace src\dao;
 use src\component\Log;
 use src\component\Notificacao;

 use src\BD;
 use src\interfaces\ICadastro;
 use src\interfaces\INotificacao;

 class LeadModel extends BD implements ICadastro,INotificacao{
    public function salvar(){

    }
   
    public function enviarNotificacao(Notificacao $notificacao){

    }
 
}