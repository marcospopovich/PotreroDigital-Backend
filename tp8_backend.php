<?php

$serverdb = "127.0.0.1";
$userdb = "root";
$pwddb = "";
$bd = "tienda";
//coneccion a la base de datos//
$link = mysqli_connect("$serverdb", "$userdb", "$pwddb", "$bd");


//genero el error de coneccion a la base.//
if (!$link) {
    echo "<h1>No se puede conectar a la base de datos</h1>";
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp 8 Backend</title>
    <style>
        table {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 12px;
            margin: 45px;
            width: 480px;
            text-align: left;
            border-collapse: collapse;
        }

        th {
            font-size: 13px;
            font-weight: normal;
            padding: 8px;
            background: #b9c9fe;
            border-top: 4px solid #aabcfe;
            border-bottom: 1px solid #fff;
            color: #039;
        }

        td {
            padding: 8px;
            background: #e8edff;
            border-bottom: 1px solid #fff;
            color: #669;
            border-top: 1px solid transparent;
        }

        tr:hover td {
            background: #d0dafd;
            color: #339;
        }
    </style>
</head>

<body>
    <h1>Tp 8 Potrero Digital Backend por Marcos Popovich </h1>
    <h2>Mediante código PHP, consultar a la base de datos lo siguiente:</h2>

    <h3>a. Listar todos los registros</h3>
    <?php
    $query = mysqli_query($link, "SELECT * FROM ropa");
    $result = mysqli_num_rows($query);
    if ($result > 0) {
    ?>
        <table class="table">
            <tr>
                <th>Prenda</th>
                <th>Marca</th>
                <th>Talle</th>
                <th>Precio</th>

            </tr>
            <?php

            while ($data = mysqli_fetch_array($query)) {

            ?>

                <tr>
                    <td><?php echo $data["prenda"]; ?></td>
                    <td><?php echo $data["marca"]; ?></td>
                    <td><?php echo $data["talle"]; ?></td>
                    <td><?php echo $data["precio"] ?></td>

                </tr>
            <?php } ?>
        <?php } else {


        echo "La busqueda no arrojo resultados";
    }





        ?>

        </table>


        <h3>b. Listar todos los registros cuyo tipo de prenda sea ‘buzo’</h3>

        <?php
        $query = mysqli_query($link, 'SELECT * FROM ropa WHERE ropa.prenda = "Buzo" ');
        $result = mysqli_num_rows($query);
        if ($result > 0) {
        ?>
            <table class="table">
                <tr>
                    <th>Prenda</th>
                    <th>Marca</th>
                    <th>Talle</th>
                    <th>Precio</th>

                </tr>
                <?php

                while ($data = mysqli_fetch_array($query)) {

                ?>

                    <tr>
                        <td><?php echo $data["prenda"]; ?></td>
                        <td><?php echo $data["marca"]; ?></td>
                        <td><?php echo $data["talle"]; ?></td>
                        <td><?php echo $data["precio"] ?></td>

                    </tr>
                <?php } ?>
            <?php } else {


            echo "La busqueda no arrojo resultados";
        }






            ?>

            </table>

            <h3>c. Listar todos los registros cuya marca sea ‘nike’</h3>


            <?php
            $query = mysqli_query($link, 'SELECT * FROM ropa WHERE ropa.marca = "Nike" ');
            $result = mysqli_num_rows($query);
            if ($result > 0) {
            ?>
                <table class="table">
                    <tr>
                        <th>Prenda</th>
                        <th>Marca</th>
                        <th>Talle</th>
                        <th>Precio</th>

                    </tr>
                    <?php

                    while ($data = mysqli_fetch_array($query)) {

                    ?>

                        <tr>
                            <td><?php echo $data["prenda"]; ?></td>
                            <td><?php echo $data["marca"]; ?></td>
                            <td><?php echo $data["talle"]; ?></td>
                            <td><?php echo $data["precio"] ?></td>

                        </tr>
                    <?php } ?>
                <?php } else {


                echo "La busqueda no arrojo resultados";
            }






                ?>

                </table>



                <h3>d. Listar todos los registros cuyo precio sea mayor a ‘500’</h3>


                <?php
                $query = mysqli_query($link, 'SELECT * FROM ropa WHERE ropa.precio > 500 ');
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                ?>
                    <table class="table">
                        <tr>
                            <th>Prenda</th>
                            <th>Marca</th>
                            <th>Talle</th>
                            <th>Precio</th>

                        </tr>
                        <?php

                        while ($data = mysqli_fetch_array($query)) {

                        ?>

                            <tr>
                                <td><?php echo $data["prenda"]; ?></td>
                                <td><?php echo $data["marca"]; ?></td>
                                <td><?php echo $data["talle"]; ?></td>
                                <td><?php echo $data["precio"] ?></td>

                            </tr>
                        <?php } ?>
                    <?php } else {


                    echo "La busqueda no arrojo resultados";
                }




                mysqli_close($link);

                    ?>

                    </table>

</body>

</html>