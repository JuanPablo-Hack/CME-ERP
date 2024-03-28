<?php
include './Selects.php';
$id = $_POST['id'];
$conexion = mysqli_connect(
    'srv1103.hstgr.io',
    'u288448544_cmeerp',
    ']TpOBucKm;M1',
    'u288448544_cmeerp'
);

$servicio_info = $conexion->query(
    "SELECT * FROM `servicios` WHERE `id` = '$id'"
);
$servicio = $servicio_info->fetch_assoc();

$cliente_origen = $servicio['cliente'];
$subcliente = $servicio['subcliente'];

$SQL_Cliente_Origen = $conexion->query(
    "SELECT * FROM clientes WHERE id = $cliente_origen"
);
$cliente_info = $SQL_Cliente_Origen->fetch_assoc();

$SQL_SUBCLIENTE = $conexion->query(
    "SELECT * FROM subcliente WHERE id = $subcliente"
);
$subcliente_info = $SQL_SUBCLIENTE->fetch_assoc();
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      .tm_container {
  margin-top: 20px;
  max-width: 880px;
  padding: 0px 0px 0px 5px;
  margin-left: auto;
  margin-right: auto;
  position: relative;
}
.tm_invoice_wrap {
  position: relative;
}
* {
  margin: 0;
  box-sizing: border-box;
  padding: 0;
  font-family: sans-serif;
}

body {
  background-color: #fff;
  font-size: 12px;
}

header {
  position: relative;
  width: 100%;
  font-size: 12px;
  display: flex;
}

h1 {
  position: absolute;
  color: #2f5496;
  font-size: 18px;
}

.soluciones {
  top: 10%;
  left: 35%;
}

.y {
  top: 30%;
  left: 49%;
}

.calidad {
  top: 53%;
  left: 51%;
}

#figura {
  position: absolute;
  right: 0px;
  top: 0px;
  height: 200px;
}

#figura1 {
  height: 150px;
  width: 250px;
  margin-top: 20px;
  margin-bottom: 50px;
}

.contacto {
  position: absolute;
  display: flex;
  left: 27%;
  bottom: 50px;
  width: 60%;
  justify-content: space-between;
  padding: 0px 50px 0px 15px;
  font-size: 12px;
}

.info {
  display: flex;
  width: 200px;
  justify-content: space-evenly;
  align-items: center;
}

#containerTabla {
  margin-left: 10%;
  width: 80%;
  display: flex;
  flex-direction: column;
  background-image: url("assets/img/logo\ opaco.png");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 66%;
  margin-bottom: 10px;
}

#containerTabla2 {
  margin-top: 50px;
  margin-left: 10%;
  width: 80%;
  display: flex;
  flex-direction: column;
}

#containerTabla div {
  font-size: 14px;
  
  font-size: 12px;
}

.tabla1 {
  border: 1px solid;
  width: 48%;
  background-color: #d9dfef;
  height: 30px;
  display: flex;
}

.referencia {
  height: 100%;
  width: 50%;
  padding: 3px;
  border-right: 1px solid;
  display: flex;
  align-items: center;
  justify-content: center;
}

.referenciaTexto{
  width: 50%;
  padding:0 5px;
}

.tabla2 {
  border: 1px solid;
  width: 100%;
  height: 30px;
  display: flex;
}

.lugar {
  width: 25%;
  height: 100%;
  padding: 3px;
  background-color: #d9dfef;
  border-right: 1px solid;
  display: flex;
  align-items: center;
  justify-content: center;
}

.vacioTexto{
  width: 80%;
  padding:0 5px;
  height: 100%;
}

.tabla3 {
  margin-top: 20px;
  border: 1px solid;
}

.tabla3 div {
  height: 30px;
}

.tabla4 div {
  height: 30px;
}
.datoscliente {
  background-color: #8ea9db;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  border-bottom: 1px solid;
  font-weight: bold;
}

.containerRazon {
  display: flex;
  width: 100%;
}

.razon {
  width: 25.1%;
  background-color: #d9dfef;
  border-right: 1px solid;
  height: 20px;
  padding: 3px;
}

.vacio {
  width: 60%;
  border-bottom: 1px solid;
  border-right: 1px solid;
  height: 20px;
  padding: 3px;
}

