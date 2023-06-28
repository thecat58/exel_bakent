<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 13px;
        margin-left: 15%;
        margin-right: 16%;
    }

    h2 {
        text-align: center;
        margin-bottom: 10px;
    }


    .subt {
        text-align: center;
        height: 10%;
    }

    .izquierda {
        text-align: left;
    }

    .derecha {
        margin-left: 2em;

    }

    #infoUser {
        font-weight: 700;
    }

    #factoresFijosDerecha {
        margin-left: 2em;
    }

    .container-wrapper {
        display: flex;
        flex-direction: column;
    }

    .container {
        padding: 10px;
        margin-bottom: 10px;
    }

    .derecha {
        text-align: right;
        position: relative;
    }

    .container-wrapper {
        display: flex;
    }

    .column {
        flex: 1;
        padding: 10px;
        margin-right: 10px;
        padding: 20px;
    }

    .borde {
        border-top: 1px solid black;
        border-bottom-width: 1px;
        border-bottom-color: black;
    }
    p{
        padding: 15px;
    }
    .final{
        text-align: center;
        margin: 5%;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        margin-left: 9%;
    }
</style>

<body>
    <table>
        <tr>
            <td colspan="2">
                <h2>SERVICIO NACIONAL DE APRENDIZAJE</h2>
                <h2>SENA</h2>
                <h2>REGIONAL CAUCA</h2>
            </td>
        </tr>
        <tr>
            <td class="subt" colspan="2">
                <h3>CAPACIDAD DE ENDEUDAMIENTO PARA CREDITOS CON PRIMA DE NAVIDAD EMPLEADOS PUBLICOS</h3>
            </td>
        </tr>
        <tr>
            <td class="izquierda">FECHA ELABORACIÓN:</td>
            <td id="infoUser">8 de marzo de 2023</td>
        </tr>
        <tr>
            <td class="izquierda">CÉDULA:</td>
            <td id="infoUser">1.031.133.603</td>01
        </tr>
        <tr>
            <td class="izquierda">NOMBRE FUNCIONARIO:</td>
            <td id="infoUser">jorge enrique muñoz</td>
        </tr>
        <tr>
            <td class="izquierda">ENTIDAD SOLICITANTE:</td>
            <td id="infoUser">COOPSENA</td>
        </tr>
        <tr>
            <td class="izquierda">CUOTA SOLICITADA:</td>
            <td style="background-color: rgb(185, 173, 173)" id="infoUser">$1.623.432</td>
        </tr>
        <tr>
            <td class="izquierda">TIENE CAPACIDAD PAGO:</td>
            <td id="infoUser">NO</td>
        </tr>
        <tr>
            <td colspan="2">
                <h3>DEVENGADOS FACTORES FIJOS</h3>
            </td>
        </tr>
        <tr>
            <td class="izquierda">ASIGNACION MENSUAL</td>
            <td></td>
        </tr>
        <tr>
            <td class="izquierda">SUBSIDIO DE ALIMENTACION</td>
            <td class="derecha" id="factoresFijosDerecha">232.000,00</td>
        </tr>
        <tr>
            <td class="izquierda">PRIMA TECNICA FACTOR SALARIO</td>
            <td class="derecha">0</td>
        </tr>
        <tr>
            <td class="izquierda">PRIMA DE LOCALIZACION</td>
            <td class="derecha">0</td>
        </tr>
        <tr class="borde" style="background-color: yellow">
            <td class="izquierda">TOTAL DEVENGADOS</td>
            <td class="derecha">232.000</td>
        </tr>
        <tr>
            <td colspan="2">
                <h3>MENOS NOMINA</h3>
            </td>
        </tr>
        <tr>
            <td class="izquierda">EMBARGO ALIMENTOS</td>
            <td class="derecha">0</td>
        </tr>
        <tr>
            <td class="izquierda">EMBARGO CIVIL</td>
            <td class="derecha">0</td>
        </tr>
        <tr>
            <td class="izquierda">LIBRANZA SERVICIO MEDICO SENA</td>
            <td class="derecha">0</td>
        </tr>
        <tr>
            <td class="izquierda">AHORRO FONDO DE VIVIENDA</td>
            <td></td>
        </tr>
        <tr>
            <td class="izquierda">COOPERATIVAS AHORRO</td>
            <td class="derecha">0</td>
        </tr>
        <tr>
            <td class="izquierda">COOPERATIVAS PRESTAMO</td>
            <td class="derecha">0</td>
        </tr>
        <tr>
            <td class="izquierda">FONDOS DE EMPLEADOS AHORRO</td>
            <td class="derecha">0</td>
        </tr>
        <tr>
            <td class="izquierda">FONDOS DE EMPLEADOS PRESTAMO</td>
            <td class="derecha">0</td>
        </tr>
        <tr>
            <td class="izquierda">LIBRANZAS ENTIDADES FINANCIERAS</td>
            <td class="derecha">0</td>
        </tr>
        <tr>
            <td class="izquierda">OTROS DESCUENTOS</td>
            <td class="derecha">0</td>
        </tr>
        <tr class="borde" style="background-color: yellow">
            <td class="izquierda">TOTAL DEDUCCIONES</td>
            <td class="derecha">0</td>
        </tr>
        <tr>
            <td class="izquierda">SALARIO NETO</td>
            <td class="derecha">232.000</td>
        </tr>
        <tr style="background-color: rgb(240, 167, 179)">
            <td class="izquierda">CAPACIDAD DE PAGO DISPONIBLE</td>
            <td class="derecha">116.000</td>
        </tr>
    </table>

    <div>
        <p>OBSERVACION: ESTA CAPACIDAD SE PODRIA VER AFECTADA POR EMBARGOS DE PRESENTARSE EL CASO.</p>

    </div>
    <table class="final" >
        <td  colspan="2">
            <h3>Vo. Bo. Coordinador Grupo de Gestion del Talento Humano</h3>
        </td>
        </tr>
    </table>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>
