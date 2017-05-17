<?php 
    /*
        Este é o arquivo para o qual será feita a 
        requisição pelo método POST para salvar as 
        mensagens enviadas para o chat.

        Dentro de $_POST deverão vir os seguintes 
        índices: 'color', com a cor da mensagem e 
        'message', com o texto da mensagem.

        Ńão é necessário escrever ou retornar nada 
        neste arquivo, já que a requisição para ele 
        é feita de forma assíncrona.
    */

    include "functions.php";    // Consulte "getMessages.php"

    $fileName = 'messages';     // Consulte "getMessages.php"

    $messages = array();
    if (file_exists($fileName)) {
        // se o arquivo de mensagens existir, deve colocar em
        $v = file_get_contents($fileName);
        $messages = unserialize($v);
        file_put_contents($v, serialize($messages));
        var_dump($messages);

        // $messages seu conteúdo desserializado (sugestão)
    }

    // Neste ponto, o script deve salvar, no array $messages, 
    // a nova mensagem que foi enviada; cada mensagem deve ser 
    // um array, com três índices: 'time', 'text' e 'color', 
    // que representam o timestamp, o conteúdo da mensagem e 
    // a cor da mesma, respectivamente. O timstamp deve ser 
    // salvo em milissegundos, e pode ser obtido através da 
    // função millitime(), disponível em "functions.php".

    // Após salvar a mensagem, não esqueça de salvar o array 
    // $messages serializado no arquivo (sugestão para 
    // persistência - você sempre pode usar um banco de dados)


?>