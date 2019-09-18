<!DOCTYPE html>

<?php $selecao = ""; ?>
<?php $selecao = " <div id='divFiltros'></div>"; ?>
<html style="min-height: 673px;">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">          
        <title> Matrícula Colégio Militar</title>
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
        <script type="text/javascript">


            

            function limiteTransferencia(ano_tranferencia, mes_transferencia, dia_transferencia) {

//        var d = new Date,
//        ano_atual= d.getFullYear(),
//        mes_atual = d.getMonth() +1,
//        dia_atual = d.getDate(),


                        ano_atual = '2018',
                        mes_atual = '12',
                        dia_atual = '31',
                        ano_tranferencia = +ano_tranferencia,
                        mes_transferencia = +mes_transferencia,
                        dia_transferencia = +dia_transferencia,
                        quantos_anos = ano_atual - ano_tranferencia;

                if (mes_atual < mes_transferencia || mes_atual == mes_transferencia && dia_atual < dia_transferencia) {
                    quantos_anos--;

                }

                return quantos_anos < 0 ? 0 : quantos_anos;
            }
            
             function limiteIdade(ano, mes, dia) {


                        ano_atual = '2019',
                        mes_atual = '01',
                        dia_atual = '01',
                        
                        ano = +ano,
                        mes = +mes,
                        dia = +dia,
                        quantos_anos = ano_atual - ano;

                if (mes_atual < mes || mes_atual == mes && dia_atual < dia) {
                    quantos_anos--;

                }

                return quantos_anos < 0 ? 0 : quantos_anos;
            }
             function limiteIdade2(ano2, mes2, dia2) {


                        ano_atual2 = '2019',
                        mes_atual2 = '12',
                        dia_atual2 = '30',
                       
                        ano2 = +ano2,
                        mes2 = +mes2,
                        dia2 = +dia2,
                        quantos_anos2 = ano_atual2 - ano2;

                if (mes_atual2 < mes2 || mes_atual2 == mes2 && dia_atual2 < dia2) {
                    quantos_anos2--;

                }

                return quantos_anos2 < 0 ? 0 : quantos_anos2;
            }


            function limiteApresentacao(ano_apresentacao, mes_apresentacao, dia_apresentacao) {


                        ano_atual = '2018',
                        mes_atual = '12',
                        dia_atual = '31',
                        ano_apresentacao = +ano_apresentacao,
                        mes_apresentacao = +mes_apresentacao,
                        dia_apresentacao = +dia_apresentacao,
                        quantos_anos = ano_atual - ano_apresentacao;

                if (mes_atual < mes_apresentacao || mes_atual == mes_apresentacao && dia_atual < dia_apresentacao) {
                    quantos_anos--;

                }

                return quantos_anos < 0 ? 0 : quantos_anos;
            }


            function compareDates(date1, date2, data3) {

                var limiteIdademenor = parseInt(date1.split("/")[2].toString() + date1.split("/")[1].toString() + date1.split("/")[0].toString());
                var nascimento = parseInt(date2.split("/")[2].toString() + date2.split("/")[1].toString() + date2.split("/")[0].toString());
                var limiteIdademaior = parseInt(data3.split("/")[2].toString() + data3.split("/")[1].toString() + data3.split("/")[0].toString());

                if (nascimento > limiteIdademenor && nascimento < limiteIdademaior) {
                    alert("está dentro do padrão estabelecido");
                } else {
                    alert("Idade não permitida");
                    //document.getElementById("nascimento").value='000-00-00';
                    return false;

                }

            }
            
    
    function verificarDataApresentacao(){
        
                var dataApresentacao = document.getElementById('data_bol_a').value;
                apresentacao = String(dataApresentacao).split("/");
                var anoA = apresentacao[2];
                var mesA = apresentacao[1];
                var diaA = apresentacao[0];
                var qtd_ano_apres = limiteApresentacao(anoA, mesA, diaA);
                
                
                if (qtd_ano_apres < '3') {
                   
                } else{
                    alert('É necessário para fins de efetivação e matrícula, ter  até três anos posteriores ao ato final da movimentação do militar (data de apresentação do militar na Guarnição de destino).');
                    document.getElementById("data_bol_a").value='dd-mm-aaaa';
                }

            }
            function verificarDataTransferencia(){
                
                var dataTransferencia = document.getElementById('data_bol').value;
                trnsferencia = String(dataTransferencia).split("/");
                var anoT = trnsferencia[2];
                var mesT = trnsferencia[1];
                var diaT = trnsferencia[0];
                var qtd_ano_transf = limiteTransferencia(anoT, mesT, diaT);

                if (qtd_ano_transf < '4') {
                    return true;
                } else {
                    alert('É necessário para fins de efetivação e matrícula, ter até quatro anos posteriores ao ano da publicação do início do ato da movimentação (boletim do órgão movimentador).');
                    document.getElementById("data_bol").value='dd-mm-aaaa';
                }

            }
            
            function verificarDataNascimento() {
                
               
                var dataNaci = document.getElementById('nascimento').value;
                
                 var nasci = "";
                 var seriePretendida = "";
                  var seriefm = serie();
                nascimento = String(dataNaci).split("/");
                var ano = nascimento[2];
                var mes = nascimento[1];
                var dia = nascimento[0];
                var qtd_ano_nasc = limiteIdade(ano, mes, dia);
                var qtd_ano_menor = limiteIdade2(ano, mes, dia); 
               
                seriePretendida = seriefm; 
               // edital = '1) 6º ano: ter menos de treze anos em 1o de janeiro ou completar dez anos até 31 de dezembro;';
              
    

               //  alert(qtd_ano_nasc);
                if (qtd_ano_menor >'9'&& qtd_ano_nasc <'13'&&seriefm=='6º') {
                     return nasci = true;  
                } else if(qtd_ano_menor >'10'&& qtd_ano_nasc <'14'&&seriefm=='7º') {
                 return nasci = true;  
                }
                else if(qtd_ano_menor >'11'&& qtd_ano_nasc <'15'&&seriefm=='8º') {
                  return nasci = true;  
                }
                else if(qtd_ano_menor >'12'&& qtd_ano_nasc <'16'&&seriefm=='9º') {
                  return nasci = true;  
                }
                else if(qtd_ano_menor >'13'&& qtd_ano_nasc <'18'&&seriefm=='1º') {
                  return nasci = true;  
                }
                else if(qtd_ano_menor >'14'&& qtd_ano_nasc <'19'&&seriefm=='2º') {
                  return nasci = true;  
                }else if(qtd_ano_menor >'15'&& qtd_ano_nasc <'20'&&seriefm=='3º') {
                  return nasci = true;  
                }else {
                     alert('A série pretendida '+ seriePretendida + " ano não está dentro da idade estabelecida pelo edital R-69 Art 54 ");
                    document.getElementById("nascimento").value='dd/mm/aaaa';
        return nasci = false;       
        }
                
return nasci;

            }

         
            $(document).ready(function () {

                $('input[name="ensino"]').click(function () {
                    selecionado('ensino');
                });
                var selecionado = function (grupo) {
                    var result = $('input[name="' + grupo + '"]:checked');
                    if (result.length > 0) {
                        var contador = "";
                        result.each(function () {
                            contador += $(this).val() + " "
                        });
                        $('#divFiltros').html(contador);
                    } else {
                        $('#divFiltros').html("Nenhum selecionado");
                    }
                };
            });

        </script>

        <script>
            jQuery(function ($) {
                $("#nascimento").mask("99/99/9999");
                $("#data_bol").mask("99/99/9999");
                $("#data_bol_a").mask("99/99/9999");
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
                        <h1 class="">Matrícula Colégio Militar <br> 
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
                        <h5 class="box-title"> <p>    - REQUERIMENTO DO MILITAR.
                            </p></h5>
                    </div><!-- /.box-header -->
                </div>
            </div>


            <!-- Inicio do box do formulario-->
            <form name="form1" action="enviar.php" method="post" >
                <input hidden="funcao" name="funcao" value="salvaform">
                <input hidden="funcao" name="artigo" value="<?php echo $_POST['letra_art52']?>">
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
                                    <div class="form-group col-lg-4 col-md-4" style="margin-bottom:0px; margin-top: -15px; margin-left: -350px; float: left;">
                                        <label>Nome Completo:</label>
                                        <input class="form-control" type="text" name="nome_militar" maxlength="200" id="nome_militar" placeholder="Nome" required= "Informe seu nome completo." />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-3 col-md-3" style="margin-bottom:0px; margin-top: -15PX;">
                                        <label>Identidade COMAER:</label>
                                        <input class="form-control" type="number" name="id" id="id" maxlength="40" placeholder="Identidade" required="Número da indentidade deve ser preenchido."/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-3 col-md-3" style=" margin-top: -60PX; float: right">
                                        <label>SARAM :</label>
                                        <input class="form-control" type="number" name="saram" maxlength="30" id="saram" placeholder="SARAM" required="Número do SARAM deve ser preenchido."/>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="form-group col-lg-3 col-md-3" style="float: left; margin-left: 0px;">
                                    <label>Selecione sua localidade  :</label>
                                    <select class="form-group" id="estado" name="estado" onchange="ChangeLocalidadeList()" required="Selecione sua localidade"> 
                                        <option value="">-- Localidade --</option> 
                                        <option value="PE">Pernambuco</option> 
                                        <option value="PB">Paraíba</option>
                                        <option value="AL">Alagoas</option> 
                                        <option value="RN">Rio Grande do Norte</option> 


                                    </select> 
                                    <br>


                                    <select class="form-group" id="cidade" name="cidade" onchange="cidade()" required="Selecione ">
                                        <option value="">--Cidade--</option> 
                                    </select> 

                                    <script>
                                        var listaCidade = {};
                                        listaCidade['PE'] = ['Recife', 'Olinda', 'Paulista', 'São Lourenço da Mata', 'Vitória de Santo Antão', 'Jaboatão dos guararapes', 'Nazaré da Mata', 'Limoeiro', 'Caruaru', 'Garanhuns', 'Arcoverde', 'Catende', 'Cabo de Santo Agostinho', 'Gravatá', 'Pesqueira'];
                                        listaCidade['PB'] = [ 'João Pessoa', 'Campina Grande', 'Bayeux', 'Rio Tinto', 'Serra Branca', 'Guarabira'];
                                        listaCidade['AL'] = ['Maceió', 'São José da Lage', 'Atalaia'];
                                        listaCidade['RN'] = ['Natal'];


                                        function ChangeLocalidadeList() {
                                            var estadoList = document.getElementById("estado");

                                            var cidadeList = document.getElementById("cidade");
                                            var selecioneCidade = estadoList.options[estadoList.selectedIndex].value;

                                            //alert(selCar) mostra fundamental ou médio;
                                            while (cidadeList.options.length) {
                                                // alert(serieList.options.length); muda a serie
                                                cidadeList.remove(0);
                                            }
                                            var cidade = listaCidade[selecioneCidade];


                                            //alert(cars); as series medio 1,2,3 e fundamental 6,7,8,9
                                            if (cidade) {
                                                var i;
                                                for (i = 0; i < cidade.length; i++) {
                                                    var lista = new Option(cidade[i], i);
                                                    cidadeList.options.add(lista);
                                                    //alert(cidade[1]); mostra ensino medio e fundamental por sequencia
                                                }
                                            }
                                        }

                                        function cidade() {

                                            var cidadeEstado = $('#cidade option:selected').text();
   

                                            return cidadeEstado;
                                        }
                                    </script>



                                </div>
                            <div class="row margin"> 
                                <div class="form-group">
                                    <div class="form-group col-lg-3 col-md-3" style="margin-left:-50px; margin-top: 0px; float: left;">
                                        <label>Organização</label><br>
                                        <select class="form-group" name="om" required>
                                            <option value="II COMAR">II COMAR</option>
                                            <option value="CINDACTA 3">CINDACTA 3</option>
                                            <option value="ALA 10">ALA 10</option><!--MUDOU-->
                                            <option value="1/11 GAV">1/11 GAV</option><!--MUDOU-->
                                            <option value="1/5 GAV">1/5 GAV</option><!--MUDOU-->
                                            <option value="2/5 GAV">2/5 GAV</option><!--MUDOU-->
                                            <option value="3/1 GCC">3/1 GCC</option><!--MUDOU-->
                                            <option value="1 FAE">1 FAE</option><!--MUDOU-->
                                            <option value="BANT">BANT</option><!--MUDOU-->
                                            <option value="GAP-NT">GAP-NT</option><!--MUDOU-->
                                            <option value="GITE">GITE</option><!--MUDOU-->
                                            <option value="CLBI">CLBI</option><!--MUDOU-->
                                            <option value="PANT">PANT</option><!--MUDOU-->                                            
                                           
                                            
                                            <option value="DTCEA-MO">DTCEA-MO</option>
                                            <option value="DTCEA-NT">DTCEA-NT</option><!--MUDOU-->
                                            
                                            <option value="DTCEA-RF">DTCEA-RF</option>
                                            <option value="DT-INFRA-RF">DT-INFRA-RF</option>
                                            <option value="ETA">ETA</option><!--MUDOU-->
                                            <option value="GAP-RF">GAP-RF</option>
                                            <option value="GSD-RF">GSD-RF</option>
                                            <option value="HARF">HARF</option>
                                            <option value="OARF">OARF</option>
                                            <option value="PARF">PARF</option>
                                            <option value="SEREP-RF">SEREP-RF</option>
                                            <option value="SERIPA 2">SERIPA 2</option>
                                             <option value="OUTROS">OUTROS</option><!--MUDOU-->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-6 col-md-6" style="margin-bottom:0px; margin-left: -488PX; margin-top:100PX; float: left;">
                                        <label>R/1 Data de Publicação da Reserva:</label>
                                        <input class="form-control" type="text" name="reserva" maxlength="45" id="reserva" placeholder="Data da Publicação"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-3 col-md-3" style="margin-bottom:0px; margin-top: 100PX; margin-left: 0PX; float: left;">
                                        <label>Boletim/Data:</label>
                                        <input class="form-control" type="text" name="bol" id="bol" maxlength="45" placeholder="Boletim - xx/xx/xxxx" />
                                    </div>
                                </div>
                            </div>

                            <div class="row margin">
                                <div class="form-group">

                                    <div class="form-group col-lg-2 col-md-1" style="margin-bottom:0px; margin-top: 15PX; margin-left: -13PX; float: left;">
                                        <label>Boletim de Transf.</label>
                                        <input class="form-control" type="text" name="boletim" id="boletim" maxlength="15" placeholder="Nº de Boletim de transferência" />
                                    </div>
                                    <div class="form-group col-lg-4 col-md-3" style="margin-bottom:0px; margin-top: 15PX; margin-left: 0PX; float: left;">
                                        <label>Data do boletim com a transferência:</label>
                                        <input class="form-control" type="text" name="data_bol" id="data_bol" onblur="verificarDataTransferencia()"  placeholder="Data do Boletim" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-3 col-md-3" style="margin-bottom:0px; margin-left: -0px; margin-top: -81PX; float: right;">
                                        <label>Telefone Celular (ZAP):</label>
                                        <input class="form-control" type="text" name="tel" id="tel" maxlength="30" placeholder="(xx) xxxxx-xxxx" required="Digite um telefone para contato."/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-4 col-md-4" style="margin-bottom:0px; margin-left: -138PX; margin-top: -194PX; float: left;">
                                        <label>Email FAB (principal):</label>
                                        <input class="form-control" type="email" name="email" maxlength="90" id="email" placeholder="E-mail"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group col-lg-4 col-md-4" style="margin-bottom:0px; margin-left: 0PX; margin-top: -194PX; float: right;">
                                        <label>Email Particular:</label>
                                        <input class="form-control" type="email" name="emailP" id="emailP" placeholder="E-mail Particular" />
                                    </div>
                                </div>
                            </div>
                            <div class="row margin" style="margin-top: -66px">
                                <div class="form-group">
                                    <div class="form-group col-lg-4 col-md-3" style="margin-bottom:0px; margin-top: -0PX; margin-left: 0pX; float: right;">
                                        <label>Data do boletim de apresentação:</label>
                                        <input class="form-control" type="text" name="data_bol_a" id="data_bol_a" onblur="verificarDataApresentacao()" placeholder="Data de " />
                                    </div>
                                    <div class="form-group col-lg-2 col-md-1" style="margin-bottom:0px; margin-top: -0PX; margin-left: -13PX; float: right;">
                                        <label>Boletim de apres</label>
                                        <input class="form-control" type="text" name="boletim_a" id="boletim" placeholder="Nº de Boletim" />
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
                                        <input type="text" name="nome_dependente" maxlength="200"id="nome_dependente" class="form-control" placeholder="Nome" required= "Informe o Nome completo do aluno!"/>
                                    </div>
                                </div>

                                <div class="form-group col-lg-3 col-md-3" style="float: left; margin-top: -10px;">
                                    <label>Grau de Parentesco:</label>
                                    <div class="input-group">
                                        <input placeholder="parente" name="grau" id="grau" class="form-control" required="Grau de Parentesco"/>     
                                    </div>
                                </div>


                                <div class="form-group col-lg-4 col-md-4" style="float: left; margin-left:350px;  margin-top: 21px;">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar" ></span>
                                            Data de Nascimento:
                                        </div>
                                        <input placeholder="__/__/____" type="text" name="nascimento" onblur="verificarDataNascimento()" id="nascimento" class="form-control" required="O campo Data de nascimento deve ser preenchido" />     
                                    </div>
                                </div>
                                <div class="form-group col-lg-3 col-md-3" style="float: left; margin-left: -657px;">
                                    <label>Ano Letivo Pretendido:</label>
                                    <select id="ensino" name="ensino" onchange="ChangeCarList()"> 
                                        <option value="">-- Ensino --</option> 
                                        <option value="fundamental">Fundamental</option> 
                                        <option value="medio">Médio</option> 


                                    </select> 



                                    <select id="ensinofm" name="letivo" onchange="serie()">
                                        <option value="">serie</option> 
                                    </select> 

                                    <script>
                                        var carsAndModels = {};
                                        carsAndModels['fundamental'] = ['6º', '7º', '8º', '9º'];
                                        carsAndModels['medio'] = ['1º', '2º', '3º'];
                                        carsAndModels['idade'] = ['14', '12', '3º'];


                                        function ChangeCarList() {
                                            var ensinoList = document.getElementById("ensino");

                                            var serieList = document.getElementById("ensinofm");
                                            var selCar = ensinoList.options[ensinoList.selectedIndex].value;

                                            //alert(selCar) mostra fundamental ou médio;
                                            while (serieList.options.length) {
                                                // alert(serieList.options.length); muda a serie
                                                serieList.remove(0);
                                            }
                                            var cars = carsAndModels[selCar];


                                            //alert(cars); as series medio 1,2,3 e fundamental 6,7,8,9
                                            if (cars) {
                                                var i;
                                                for (i = 0; i < cars.length; i++) {
                                                    var car = new Option(cars[i], i);
                                                    serieList.options.add(car);
                                                    //alert(cars[1]); mostra ensino medio e fundamental por sequencia
                                                }
                                            }
                                        }

                                        function serie() {

                                            var seriefm = $('#ensinofm option:selected').text();

                                            return seriefm
                                        }
                                    </script>



                                </div>

                                <div class="form-group">


                                </div>
                            </div>

                            <div class="box box-header">
                                <div class="box box-default">
                                    <h5 class="box-title"> <p style="text-align: justify-all; float: left;">
                                        <p>2. Tal solicitação encontra amparo no ART. 52 parágrafo 1º do Regulamento dos Colégios Militares (R-69).<br>
                                        </p></h5>
                                </div><!-- /.box-header -->
                            </div>

                            <div class="box-footer">
                                <div class="row margin"> 
                                    <div class="col-lg-3 col-md-3" style="text-align:center; margin-left: 38%; padding-top:3%;">
                                        <button type="submit" class="btn btn-flat btn-success btn-lg">Enviar</button>
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
<?php
$dataformulario = "<script>document.write(data)</script>";


$dataAtual = new DateTime();

//Reserva de duas variáveis com a mesma data. O clone é utilizado para não criar referências entre os objetos e sim duplicá-los.
$dataLimite = clone $dataInsercao = new DateTime($dataformulario);

//Adiciono um mês a data de inserção
$dataLimite->add(new DateInterval('P1M'));

//recrio a data de inserção, para o mês seguinte no dia 02
$dataLimite = new DateTime($dataLimite->format('Y-m-02'));

//faço a pura e simples verificação
if ($dataLimite >= $dataAtual) {
    echo 'inclusão permitida';

    print_r($dataLimite);
} else {
    echo 'prazo finalizado';
}
?>
