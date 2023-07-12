<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 9px;
            margin-left: 10%
        }

        .derecha_gris {
            text-align: right;
            position: relative;
            background-color: rgb(202, 195, 195);
        }
        .derecha {
            text-align: right;
            position: relative;
        }
        h2 {
            text-align: center;
            margin-bottom: 7px;
            font-size: 9px;
        }

        h3 {
            font-size: 9px;
        }
        .pie{
            margin-top: 35px;
        }
        .piepagina{
            padding: 9px;
        }

        .final {
           margin-left: 120px;
            padding: 10%;
        }

        .titulo {
            text-align: center;
            margin-bottom: 7px;
            font-size: 9px;
        }

        table {
            width: 89%;
            border-collapse: collapse;
        }

        .derecha_amarillo {
            background-color: yellow;
            text-align: right;
            position: relative;
        }

        .amarillo {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <h2>SERVICIO NACIONAL DE APRENDIZAJE SENA</h2>
    <h2>REGIONAL CAUCA</h2>

    <h3 class="titulo">CAPACIDAD DE ENDEUDAMIENTO PARA CREDITOS CON TERCEROS</h3>

    <table>
        <tr>
            <td>FECHA ELABORACIÓN:</td>
            <td>8 de marzo de 2023</td>
        </tr>
        <tr>
            <td>CÉDULA:</td>
            <td>{{ number_format($identificacion, 0, '.', '.') }} </td>
        </tr>
        <tr>
            <td>NOMBRE FUNCIONARIO:</td>
            <td>{{ $nombres }}</td>
        </tr>
        <tr>
            <td>ENTIDAD SOLICITANTE:</td>
            <td class="amarillo">{{$nombreEmpresa}}</td>
        </tr>
        <tr>
            <td>CUOTA SOLICITADA:</td>
            <td class="derecha_gris ">$839.166</td>
        </tr>
        <tr>
            <td>TIENE CAPACIDAD PAGO:</td>
            <td class="amarillo"></td>
        </tr>
        <tr>
            <td colspan="2">
                <h3>DEVENGADOS FACTORES FIJOS</h3>
            </td>
        </tr>
        <tr>
            <td>ASIGNACION MENSUAL</td>
            <td class="derecha">2.025.602</td>
        </tr>
        <tr>
            <td>SUBSIDIO DE ALIMENTACION</td>
            <td class="derecha ">232.000</td>
        </tr>
        <tr>
            <td>PRIMA TECNICA NO FACTOR SALARIO</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>PRIMA TECNICA FACTOR SALARIO</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>PRIMA DE LOCALIZACION</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td class="amarillo">TOTAL DEVENGADOS</td>
            <td class="derecha_amarillo">2.257.602</td>
        </tr>
        <tr>
            <td colspan="2">
                <h3>MENOS DEDUCCIONES DE LEY</h3>
            </td>
        </tr>
        <tr>
            <td>APORTE PENSION</td>
            <td class="derecha ">116.000</td>
        </tr>
        <tr>
            <td>APORTE SALUD</td>
            <td class="derecha ">116.000</td>
        </tr>
        <tr>
            <td>FONDO SOLIDARIDAD</td>
            <td class="derecha ">0</td </tr>
        <tr>
            <td>FONDO DE SUBSISTENCIA LEY 797/2003</td>
            <td class="derecha "></td>
        </tr>
        <tr>
            <td>RETENCION EN LA FUENTE</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>TOTAL DEDUCCIONES DE LEY</td>
            <td class="derecha ">232.000</td>
        </tr>
        <tr>
            <td>SALARIO NETO</td>
            <td class="derecha ">2.025.602</td>
        </tr>
        <tr>
            <td>CAPACIDAD DE PAGO 50% DEL SALARIO NETO (LEY 1527 / 2012)</td>
            <td class="derecha ">1.012.801</td>
        </tr>
        <tr>
            <td colspan="2">
                <h3>OTRAS DEDUCCIONES DE NOMINA</h3>
            </td>
        </tr>
        <tr>
            <td>EMBARGO ALIMENTOS</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>EMBARGO CIVIL</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>PRESTAMO DE VIVENDA</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>SEGURO DE INCENDIO (VIVIENDA)</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>SEGURO DE VIDA (VIVIENDA)</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>LIBRANZA SERVICIO MEDICO SENA</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>AHORRO FONDO DE VIVIENDA</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>COOPERATIVAS AHORRO</td>
            <td class="derecha ">247.992</td>
        </tr>
        <tr>
            <td>COOPERATIVAS PRESTAMO</td>
            <td class="derecha ">761.123</td>
        </tr>
        <tr>
            <td>FONDOS DE EMPLEADOS AHORRO</td>
            <td class="derecha ">202.560</td>
        </tr>
        <tr>
            <td>FONDOS DE EMPLEADOS PRESTAMO</td>
            <td class="derecha ">158.845</td>
        </tr>
        <tr>
            <td>LIBRANZAS ENTIDADES FINANCIERAS</td>
            <td class="derecha "></td>
        </tr>
        <tr>
            <td>PREVENCION EXEQUIAL</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>MEDICINA PREPAGADA</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>AHORRO VOLUNTARIO PENSION</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>AFC AHORRO FONDO DE LA CONSTRUCCION</td>

            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>SINDICATOS</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>PRESTAMO CALAMIDAD DOMESTICA</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>SERVICOS EXEQUIALES</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>OTROS DESCUENTOS</td>
            <td class="derecha ">0</td>
        </tr>
        <tr>
            <td>TOTAL OTRAS DEDUCCIONES DE NOMINA</td>
            <td>1.370.520</td>
        </tr>
        <tr>
            <td>CAPACIDAD DE PAGO DISPONIBLE</td>
            <td class="derecha ">-357.719</td>
        </tr>
    </table>

  <div class="pie"  >
     <h3 class="piepagina" >REFINANCIA DEUDA:</h3>
        <h3 class="piepagina" >OBSERVACIONES:</h3>
  </div>
       
   
    <div class="pie" >
        <h3>Vo. Bo. Salarios</h3>
    </div>


    <h3 class="final">
        Autoriza Coordinador Grupo Regional Gestion del Talento Humano</h3>



</body>

</html>
