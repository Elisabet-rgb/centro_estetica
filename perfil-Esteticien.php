<?php
if($_SESSION["rol"] != "Esteticien"){

 echo '<script>

window.location = "inicio";
</script>';
return;



}
?>
<div class="content-wrapper">
    <section class= "content-header">
        <h1>Gestor de Perfil</h1>
            </section>
        <div class="content">
    <section class= "box">
        <div class="box-body">
            <table class="table table-bordered table-hover table-striped">

                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Foto</th>
                        <th>Editar</th>
                    </tr> 
                     </thead>
                     <tbody>
                        <?php//traer los datos de la BD
//esto lo copiamos en EsteticienC creando la función
                        $perfil = new EsteticienC();
                         $perfil -> VerPerfilEsteticienC();
                        ?>
                        
                         

                    </tbody>
                                      
              
        </div>
            </section>    