.vacio2 {
  width: 14.9%;
  border-bottom: 1px solid;
  height: 22x;
  padding: 3px;
}

.domicilio {
  width: 300px;
  background-color: #d9dfef;
  border-right: 1px solid;
  border-top: 1px solid;
  height: 20px;
  padding: 3px;
}

.container {
  display: flex;
  width: 100%;
}

.container2 {
  display: flex;
  border-left: 1px solid;
  height: 50px;
  width: 100%;
}

.container3{
  display: flex;
  border-left: 1px solid;
  height: 75px;
  width: 100%;
}


.principal {
  width: 25.1%;
  background-color: #d9dfef;
  border-right: 1px solid;
  height: 100%;
  padding: 3px;
  border-bottom: 1px solid;
  display: flex;
  justify-content: center;
  align-items: center;
}

.principal2 {
  width: 25.1%;
  background-color: #d9dfef;
  border-right: 1px solid;
  height: 20px;
  padding: 3px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.vacio3 {
  width: 74.9%;
  border-bottom: 1px solid;
  height: 20px;
  padding: 3px;
}

.vacioN {
  width: 74.9%;
  border-bottom: 1px solid;
  border-right: 1px solid;
  height: 100%;
  padding: 3px;
  font-size: 12px;
}

.vacio4 {
  width: 74.9%;
  height: 20px;
  padding: 3px;
}

.tabla4 {
  border: 1px solid;
}

.containerFila {
  display: flex;
  width: 100%;
}

.principal3 {
  width: 25%;
  background-color: #d9dfef;
  border-right: 1px solid;
  height: 20px;
  padding: 3px;
  border-bottom: 1px solid;
  display: flex;
  justify-content: center;
  align-items: center;
}

.vacio5 {
  width: 25%;
  border-bottom: 1px solid;
  border-right: 1px solid;
}

.vacio6 {
  width: 25%;
  border-right: 1px solid;
}

.principal4 {
  width: 25%;
  background-color: #d9dfef;
  border-right: 1px solid;
  height: 20px;
  padding: 3px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.tabla6 {
  margin-top: 20px;
  border: 1px solid;
  width: 100%;
  height: 50px;
}

.tabla7 {
  border-left: 1px solid;
  border-right: 1px solid;
  border-bottom: 1px solid;
  width: 100%;
  height: 100px;
}

.lugar2 {
  width: 25%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #d9dfef;
  border-right: 1px solid;
  border-top: 0px solid;
  font-weight: 400;
}

.tablano {
  height: 40px;
  border-bottom: 1px solid;
  border-left: 1px solid;
  border-right: 1px solid;
  width: 100%;
}

#figura2 {
  margin-bottom: -50px;
}

.tablaN {
  display: flex;
  width: 100%;
  justify-content: space-between;
  border: 1px solid;
  height: 50px;
}

.infoN {
  width: 50%;
  border-right: 1px solid;
  padding: 5px;
  
}

.infoN2 {
  width: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  
}

.containerText {
  width: 70%;
  font-size: 10px;
  align-items: center;
  justify-content: center;
  margin-left: 15%;
  text-align: justify;
  background-image: url("assets/img/logo\ opaco.png");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 66%;
}

.negrita {
  margin-top: 20px;
  margin-bottom: 20px;
  
}

.negrita2 {
  
  margin-right: 10px;
}
.textoD{
  background-color: red;
}
    </style>
  </head>
 
  <body>
    <div class="tm_container">
      <div class="tm_invoice_wrap">
        <header>
          <img id="figura1" src="../controllers/assets/img/Captura.PNG" alt="Logo" />
          <h1 class="soluciones">SOLUCIONES</h1>
          <h1 class="y">&</h1>
          <h1 class="calidad">CALIDAD</h1>
          <img id="figura" src="../controllers/assets/img/tempsnip.png" alt="" />
          <div class="contacto">
            <div class="info">
              <h3>314 146 5975</h3>
              <img src="../controllers/assets/img/tel.PNG" alt="" />
            </div>
            <div class="info">
              <h3>314 121 9074</h3>
              <img src="../controllers/assets/img/tel.PNG" alt="" />
            </div>
          </div>
        </header>
        <containerTabla id="containerTabla">
        <div class="tabla1">
            <div class="referencia">REFERENCIA C&ME</div>
            <div class="referenciaTexto"><?php echo 'CME-2024-' .
                $servicio['id']; ?></div>
          </div>
          <div class="tabla2">
            <div class="lugar">LUGAR Y FECHA <br> DE EXPEDICION</div>
            <div class="vacioTexto"><?php echo 'Manzanillo,Colima-' .
                $servicio['posicionamiento']; ?></div>
          </div>

          <div class="tabla3">
            <div class="datoscliente">
              DATOS FISCALES DEL CLIENTE / REMITENTE
            </div>
            <div class="container">
              <div class="principal">RAZON SOCIAL / RFC</div>
              <div class="vacio"><?php echo $cliente_info[
                  'razon_social'
              ]; ?></div>
              <div class="vacio2"><?php echo $cliente_info['rfc']; ?></div>
            </div>
            <div class="container">
              <div class="principal">DOMICILIO</div>
              <div class="vacio3"><?php echo $cliente_info['dir']; ?></div>
            </div>
            <div class="containerFila">
              <div class="principal3">REFERENCIA</div>
              <div class="vacio5"></div>
              <div class="principal">EJECUTIVO</div>
              <div class="vacio5"><?php echo $servicio['ejecutivo']; ?></div>
            </div>
          </div>
          <div class="tabla4">
            <div class="datoscliente">DATOS DE LA MERCANCIA</div>
            <div class="containerFila">
              <div class="principal3">CONTENEDOR(ES)</div>
              <div class="vacio5"><?php echo $servicio[
                  'no_contenedores'
              ]; ?></div>
              <div class="principal">TIPO DE MERCANCIA</div>
              <div class="vacio5"><?php echo $servicio['mercancia']; ?></div>
            </div>
            <div class="containerFila">
              <div class="principal3">PESO NETO</div>
              <div class="vacio5"><?php echo $servicio['peso_neto']; ?></div>
              <div class="principal">DICE CONTENER:</div>
              <div class="vacio5"><?php echo $servicio['contenido']; ?></div>
            </div>
            <div class="containerFila">
              <div class="principal3">PESO BRUTO</div>
              <div class="vacio5"><?php echo $servicio['peso_bruto']; ?></div>
              <div class="principal">CLASE IMO</div>
              <div class="vacio5"><?php echo $servicio['imo']; ?></div>
            </div>
            <div class="containerFila">
              <div class="principal3">TIPO DE CONTENEDOR(ES)</div>
              <div class="vacio5"><?php echo $servicio[
                  'tipo_contenedor'
              ]; ?></div>
              <div class="principal">CLASIFICACIÓN UN</div>
              <div class="vacio5"><?php echo $servicio['clasi']; ?></div>
            </div>
            <div class="containerFila">
              <div class="principal4">PEDIMENTO</div>
              <div class="vacio6"><?php echo $servicio[
                  'PEDIMENTO_FEC'
              ]; ?></div>
              <div class="principal4">RECINTO</div>
              <div class="vacio6"><?php echo $servicio['recinto_test']; ?></div>
            </div>
          </div>
          <div class="tabla4">
          <div class="datoscliente">DESTINO DE LA CARGA</div>
            <div class="container">
              <div class="principal">CLIENTE</div>
              <div class="vacio3"><?php echo $subcliente_info[
                  'nombre'
              ]; ?></div>
            </div>
            <div class="container">
              <div class="principal">DIRECCION</div>
              <div class="vacio3"><?php echo $subcliente_info['dir']; ?></div>
            </div>
            <div class="container">
              <div class="principal4">FECHA DE POSICIONAMIENTO</div>
              <div class="vacio4"><?php echo $servicio['pedimente']; ?></div>
            </div>
          </div>
          <div class="tabla4">
            <div class="datoscliente">DATOS DE OPERADOR Y UNIDAD</div>
            <div class="containerFila">
              <div class="principal4">OPERADOR</div>
              <div class="vacio6"><?php echo obtenerOperador(
                  $servicio['operador']
              ); ?></div>
              <div class="principal4">PLACAS</div>
              <div class="vacio6"><?php echo ObtenerUnidad(
                  $servicio['placas']
              ); ?></div>
            </div>
          </div>
          <div class="tabla6">
            <div class="lugar2" id="font">FIRMA Y/O <br> SELLO DE RECEPCION</div>
          </div>
          <div class="container2">
            <div class="principal">Nombre de quien recibe</div>
            <div class="vacioN"></div>
          </div>
          <div class="container3">
            <div class="principal">Observaciones</div>
            <div class="vacioN"><?php echo $servicio['obser']; ?></div>
          </div>
        </containerTabla>
        <div id="containerTabla2">
          <div class="tablaN">
            <div class="infoN">DOF</div>
            <div class="infoN2">NOM012SCT22014</div>
          </div>
        </div>

        <div class="containerText">
          <p class="negrita">
            Condiciones de prestación de servicios que ampara la CARTA DE PORTE
            O COMPROBANTE PARA EL TRANSPORTE DE MERCANCÍAS.
          </p>
          <div>
            <strong>PRIMERA.-</strong> Para los efectos del presente contrato de
            transporte se denomina "Transportista" al que realiza el servicio de
            transportación y "Remitente" o "Expedidor" al usuario que contrate
            el servicio o remite la mercancía. <br />
            <strong>SEGUNDA.-</strong> El "Remitente" o "Expedidor" es
            responsable de que la información proporcionada al "Transportista"
            sea veraz y que la documentación que entregue para efectos del
            transporte sea la correcta. <br />
            <strong>TERCERA.-</strong> El "Remitente" o "Expedidor" debe
            declarar al "Transportista" el tipo de mercancía o efectos de que se
            trate, peso, medidas y/o número de la carga que entrega para su
            transporte y, en su caso, el valor de la misma. La carga que se
            entregue a granel será pesada por el "Transportista" en el primer
            punto donde haya báscula apropiada o, en su defecto, aforada en
            metros cúbicos con la conformidad del "Remitente" o "Expedidor".
            <br />
            <strong>CUARTA.-</strong> Para efectos del transporte, el
            "Remitente" o "Expedidor" deberá entregar al "Transportista" los
            documentos que las leyes y reglamentos exijan para llevar a cabo el
            servicio, en caso de no cumplirse con estos requisitos el
            "Transportista" está obligado a rehusar el transporte de las
            mercancías. <br />
            <strong>QUINTA.-</strong> Si por sospecha de falsedad en la
            declaración del contenido de un bulto el "Transportista" deseare
            proceder a su reconocimiento, podrá hacerlo ante testigos y con
            asistencia del "Remitente" o "Expedidor" o del consignatario. Si
            este último no concurriere, se solicitará la presencia de un
            inspector de la Secretaría de Comunicaciones y Transportes, y se
            levantará el acta correspondiente. El "Transportista" tendrá en todo
            caso, la obligación de dejar los bultos en el estado en que se
            encontraban antes del reconocimiento. <br />
            <strong>SEXTA.-</strong> El "Transportista" deberá recoger y
            entregar la carga precisamente en los domicilios que señale el
            "Remitente" o "Expedidor", ajustándose a los términos y condiciones
            convenidos. El "Transportista" sólo está obligado a llevar la carga
            al domicilio del consignatario para su entrega una sola vez. Si ésta
            no fuera recibida, se dejará aviso de que la mercancía queda a
            disposición del interesado en las bodegas que indique el
            "Transportista". <br />
            <strong>SEPTIMA.-</strong> Si la carga no fuere retirada dentro de
            los 30 días hábiles siguientes a aquél en que hubiere sido puesta a
            disposición del consignatario, el "Transportista" podrá solicitar la
            venta en subasta pública con arreglo a lo que dispone el Código de
            Comercio. <br />
            <strong>OCTAVA.-</strong> EL "Transportista" y el "Remitente" o
            "Expedidor" negociarán libremente el precio del servicio, tomando en
            cuenta su tipo, característica de los embarques, volumen,
            regularidad, clase de carga y sistema de pago. <br />
            <strong>NOVENA.-</strong> Si el "Remitente" o "Expedidor" desea que
            el "Transportista" asuma la responsabilidad por el valor de las
            mercancías o efectos que él declare y que cubra toda clase de
            riesgos, inclusive los derivados de caso fortuito o de fuerza mayor,
            las partes deberán convenir un cargo adicional, equivalente al valor
            de la prima del seguro que se contrate, el cual se deberá expresar
            en la Carta de Porte. <br />
            <strong>DECIMA.-</strong> Cuando el importe del flete no incluya el
            cargo adicional, la responsabilidad del "Transportista" queda
            expresamente limitada a la cantidad equivalente a 15 días del
            salario mínimo vigente en el Distrito Federal por tonelada o cuando
            se trate de embarques cuyo peso sea mayor de 200 kg., pero menor
            de1000 kg; y a 4 días de salario mínimo por remesa cuando se trate
            de embarques con peso hasta de 200 kg. <br />
            <strong>DECIMA PRIMERA.-</strong> El precio del transporte deberá
            pagarse en origen, salvo convenio entre las partes de pago en
            destino. Cuando el transporte se hubiere concertado "Flete por
            Cobrar", la entrega de las mercancías o efectos se hará contra el
            pago del flete y el "Transportista" tendrá derecho a retenerlos
            mientras no se le cubra el precio convenido. <br />
            <strong>DECIMA SEGUNDA.-</strong> Si al momento de la entrega
            resultare algún faltante o avería, el consignatario deberá hacerla
            constar en ese acto en la Carta de Porte y formular su reclamación
            por escrito al "Transportista", dentro de las 24 horas siguientes.
            <br />
            <strong>DECIMA TERCERA.-</strong> El "Transportista" queda eximido
            de la obligación de recibir mercancías o efectos para su transporte,
            en los siguientes casos: a) Cuando se trate de carga que por su
            naturaleza, peso, volumen, embalaje defectuoso o cualquier otra
            circunstancia no pueda transportarse sin destruirse o sin causar
            daño a los demás artículos o al material rodante, salvo que la
            empresa de que se trate tenga el equipo adecuado. b) Las mercancías
            cuyo transporte haya sido prohibido por disposiciones legales o
            reglamentarias. Cuando tales disposiciones no prohíban precisamente
            el transporte de determinadas mercancías, pero sí ordenen la
            presentación de ciertos documentos para que puedan ser
            transportadas, el "Remitente" o "Expedidor" estará obligado a
            entregar al "Transportista" los documentos correspondientes. <br />
            <strong>DECIMA CUARTA.-</strong> Los casos no previstos en las
            presentes condiciones y las quejas derivadas de su aplicación se
            someterán por la vía administrativa a la Secretaría de
            Comunicaciones y Transportes. <br />
            <strong>DECIMA QUINTA.-</strong> Para el caso de que el "Remitente"
            o "Expedidor" contrate carro por entero, este aceptará la
            responsabilidad solidaria para con el "Transportista" mediante la
            figura de la corresponsabilidad que contempla el artículo 10 del
            Reglamento Sobre el Peso, Dimensiones y Capacidad de los Vehículos
            de Autotransporte que Transitan en los Caminos y Puentes de
            Jurisdicción Federal, por lo que el "Remitente" o "Expedidor" queda
            obligado a verificar que la carga y el vehículo que la transporta,
            cumplan con el peso y dimensiones máximas establecidos en la
            NOM012SCT22014. Para el caso de incumplimiento e inobservancia a las
            disposiciones que regulan el peso y dimensiones, por parte del
            "Remitente" o "Expedidor", este será corresponsable de las
            infracciones y multas que la Secretaría de Comunicaciones y
            Transportes y la Policía Federal impongan al "Transportista", por
            cargar las unidades con exceso de peso.
          </div>
        </div>
        <img id="figura2" src="../controllers/assets/img/figura2.PNG" alt="" />
      </div>
    </div>
    <script
      src="https://kit.fontawesome.com/ce214fef7b.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://invoma.vercel.app/assets/js/jquery.min.js"></script>
    <script src="https://invoma.vercel.app/assets/js/jspdf.min.js"></script>
    <script src="https://invoma.vercel.app/assets/js/html2canvas.min.js"></script>
    <script src="https://invoma.vercel.app/assets/js/main.js"></script>
  </body>
</html>
