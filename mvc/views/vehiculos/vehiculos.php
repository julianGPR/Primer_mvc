<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"];?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="asset/css/bootstrap.min.js"></script>
</head>
<body>
    <div class="container"> 
        <h2><?php echo $data["titulo"];?></h2>

        <a href="index.php?c=vehiculos&a=nuevo" class="btn btn-primary">Agregar</a>

        <br />
        <br />
        <div class="table-responsive">
            <table border="1" width="80%" class="table">
                <thead>
                    <tr class="table-primary">
                        <th>Placa</th>
                        <th>Marca</th>  
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Color</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($data["vehiculos"] as $dato): ?>
                        <tr>
                            <td><?php echo $dato["placa"]; ?></td>
                            <td><?php echo $dato["marca"]; ?></td>
                            <td><?php echo $dato["modelo"]; ?></td>
                            <td><?php echo $dato["anio"]; ?></td>
                            <td><?php echo $dato["color"]; ?></td>
                            <td><a href='index.php?c=vehiculos&a=modificar&id=<?php echo $dato["id"]; ?>' class='btn btn-warning'>Modificar</a></td>
                            <td><a href='index.php?c=vehiculos&a=eliminar&id=<?php echo $dato["id"]; ?>' class='btn btn-danger'>Eliminar</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>