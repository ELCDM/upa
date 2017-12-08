<?php
/**
* Template Name: Cotizador
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

the_post();
get_header();
?>
<main class="content w-clearfix">
  <div class="contactocontent cotizadorcont w-clearfix">
    <div class="titulcotiz tituldecont w-clearfix">
      <h1 class="tituldecontacto">Cotizador</h1>
    </div>
    <div class="max960 w-clearfix">
      <div class="textdecotiz textdecotizador textdeprodu">Este es un cotizador en línea en el cual se puede dar una idea de las cuotas y el interés que deberá de pagar por su préstamo.</div>
      <div class="otrotitul textver tituldetabla">Instrucciones de uso:</div>
      <div class="listadereque">
        <div class="text-block-13">Ingrese todos los datos que le solicita el cotizador.</div>
        <div class="text-block-13">Presione el bot'on "COTIZAR" para que despliegue la tabla con el cálculo requerido.</div>
        <div class="text-block-13">Si desea modificar uno de los datos o el tipo de préstamo puede cambiarlo y vuelva a presionar "COTIZAR".</div>
        <div class="text-block-13">Lea cuidadosamente las alertas que pudieran aparecer del lado derecho.</div>
      </div>
      <div class="elcotizador w-clearfix">
        <div class="formyalerta w-clearfix">
          <div class="formcotizador">
            <form class="w-clearfix" data-name="Email Form 2" id="email-form-2" name="email-form-2">
              <div class="tipoprest w-clearfix" >
                <div class="pasos">1</div>
                <label class="labeldelform" for="tipo-de-prestamo">Préstamo a Solicitar</label>
                <select class="selectdelformcot w-select" data-name="tipo de prestamo" id="tipo-de-prestamo" name="tipo-de-prestamo">
                  <option value="presta-facil">Presta Fácil Sin Fiador</option>
                  <option value="prestamo-fiduciario">Préstamo Fiduciario</option>
                  <option value="prestamo-hipotecario">Préstamo Hipotecario</option>
                  <option value="prestamo-automatico">Préstamo Automático</option>
                </select>
              </div>
              <div class="demascampos w-clearfix">
                <div class="uncamp w-clearfix">
                  <label class="labcot" for="monto-solicitado">Monto Solicitado</label>
                  <input class="inputcoti w-input" id="monto-solicitado" maxlength="256" name="monto-solicitado" placeholder="Q 0.00" type="number" required="required" alert="false">
                </div>
                <div class="uncamp w-clearfix">
                  <label class="labcot" for="plazo-en-meses">Plazo en meses</label>
                  <input class="inputcoti w-input" id="plazo-en-meses" maxlength="256" name="plazo-en-meses" placeholder="12" required="required" type="number" alert="false">
                </div>
                <div id="filaingresos" class="uncamp w-clearfix">
                  <label class="labcot" for="ingresos-mensuales">Ingresos Mensuales</label>
                  <input class="inputcoti inputingas w-input" data-name="ingresos mensuales" id="ingresos-mensuales" maxlength="256" name="ingresos-mensuales" placeholder="Q 0.00" required="required" type="number" alert="false" alert2="false">
                </div>
                <div id="filagastos" class="uncamp w-clearfix">
                  <label class="labcot" for="gastos-mensuales">Gastos Mensuales</label>
                  <input class="inputcoti inputingas w-input" data-name="gastos mensuales" id="gastos-mensuales" maxlength="256" name="gastos-mensuales" placeholder="Q 0.00" required="required" type="number" alert="false" alert2="false">
                </div>
                <input type="button" id="cotizarr" class="cotizarr" value="Cotizar">
                <div class="uncamp w-clearfix">
                  <label class="labcot" for="interes-sobre-saldos">Tasa de Interés sobre saldos</label>
                  <input class="inputcoti w-input" data-name="interes sobre saldos" id="interes-sobre-saldos" maxlength="256" name="interes-sobre-saldos" placeholder="00%" required="required" type="text" value="15%" disabled>
                </div>
                <div class="uncamp w-clearfix">
                  <label class="labcot" for="tasa-efectiva">Tasa efectiva</label>
                  <input class="inputcoti w-input" data-name="tasa efectiva" id="tasa-efectiva" maxlength="256" name="tasa-efectiva" placeholder="00%" required="required" type="text" disabled>
                </div>
                <div class="uncamp w-clearfix">
                  <label class="labcot" for="cuota-pagar">Cuota a Pagar</label>
                  <input class="fijos inputcoti w-input" data-name="cuota pagar" id="cuota-pagar" maxlength="256" name="cuota-pagar" placeholder="Q 0.00" required="required" type="text" disabled>
                </div>
                <div class="uncamp w-clearfix">
                  <label class="labcot" for="intereses-pago">Total de Intereses a pagar</label>
                  <input class="fijos inputcoti w-input" data-name="intereses pago" id="intereses-pago" maxlength="256" name="intereses-pago" placeholder="Q 0.00" required="required" type="text" disabled>
                </div>
              </div>
            </form>
            
          </div>
          <div class="lasalertas w-clearfix">
            <div class="pasoeicon w-clearfix">
              <div class="paso2 pasos">2</div><img class="iconalerta" src="<?php bloginfo('template_url')?>/images/iconalerta.png">
            </div>
            <div class="alerttext"><ul id="las-alertas">
            </ul></div>
          </div>
        </div>
        <div class="explicaciones">
          <div class="textcenter">
            <div class="textdeexplic">La tasa efectiva es la tasa de interés real que pagará al final de su préstamo por pagos puntuales, esta se calcula dividiendo el pago de intereses, divido el monto solicitado, dividido el plazo en años.</div>
            <div class="textdeexplic"> El cálculo está hecho a 31 días, puede tener  variación dependiendo de los días calendario que correspondan.</div> 
            <div class="textdeexplic ultmi">En cuota de pago mensual de tu préstamo, Q10 del mismo son trasladados a tu cuenta de aportaciones</div>
          </div>
        </div>
      </div>
      <div class="tabladeresultados w-clearfix">
        <div class="latablaborde w-clearfix">
          <div class="encabezadodetab w-clearfix">
            <div class="paso3 pasos">3</div>
            <div class="titultabla">Saldo Inicial</div>
            <div class="cuotacap titultabla">Cuota Capital</div>
            <div class="intereses titultabla">Intereses</div>
            <div class="intereses titultabla">Aportaciones</div>
            <div class="titultabla totalcuota">Total Cuota</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
?>