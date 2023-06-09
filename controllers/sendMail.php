<?php
function MandarAlertaUsuario($correo, $contraseña)
{
  $asunto = "Usuario de ingreso a sistemas ERP";
  $cuerpo = ' 
    <!DOCTYPE html>
    <html
      lang="en"
      xmlns="http://www.w3.org/1999/xhtml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
    >
      <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="x-apple-disable-message-reformatting" />
        <title></title>
        <style>
          table,
          td,
          div,
          h1,
          p {
            font-family: Arial, sans-serif;
          }
          @media screen and (max-width: 530px) {
            .unsub {
              display: block;
              padding: 8px;
              margin-top: 14px;
              border-radius: 6px;
              background-color: #555555;
              text-decoration: none !important;
              font-weight: bold;
            }
            .col-lge {
              max-width: 100% !important;
            }
          }
          @media screen and (min-width: 531px) {
            .col-sml {
              max-width: 27% !important;
            }
            .col-lge {
              max-width: 73% !important;
            }
          }
        </style>
      </head>
      <body
        style="
          margin: 0;
          padding: 0;
          word-spacing: normal;
          background-color: #FFFfff;
        "
      >
        <div
          role="article"
          aria-roledescription="email"
          lang="en"
          style="
            text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            background-color: #FFF;
          "
        >
          <table
            role="presentation"
            style="width: 100%; border: none; border-spacing: 0"
          >
            <tr>
              <td align="center" style="padding: 0">
                <table
                  role="presentation"
                  style="
                    width: 94%;
                    max-width: 600px;
                    border: none;
                    border-spacing: 0;
                    text-align: left;
                    font-family: Arial, sans-serif;
                    font-size: 16px;
                    line-height: 22px;
                    color: #363636;
                  "
                >
                  <tr>
                    <td
                      style="
                        padding: 40px 30px 30px 30px;
                        text-align: center;
                        font-size: 24px;
                        font-weight: bold;
                      "
                    >
                      <a
                        href="https://erp.cmelogistics.mx/"
                        style="text-decoration: none"
                        ><img
                          src="https://cmelogistics.mx/assets/img/LOGO%20FONDO%20BLANCO.png"
                          width="165"
                          alt="Logo"
                          style="
                            width: 165px;
                            max-width: 80%;
                            height: auto;
                            border: none;
                            text-decoration: none;
                            color: #FFFfff;
                          "
                      /></a>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 30px; background-color: #FFFfff">
                      <h1
                        style="
                          margin-top: 0;
                          margin-bottom: 16px;
                          font-size: 26px;
                          line-height: 32px;
                          font-weight: bold;
                          letter-spacing: -0.02em;
                        "
                      >
                        Felicidades se te ha creado un usuario para el sistema!
                      </h1>
                      <p style="margin: 0">
                        Por medio del presente correo le avisamos que se ha un usuario, por lo
                        que lo invitamos a ingresar al sistema, en la siguiente liga <a href="https://erp.cmelogistics.mx/">https://erp.cmelogistics.mx/</a>, con su correo eléctronico con el que se dio de alta <strong>' . $correo . '</strong> y revisar los
                        servicios pendientes. Tu contraseña es la siguiente: <strong>' . $contraseña . '</strong>
                      </p>
                      <br />
                    </td>
                  </tr>
                  <tr>
                    <td
                      style="
                        padding: 30px;
                        text-align: center;
                        font-size: 12px;
                        background-color: #FFF;
                        color: #FFF;
                      "
                    >
                      <p style="margin: 0; font-size: 14px; line-height: 20px">
                        &reg; Twologistic, todos los derechos reservados 2022<br /><a
                          class="unsub"
                          href="https://erp.cmelogistics.mx/"
                          style="color: #FFF; text-decoration: underline"
                          >www.twologistic.com</a
                        >
                      </p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </div>
      </body>
    </html>    
  ';
  //para el envío en formato HTML 
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  //dirección del remitente 
  $headers .= "From: Sitio web <sistemas@twologistic.com>\r\n";
  mail($correo, $asunto, $cuerpo, $headers);
}
