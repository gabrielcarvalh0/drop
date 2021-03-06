

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Global Prêmios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="HTML5 website template">
    <meta name="keywords" content="global, template, html, sass, jquery">
    <meta name="author" content="Bucky Maler">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="assets/img/logo.png" rel="shortcut icon" type="image/png">
</head>

<body>

    <!-- notification for small viewports and landscape oriented smartphones -->
    <div class="device-notification">
        <a class="device-notification--logo" href="#0">
            <p>Global Prêmios</p>
        </a>
    </div>

    <div class="perspective effect-rotate-left">
        <div class="container">
            <div class="outer-nav--return"></div>
            <div id="viewport" class="l-viewport">
                <div class="l-wrapper">
                    <header class="header">
                        <a class="header--logo" href="#0">
                            <img src="assets/img/logo.png" alt="Global">
                            <p>Global Prêmios</p>
                        </a>

                    </header>
                    <li class="l-section section section--is-active">
                        <div class="intro">
                            <div class="intro--banner">
                                <h2>VOCÊ GANHOU <?php echo $desconto ?> DE DESCONTO! 🥳</h2>

                                <h1></h1>
                                <form class="form-inline">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <div class="mb-4">
                                            <h2 id="id-relogio-1" class="escr"><?php echo $descricao ?></h2>

                                        </div>

                                        <img class="xio" src="assets/img/<?php echo $img ?>" alt="Global">
                                          <a href="" id="whatsapp-02" class="conf btn-esp btn btn-primary mb-20" rel="nofollow" target="_blank">Garantir o produto</a>  


                                    </div>
                                    <h1></h1>
                                </form>
                            </div>
                        </div>
                    </li>

                </div>
            </div>
        </div>
    </div>

</body>
<script>
    //Constrói a URL depois que o DOM estiver pronto
    document.addEventListener("DOMContentLoaded", function() {
        //conteúdo que será compartilhado: Título da página + URL
        var conteudo = encodeURIComponent(document.getElementById("id-relogio-1").innerText + " " + window.location.href);

        //altera a URL do botão
        document.querySelector("#whatsapp-02").href = "https://api.whatsapp.com/send?phone=5514996159827&text=" + 'Xiome redmi 9' + "&app_absent=0";


    }, false);
</script>

</html>