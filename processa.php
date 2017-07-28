<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="icon" type="image/png" href="img/logo.png" />
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Gabriel Lima - Desenvolvedor</title>
            <link rel="stylesheet" href="css/app.css" />
            <link rel="stylesheet" href="css/style.css" />
    </head>
    <body class="body">
        <div class="col-md-12 col-sm-12 br">
            <center><img class="img-responsive centro " src="img/gif.gif"></center>
        </div>
        <script src="js/my.js"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/workaround.js"></script>
        <?php
             
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
                session_start();
              
                if(empty($nome)){
                    $_SESSION['erro'] = "Campo nome não foi preenchido!";
                     header("Location:index.php");
                } else if(empty($email)){
                    $_SESSION['erro'] = "Campo email não foi preenchido!";
                     header("Location:index.php");
                } else if(empty($mensagem)){
                    $_SESSION['erro'] = "Campo mensagem não foi preenchido!";
                     header("Location:index.php");
                } if((!empty($nome)) && (!empty($email)) && (!empty($mensagem))){
		
                    require 'vendor/autoload.php';

                    $from = new SendGrid\Email(null, $email);
                    $subject = "Mensagem de contato pelo portfolio";
                    $to = new SendGrid\Email(null, "gabrielveigalima@icloud.com");
                    $content = new SendGrid\Content("text/html", "Olá Gabriel, <br><br>Nova mensagem de contato pelo portfolio<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
                    $mail = new SendGrid\Mail($from, $subject, $to, $content);

                    //Necessário inserir a chave 
                    

                    $apiKey = '';

                    $sg = new \SendGrid($apiKey);

                    $response = $sg->client->mail()->send()->post($mail);

                    if($response){
                        //echo "Mensagem enviada com sucesso mec";

                        $_SESSION['sucesso'] = "Email enviado com sucesso, em breve estarei respondendo!";
                        header("Location:index.php");
                    }else{
                        $_SESSION['erro'] = "Email não enviado, tente novamente!";
                        header("Location:index.php");
                    }
                }
           header("Location:index.php");     
        ?>
        
    </body>
</html>