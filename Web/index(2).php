<html>
    <head>

    </head>
    <body>
        <p id="tempo"></p>
        <script>
            var tempo = document.getElementById('tempo');
            tempo.innerHTML = new Date('<?php echo date('Y-m-d H:i:s'); ?>');
            // setInterval(function() {
            //     tempo.innerHTML = new Date();
            // }, 1000);
        </script>
    </body>
</html>