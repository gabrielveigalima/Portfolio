<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
            <link rel="icon" type="image/png" href="img/logo.png" />
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Gabriel Lima - Desenvolvedor</title>
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/app.css" />
            <!-- Efeito de rolagem -->
            <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
            <script>
                    jQuery(document).ready(function($) { 
                            $(".gabriel").click(function(event){        
                                    event.preventDefault();
                                    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 900);
                       });
                    });
            </script>
            <script src="js/javascriptpersonalizado.js"></script>
            <script src="js/ie-emulation-modes-warning.js"></script>
    </head>
    <!-- Olá, meu código está endentado certinho qualquer dúvida entre em contato comigo.-->
    <body class="body">
            <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="imgTopBar"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a class="gabriel" href="#inicio">Início</a></li>
                <li><a class="gabriel" href="#trabalhos">Trabalhos</a></li>
                <li><a class="gabriel" href="#sobre">Sobre</a></li>
                <li><a class="gabriel" href="#contatos">Contatos</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <div class="row">
                    <a id="inicio"></a>
        </div>
                <div class="col-md-4 col-sm-12 centro br">
                    <img src="img/eu.gif" class="img-responsive centro " >
                    <h2 class="branco centro">Gabriel Lima</h2>
                </div>
                <div class="col-md-2 ">  </div>
                <div class="col-md-4 col-sm-12 centro br">
                    <img src="img/logo.png" class="img-responsive centro" >
                </div>
        <div class="row">
                    <a id="trabalhos"></a>
        </div>
                    <div class="col-md-12 centro">
                        <h1 class="branco">Trabalhos</h1><br>
                        <div class="col-sm-12 centro">
                            <h3 class="branco">Cacholas</h3>
                            <a class="col-sm-12 centro " href="http://cacholas.com.br/" target="blank" class="centro"><img class=" img-responsive" src="img/cacholas.png"></a>
                        </div>
                    </div>
        <div class="row">
                    <a id="sobre"></a>
                    <br>
        </div>
        <div class="container" style="margin-top: 60px;">
                    <h1 class="branco centro">Sobre</h1><br>
                    <h3 class="branco centro">Programador, Técnico de Informática pelo Senac. </h3>
                    <h4 class="branco centro">Blog: <a target="blank" href="http://ideiatec.blogspot.com/">http://ideiatec.blogspot.com</a></h4><br>
                    <h4 class="branco centro">Github: <a target="blank" href="https://github.com/gabrielveigalima"><img src="img/github.png" class="imgTopBar"> https://github.com/gabrielveigalima </a></h4>
                    <div class="col-md-6 centro">
                        <ul class="li centro ">
                            <h3 class="branco">Linguagens de Programação</h3>
                            <li><a class="btn btn-primary btnli" data-toggle="modal" data-target="#html">HTML</a></li>
                            <li><a class="btn btn-primary btnli" data-toggle="modal" data-target="#css">CSS</a></li>
                            <li><a class="btn btn-primary btnli" data-toggle="modal" data-target="#php">PHP</a></li>
                            <li><a class="btn btn-primary btnli" data-toggle="modal" data-target="#javase">Java SE</a></li>
                            <li><a class="btn btn-primary btnli" data-toggle="modal" data-target="#javaee">Java EE</a></li>
                            <li><a class="btn btn-primary btnli" data-toggle="modal" data-target="#mysql">MySQL</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        
                        <ul class="li centro">
                            <h3 class="branco">Framework</h3>
                            <li class="branco"><a class="btn btn-primary btnli" data-toggle="modal" data-target="#foundation">Foundation</a></li>
                            <li class="branco"><a class="btn btn-primary btnli" data-toggle="modal" data-target="#bootstrap">Bootstrap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 br centro">
                    <h2 class="branco">Certificação:</h2>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#it"><h4>Cisco it essentials</h4></a><br><br>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#ccna"><h4>Cisco CCNA administrador de redes</h4><a><br><br>
                    <a class="btn btn-primary" target="blank" href="certificadoJavaScript.pdf"><h4>Javascript básico</h4><a><br><br>
                    <a class="btn btn-primary" target="blank" href="certificadoPhpMysqliBootstrap.pdf"><h4>PHP, MySQLi e
