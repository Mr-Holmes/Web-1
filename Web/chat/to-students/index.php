
<?php 
$cor = array("blue", "red", "yellow", "green");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <script src="jquery-3.2.1.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
            font-size: 20px;
        }
        #main {
            width: 90%;
            height: 400px;
            overflow-y: scroll;
            margin: auto;
            margin-top: 50px;
            padding: 50px;
            border: 1px solid #333;
        }
        #form {
            border: 1px solid #333;
            margin-top: 10px;
            width: 90%;
            margin: auto;
            padding: 10px;
        }

        #form input, #form select {
            margin: 0;
            padding: 10px;
        }
        #message {
            width: 90%;
        }
        #send {
            width: 10%;
        }
        #color {
            width: 100%
        }
    </style>
</head>
<body> 

    <div id="main"></div>
    <form id="form" action="#">
        <input type="text" id="message" name="message" placeholder="Digite sua mensagem">
        <input type="submit" id="send" value="ok">
        <select id="color">
            <option>Escolha uma Cor</option>
            <option value="blue" id="cblue"> Azul </option>
            <option value="red" id="cred"> Vermelho </option>
            <option value="orange" id="corange"> Laranja </option>
        </select>
        <!--
            Crie um select com algumas opções de cores. Os valores das
            cores devem estar nos atributos "value", e este elemento
            deve ter tanto nome quanto id.
        -->
    </form>
    <script>
        $(document).ready(function() { // isto garante que essa função só será executada quando o DOM estiver pronto

            // Esta é uma utilização do jQuery para alterar algumas cores
            // quando o usuário escolher um valor no select - lembre de
            // alterar o id na chamada para corresponder ao id colocado no elemento.
            $('#color').on('change', function(evt) {
                var color = $(this).val();
                $(this).css('color', color);
                $('#message').css('color', color);
            });

            var last = 0;   
            var last = new Date().getTime();
            // Esta variável deve salvar a data do último timestamp
                            // para o qual foram pedidas mensagens ao servidor. Deve
                            // ser atualizada dentro da função processAjax

            // Código em jQuery para enviar o formulário de forma
            // assíncrona (ou seja, sem recarregar a página)
            $('#form').on('submit', function(evt) {
                evt.preventDefault();
                $.post(
                    'sendMessage.php',
                    $(this).serialize()
                );
                $('#message').val('');
            });

            // Esta função faz uma requisição assíncrona ao arquivo
            // getMessages.php, passando pelo método GET o índice "lastTime",
            // com o valor da variável last declarada acima

            function getMessages() {
                $.get('getMessages.php?lastTime=' + last, function(data) {
                    processAjax(data);
                });
            
            setInterval(getMessages,1000);

            // Chame a função getMessages declarada acima a cada 1 segundo.



            // Esta função recebe uma String, que deve ser transformada em
            // um JSON. Como este dado vem do servidor, e considerando o
            // formato que foi definido, o objeto resultante deve ter dois
            // atributos: 'lastTime' (um inteiro, com o timestamp) e
            // 'messages' (um array de objetos, cada um desses objetos com
            // os três atributos - 'time', 'color' e 'text')
            function processAjax(data) {
                // Utilize JSON.parse para criar um objeto a partir de uma string
                // json.Parse(['lastTime' => $lastime, 'messages' => $messages]);
                // Atualize a variável "last", para conter o timestamp que será
                // passado ao servidor.

            // $.get('test.php?data=' + JSON.stringify(obj), function(result) {
                // var obj = JSON.parse(result);
                // console.log(obj);


            $.get('getMessages?data=' + JSON.stringify(obj), function(result) {
                var obj = JSON.parse(result);
            }
                // document.getElementById('send').addEventListener('click', function{
                //         var msg = document.getElementById('message').value;
                //         var last = document.getElementById('last').value;
                //         var obj = {'message' : msg,  'last' :  last};

                        // $.get('getMessages?')
                // });
            }


            
            // Esta é uma sugestão de função que recebe uma array de mensagens
            // (lá do JSON) e adiciona estas mensagens dentro da div #main.
            // Você pode chamar esta função dentro da função processAjax
            function addMessages(messages) {
            }
        }

    });
    </script>
</body>
</html>