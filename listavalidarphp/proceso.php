<?php

$fi = fopen("archivo.txt", "a") or die("problemas al crear archivo");

fwrite($fi, "Datos:");
fwrite($fi, "\n");

fwrite($fi, $_POST['nombres']);
fwrite($fi, "\n");

fwrite($fi, $_POST['apellidos']);
fwrite($fi, "\n");

fwrite($fi, $_POST['edad']);
fwrite($fi, "\n");

fwrite($fi, $_POST['direccion']);
fwrite($fi, "\n");

fwrite($fi, $_POST['comuna']);
fwrite($fi, "\n");

fwrite($fi, $_POST['correo']);
fwrite($fi, "\n");

fwrite($fi, $_POST['carrera']);
fwrite($fi, "\n");

fwrite($fi, "------------------------------ \n\n");
fclose($fi);


?>

    <script>
        alert("La información ha sido enviada con éxito");
    </script>