Bootstrap</h4><a>  
                </div>
        <div class="container" style="margin-top: 100px;">
                    <center>
                        <a id="contatos"></a>
                        <div class="col-md-12 form-group br">
                        <?php
                             
                            
                            if(!empty($_SESSION['erro'])){
                                
                               echo " <div class='alert alert-danger' role='alert'>". $_SESSION['erro']." </div>";
                                unset($_SESSION['erro']);
                            }
                            if(!empty($_SESSION['sucesso'])){
                                echo "<div class='alert alert-success' role='alert'>". $_SESSION['sucesso']." </div>";
                                unset($_SESSION['sucesso']);
                            }
                            ?>
                            
                            <h2 class="branco centro">Mande sua Mensagem <samp class="glyphicon glyphicon-envelope"></samp></h2>
                            <form method="post" action="processa.php">
                                <label class="branco" >Nome:</label>
                                <input required="" type="text" class="form-control formulario" name="nome" placeholder="Digite seu nome">

                                <label class="branco" >Email:</label>
                                <input type="email" required="" class="form-control formulario" name="email" placeholder="Digite seu email">

                                <label class="branco" >Mensagem:</label>
                                <textarea required="" rows="6" class="form-control formulario" name="mensagem" placeholder="Digite seu nome"></textarea>

                                <input class="btn btn-success br" type="submit" >

                            </form>
                        </div>
                        <h2 class="branco ">Contatos</h2>
                        <div class="col-md-12">
                            <h4 class="branco "><samp class="glyphicon glyphicon-envelope"> Email:</samp> <a> gabrielveigalima@icloud.com</a> &nbsp;&nbsp;&nbsp; <samp class="glyphicon glyphicon-phone"> Celular</samp>:<a> (21)97028-2193</a></h4> 
                        </div>
                    </center>
        </div>
        <footer>
                    <div class="container">
                            <h5 class="branco centro">© 2017 - Gabriel Lima</h5>
                    </div>
        </footer>
        
        <!-- Janelas modais -->


    <div id="html" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>HTML - HyperText Markup Language</h3>
              </div>
              <div class="modal-body">
                <p>HTML (abreviação para a expressão inglesa HyperText Markup Language, que significa Linguagem de Marcação de Hipertexto) é uma linguagem de marcação utilizada na construção de páginas na Web. Documentos HTML podem ser interpretados por navegadores. A tecnologia é fruto da junção entre os padrões HyTime e SGML.

HyTime é um padrão para a representação estruturada de hipermídia e conteúdo baseado em tempo. Um documento é visto como um conjunto de eventos concorrentes dependentes de tempo (como áudio, vídeo, etc.), conectados por hiperligações. O padrão é independente de outros padrões de processamento de texto em geral.

SGML é um padrão de formatação de textos. Não foi desenvolvido para hipertexto, mas tornou-se conveniente para transformar documentos em hiper-objetos e para descrever as ligações.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


        <div id="css" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>CSS - Cascading Style Sheets</h3>
              </div>
              <div class="modal-body">
                <p>Cascading Style Sheets (CSS) é um simples mecanismo para adicionar estilo (cores, fontes, espaçamento etc) a um documento web.[1]

Em vez de colocar a formatação dentro do documento, o CSS cria um link (ligação) para uma página que contém os estilos. Quando quiser alterar a aparência do portal basta portanto modificar apenas um arquivo.[2]

Com a variação de atualizações dos navegadores (browsers) como Internet Explorer que ficou sem nova versão de 2001 a 2006, o suporte ao CSS pode variar. O Internet Explorer 6, por exemplo, tem suporte total a CSS1 e praticamente nulo a CSS2. Navegadores mais modernos como Google Chrome e Mozilla Firefox tem suporte maior, inclusive até a CSS3, ainda em desenvolvimento.

A interpretação dos navegadores pode ser avaliada com o teste Acid2, que se tornou uma forma base de revelar quão eficiente é o suporte de CSS, fazendo com que a nova versão em desenvolvimento do Firefox seja totalmente compatível a ele assim como o Opera já é. O Doctype informado ou a ausência dele determina o quirks mode ou o strict mode modificando o modo como o CSS é interpretado e a página desenhada.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


        <div id="php" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>PHP - Personal Home Page</h3>
              </div>
              <div class="modal-body">
                <p>PHP (um acrônimo recursivo para "PHP: Hypertext Preprocessor", originalmente Personal Home Page) é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.[2] Figura entre as primeiras linguagens passíveis de inserção em documentos HTML, dispensando em muitos casos o uso de arquivos externos para eventuais processamentos de dados. O código é interpretado no lado do servidor pelo módulo PHP, que também gera a página web a ser visualizada no lado do cliente. A linguagem evoluiu, passou a oferecer funcionalidades em linha de comando, e além disso, ganhou características adicionais, que possibilitaram usos adicionais do PHP, não relacionados a web sites. É possível instalar o PHP na maioria dos sistemas operacionais, gratuitamente. Concorrente direto da tecnologia ASP pertencente à Microsoft, o PHP é utilizado em aplicações como o MediaWiki, Facebook, Drupal, Joomla, WordPress, Magento e o Oscommerce.

Criado por Rasmus Lerdorf em 1995, o PHP tem a produção de sua implementação principal, referência formal da linguagem, mantida por uma organização chamada The PHP Group. O PHP é software livre, licenciado sob a PHP License, uma licença incompatível com a GNU General Public License (GPL) devido a restrições no uso do termo PHP.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div id="javase" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Java SE - Java 2 Standard Edition)</h3>
              </div>
              <div class="modal-body">
                <p>O J2SE (Java 2 Standard Edition) ou Java SE é uma ferramenta de desenvolvimento para a plataforma Java. Ela contém todo o ambiente necessário para a criação e execução de aplicações Java, incluindo a máquina virtual Java (JVM), o compilador Java, as APIs do Java e outras ferramentas utilitárias para uma melhor funcionalidade.

