<!DOCTYPE html>
<html>

    <head>  
        <title>Cadastro de Disciplinas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-whidth, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../../repositorios_interface/semantic/dist/semantic.min.css">
        <script src="../../repositorios_interface/semantic/dist/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
        <link rel="stylesheet" type="text/css" href="../static/css/animation.css">
        <link rel="stylesheet" type="text/css" href="../static/css/menu.css">
        <script type="text/javascript" src="../static/js/getDateTime.js"></script>
        <script type="text/javascript" src="../static/js/numeros.js"></script>
        <script type="text/javascript" src="../static/js/mascaraCPF.js"></script>
    </head>

    <body onload="javascript:getDateTime('dataHora');">
        <!-- begin section -->
        <section>
            
            <!-- cabeçalho da página -->
            <header class="ui grid">
                <div class="row">                    
                    <div class="three wide column">
                        <div class="ui three column grid">
                            <div class="column"></div>
                            <div class="column">
                                <a href="#">
                                    <img class="rotacao" src="../static/img/perfil.png" alt="perfil" />
                                </a>
                            </div>
                            <div class="column"></div>
                        </div>                          
                    </div>
                    
                    
                    <div class="ten wide column"></div>
                            
                    <div class="three wide column">
                        <div class="ui three column grid">
                            <div class="column"></div>
                            <div class="column">
                                <nav>                        
                                    <ul id='menu'>
                                        <li class='menuSimples'><a href='#'>Usuário</a>
                                            <ul class='sub-menu hidden'>
                                                <li><a href='#'>Configurações</a></li>
                                                <li><a href='#'>Sair</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!--<div class="ui dropdown">
                                      Usuário <i class="dropdown icon"></i>
                                      <div class="menu">
                                        <div class="item">Configurações</div>
                                        <div class="item">Sair</div>
                                      </div>
                                    </div>-->
                                </nav>               
                            <div class="column"></div>
                        </div>
                    </div>
                </div>
            </header>
                        
            <!-- conteúdo principal -->
            <article class="ui grid">
                
                <!--<div class="ui internally celled grid">-->
                    <div class="row">
                        <div class="three wide column"></div>
                    
                        <div class="ten wide column">                      
                            <form class="ui form" name="enviar" method="post" action="../recebe_form/recebe_disciplina.php">
                                <h1 class="ui dividing header">Cadastro de Disciplinas</h1>
                              
                                
                                
                                <!-- input search-->
                                <!-- período de oferta, curso de oferta, descrição disciplina, nome disciplina. -->
                                <div class="field">
                                    <label>Disciplina</label>
                                    <div class="ui fluid icon input">   
                                        <input type="text" name="nome_disciplina" placeholder="Disciplina" required="required">
                                    </div>
                                </div>

                                 <div class="field">
                                    <label>Descrição da Disciplina</label>
                                    <textarea rows="3" name="descricao_disciplina" required="required"></textarea>
                                </div>                        
                                
                                <div class="field">    
                                    <label>Curso</label>
                                    <select name="curso">
                                        <option>BSI</option>
                                        <option>MED VET</option>
                                        <option>Redes</option>
                                        <option>LICA</option>
                                        <option>LIQUI</option>
                                    </select>
                                </div>
                                
                                <div class="field">                            
                                    <label>Período de Oferta</label>
                                    <select name="periodo_oferta"> 
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                
                                <button class="ui button" type="submit">Cadastrar</button>
                            </form>
                        </div>
                    
                        <div class="three wide column"></div>
                    </div>
                <!--</div>-->
            </article>

            <!-- rodapé da página-->
            <footer class="ui grid">
                <div class="row">                    
                    <div class="three wide column"></div>
                    <div class="ten wide column">
                        <img class="logo" src="../static/img/ifc.svg.png"/>
                    </div>
                    <div class="three wide column"></div>
                </div>
            </footer> 
            
        </section>
        <!-- end section -->
        
    </body>

</html>
