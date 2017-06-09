<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Passatempos Vulcano</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/colorbox.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- <script src="js/jquery-validation-1.14.0/lib/jquery.js"></script>
    <script src="js/jquery-validation-1.14.0/dist/jquery.validate.js"></script>
    <script src="js/jquery-validation-1.14.0/dist/additional-methods.js"></script>
    <script src="js/jquery-validation-1.14.0/dist/localization/messages_pt_PT.js"></script>
    <script src="js/jquery-validation-1.14.0/validation_rules.js"></script>-->

  </head>
  <body>
  
    <div class="wrapper col-md-10 col-xs-10 col-sm-10 col-md-offset-1 col-xs-offset-1 col-sm-offset-1 ">
      <div class="logo-mobile"><img src="imgs/logo-vulcano.png" alt=""></div>
      <div class="row">
        <header id="header" class=" col-md-12 col-xs-12 col-sm-12">
          <div class="dash"><p>Ganha 1 Casa Ecológica</p></div>
          <div class="logo-desktop"><img src="imgs/logo-vulcano.png" alt=""> </div>

          
        </header><!-- /header -->

        <div class="content col-md-12 col-xs-12 col-sm-12">

             <?php if (!isset($_GET['status'])) { ?>
            <div class="text-content col-md-8 col-xs-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
              <h1>passatempo dia da criança e dia do ambiente</h1>
              <div class="info-content">
              <p>A Vulcano está a celebrar o Dia da Criança e o Dia do Ambiente e desafia pais e filhos a criar um porquinho mealheiro apenas com materiais recicláveis: embalagens de plástico ou de cartão,
                garrafas, tampas, jornais e revistas, entre outros.</p>
                
                <div style="float:left;">
                  <p class="left-paragraph">


                  

                  O porquinho mealheiro mais original ganha uma Casa Ecológica.

                  Se já ouviste falar em energia solar, energia do vento ou reações eletroquímicas este prémio  é perfeito para ti. A Casa Ecológica é uma verdadeira amiga do ambiente que te vai ensinar, passo  por passo, como transformar, armazenar   e utilizar a nossa energia renovável. 

                  </p>

                  <p class="right-paragraph">
                    <img src="imgs/casa_gr.png"> 
                    
                  </p>

                </div>

                <p>
                  Agora só tens de usar a tua energia para ganhares este passatempo!  <br><br>

                  Pede aos teus pais para preencherem os dados e enviarem-nos a fotografia do teu porquinho mealheiro criado com materiais recicláveis.



                </p>
              </div>

               <form action="submit.php" method="post"  onsubmit="return validateForm()" enctype="multipart/form-data">
                <ul>
                  
                  <li>
                    <input name="nome" class="nome" id="nome" placeholder="Nome">
                  </li>

                  <li>
                    <input name="email" class="email" id="email" placeholder="E-mail">
                  </li>
                  <li>  <!-- -->
                            <!-- <img src="img/enviar.png" alt=""> -->
                            <div id="yourBtnCV" onclick="getFileCV()">
                              <img src="imgs/bt-upload.png" alt="">
                            </div><div id="pathCV"></div>
                            <!-- <div style='height: 0px;width: 0px; overflow:hidden;'><input name="cv" id="upfileCV" type="file" value="upload" /></div> -->
                            <div style='height: 0px;width: 0px; overflow:hidden;'><input name="imagem" id="upfile" type="file" value="upload" onchange="subCV(this)" /></div>
                            <p class="ast" > </p> 
                  </li>
                  <li class="pre-disclamer">
                    <p class="disclamer">A leitura e aceitação dos termos constantes do presente Regulamento Específico, não dispensam a consulta e aceitação 
do Regulamento Geral de Passatempos disponível <a href="https://www.facebook.com/VulcanoPortugal/app/924626224245221/" target="_blank">aqui</a></p>
                  </li>

                  <li>
                   <input type="checkbox" name="accept" value="" id="accept" >
                        <label for="accept">Li e concordo com o <a href="regulamento.pdf" class="regulamento bold link">Regulamento Específico do Passatempo Dia da Criança e Dia do Ambiente</a>.</label>
                  </li>
                  <li>
                    <input type="image" src="imgs/bt-send.png" alt="Enviar" >
                  </li>


                </ul>
            </form>
             <div class="errorMessageZone"></div>
            </div>
            <?php } else {  ?>
              <div class="text-content col-md-8 col-xs-8 col-sm-8 col-md-offset-2 col-xs-offset-2 col-sm-offset-2">
                
                <h1>OBRIGADO PELA SUA PARTICIPAÇÃO!</h1>
                    <p class="desc">
                    <!-- As três fotos consideradas mais originais receberão uma Sorveteira.
Os vencedores serão anunciadas no dia 25 de agosto no Facebook da Vulcano. -->

                    </p>
                    </div>
          <?php  }

            ?>
           

        </div>
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.colorbox.js"></script>

    <script src="js/custom.js"></script>

    <div id="fb-root"></div>
        <script src="https://connect.facebook.net/en_US/all.js"></script>
        <script>
        FB.init({
        appId : '<?php echo APP_ID?>',
        status : true, // check login status
        cookie : true, // enable cookies to allow the server to access the session
        xfbml : true // parse XFBML
        });

        window.fbAsyncInit = function() {
        //FB.Canvas.setSize({ height: 1140 });
        FB.Canvas.setAutoGrow(7);
        }

           
            function streampublish_popup(){

                
            FB.ui({
                method: 'feed',
                name: '<?php echo FB_TITLE_SHARE ?>',
                link: '<?php echo FB_PAGE_URL ?>',
                description: '<?php echo FB_TEXT_SHARE ?>',
                message: '<?php echo FB_TEXT_SHARE ?>',
                picture:'<?php echo FB_IMG_SHARE ?>'
                    }
                );
            }

          

</script>  
  </body>
</html>