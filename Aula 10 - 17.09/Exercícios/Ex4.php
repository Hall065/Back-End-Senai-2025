<?php
interface Notificacao {
    public function enviar($mensagem);
}

class Email implements Notificacao {
    public function enviar($mensagem) {
        echo "📧 Enviando Email: {$mensagem}\n";
    }
}

class Sms implements Notificacao {
    public function enviar($mensagem) {
        echo "📱 Enviando SMS: {$mensagem}\n";
    }
}

// Função que aceita QUALQUER tipo de notificação
function notificar(Notificacao $notificacao, $mensagem) {
    $notificacao->enviar($mensagem);
}

// Teste
notificar(new Email(), "Seu pedido foi confirmado!");
notificar(new Sms(), "Seu pedido saiu para entrega!");
