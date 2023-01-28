<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Futuro</title>


</head>

<body>

    <form method="Post" action="proceso.php" onsubmit="return validar ();">

        <table bgcolor="FDEDEC" align="center">

            <tr>
                <h2 align="center">Formulario de aspirantes</h2>
            <tr>

            <tr>
                <td> Nombres: <input type="text" id="nombres" name="nombres"> </td>
            </tr>

            <tr>
                <td> Apellidos: <input type="text" id="apellidos" name="apellidos"> </td>
            </tr>

            <tr>
                <td> Edad: <input type="text" id="edad" name="edad"> </td>
            </tr>

            <tr>
                <td> Dirección: <input type="text" id="direccion" name="direccion"> </td>
            </tr>

            <tr>
                <td>
                    <p>Comuna:
                        <select name="comuna" id="comuna">
                            <option>Popular</option>
                            <option>Santa Cruz</option>
                            <option>Manriquejistán</option>
                            <option>Aranjuez</option>
                            <option>Castilla</option>
                            <option>Doce de Octubre</option>
                            <option>Robledo</option>
                            <option>Villa Hermosa</option>
                            <option>Buenos Aires</option>
                            <option>La Candelaria</option>
                            <option>Laureles</option>
                            <option>La América</option>
                            <option>San Javier</option>
                            <option>El Poblado</option>
                            <option>Guayabal</option>
                            <option>Belén</option>
                        </select>
                    </p>
                </td>
            </tr>

            <tr>
                <td> Correo: <input type="email" id="correo" name="correo"> </td><br>
            </tr>

            <tr>
                <td>
                    <p>Carrera que desea estudiar:
                        <select name="carrera" id="carrera">
                            <option>Ing. de Sistemas</option>
                            <option>Ing. Industrial</option>
                            <option>Ing. de Procesos</option>
                            <option>Medicina</option>
                            <option>Enfermería</option>
                            <option>Historia</option>
                        </select>
                    </p>
                </td>
            </tr>

            <tr>
                <td><input type="submit" value="Enviar"></td><br>
                <td><input type="reset" value="Borrar"></td><br>
            </tr>

            <!-- <tr>
                <td id="textoExterno">
                    <object type="text/plain" data="archivo.txt"></object>


                </td>

            </tr> -->

        </table>

    </form>


    <script src="validar.js"></script>

</body>

</html>