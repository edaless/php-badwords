<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/a523a9c105.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

    <!-- Ajax -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script> -->
    <!-- Vue -->
    <!-- <script src="https://unpkg.com/vue@3"></script> -->
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="CSS/style.css"> -->
    <!--gfont-->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!--roboto -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->
</head>



<body>
    <!-- 

1. Creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza. 
2. Una parola da censurare viene passata dall'utente tramite parametro GET: 
	- Stampare di nuovo il paragrafo e la sua lunghezza, 
    dopo aver sostituito con tre asterischi tutte le occorrenze della parola da censurare. 
-->



    <p>
        <?php

        // parte 1 
        $paragrafo = "
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Soluta hic saepe a impedit aperiam! Itaque, doloremque quisquam officiis,
        eos officia voluptate quam quos illum repellendus aliquam placeat omnis tempora laboriosam?";
        echo nl2br($paragrafo);
        // nl2br fa sì che quando vado a capo nel documento va a capo anche nell'output, fonte: stack overflow
        echo nl2br("

        in totale sono: " . strlen($paragrafo) . " caratteri");


        // parte 2

        $parolaccia = $_GET["badWord"];
        echo nl2br("

        per aggiungere la parola da censurare aggiungere: /?badWord=

        parolaccia: " . $parolaccia);


        $nuovoParagrafo = str_replace($parolaccia, "***", $paragrafo);

        echo nl2br("
        " . $nuovoParagrafo);


        echo nl2br("

        in totale sono: " . strlen($nuovoParagrafo) . " caratteri");



        ?>
    </p>









    <!-- mio js -->
    <!-- <script type="text/javascript" src="JS/functions.js"> -->
    <!-- </script> -->
    <!-- <script type="text/javascript" src="JS/main.js"> -->
    <!-- </script> -->
    <!-- js BootStrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> -->


</body>

</html>