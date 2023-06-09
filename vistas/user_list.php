<div class="container is-fluid mb-6">
    <h1 class="title">Usuarios</h1>
    <h2 class="subtitle">Lista de usuarios</h2>
</div>

<div class="container pb-6 pt-6">  
    <?php
        require_once "./php/main.php";

        # Eliminar usuario #
        if(isset($_GET['user_id_del'])){
            require_once "./php/usuario_eliminar.php";
        }

        # Seteo las variables necesarias para que funcione el paginador, luego lo llamo #
        if(!isset($_GET['page'])){ // consulto si viene pag iniciada
            $pagina=1;              //la inicio
        }else{
            $pagina=(int) $_GET['page'];  // guardo la pag en la variable pag
            if($pagina<=1){             //me fijo que no venga en negativo
                $pagina=1;              //si viniera en negativo la seteo en 1
            }
        }

        $pagina=limpiar_cadena($pagina);  //por las dudas de vunerabilidad la limpio
        $url="index.php?vista=user_list&page=";
        $registros=15; //        <==== Seteo la cantidad de registros por pag, que se van a mostrar
        $busqueda="";

        # Paginador usuario #
        require_once "./php/usuario_lista.php";
    ?>
</div>