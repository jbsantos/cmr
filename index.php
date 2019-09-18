<?php
$art52_I = "<b>I - o órfão, filho de militar de carreira ou da reserva remunerada do Exército, independente da
data do falecimento do pai ou da mãe;<br><br>";

$art52_II = "<b> II - o dependente legal de militar de carreira do Exército, nos termos do Estatuto dos Militares, se
o responsável encontrar-se em uma das seguintes situações:<br><br>";

$art52_III = "<b>III - o dependente de militar de carreira ou da reserva remunerada do Exército, se o responsável
for reformado por invalidez, nos termos do Estatuto dos Militares.<br><br></b>";
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->

<link href="maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/formulario.css" rel="stylesheet" id="bootstrap-css">

<script type="text/javascript">

function checkCampo() {
                //document.getElementById("chacarRadio").va;
              if((document.getElementById("chacarRadio1").checked));
              
              else if((document.getElementById("chacarRadio2").checked))
                  ;
              else if((document.getElementById("chacarRadio3").checked));
              else if((document.getElementById("chacarRadio4").checked));
              else if((document.getElementById("chacarRadio5").checked));
              else if((document.getElementById("chacarRadio6").checked));
              else if((document.getElementById("chacarRadio7").checked));
              else{alert('Selecione uma das opções');
              return false;
                }
              
             }

</script>
            
<div class="container" style="border: 2px solid #000">
    <div class="col-lg-12 col-md-12">
                <div class="box box-solid bg-light-green">
                    <!-- borda tracejada do cabçalho interno verde-->
                    <div class="box-header" align="center" style="background-color: #F7FDCA; border:3px dashed white; border-radius: 3px; width: 105%; margin-left: -27px" >
                        <h1 class="">Prazo de inscrição: 1 a 21 outubro de 2019</h1> 
  			<!--<h1 style="color:red" class="alert">INSCRIÇÕES ENCERRADAS</h1> -->
                            
                       <!-- <h3 class=""><span style="color:red"><b>Aviso:</b></span> As vagas para matrícula de dependentes de militares da Aeronáutica no CMR ainda não foram recebidas pelo SEREP-RF. Há uma previsão para o 14 de janeiro de 2019, que pode ser confirmada ou não.</h3> -->
                            <br> 
                            <!--<span style="font-size: 24px;font-style: italic;"><b>OBSERVAÇÃO: Todos deverão portar os documentos previstos para matrícula.</b></span> -->
                            <!-- box menor com o nome ala 15 lateral direita -->
                            
                        </h1>
                    </div><!-- /.box-header -->
                </div><BR>
    </div>
    <h3 align="center">CONDIÇÕES PARA HABILITAÇÃO À MATRÍCULA POR SORTEIO – ART 52, do R-69</h3>
    <hr/>

    
    <form action="inscricao.php" method="post" name="artigo" >
        <div class="col-sm-12"style="border: 1px" >
           
                <h4>
                    <input type="radio" id="chacarRadio1"name="letra_art52" value="amparo no artigo 52 - I" required="">
                    <b>I – Órfão</b>, filho de militar de carreira ou da reserva remunerada
                </h4>
           <hr/>
           
                <h4>
                    <input type="radio" id="chacarRadio2"name="letra_art52" value="amparo no artigo 52 - II">
                    <b>II</b> – Dependente legal de militar de carreira <b><u>movimentado, com mudança de sede</u></b>, para localidade assistida por CM, condicionada a matrícula, tão somente, ao CM que assiste a localidade para qual ocorreu a movimentação do militar, considerando como prazo, para fins de efetivação e matrícula, até quatro anos posteriores ao ano da publicação do início do ato da movimentação (boletim do órgão movimentador), ou até três anos posteriores ao ato final da movimentação do militar (data de apresentação do militar na Guarnição de destino). (Redação dada pela Portaria No 852 de 13 de setembro de 2010 do Cmt Ex).
                </h4>
             <hr/>
             
                <h4>
                    <input type="radio" id="chacarRadio3"name="letra_art52" value="amparo no artigo 52 - III">
                    <b>III</b> – Dependente legal de militar de carreira <b><u>designado para missão no exterior</u></b>, por período igual ou superior a um ano, se, ao deixar seu dependente legal no País, ocorrer mudança de domicílio do dependente para uma localidade assistida por CM; condicionada a matrícula, tão somente, ao CM que assiste a localidade para qual ocorreu a mudança do dependente; (Redação dada pela Portaria No 582 de 18 de agosto de 2009).                
                </h4>
            <hr/>
            <h4>
                    <input type="radio" id="chacarRadio4"name="letra_art52" value="amparo no artigo 52 - IV">
                    <b>IV</b> – Dependente legal de militar de carreira <b><u>movimentado para guarnições especiais</u></b>, ou nelas estiver servindo, podendo, nestes casos, optar por qualquer unidade do SCMB.           
              </h4>
            <h4> <hr/>
                    <input type="radio" id="chacarRadio5"name="letra_art52" value="amparo no artigo 52 - V">
<b>V</b> – Dependente legal de militar de carreira <b><u>transferido para a reserva remunerada, uma vez comprovadas a mudança de sede</u></b> e a fixação de residência em localidade assistida por CM, condicionada a matrícula, tão somente, ao CM que assiste a localidade para qual o militar fixou residência, considerando como prazo, para fins de efetivação de matrícula, até quatro anos posteriores ao ano da publicação do ato da transferência para a reserva; (Redação dada pela Portaria No 582 de 18 de agosto de 2009 do Cmt Ex).             
             </h4> <hr/>
                <h4>
                    <input type="radio" id="chacarRadio6"name="letra_art52" value="amparo no artigo 52 - VI">
<b>VI</b> – Dependente legal de militar de carreira <b><u>separado judicialmente ou divorciado</u></b>, e somente para a situação que ocorrer primeiro, cujo responsável legal pela guarda do dependente venha, comprovadamente, mudar de sede e fixar residência em localidade assistida por CM, condicionada a matrícula, tão somente, ao CM que assiste a localidade para qual o responsável pela guarda tenha fixado residência, considerando como prazo, para fins de efetivação de matrícula, até quatro anos posteriores ao ano da publicação da sentença; (Redação dada pela Portaria No 582 de 18 de agosto de 2009 do Cmt Ex).           
             <hr/>
                </h4>
             <h4>
                    <input type="radio" id="chacarRadio7" name="letra_art52" value="amparo no artigo 52 - VII">
<b>VII</b> – O dependente de militar de carreira ou da reserva remunerada, se o responsável for<b><u> reformado por invalidez</u></b>, nos termos do Estatuto dos Militares.           
            <hr/>
            
            </h4>
            

        
        <div class="row margin"> 
   <div class="col-lg-3 col-md-3" style="text-align:center; margin-left: 38%; padding-top:3%;">
      <button type="submit" class="btn  btn-flat btn-success btn-lg" onclick="return checkCampo()">Continuar</button>
    </div>
            </div> 
</div>
    </form>

</div>




