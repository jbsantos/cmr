<!DOCTYPE html>
<html style="min-height: 673px;">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">      	
    <title> Inscrição para sorteio de vagas para o Colégio Militar do Recife</title>
    <link rel="shortcut icon" href="img/CRM.ico" />
    <meta charset="utf-8">
    <!-- bootstrap 3.0.2 -->
    <link href="js-css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- font Awesome -->
    <link href="js-css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="js-css/style.css" rel="stylesheet" type="text/css">
    <link href="js-css/jquery.css" rel="stylesheet" type="text/css">
    <link href="js-css/bootstrap3-wysihtml5.css" rel="stylesheet" type="text/css">
	
	<script src="js-css/jquery-1.10.1.js" type="text/javascript"></script>
		<script src="js-css/jquery.maskedinput.js" type="text/javascript"></script>
	
	<script>
			jQuery(function($){
					 $("#data").mask("99/99/9999");
					 $("#data_again").mask("99/99/9999");
					 $("#controle").mask("999/9999");
					 $("#hora").mask("99:99");
		});
		</script> 

</head>


<body style="min-height: 673px;" class="wysihtml5-supported  pace-done">
    <div class="pace pace-inactive">
        <div class="pace-progress" style="width: 100%;" data-progress-text="100%" data-progress="99">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <!-- borda tracejada do container todo-->
    <div class="container" style="padding: 10px; border-width:10px; border-style:dashed; border-color:#D2B48C; border-radius: 10px;">
             <div class="col-lg-12 col-md-12">
                     <div class="box box-solid bg-light-green">
                            <!-- borda tracejada do cabçalho interno verde-->
                             <div class="box-header" align="center" style="background-color: #DC143C; border:3px dashed white; border-radius: 3px;" >
					<h1 class="">Inscrição para sorteio de vagas para o Colégio Militar do Recife <br> 
		                		<span style="font-size: 17px;font-style: italic;">SEREP-RF - Serviço de Recrutamento e Preparo de Pessoal da Aeronáutica de Recife</span> 
		                                <!-- box menor com o nome ala 15 lateral direita -->
				        		<a href="http://www.sereprf.intraer">
				            			<div style="position: absolute; top:1px; font-size: 15px; background: #fff; color:#000; margin: 5px; border-radius: 5px;padding: 2px; right:0"> SEREP-RF </div> 
				       			 </a>
					</h1>
                            </div><!-- /.box-header -->
                    </div>
             </div>

	<div class="col-lg-12 col-md-12"> <!-- box de separação entre boxes -->
                <div class="box box-default">
                    <div class="box-header">
                        <h5 class="box-title"> <p>	- REQUERIMENTO DO MILITAR.
				</p></h5>
                    </div><!-- /.box-header -->
		</div>
	</div>


        <!-- Inicio do box do formulario-->
        <form name="form1" action="enviar.php" method="post" >
            <div class="col-lg-12 col-md-12"> <!-- box de separação entre boxes -->
                <div class="box box-default">
                    <div class="box-header">
                        <h5 class="box-title"> DADOS DO REQUERENTE</h5>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                            <div class="row margin"> 
                                <div class="form-group">
                                    <div class="form-group col-lg-6 col-md-6" style="margin-bottom:0px; float: left;">
                                        <label>Posto/Graduação:</label></br>
                                        <select class="form-group" name="posto">
                                          <option value="MAR">MAR</option>
                                          <option value="TEN. BRIG">TEN. BRIG</option>
                                          <option value="MAJ. BRIG">MAJ. BRIG</option>
                                          <option value="BRIG">BRIG</option>
                                          <option value="CEL">CEL</option>
                                          <option value="TC">TC</option>
                                          <option value="MAJ">MAJ</option>
                                          <option value="CAP">CAP</option>
                                          <option value="1T">1T</option>
                                          <option value="2T">2T</option>
                                          <option value="ASP">ASP</option>
                                          <option value="SO">SO</option>
                                          <option value="1S">1S</option>
                                          <option value="2S">2S</option>
                                          <option value="3S">3S</option>
                                          <option value="CB">CB</option>
                                          <option value="S1">S1</option>
                                          <option value="S2">S2</option>
                                          <option value="CIVIL">CIVIL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-6 col-md-6" style="margin-bottom:0px; margin-top: -15px; margin-left: -350px; float: left;">
                                        <label>Nome Completo:</label>
                                        <input class="form-control" type="text" name="nome_militar" id="nome_militar" placeholder="Nome" required= "Informe seu nome completo." />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-3 col-md-3" style="margin-bottom:0px; margin-top: -15PX;">
                                        <label>Identidade COMAER:</label>
                                        <input class="form-control" type="number" name="id" id="id" placeholder="Identidade" required="Número da indentidade deve ser preenchido."/>
                                    </div>
                                </div>
                            </div>

                             <div class="row margin"> 
                                <div class="form-group">
                                    <div class="form-group col-lg-3 col-md-3" style="margin-bottom:30px; float: left;">
                                        <label>Organização:</label></BR>
                                        <select class="form-group" name="om" required>
                                          <option value="II COMAR">II COMAR</option>
                                          <option value="ALA 15">ALA 15</option>
                                          <option value="CINDACTA 3">CINDACTA 3</option>
                                          <option value="DTCEA-AR">DTCEA-AR</option>
                                          <option value="DTCEA-FN">DTCEA-FN</option>
                                          <option value="DTCEA-LP">DTCEA-LP</option>
                                          <option value="DTCEA-MO">DTCEA-MO</option>
                                          <option value="DTCEA-PL">DTCEA-PL</option>
                                          <option value="DTCEA-RF">DTCEA-RF</option>
                                          <option value="DT-INFRA-RF">DT-INFRA-RF</option>
                                          <option value="GAP-RF">GAP-RF</option>
                                          <option value="GSD-RF">GSD-RF</option>
                                          <option value="HARF">HARF</option>
                                          <option value="OARF">OARF</option>
                                          <option value="PARF">PARF</option>
                                          <option value="SEREP-RF">SEREP-RF</option>
                                          <option value="SERIPA 2">SERIPA 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-6 col-md-6" style="margin-bottom:0px; margin-left: -85PX; margin-top: -15PX; float: left;">
                                        <label>R/1 Data de Publicação da Reserva:</label>
                                        <input class="form-control" type="text" name="reserva" id="reserva" placeholder="Data da Publicação" required="Informe a data de publicação da reserva."/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-3 col-md-3" style="margin-bottom:0px; margin-top: -15PX; margin-left: 0PX; float: left;">
                                        <label>Boletim/Data:</label>
                                        <input class="form-control" type="text" name="bol" id="bol" placeholder="Boletim - xx/xx/xxxx" required="Número do boletim e data de publicação do mesmo."/>
                                    </div>
                                 </div>
                            </div>

                             <div class="row margin">
				<div class="form-group">
                                    <div class="form-group col-lg-6 col-md-6" style="margin-bottom:0px; margin-top: -30PX; margin-left: 0PX; float: left;">
                                        <label>Boletim de transferência localidade Recife:</label>
                                        <input class="form-control" type="text" name="bol_local" id="bol_local" placeholder="Boletim - xx/xx/xxxx" required="Número do boletim e data de publicação do mesmo."/>
                                    </div>
                                 </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-2 col-md-2" style="margin-bottom:0px; margin-left: 0px; margin-top: -45PX; float: left;">
                                        <label>Telefone:</label>
                                        <input class="form-control" type="text" name="tel" id="tel" placeholder="(xx) xxxxx-xxxx" required="Digite um telefone para contato."/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-4 col-md-4" style="margin-bottom:0px; margin-left: 0PX; margin-top: -45PX; float: left;">
                                        <label>Email:</label>
                                        <input class="form-control" type="mail" name="email" id="email" placeholder="E-mail" required="Digite um E-mail valido para entrar em contato. "/>
                                    </div>
                                </div>
                            </div>

                         <div class="box box-header">
                            <h5 class="box-title"> 
                                <p style="text-align: justify-all; float:left;">    Ao Ilmo. Sr. Comandante do Colégio Militar de Recife:</br></br>
                                    Objetivo: Matricula do Colégio Militar de Recife</br></br>
                                    1. Vem requerer a V. Exa.(V. Sa.) concender matricula no colégio Militar de Recife, em regime de externato, para meu dependente, conforme descrito abaixo:
                                </p>
                            </h5>
                        </div><!-- /.box-header -->


                            <div class="row margin">
                                <div class="form-group">
                                    <div class="form-group col-lg-6 col-md-6" style="float: left; margin-left:-20px; margin-top:5px;">
                                        <label>Nome Completo:</label>
                                        <input type="text" name="nome_dependente" id="nome_dependente" class="form-control" placeholder="Nome" required= "Informe o Nome completo do aluno!"/>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-4" style="float: left; margin-left:0px; margin-top: 15px;">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar" ></span>
                                            Data de Nascimento:
                                        </div>
                                        <input placeholder="__/__/____" type="date" name="nascimento" id="nascimento" class="form-control" required="O campo Data de nascimento deve ser preenchido" />     
                                    </div>
                                </div>
                                <div class="form-group col-lg-3 col-md-3" style="float: left; margin-left: -17px;">
                                    <label>Grau de Parentesco:</label>
                                    <div class="input-group">
                                       <input placeholder="parente" name="grau" id="grau" class="form-control" required="Grau de Parentesco"/>     
                                    </div>
                                </div>
                                <div class="form-group col-lg-3 col-md-3" style="float: left; margin-left: -17px;">
                                    <label>Ano Letivo Pretendido:</label>
                                    <div class="input-group">
                                       <input placeholder="letivo" name="letivo" id="letivo" class="form-control" required="Diga o ano Letivo desejado!"/>     
                                    </div>
                                </div>
                               	<div class="form-group">
                                    	<div class="form-group col-lg-6 col-md-6">
		                                <LABEL>Ensino:</LABEL></br>
		                               	<input type="radio" name="ensino" value="Fundamental"> Fundamental<br>
		    				<input type="radio" name="ensino" value="Médio"> Médio<br>
					</div>
				</div>
                        </div>
			<div class="box box-header">
                            <div class="box box-default">
                                <h5 class="box-title"> <p style="text-align: justify-all; float: left;">	2. Tal solicitação encontra amparo no ART. 52 inciso 1º do Regulamento dos Colégios Militares (R-69).
        				        </p></h5>
                            </div><!-- /.box-header -->
                        </div>
	
                    	<div class="box-footer">
                            <div class="row margin"> 
                                <div class="col-lg-3 col-md-3" style="text-align:center; margin-left: 38%; padding-top:3%;">
                                        <button type="submit" class="btn  btn-flat btn-success btn-lg">Enviar</button>
                                </div>
                            </div>
                            <div id="rodape2" style="margin-top:5%; text-align:center;" >
      <p style="font-family: courier; font-size: 14px;" >SEREP-RF<br>
         GAP-RF SDTIC-SUBSEÇÃO DE APLICAÇÕES.<br></p>

  </div>
                        </div>

                    </div>                          
                </div>    
            </div>
        </form>
    </div>
</body>
</html>
