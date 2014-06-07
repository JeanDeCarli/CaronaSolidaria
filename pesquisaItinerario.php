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
                            <a class="navbar-brand" href="#">Logo do Carona Solidaria</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li class="dropdown">
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
                                </li>
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
                <form>
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
                                <input type="text" class="form-control" readonly="readonly" id="origemTxt">
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
                                <input type="text" class="form-control" readonly="readonly" id="destinoTxt">
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
                                <button class="btn btn-primary col-lg-12" onclick="camposObrigatorios()">Pesquisar</button>
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
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                    <label class="list-group-item"><input type="checkbox" name="rotaM" class="pull-left"> 631210066</label>
                </div><!-- essa div e a da lista da esquerda-->

                <div class="col-lg-10" id="loadGmap"></div><!-- essa div e a do mapa-->




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
