<html>
      <head>
         <meta http-equiv="X-UA-Compatible" content="IE=Edge">
         <title>Pegar Imagens de vídeos no - Youtube</title>
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https: //fonts.googleapis.com/css2?family= Open família= Open+Sans:ital,wght@0,400;0,700;1,300 & display=swap" rel="stylesheet">
	      <link href="style.css" rel="stylesheet"/>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="author" content="Norian Henrique - NADSistemas">
         <meta name="keywords" content="pegar imagens, web, selecionar imagens, pegar imagens youtube, pegar imagens de vídeos do youtube">
         <meta name="description" content="Website de pegar imagens na internet - Selecionar sua imagem do Youtube - Pegar imagens de vídeos do Youtube">
         <meta name="robots" content="index/follow">
         <meta property="og:title" content="Website de pegar imagens na internet - Selecionar sua imagem do Youtube - Pegar imagens de vídeos do Youtube">
         <meta property="og:site_name" content="NADSistemas">
         <meta property="og:description" content="Website de pegar imagens na internet - Selecionar sua imagem do Youtube - Pegar imagens de vídeos do Youtube.">
         <meta charset="UTF-8">
         <link rel="icon" href="icone.ico" type="image/x-icon"/>
      </head>

          <body>

        <div class="texto-chamada">
           <div class="center">
             <h1>Pegar Thumbnail direto do Youtube </h1>
             <p>Pegue thumbnails de vídeos no Youtube </br>
</br>
              Basta inserir no formato na URL abaixo:</br>
</br>
</br>
              <b>http://www.youtube.com/watch?v=erLk59H86ww</b>
</br>
             

             </p>

              <form method="post">
                    <input type="text" name="url"/>
                    <input type="submit" name="acao" value="Pegar seu Thumbnail"/>
              </form>

              <?php
                  
                  if(isset($_POST['acao'])){
                      $url = $_POST['url'];

                      $videoCode = explode('=',$url);
                      //echo $videoCode[1];

                      /*

					https://img.youtube.com/vi/<insert-youtube-video-id-here>/default.jpg

					For the high quality version of the thumbnail use a URL similar to this:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/hqdefault.jpg

					There is also a medium quality version of the thumbnail, using a URL similar to the HQ:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/mqdefault.jpg

					For the standard definition version of the thumbnail, use a URL similar to this:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/sddefault.jpg

					For the maximum resolution version of the thumbnail use a URL similar to this:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg

				*/
         
        //header('Location:https://pegar-imagens-youtube.nadsistemas.com/?code='.$videoCode[1]); 
        echo '<script>window.location.href="https://pegar-imagens-youtube.nadsistemas.com/?code='.$videoCode[1].'"</script>';    
        die();
        
			}else if(isset($_GET['code'])){
				echo '<h2>Sua Thumbnail:</h2>';
				echo '<br/>';
				echo '<img src="https://img.youtube.com/vi/'.$_GET['code'].'/maxresdefault.jpg" />';
     
			}
       
		?>
                <p>Este projeto foi criado por Norian Henrique da <a target="_blank" href="https://nadsistemas.com/">NADSistemas</a></p>
           </div>
        </div>
        </body>
</html>