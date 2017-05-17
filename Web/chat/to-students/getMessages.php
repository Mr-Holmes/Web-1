<?php 
    /*
        O chat fará requisições periódicas para este arquivo, a fim de 
        recuperar as mensagens que foram trocadas.

        Este arquivo deve receber, pelo método GET, uma variável 
        "lastTime", que indica a partir de qual tempo as mensagens 
        devem ser carregadas.

        Deve retornar um JSON contendo dois atributos: 'lastTime', 
        com o timestamp desta requisição (assim, nas próximas requisições, 
        o cliente só vai requisitar as mensagem que chegarem a partir 
        deste momento), e um atributo 'messages', contendo um array de 
        mensagens; cada mensagem nesse array deve ter três atributos: 
        'color', com a cor da mensagem, 'time', com o timestamp da 
        mensagem (o mesmo que será utilizado para comparação, na função 
        filter_messages (functions.php)) e 'message', com o conteúdo da 
        mensagem.
    */

    include "functions.php";    // Esta linha inclui o arquivo com as 
                                // funções neste arquivo - isso significa 
                                // que, daqui pra frente neste script, 
                                // qualquer função definida naquele arquivo 
                                // pode ser usada.

    $fileName = 'messages';     // variável para guardar o nome do arquivo 
                                // onde o array serializado das mensagens será salvo

    // $lastTime = ...;     // pega o valor de 'lastTime', passado pelo método GET

    $last = $_GET['last'];
    $lastTime = $last;

    $messages = array();

    if (file_exists($fileName)) {

        $v = file_get_contents($fileName);
        $messages = unserialize($v);
        // se o arquivo de mensagens existir, deve colocar em 
        // $messages seu conteúdo desserializado (sugestão)
    }

    // isset(var)
    $arr = json_encode(['lastTime' => $lastime, 'messages' => $messages]);

    // Aqui deve ser impresso o conteúdo do JSON


?>