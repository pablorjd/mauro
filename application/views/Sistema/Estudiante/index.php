


<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li id="paginaRuta" class="breadcrumb-item active"></li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
            <div id="mensaje"  class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5">26 Mensajes!</div>
                    </div>
                    <a  class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left" id="mensaje">Ver más</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div id="anuncios"  class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">11 Anuncios de curso!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Ver más</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div  id="citaciones" class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-calendar-check"></i>
                        </div>
                        <div class="mr-5">Citaciones</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Ver más</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div id="hoja-vida" class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-user-graduate"></i>
                        </div>
                        <div class="mr-5">Hoja de vida</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Ver más</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div id="calificaciones" class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-dark o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-chalkboard-teacher"></i>
                        </div>
                        <div class="mr-5">Calificaciones</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Ver más</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>



    </div>
    <div id="contenido">

    </div>
    <script>
//        
//1- ver  Notas
//2- ver información Alumno
//3- Mandar mensajes - OK
//4- Ver eventos curso - OK
   //$(document).ready(function(){

        function redirigir(pagina) {

        }

        $("#mensaje").click(function () {
            $("#paginaRuta").html('mensajes');


            $.ajax({
                url: "<?= base_url() . "index.php/Estudiante/mensajesPorAlumno/1" ?>",
                type: "post",
                //data: values ,
                success: function (response) {
                    // you will get response from your php page (what you echo or print)                 
                    $("#contenido").html(response);
                    $('#tablaMensajes').DataTable();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });



            //alert("The mensaje was clicked.");
        });
        $("#anuncios").click(function () {
            $("#paginaRuta").html('anuncios');
            $.ajax({
                url: "<?= base_url() . "index.php/Estudiante/anunciosPorAlumno" ?>",
                type: "post",
                //data: values ,
                success: function (response) {
                    // you will get response from your php page (what you echo or print)                 
                    $("#contenido").html(response);
                    $('#tablaAnuncios').DataTable();
                    
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });

        });
        $("#citaciones").click(function () {
            $("#paginaRuta").html('citaciones');
            $.ajax({
                url: "<?= base_url() . "index.php/Estudiante/citacionesPorAlumno/1" ?>",
                type: "post",
                //data: values ,
                success: function (response) {
                    // you will get response from your php page (what you echo or print)                 
                    $("#contenido").html(response);
                     $('#tablaCitaciones').DataTable();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });
        });
        $("#hoja-vida").click(function () {
            $("#paginaRuta").html('hoja de vida');
            $.ajax({
                url: "<?= base_url() . "index.php/estudiante/redirigir/hoja-de-vida" ?>",
                type: "post",
                //data: values ,
                success: function (response) {
                    // you will get response from your php page (what you echo or print)                 
                    $("#contenido").html(response);
                     $('#tablaAnuncios').DataTable();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });
        });
        $("#calificaciones").click(function () {
            $("#paginaRuta").html('calificaciones');
            $.ajax({
                url: "<?= base_url() . "index.php/estudiante/redirigir/calificaciones" ?>",
                type: "post",
                //data: values ,
                success: function (response) {
                    // you will get response from your php page (what you echo or print)                 
                    $("#contenido").html(response);
                     $('#tablaAnuncios').DataTable();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });
        });
   //});
    </script>
    <!-- /.container-fluid -->
