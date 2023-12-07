<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cotizacion</title>
    <script
      src="https://kit.fontawesome.com/ce214fef7b.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../controllers/assets/styles/styles.css" />
  </head>

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    .containerAll {
      width: 100%;
      background-image: url("/assets/cotizacion/logo\ opaco.png");
      background-repeat: no-repeat;
      background-position: 50%;
      background-size: contain;
      position: relative;
      padding: 0 20px 50px 20px;
    }

    .header {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .tempsnip {
      position: absolute;
      right: 1px;
    }

    .containerInfo1 {
      width: 100%;
    }

    .compass {
      width: 100%;
      display: flex;
      justify-content: space-between;
    }

    .textInfo {
      width: 100%;
    }

    .textInfo p {
      text-align: justify;
      
    }

    .presentamosTxt {
      margin-top: 0px;
    }

    .containerTabla {
      
      width: 100%;
      border: 1px solid;
    }

    .tabla1 {
      width: 100%;
      display: flex;
      background-color: #b4c6e7;
      align-items: center;
      justify-content: space-between;
     
      color: red;
      font-weight: bold;
    }

    .tabla2 {
      width: 100%;
      display: flex;
      background-color: #e7e6e6;
      align-items: center;
      justify-content: space-between;
      
    }

    .containerAzul {
      margin-top: 30px;
      background-color: #b4c6e7;
      padding: 0 20px;
    }

    .containerAzul p {
      margin-left: 10px;
    }

    .serviciosIncluidos {
      width: 100%;
      margin-top: 20px;
    }

    .txtServicios {
      font-size: 12px;
      text-decoration: underline;
      font-weight: bold;
      margin-bottom: 25px;
    }

    .containerUl {
      
      display: flex;
      width: 100%;
      align-items: center;
      
    }

    .containerUl img {
      width: 25px;
    }

    .containerUl p {
      margin-left: 10px;
    }

    .txtEspera {
      margin: 5px auto;
    }

    .txtDirectora {
      margin: auto;
      text-align: center;
      font-size: 15px;
      font-weight: bold;
    }

    .txtNombre {
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }

    .containerContacto {
      align-items: center;
      display: flex;
      margin: auto;
      width: 50%;
      justify-content: space-evenly;
    }

    .containerContacto i {
      font-size: 30px;
    }

    .containerContacto p {
      font-size: 20px;
    }

    .figura2 {
      position: absolute;
      left: -20px;
      bottom: 1px;
      width: 20%;
    }
  </style>
  <body>
    <div class="containerAll">
      <section class="header">
        <img src="../controllers/assets/cotizacion/Captura.PNG" alt="" />
        <img class="tempsnip" src="../controllers/assets/cotizacion/tempsnip.png" alt="" />
      </section>
      <section class="containerInfo1">
        <div class="compass">
          <p>COMPASS</p>
          <p>31-10-23</p>
        </div>
        <div class="textInfo">
          <p>
            A través del presente me dirijo a usted de la manera más atenta para
            ofrecerle servicios logísticos eficientes en la ciudad de Manzanillo
            sustentados en un sistema de calidad y competitividad a Importadores
            y Exportadores al servicio de sus necesidades.
          </p>
          <p class="presentamosTxt">
            Le presentamos nuestra propuesta de costos de los servicios que le
            ofrecemos:
          </p>
        </div>
        <div class="containerTabla">
          <div class="tabla1">
            <p>ORIGEN</p>
            <p>DESTINO</p>
            <p>COSTO SENCILLO</p>
          </div>
          <div class="tabla2">
            <p>MANZANILLO</p>
            <p>NUEVA ROSITA, COAHULIA</p>
            <p>$85,000</p>
          </div>
          <div class="tabla2">
            <p>MANZANILLO</p>
            <p>NUEVA ROSITA, COAHULIA</p>
            <p>$85,000</p>
          </div>
        </div>
        <div class="containerAzul">
          <ul>
            <li><p>TODOS NUESTROS PRECIOS SON + IVA - RETENCION</p></li>
          </ul>
        </div>
        <div class="serviciosIncluidos">
          <p class="txtServicios">SERVICIOS INCLUIDOS</p>
          <div class="containerUl">
            <img src="../controllers/assets/cotizacion/punto-removebg-preview.png" alt="" />
            <p>
              Monitoreo de horarios de salida, llegada y finalización del
              servicio.
            </p>
          </div>
          <div class="containerUl">
            <img src="../controllers/assets/cotizacion/punto-removebg-preview.png" alt="" />
            <p>El servicio cuenta con 10 horas libres para la descarga.</p>
          </div>
          <div class="containerUl">
            <img src="../controllers/assets/cotizacion/punto-removebg-preview.png" alt="" />
            <p>Unidades cuenta con GPS.</p>
          </div>
          <div class="containerUl">
            <img src="../controllers/assets/cotizacion/punto-removebg-preview.png" alt="" />
            <p>Precios con pistas incluidas.</p>
          </div>
          <div class="containerUl">
            <img src="../controllers/assets/cotizacion/punto-removebg-preview.png" alt="" />
            <p>Regreso de vacío al puerto.</p>
          </div>
          <div class="containerUl">
            <img src="../controllers/assets/cotizacion/punto-removebg-preview.png" alt="" />
            <p>Pesos y dimensionales legales.</p>
          </div>
          <div class="containerUl">
            <img src="../controllers/assets/cotizacion/punto-removebg-preview.png" alt="" />
            <p>No incluye seguro de mercancía.</p>
          </div>
          <div class="containerUl">
            <img src="../controllers/assets/cotizacion/punto-removebg-preview.png" alt="" />
            <p>No incluye custodia.</p>
          </div>
          <div class="containerUl">
            <img src="../controllers/assets/cotizacion/punto-removebg-preview.png" alt="" />
            <p>No incluye servicio extraordinario.</p>
          </div>
          <div class="containerUl">
            <img src="../controllers/assets/cotizacion/punto-removebg-preview.png" alt="" />
            <p>
              La mercancía y contenedor viaja por riesgo y cuenta del cliente.
            </p>
          </div>
        </div>
        <p class="txtEspera">
          Quedamos en espera de poderles brindar un servicio de calidad y ser
          parte de su logística para cualquier destino que sea de su
          requerimiento.
        </p>
        <p class="txtDirectora">Directora General</p>
        <p class="txtNombre">Monserrat Peñaloza Vargas</p>
      </section>
      <img
        class="figura2"
        src="../controllers/assets/cotizacion/figura2-removebg-preview.png"
        alt=""
      />
    </div>
  </body>
</html>
