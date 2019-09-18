<!DOCTYPE html>

<?php $selecao="";?>
<?php $selecao =" <div id='divFiltros'></div>";?>
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
                    
                    
                    function idadeLimite(){
                        
                        var anoLimiteFinal = '2019-12-31';
                        var anoLimiteInicial = '2019-01-01';
                        var dataLimite6menor = '2007-12-31'; //não pode ter nascido antes de 31-12-2007 ano tem que ser maior e mes e dia pode ser menor
                        var dataLimite6maior = '2009-12-31'; // para o 6 ano a data tem que está entre 31/12/2007 e 31/12/2009
                        var dataLimite7menor = '2006-12-31';//não pode ter nascido antes de 31-12-2006 ano tem que ser maior e mes e dia pode ser menor
                        var dataLimite7maior = '2008-12-31';// tem que ter nascido entre '31-12-2008 a 31-12-2006
                        var dataLimite8menor = '2005-12-31';
                        var dataLimite8maior = '2007-12-31';
                        var dataLimite1menor = '2004-12-31';
                        var dataLimite1maior = '2006-12-31';
                        var dataLimite2menor = '2003-12-31';
                        var dataLimite2maior = '2005-12-31';
                        var dataLimite3menor = '2002-12-31';
                        var dataLimite3maior = '2004-12-31';
                    }
                    
    function idade(ano_aniversario, mes_aniversario, dia_aniversario) {
    var d = new Date,
        ano_atual = d.getFullYear(),
        mes_atual = d.getMonth() + 1,
        dia_atual = d.getDate(),

        ano_aniversario = +ano_aniversario,
        mes_aniversario = +mes_aniversario,
        dia_aniversario = +dia_aniversario,

        quantos_anos = ano_atual - ano_aniversario;

    if (mes_atual < mes_aniversario || mes_atual == mes_aniversario && dia_atual < dia_aniversario) {
        quantos_anos--;
    }

    return quantos_anos < 0 ? 0 : quantos_anos;
}


 function compareDates(date1, date2, data3){   
 
        var limiteIdademenor6 = parseInt(date1.split("/")[2].toString() + date1.split("/")[1].toString() + date1.split("/")[0].toString());  
        var nascimento = parseInt(date2.split("/")[2].toString() + date2.split("/")[1].toString() + date2.split("/")[0].toString()); 
        var limiteIdademaior6 = parseInt(data3.split("/")[2].toString() + data3.split("/")[1].toString() + data3.split("/")[0].toString()); 
       
        if (nascimento>limiteIdademenor6 && nascimento<limiteIdademaior6 ) {  
            alert("está dentro do padrão estabelecido");  
        }
        
        else {   alert("Idade não permitida");  
            return false; 
           
        }  
         
    } 
    
    function compareDataTransferencia(date1, date2){   
 
        var limiteIdademenor6 = parseInt(date1.split("/")[2].toString() + date1.split("/")[1].toString() + date1.split("/")[0].toString());  
        var reserva = parseInt(date2.split("/")[2].toString() + date2.split("/")[1].toString() + date2.split("/")[0].toString()); 
        
       
        if (reserva>limiteIdademenor6 && nascimento<limiteIdademaior6 ) {  
            alert("está dentro do padrão estabelecido");  
        }
        
        else {   alert("Idade não permitida");  
            return false; 
           
        }  
         
    } 
                    
                    function verificarDataReserva(){
                        
                      
                       var dataReserva = document.getElementById('reserva').value;
                           dataR = String(dataReserva).split("-");
                        var anoR  = dataR[0];
                        var mesR =  dataR[1];
                        var diaR =  dataR[2];
                                    
                    }
                    
                    
                    
                    
                    function verificarData(){
                        
                       
                        
                        var  anoLimiteFinal = new Date(2019,12,31).toString();
                        var anoLimiteInicial = '2019-01-01';
                        var dataLimite6menor = '31/12/2007'; //não pode ter nascido antes de 31-12-2007 ano tem que ser maior e mes e dia pode ser menor
                        var dataLimite6maior = '31/12/2009'; // para o 6 ano a data tem que está entre 31/12/2007 e 31/12/2009
                        var dataLimite7menor = '31/12/2006';//não pode ter nascido antes de 31-12-2006 ano tem que ser maior e mes e dia pode ser menor
                        var dataLimite7maior = '31/12/2008';// tem que ter nascido entre '31-12-2008 a 31-12-2006
                        var dataLimite8menor = '31/12/2005';
                        var dataLimite8maior = '31/12/2007';
                        var dataLimite9menor = '31/12/2004';
                        var dataLimite9maior = '31/12/2006';
                        var dataLimite1menor = '31/12/2003';
                        var dataLimite1maior = '31/12/2005';
                        var dataLimite2menor = '31/12/2002';
                        var dataLimite2maior = '31/12/2004';
                        var dataLimite3menor = '31/12/2001';
                        var dataLimite3maior = '31/12/2003';
                        
                        
                       
                         var data = document.getElementById('nascimento').value;
                         var nasci  = new Date (document.getElementById('nascimento').value);
                          // alert(nasci);
                      
                        
                      
                      
                        MyArray = String(data).split("-");
                        var ano  = MyArray[0];
                        var mes =  MyArray[1];
                        var dia =  MyArray[2];
                        var resultado = idade(ano);
                        var seriefm = serie();
                        
                         
                         if (seriefm=='6º') {  
                             alert('chebou 6');
            compareDates(dataLimite6menor, dia + '/'+mes+'/'+ano,dataLimite6maior);
        }
        
        else if (seriefm=='7º' ) {  
            compareDates(dataLimite7menor, dia + '/'+mes+'/'+ano,dataLimite7maior);        }
        else if (seriefm=='8º') {  
            compareDates(dataLimite8menor, dia + '/'+mes+'/'+ano,dataLimite8maior);  
        }
        else if (seriefm=='9º' ) {  
            compareDates(dataLimite9menor, dia + '/'+mes+'/'+ano,dataLimite9maior);
        }
        else if (seriefm=='1º' ) {  
             compareDates(dataLimite1menor, dia + '/'+mes+'/'+ano,dataLimite1maior);
        }
        else if (seriefm=='2º' ) {  
            compareDates(dataLimite2menor, dia + '/'+mes+'/'+ano,dataLimite2maior);
        }
        else if (seriefm=='3º' ) {  
           compareDates(dataLimite3menor, dia + '/'+mes+'/'+ano,dataLimite3maior);  
        } 
         
         if (expr) {
    
}
                         
                       //alert(dataLimite6menor + "data menor");
                        //alert(nasci + "nascimento");
                       
                        
                        
//                        if (resultado >='10' && resultado <='13'&& seriefm =='6º') {
//                            
//                          //  alert('6º ano: ter menos de treze anos em 1o de janeiro da data da matrícula ou completar dez anos até 31 de dezembro;');
//    
//}
//
//       else if (resultado >='11' && resultado <='14'&& seriefm =='7º') {
//                            
//                          //  alert('7º ano: ter menos de treze anos em 1o de janeiro da data da matrícula ou completar dez anos até 31 de dezembro;');
//    
//}               else{
//    //alert('não tem');
//}                        //alert(resultado);
                        
//                       var data = document.getElementById('nascimento').value;
//                       var hoje = new Date().toDateString();
//                       var data2 = new Date(data).toDateString();
//                       var ano = data.Year();
//                       var diferenca = (hoje - data2);
//                       alert(ano);
////                        alert(hoje +"hoje")
////                        alert(data2+ "data2")
//
//                        if (hoje > data2) {
//                            
//                            
//                          alert('Hoje é maior que data2')
//                            //alert("maior data2");
//                        } else if (hoje == data2) {
//                          //alert('Hoje é igual a data2')
//                        
//                        } else {
//                            
//                          //alert('Hoje é menor que data2')
//                        }

                       
                         
                    }
                    
                    //var data = document.getElementById('nascimento').value;

    /*var objDate = new Date();
    objDate.setYear(data.split("/")[2]);
    objDate.setMonth(data.split("/")[1]  - 1);//- 1 pq em js é de 0 a 11 os meses
    objDate.setDate(data.split("/")[0]);

    if(objDate.getTime() > new Date().getTime()){
        alert("A data de emissão da NF não pode ser maior que a data atual");
        document.getElementById('nascimento').focus();
      return false;
   }*/
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
        } 
        else { 
            $('#divFiltros').html("Nenhum selecionado"); 
        } 
    }; 
}); 

</script>
    
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
                                 <div class="form-group col-lg-6 col-md-6" style="margin-bottom:0px; margin-left: -85PX; margin-top: -15PX; float: left;">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar" ></span>
                                            R/1 Data de Publicação da Reserva:
                                        </div>
                                        <input placeholder="__/__/____" type="date" name="reserva" onchange="verificarDataReserva()" id="reserva" class="form-control" required="O campo Data de nascimento deve ser preenchido" />     
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
                                        <input placeholder="__/__/____" type="date" name="nascimento" onchange="verificarData()" id="nascimento" class="form-control" required="O campo Data de nascimento deve ser preenchido" />     
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
                                
                                function serie(){
                                    
                                    var seriefm =  $('#ensinofm option:selected').text();
                                    
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
                         2. Tal solicitação encontra amparo no ART. 52 inciso 1º do Regulamento dos Colégios Militares (R-69).
                        <?php echo $_POST['letra_art52']?>       
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
if($dataLimite >= $dataAtual) {
   echo 'inclusão permitida';
   
   print_r($dataLimite);
} else {
   echo 'prazo finalizado';
}
?>