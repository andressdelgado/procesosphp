<?php
    echo "<p>php procesos</p>";
    $ip=$_GET['ip'];
    $opcion=$_GET['opc'];
    if($opcion=="borrar"){
        header("Location:../eliminar_lugares/index.php?ip=$ip");
    }
    else{
        if($opcion=="editar")
            header("Location:../modificar_lugares/index.php?ip=$ip");
    }
?>