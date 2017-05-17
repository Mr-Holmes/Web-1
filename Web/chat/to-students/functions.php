<?php 

// Função filtra as mensagens que têm um timestamp (atributo time) anterior ao que é passado no segundo argumento
function filter_messages($messages, $lastTime) {
    return array_filter($messages, function($el) use ($lastTime) {
        if ($el['time'] < $lastTime) {
            return false;
        }
        return true;
    });
}

// Função que retorna a quantidade de millisegundos desde 1/1/1970 (quase equivalente a "new Date().getTime()" em JavaScript)
function millitime() {
    return round(microtime(true) * 1000);
}

?>