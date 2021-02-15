
<?php 
    
    include(__DIR__ .'../../../includes/header.html');
    include(__DIR__ .'../../../includes/connect.php');
    
 ?>


<!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Empleados</h3>
            
            <h2><a href="create.php"><span class="label label-success">Ingresar un empleado</span></a></h2>
            
            <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            	<table id="empleados" class="table table-hover">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Departamento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                                $consulta = $db -> query( "SELECT * FROM empleados ORDER BY ID ASC" );
                                                $nfilas = $consulta -> num_rows;
                                    
                                                for($F=0; $F < $nfilas; $F++)
                                                {
                                                    $fila = $consulta -> fetch_row();
                                            ?>
                                                    <tr>
                                                        <td><?php echo $fila[0]; ?></td>
                                                        <td><?php echo $fila[1]; ?></td>
                                                        <td><?php echo $fila[2]; ?></td>
                                                        <td><?php echo $fila[3]; ?></td>
                                                        
                                                        <td>
                                                            <a rel="facebox" title="Click para editar los datos del cliente" href="edit.php?id=<?php echo $fila[0]; ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button> 
                                                            </a>
                                                                    
                                                            <a href="#" id="<?php echo $fila[0]; ?>" class="delbutton" title="Click para eliminar al cliente"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>



<script type="text/javascript">
            $(function() 
            {
                $(".delbutton").click(function()
                {
                    //Save the link in a variable called element
                    var element = $(this);

                    //Find the id of the link that was clicked
                    var del_id = element.attr("id");

                    //Built a url to send
                    var info = 'id=' + del_id;
                    if(confirm("¿Estás seguro de eliminar al cliente?"))
                    {
                        $.ajax({
                           type: "GET",
                           url: "../../controllers/empleados/delete.php",
                           data: info,
                           success: function()
                           {window.location.reload();}
                        });
                        
                        
                    }
                    return false;
                });
            });
        </script>


<?php include(__DIR__ .'../../../includes/footer.html'); ?>

</html>