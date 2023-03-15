<?php
namespace src\interfaces;
use src\component\Notificacao;
interface INotificacao{

    public function enviarNotificacao(Notificacao $notificacao);
}
?>