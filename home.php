<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
    <html>

        <head>

        <title>InfoGV | Mural Virtual</title> 
        
            <meta charset="utf-8"/>
            <link rel="stylesheet" type="text/css" href="css/estilo.css"/>

        </head>

        <body>

            <div id="navegacao">

                <div class="grow" id="area">

                <img id="logo" target="_blank" src="img/logo_infogv.png">

                <nav class="dp-menu">

                    <div id="menu">

                        <ul>

                        <li><b><a href="home.php">Home</a></b></li>
                            <li><b><a href="turmas.html">Informações</a></b></li>
                            <li><b><a href="materias.html">Matérias</a></b></li>
                            <li><b><a href="quem_somos.html">Quem Somos</a></b></li>
                            <li><b><a href="#" class="bloco">Login</a></b>
                            <ul>
                                <center><li><a href="index.php">Login</a></li>
                                <li><a href="cadastro.php">Cadastrar</a></li>
                                <li><b><a href="logout.php">Sair</a></b></li></center>   
                                
                            </ul>
                            </li>
                        </ul>

                    </div>

                </nav> 

            </div>
                
             </div>


             


                <div id="area-principal">


                    <div id="postagem">

                        <center><span class="data-postagem"><h1 class="titulo">COLÉGIO MUNICIPAL GETÚLIO VARGAS</h1></span></center>
                        <span class="quebra-linha">

                            <p><h2>Olá visitante, <?php echo $_SESSION['nome'];?></h2></p>

                            <img class="img-post" width="70px" src="https://img.icons8.com/ios/452/school.png">
                                <p>A Plataforma InfoGV, é uma nova maneira de você como aluno, professor ou usuário, interagir com a Escola Municipal Getúlio Vargas.</p>
                                <p>Ela te permite acompanhar os cronogramas de aulas, posts informativos, dúvidas sobre a escola e muito mais. Trata-se de um Mural Virtual, é um novo jeito, uma nova forma, é a modernização. Desfrute desse projeto e se possível, nos dê o Feedback no ícone à direita de mensagem, teremos o maior prazer de interagir.</p>
                                <p>Esse projeto foi desenvolvido pelos alunos do 3° Ano do Ensino Médio Técnico de 2020, quer conhecer essa história? Confira na aba de “Quem Somos”.</p>
                                <p>Boa navegação!</p>
                                <p><b><i>"InfoGV Smart Wall"</i></b></p>
                            
                            <div class="quebra-linha"></div>
                    </div>

                    <div id="postagem">

                           

                            <center><div class="data-postagem"><h2 class="bloco">SOBRE A ESCOLA</h2></div></center>

                            <p> O Colégio Municipal Getulio Vargas se localiza em: Avenida Do Canal Norte, S/N- Cidade Alegria, Resende - Rio De Janeiro.</p>
                            <p>As informações de contato se encontram abaixo:</p>
                            <p>Avenida Do Canal Norte, S/N- Cidade Alegria, Resende - Rio De Janeiro (24) 3360-6149.</p>
                            <p>Para mais informações, continua navegando ou ligue para o número acima.</p><br>


                            <center><iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29493.626384609714!2d-44.506216941737186!3d-22.477781330334157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x560dead384b7c4d1!2sEscola%20Municipal%20Get%C3%BAlio%20Vargas!5e0!3m2!1spt-BR!2sbr!4v1622250348192!5m2!1spt-BR!2sbr" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
                            <div class="quebra-linha"></div>


                 
                        <span class="postado">Direção - Getúlio Vargas</span>

                    </div>

                    <div id="postagem">

                        <center><span class="data-postagem"><h2 class="bloco">NOSSAS REDES</h2></span></center>

                        <table cellPadding=7 width="100%" border=0>
                                <tbody>
                                    <tr>
                                            <td valign=top width="50%"><center><b><h3>Facebook</h3></b></center>
                                                <center><img width="90px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Facebook_icon_2013.svg/768px-Facebook_icon_2013.svg.png"></center>
                                                <center><a href="https://www.facebook.com/pages/category/Education-Website/Col%C3%A9gio-Municipal-Get%C3%BAlio-Vargas-Resende-102861498055286/" class="button">Clique Aqui</a></center>    
                                            </td>
                                            <td valign=top width="50%"><center><b><h3>Instagram</h3></b></center>
                                                <center><img width="85px" src="https://imagepng.org/wp-content/uploads/2017/08/instagram-icone-icon-1.png"></center>
                                                <center><a href="https://www.instagram.com/datedogapp/" class="button">Clique Aqui</a></center>    
                                            </td>

                                    </tr>
                                    
                                </tbody>
                        </table><br/>
                        

                        
                        <center><span class="data-postagem"><h2></h2></span></center>
                        <div class="quebra-linha"></div>
                        <span class="postado">Direção - Getúlio Vargas</span>


                    </div>

                    <div class="caixa" id="bottom">
                            
                        <div>
                            
                            <center><h5 id="area-bottom">Todos os Direitos Reservados© - 2021</h5>
                                
                        </div>

                    </div>

                </div>
            </div>
            <a href="form_contato.php"
                target="_blank"
                style="position:fixed;bottom:30px;right:30px;border-radius:4px;">
                <img src="https://sooma.com.br/files/2017/07/icon-mensagem.png"  width="60" height="60" alt="Contato pelo WhatsApp" />
            </a>
    </body>
</html>