A plataforma Java EE (J2EE) inclui toda a funcionalidade existente na plataforma Java SE mais todas as funcionalidades necessárias para o desenvolvimento e execução de aplicações em um ambiente corporativo.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


        <div id="javaee" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Java EE - Java Platform, Enterprise Edition</h3>
              </div>
              <div class="modal-body">
                <p>Java Platform, Enterprise Edition (ou Java EE, ou EE, ou em português Plataforma Java, Edição Empresarial) é uma plataforma de programação para servidores na linguagem de programação Java.[1] A plataforma fornece uma API e um ambiente de tempo de execução para o desenvolvimento e execução de softwares corporativos, incluindo serviços de rede e web, e outras aplicações de rede de larga escala, multicamadas, escaláveis, confiáveis e seguras. Java EE estende a Java Platform, Standard Edition (Java SE),[2] fornecendo uma API para mapeamento objeto-relacional, arquiteturas multicamada e distribuídas e web services. A plataforma incorpora um desenho amplamente baseado em componentes modulares rodando em um servidor de aplicação. Softwares para Java EE são primeiramente desenvolvidos na linguagem de programação Java. A plataforma enfatiza a convenção sobre configuração e anotações para configuração.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div id="mysql" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>MySQL</h3>
              </div>
              <div class="modal-body">
                <p>O MySQL é um sistema de gerenciamento de banco de dados (SGBD), que utiliza a linguagem SQL (Linguagem de Consulta Estruturada, do inglês Structured Query Language) como interface. É atualmente um dos bancos de dados mais populares[1], com mais de 10 milhões de instalações pelo mundo.[2]

Entre os usuários do banco de dados MySQL estão: NASA, Friendster, Banco Bradesco, Dataprev, HP, Nokia, Sony, Lufthansa, U.S. Army, U.S. Federal Reserve Bank, Associated Press, Alcatel, Slashdot, Cisco Systems, Google, entre </a></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div id="foundation" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Foundation</h3>
              </div>
              <div class="modal-body">
                <p>A Fundação é uma estrutura de front-end responsiva. A Fundação fornece uma grade responsiva e componentes, modelos e trechos de códigos HTML e CSS UI, incluindo tipografia, formas, botões, navegação e outros elementos da interface, bem como funcionalidades opcionais fornecidas pelas extensões de JavaScript. A Fundação é mantida pelo ZURB e é um projeto de código aberto.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div id="bootstrap" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Bootstrap</h3>
              </div>
              <div class="modal-body">
                <p>O Bootstrap é uma estrutura web de front-end livre e de código aberto para projetar sites e aplicativos da web . Ele contém modelos de design baseados em HTML e CSS para tipografia , formas, botões, navegação e outros componentes de interface, bem como extensões de JavaScript opcionais . Ao contrário de muitos frameworks da web, ele se preocupa apenas com o desenvolvimento de front-end .</a></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div id="ccna" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Cisco Certified Network Associate Routing and Switching</h3>
              </div>
              <div class="modal-body">
                <p>O Cisco Certified Network Associate Routing and Switching ou CCNA R&S ® é uma certificação do fabricante Cisco, o qual tem como objetivo validar a capacidade do candidato para instalar, configurar, operar e solucionar problemas em redes de tamanho médio compostas por Roteadores e Switches, incluindo a implementação e verificação de conexões para sites ou unidades remotas conectadas via uma rede WAN.<br><a href="GabrielLima-ccna.pdf" target="_blank">Clique aqui para ver o cetificado</a></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>




        <div id="it" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>IT Essentials</h3>
              </div>
              <div class="modal-body">
                <p>O curso Cisco - IT Essentials – v.4.0 está baseado nos conceitos básicos de TI: Hardware e Software para PC's. Apresenta uma exposição aprofundada ao hardware e aos sistemas operacionais de computadores. Os alunos aprendem sobre a funcionalidade dos componentes de hardware e de software, bem como sobre as melhores práticas sugeridas em manutenção e sobre assuntos relacionados à segurança. Por meio de atividades práticas e laboratórios, os alunos aprendem como montar e configurar um computador, instalar sistemas operacionais e softwares, e identificar e solucionar os problemas de hardware e de software. Além disso, estão incluídos os capítulos sobre redes e habilidades de comunicação. Este curso ajuda os alunos a se prepararem para a certificação A+ do CompTIA.

Estrutura: O curso consiste em 16 capítulos. Do capítulo 1 ao 9 - Noções básicas; O capítulo 10, trata sobre as habilidades de comunicação; Do capítulo 11 ao 16 – Assuntos avançados dos capítulos anteriores.

Carga horária: 80 horas.<br><a href="GabrielLima-it.pdf" target="_blank">Clique aqui para ver o cetificado</a></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <script src="js/my.js"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/workaround.js"></script>
    </body>
</html>
