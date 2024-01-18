<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario de Empleados</title>
    <link rel="stylesheet" href="/estilo.css">
</head>

<body>
    <header>
        <h3>PAGO DE SALARIO DE EMPLEADOS</h3>
        <img src="../img/empleados.jpg" width="600" height="150">
    </header>
    <section>
        <form action="caso4.php" method="post">
            <?php
            error_reporting(0);
            $empleado = $_POST['txtEmpleado'];
            $horas = $_POST['txtHoras'];
            $categoria = $_POST['selCategoria'];

            if ($categoria == 'jefe') {
                $selJefe = 'SELECTED';
            } else {
                $selJefe = "";
            }
            if ($categoria == 'administrativo') {
                $selAdminsitrativo = 'SELECTED';
            } else {
                $selAdminsitrativo = "";
            }
            if ($categoria == 'operario') {
                $selOperario = 'SELECTED';
            } else {
                $selOperario = "";
            }
            if ($categoria == 'practicante') {
                $selPracticante = 'SELECTED';
            } else {
                $selPracticante = "";
            }

            ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="150">Empleado: </td>
                    <td>
                        <input type="text" name="txtEmpleado" size="60">
                    </td>
                </tr>
                <tr>
                    <td>Horas: </td>
                    <td>
                        <input type="text" name="txtHoras" size="20">
                    </td>
                </tr>
                <tr>
                    <td>Categoria: </td>
                    <td>
                        <select name="selCategoria">
                            <option value="jefe" <?php echo $selJefe ?>> Jefe</option>
                            <option value="admisnitrativo" <?php echo $selAdminsitrativo ?>> Admisnitrativo</option>
                            <option value="operario" <?php echo $selOperario ?>> Operario</option>
                            <option value="practicante" <?php echo $selPracticante ?>> Practicante</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="Calcular" name="btnCalcular">
                    </td>
                    <td>
                        <input type="reset" value="Limpiar" name="btnLimpiar">
                    </td>
                </tr>
            </table>

        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Eduardo</h6>
    </footer>
</body>

</html>