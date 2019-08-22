<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="author" content="MARIVALDO TORRES JUNIOR">
    <meta name="description" content="Site do Documentando">
    <meta name="keywords" content="advocacia, direito, advogado, oab, advogada, direitocivil, advogados, direitodotrabalho, dicas, lei, processos, documentando, linte,sotfware juridico, automação de documentos, startup automação, automatização, documentanto ">
 </head>

<title>Documentando</title>
</head>
<body>
        <header class="menu-principal">
                <main>
                    <div class="header-1">
                        <div class="logo">
                            <img src="./img/doc.png" alt="Documentando Icon" height="77" width="160">
                        
                        
                    </div>
                  
                        <div class="menu-principal2">
                        <main class="col-100 menu1-urls">
                            <div class="header1">
                                <div class="menu1">
                                    <ul> 
                                            <li><a href="http://documentando.com.br/">HOME</a></li>
                                            <li><a href="">PRODUTO</a></li>
                                            <li><a href="">SOBRE</a></li>
                                        </ul>
                                    </div>
                    </div>
                </main>
            </div>
            </header>
            <main class="col-100 menu-urls">
                    <div class="header2">
                        <div class="menu">
                            <ul>
                                <li><a href="http://artigos.documentando.com.br/">EBOOKS</a></li>
                                <li><a href="http://soartigos.documentando.com.br/">ARTIGOS</a></li>
                                <li><a href="http://podcast.documentando.com.br/">PODCAST</a></li>
                                <li><a href="http://videos.documentando.com.br/">VÍDEOS</a></li>
                            </ul>
                        </div>
                        <div class="busca">
                            <input placeholder="Busca" type="text"/>
                        </div>
                    </div>
                </main>
            <br><br><br><br><br>
            <section class="wrapper text-dark" id="our-blog">
                <div class="d-flex-c container">
                    <div class="my-2">
                    <h1 style="color: red">BEM VINDO(A)!!!</h1>
                    <p>Lorem Ipsu dolor sit Amet</p>
                </div>
                <!-- CORPO -->
            <div class="container">
                    <div class="row">
                      <div class="col new1">

                                    <h3 class="m-2 text-center  font-x2"><strong>5 benefícios da automação jurídica para seu escritório!</strong></h3>
                                    <div class="nomezinhos">
                                            <div class="tipo-doc"><h5> EBOOK|</h5></div>
                                            <div class="author"><h6>Por Pamela Coelho</h6></div>
                                          </div>
                                    <figure><a href="https://artigo1.documentando.com.br/8878/5-bene-auto-ju.pdf"><img src="./img/new1.jpg"height="320px"  width="500px"></a></figure>
                                    to make text smaller. The text looks so small because three special unicode alphabets are used. This is why you can copy and paste it! You wouldn't be able to do that if it were a tiny font.</p>
                                    <footer class="text-right">
                                            <button class="btn">
                                                <a href="https://artigo1.documentando.com.br/8878/5-bene-auto-ju.pdf"><h4 style="color: red">Leia+</h4></a></footer></button>
                                </article>
                      </div>
                      <!--Formulário-->
                      <div class="col table" style="background-color:rgb(43, 69, 124)">
                            <div style="color: white"><p><h3><br>    O blog da Documentando <b>te ensina</b> a otimizar os porcessos de organização, compartilhamento e proteção dos documentos da<b> sua empresa</b>.Não perca nenhum conteúdo e seja o 1° a aplicar as <b>melhores práticas</b>. <br>Deixe seu E-mail para receber todos os nossos conteúdos:</h3></p></div>
                        <br>
                        <br>
                            <form method="POST" action="proc_cad_usuario.php">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1"><b>Endereço de E-mail</b></label>
                                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                                      <br>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName"><b>Nome Completo</b></label>
                                      <input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Nome Completo">
                                    </div>
                                    <fieldset>
                                        <legend>A sua empresa atende pessoa jurídica ou pessoa física?</legend>
                                         <div>
                                            <input type="radio" name="tipo" value="b2b" checked>PJ (B2B)<br>
                                        </div>
                            
                                        <div>
                                            <input type="radio" name="tipo" value="b2c">PF (B2C)<br>
                                        </div>
                                    </fieldset>

                                    <button type="submit" value="Cadastrar" class=" btn-danger btn-lg btn-block"><b>RECEBER CONTEÚDO EXCLUSIVO</b></button>
                                  </form>
                                  <?php
		                                if(isset($_SESSION['msg'])){
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                        }
                                   ?>
                                
                      </div>
                      <div class="w-100"></div>
                      <div class="col new2">
                            <h2 class="m-2 text-center  font-x2"><strong> Como a gestão eletrônica impacta a rotina empresarial? </strong></h2>
                            <div class="nomezinhos">
                                    <div class="tipo-doc"><h5> EBOOK|</h5></div>
                                    <div class="author"><h6>Por Pamela Coelho</h6></div>
                                  </div>       
                            <figure><a href="https://artigo1.documentando.com.br/8878/how-im-em.pdf"><img src="./img/new2.jpg"height="320px"  width="500px"></a></figure>
                                    to make text smaller. The text looks so small because three special unicode alphabets are used. This is why you can copy and paste it! You wouldn't be able to do that if it were a tiny font.</p>
                                    <footer class="text-right">
                                            <button class="btn" >
                                                <a href="https://artigo1.documentando.com.br/8878/how-im-em.pdf"><h4 style="color: red">Leia+</h4></a></footer></button>
                                </article>
                      </div>
                      <div class="col">
                            <!-- <article >
                                    <figure><a href=""><img src="./img/new1.jpg"height="320px"  width="200PX"></a></figure>
                                    <h3 class="m-2 text-center heading font-x1"><strong> 5 formas de proteger efetivamene os documentos da sua empresa</strong></h3>
                                    <p class="text-justify"> is an online generator which converts normal text letters into tiny letters which you can copy and paste into facebook, twitter, instagram and other social media posts and status updates. It essentially allows you to make text smaller. The text looks so small because three special unicode alphabets are used. This is why you can copy and paste it! You wouldn't be able to do that if it were a tiny font.</p>
                                    <footer class="text-center">
                                            <button class="btn">
                                                <a href="#">Leia+</a></footer></button>
                                </article> -->
                      </div>
                    </div>
                  </div>


                </div>

            </section>
            <footer class="footer" style="background-color: rgba(214, 212, 212, 0.863)">
                    <div class="container ">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="footer-logo"> 

                                    <a href="#"><img src="./img/doc.png" height="60px" width="130px" ></a></div>
                                    <div class="copy-right">
                                            <p>
                                            
                                                &copy;<b>Documentando</b>
                                            </p>
                                            
                                        </div>
                                    <div class="copy-right"></div>
                                <div class="social-icon">
                                        <a href="https://www.facebook.com/documentando.blog/"><img src="./img/face.png" height="30px" width="30px" /></a>
                                        <a href="#"><img src="./img/in.png" height="30px" width="30px"/></a>
                                        <a href="#"><img src="./img/tw.png"height="30px" width="30px"/></a>
                                        <a href="#"><img src="./img/you.png"height="30px" width="30px"/></a>
                                        <a href="#"><img src="./img/g.png"height="30px" width="30px"/></a>
                                        <a href="#"><img src="./img/ins.png" height="30px" width="30px"/></a>
                                        
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                </footer>
          














</body>
</html>