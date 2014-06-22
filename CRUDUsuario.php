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

                <legend><h2>Cadastro de Usuário</h2></legend>
			<table>
				<tbody>
				
					<tr>
						<td class="cad-min-field"><label for="login">Login:</label></td>
						<td><input type="text" name="login" id="login"></td>
						<td></td>
						<td class="cad-min-field"><label for="pass">Senha:</label></td>
						<td><input type="password" id="pass" name="pass">
					</tr>
					

					
					<tr>
						<td><label for="nome">Nome:</label></td>
						<td><input type="text" name="nome" id="nome"> 
						<td></td>
						<td><label for="matricula">Martricula:</label></td>
						<td><input type="text" name="matricula" id="matricula" ></td>
					</tr>
					<tr>
						<td><label for="cpf">CPF:</label></td>
						<td><input type="text" name="cpf" id="cpf">
						<td></td>
						<td><label for="mail">E-Mail:</label></td>
						<td><input type="text" name="mail" id="mail">

					<tr>	
						<td><label for="fone">Fone:</label></td>
						<td><input type="text" name="fone" id="fone"></td>
					</tr>

					<tr>
						<td><label for="end">End.:</label></td>
						<td><input type="text" name="end" id="end">
					</tr>
					<tr>
						<td><label for="estado">Estado:</label></td>
						<td>
						<select name="estado" id="estado"		
						<option value="0">Selecione</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="SC">Santa Catarina</option>
							</select>
						</td>
					</tr>
					<tr>

						<td><label for="cidade">Cidade:</label></td>
						<td>
							<select name="cidade" id="cidade"
								<option value="0">Selecione</option>
								<option value="Alvorada">Alvorada</option>
								<option value="Canoas">Canoas</option>
								<option value="Porto Alegre">Porto Alegre</option>
							</select>
						</td>
					</tr>
					

						<td colspan="4">
							<input type="reset" value="limpar" class="right">
							<input type="submit" value="Salvar" class="right">
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</article>
				
				
				
				
				
				
				
				
				
				
				
				

                        </div>

                    </div><!-- /.row -->
                </form>
                <br/>
                <legend></legend>

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
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
