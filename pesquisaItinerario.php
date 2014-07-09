<!DOCTYPE html>

<html>
    <head>
        <title>Carona Solidaria</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

        <!--<link rel="shortcut icon" href="link icone"> icone que fica na aba do navegador  -->

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ-wU1R3sXIRrmhb1ckuve35LT6_C0O60&sensor=false"></script>

        <script src="js/mapsJs.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="navbar-wrapper">
            <div class="container">


                <!-- inicio do menu!!! -->
                <div class="navbar navbar-inverse navbar-static-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">SenaCaronaS</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Meu Perfil</a></li>
                                <li><a href="#">Cadastro de Itinerario</a></li>
                                <li class="active"><a href="pesquisaItinerario.php">Pesquisa Itinerario</a></li>


                                <!--                                <li class="dropdown">
                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Action</a></li>
                                                                        <li><a href="#">Another action</a></li>
                                                                        <li><a href="#">Something else here</a></li>
                                                                        <li class="divider"></li>
                                                                        <li class="dropdown-header">Nav header</li>
                                                                        <li><a href="#">Separated link</a></li>
                                                                        <li><a href="#">One more separated link</a></li>
                                                                    </ul>
                                                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- FIM DO MENU.......-->


        <div class="container">
            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron pager">

                <legend><h2>Pesquisa de Itinerário</h2></legend>
                <form action="pesquisaItinerario.php" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Origem <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <?php
                                        require_once './db/pesquisaItinerarioDb.php';
                                        $iDb = new ItineraryDb();

                                        $result = $iDb->getItinerarysDescription('origem');

                                        $row = pg_num_rows($result);
                                        $i = 0;

                                        while ($i < $row) {
                                            while ($opcao = pg_fetch_array($result)) {
                                                $opIt = $opcao['Description'];
                                                echo '<li><a href="#" id="origemBtn" onclick="getEndereco()">' . $opIt . '</a></li>';

                                                $i++;
                                            }
                                        }
                                        ?>

                                    </ul>
                                </div><!-- /btn-group -->
                                <input type="text" class="form-control" readonly="readonly" id="origemTxt" name="origemTxt" title="origemTxt">
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->

                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnDestino">Destino <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <?php
                                        require_once './db/pesquisaItinerarioDb.php';
                                        $iDb = new ItineraryDb();

                                        $result = $iDb->getItinerarysDescription('destino');

                                        $row = pg_num_rows($result);
                                        $i = 0;

                                        while ($i < $row) {
                                            while ($opcao = pg_fetch_array($result)) {
                                                $opIt = $opcao['Description'];
                                                echo '<li><a href="#" id="destinoBtn" onclick="getEndereco()">' . $opIt . '</a></li>';

                                                $i++;
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div><!-- /btn-group -->
                                <input type="text" class="form-control" readonly="readonly" id="destinoTxt" name="destinoTxt" title="destinoTxt">
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                    <br/>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Turno &nbsp;&nbsp;<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" id="destinoBtn" onclick="getTurno()">Manha</a></li>
                                        <li><a href="#" id="destinoBtn" onclick="getTurno()">Tarde</a></li>
                                        <li><a href="#" id="destinoBtn" onclick="getTurno()">Noite</a></li>
                                    </ul>
                                </div><!-- /btn-group -->
                                <input type="text" class="form-control" readonly="readonly" id="turnoTxt">
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-5 -->

                        <div class="input-group col-lg-6">
                            <div class="col-lg-6">
                                <input type="submit" class="btn btn-primary col-lg-12" value="Pesquisar" title="Pesquisar"/>
                                <!--<button class="btn btn-primary col-lg-12" onclick="getMatricula()">Pesquisar</button>-->
                            </div>
                            <div class="col-lg-6">

                                <input type="reset" class="btn btn-primary col-lg-12" value="Limpar" onclick="habilitaDestino()">
                            </div>


                        </div>

                    </div><!-- /.row -->
                </form>
                <br/>
                <legend></legend>


                <div class="list-group col-lg-2" id="result">
                    <?php
                    if (isset($_POST['origemTxt']) && isset($_POST['destinoTxt'])) {
                        $endOrigem = $_POST['origemTxt'];
                        $endDestino = $_POST['destinoTxt'];
                        if (($endOrigem != NULL || $endOrigem != "") && ($endDestino != NULL || $endDestino != "")) {
                            require_once './db/pesquisaItinerarioDb.php';
                            $iDb = new ItineraryDb();

                            $result = $iDb->getMatriculaPorEndereco($endOrigem, $endDestino);

                            $row = pg_num_rows($result);
                            $i = 0;

                            $endOrigem = "'" . $endOrigem . "'";
                            $endDestino = "'" . $endDestino . "'";

                            while ($i < $row) {
                                while ($opcao = pg_fetch_array($result)) {
                                    $opRegistration = $opcao['Registration'];
                                    echo '<label class="list-group-item"><input type="radio" name="rotaM" class="pull-left" id="' . $opRegistration . '" onclick="calculaRota(' . $endOrigem . ', ' . $endDestino . ')"> ' . $opRegistration . '</label>';

                                    $i++;
                                }
                            }
                            echo '<br/><button name="Pedir Carona" value="Pedir Carona" class="btn btn-primary" data-toggle="modal" data-target="#modPerfil">Pedir Carona</button>';
                        }
                    }
                    ?>

                    <!-- Modal -->
                    <div class="modal fade bs-example-modal-lg" id="modPerfil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Perfil Do Motorista</h4>
                                </div>
                                <div class="modal-body">

                                    <div class="container">
                                        <div class="row clearfix">
                                            <div class="col-md-12 column">
                                                <div class="media">
                                                    <div class="pull-left"><img src="imgPerfil/thiago.jpg" class="media-heading img-circle img-responsive col-lg-3"><br/><br/><br/><div class="media-body pull-left">&nbsp;&nbsp;<p>Thiago Boff - 631210066</p></div></div>
                                                    
                                                </div>
                                                
                                                <h3 class="pull-left">Quem sou eu</h3>
                                                <br/><br/><br/>Meu nome é Thiago e estou cursando Análise e Desenvolvimento de Sistemas na Faculdade de Tecnologia SENAC RS, entrei para o curso buscando conhecimentos na área de TI e destaque no mercado de trabalho. Estou no ramo como Técnico de Computador há mais de 5 anos, Trabalho o dia inteiro e vou para a Faculdade no turno da noite.
                                                
                                            </div>
                                        </div>
                                        <br/><br/>
                                        <div class="row clearfix">
                                            <div class="col-md-6 column">
                                                <h3 class="text-center">
                                                    Disponibilidade para oferecer Caronas
                                                </h3>
                                                <form>
                                                <table class="table table-bordered table-hover table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                
                                                            </th>
                                                            <th>
                                                                Dia da Semana
                                                            </th>
                                                            <th>
                                                                horário
                                                            </th>
                                                            <th>
                                                                Destino
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="active">
                                                            <td>
                                                                <input type="checkbox" name="marcar">
                                                            </td>
                                                            <td>
                                                                Segunda
                                                            </td>
                                                            <td>
                                                                18:00
                                                            </td>
                                                            <td>
                                                                Faculdade
                                                            </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td>
                                                                <input type="checkbox" name="marcar">
                                                            </td>
                                                            <td>
                                                                Segunda
                                                            </td>
                                                            <td>
                                                                22:30
                                                            </td>
                                                            <td>
                                                                Casa
                                                            </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td>
                                                                <input type="checkbox" name="marcar">
                                                            </td>
                                                            <td>
                                                                Terça
                                                            </td>
                                                            <td>
                                                                17:45
                                                            </td>
                                                            <td>
                                                                Faculdade
                                                            </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td>
                                                                <input type="checkbox" name="marcar">
                                                            </td>
                                                            <td>
                                                                Terça
                                                            </td>
                                                            <td>
                                                                21:40
                                                            </td>
                                                            <td>
                                                                Casa
                                                            </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td>
                                                                <input type="checkbox" name="marcar">
                                                            </td>
                                                            <td>
                                                                Quarta
                                                            </td>
                                                            <td>
                                                                18:00
                                                            </td>
                                                            <td>
                                                                Faculdade
                                                            </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td>
                                                                <input type="checkbox" name="marcar">
                                                            </td>
                                                            <td>
                                                                Quarta
                                                            </td>
                                                            <td>
                                                                22:40
                                                            </td>
                                                            <td>
                                                                Casa
                                                            </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td>
                                                                <input type="checkbox" name="marcar">
                                                            </td>
                                                            <td>
                                                                Quinta
                                                            </td>
                                                            <td>
                                                                18:00
                                                            </td>
                                                            <td>
                                                                Faculdade
                                                            </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td>
                                                                <input type="checkbox" name="marcar">
                                                            </td>
                                                            <td>
                                                                Quinta
                                                            </td>
                                                            <td>
                                                                22:00
                                                            </td>
                                                            <td>
                                                                Casa
                                                            </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td>
                                                                <input type="checkbox" name="marcar">
                                                            </td>
                                                            <td>
                                                                Sexta
                                                            </td>
                                                            <td>
                                                                18:00
                                                            </td>
                                                            <td>
                                                                Faculdade
                                                            </td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td>
                                                                <input type="checkbox" name="marcar">
                                                            </td>
                                                            <td>
                                                                Sexta
                                                            </td>
                                                            <td>
                                                                22:45
                                                            </td>
                                                            <td>
                                                                Casa
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </form>
                                            </div>
                                            <div class="col-md-6 column pull-right">
                                                <h3>
                                                    O que dizem sobre Thiago Boff
                                                </h3>
                                                <div class="media col-lg-12 pull-right">
                                                    <div href="#" class="pull-left "><img src="imgPerfil/jean.jpg" class="media-object img-circle col-lg-3 ">
                                                    <div class="media-body col-lg-6">
                                                        <h4 class="media-heading"> Jean </h4> 
                                                        Já peguei carona com o Thiago, motorista sempre de bem com a vida, comunicativo, atento ao trânsito, nunca me deixou esperando.
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="media col-lg-12 pull-right">
                                                    <div href="#" class="pull-left "><img src="imgPerfil/cristiano.jpg" class="media-object img-circle col-lg-3">
                                                    <div class="media-body col-lg-6">
                                                        <h4 class="media-heading"> Cristiano </h4> 
                                                        Concordo com o comentário do Jean, só acho que o Thiago dirige muito rápido e escuta o som do carro muito alto.
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- aqui vai o conteudo da modal-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="confirmarCarona()">Confirmar Carona</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- essa div e a da lista da esquerda-->

                <div class="col-lg-10" id="loadGmap"></div><!-- essa div e a do mapa-->
                <div id="route" style="width: 300px; height: 500px; position: absolute; right: 0; top: 0;"></div> <!--exibe rota-->




            </div>

            <!-- FOOTER -->
            <legend></legend>
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
        </div> <!-- /container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/pesquisaItinerario.js"></script>
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
