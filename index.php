<?php include('conn.php');?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anek+Tamil&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Gonzalo Rojas</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#presentacioncv">Gonzalo Rojas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav float-right">
            <li class="nav-item"><a href="#cursos" class="nav-link">Cursos</a></li>
            <li class="nav-item"><a href="#formacion1" class="nav-link">Herramientas</a></li>

                <li class="nav-item"><a href="#experiencias" class="nav-link">Experiencia</a></li>
                <li class="nav-item"><a href="#formacion" class="nav-link">Formacion</a></li>
         
            </ul>
    </div>
        </div>
    </nav>

    </div>
    </nav>

            <div class="container text-light d-flex align-items-center justify-content-center col-md-12 mb-3"
                id="presentacioncv">
                <div class="abs-center col-sm-6">
                    <h1>Gonzalo Rojas</h1>
                    <p>Estudiante de "tecnicatura en desarrollo de software". </p>
                    <p> He realizado cursos online de lenguaje PHP, Javascript y de frameworks como Laravel, Node Js, React Js. Conocimientos en lenguaje Python y Java.</p>
                    <p>Tengo muchas ganas de capacitarme y crecer dentro del mundo IT.</p>
                    <a href="/images/Gonzalo-Rojas.pdf" download class="btn btn-success">Descarga mi cv</a>
                    <center>
                <div class="iconos-sociales mt-5">
                <a href="https://www.instagram.com/rojasgonza" target="_blank"><img loading="lazy" alt="Sígueme en Instagram" height="35" width="35" src="https://1.bp.blogspot.com/-VFfOISywV0c/YPhkeRXuRQI/AAAAAAAAA1M/L75S9Usg5AovunH2Y-VzqJbaaY1LuK3eACPcBGAYYCw/s0/Instagram-icono.png" title="Instagram"/></a>
                
                <a href="http://wa.link/nbzgj6" target="_blank"><img loading="lazy" alt="Sígueme en WhatsApp" height="35" width="35" src=" https://1.bp.blogspot.com/-Vc_W7xraNnc/YPhkfwQExQI/AAAAAAAAA1c/dI72v37UC0EGJd7jWvKWYD3WMwZ7eER7gCPcBGAYYCw/s0/whatsapp-icono.png" title="Mensaje en WhatsApp"/></a>
                <a href="htpps://www.linkedin.com/in/gonzalo-rojas-092315146" target="_blank"><img loading="lazy" alt="LINKEDIN GONZALO ROJAS" height="35" width="35" src="https://1.bp.blogspot.com/-dxbuRx93Gcw/YP9u1JIFR5I/AAAAAAAAA10/2naDwGFmbeMLAGlZu7kEydnkY7ndur4jwCPcBGAYYCw/s0/linkedIn.icono.png"></a>
                
                </div>
        </center>
                </div>
            </div>

    <div class="container mb-3 bg-light" id="cursos">
        <h1 class="text-center mb-3">Cursos realizados</h1>
        <div class="row justify-content-between">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h2>Bootcamp Nodejs/React </h2>
                <img src="images/nodejs.png" alt="imagen de nodejs" class="d-block w-100 mb-2" width="300" height="300">
                <p>
                    Node.js - Bootcamp Desarrollo Web inc. MVC y REST APIs
                    </p>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h2 class="D-BLOCK">Desarrollo Web</h2>
                <img src="images/desarrollo.png" alt="imagen de desarrollo web" class="d-block w-100 mb-2" width="300" height="300">
                <p>Desarrollo web completo. HTML, CSS, JS, AJAX, JQUERY y conceptos basicos de PHP.</p>
            </div>
        </div>
    </div>
       <!--
     skills
 -->
 <div class="container bg-light mb-3" id="formacion1">
    <h1 class="text-center">Conocimientos</h1>
    <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="skillbar" data-percent="70%">
                        <i class="fab fa-html5 fa-2x" style="color: orangered;"></i>
                        <div class="skillbar-title">HTML</div>
                        <div class="skill-bar-percent">70%</div>
                        <div class="skillbar-bar" style="width: 80%;"></div>
                    </div>
    
                    <div class="skillbar" data-percent="60%">
                        <i class="fab fa-css3-alt fa-2x" style="color: blue;"></i>
                        <div class="skillbar-title">CSS</div>
                        <div class="skill-bar-percent">60%</div>
                        <div class="skillbar-bar" style="width: 60%;"></div>
                    </div>
    
                    <div class="skillbar" data-percent="40%">
                        <i class="fab fa-php fa-2x" style="color: red;"></i>
                        <div class="skillbar-title">PHP</div>
                        <div class="skill-bar-percent">40%</div>
                        <div class="skillbar-bar" style="width: 40%;"></div>
                    </div>
    
                    <div class="skillbar" data-percent="50%">
                        <i class="fab fa-js fa-2x" style="color: yellow;"></i>
                        <div class="skillbar-title">Javascript</div>
                        <div class="skill-bar-percent">50%</div>
                        <div class="skillbar-bar" style="width: 50%;"></div>
                    </div>
                    <div class="skillbar" data-percent="40%">
                        <i class="fab fa-java fa-2x" style="color: red;"></i>
                        <div class="skillbar-title">Java</div>
                        <div class="skill-bar-percent">40%</div>
                        <div class="skillbar-bar" style="width: 40%;"></div>
                    </div>
                </div>
            </div>
        </div>

</div>
   <!--
     FORMACION EDUCATIVA
 -->
 <div class="container mb-3 bg-light" id="formacion">
    <h1 class="text-center mb-3">Formacion educativa</h1>
    <div class="row justify-content-between">
             <div class="col-sm-12 col-md-6 col-lg-4">
            <h2>UADE</h2>
            <img src="images/uade-facultad.jpg" alt="universidad uade" class="d-block w-100 mb-2" width="300" height="300">
            <p>Cursando el primer cuatrimestre de la carrera de pregrado "Tecnico en Desarrollo de Software".</p>
        </div>     
        <div class="col-sm-12 col-md-6 col-lg-4">
            <h2 class="D-BLOCK">E.A.N.</h2>
            <img src="images/ean.jpg" alt="" class="d-block w-100 mb-2" width="300" height="300">
            <p>Materias aprobadas de la carrera Administracion de empresas.</p>
        </div>

          <div class="col-sm-12 col-md-6 col-lg-4">
            <h2>E.E.S. N°10</h2>
            <img src="images/esc_prim.jpg" alt="ean facultad" class="d-block w-100 mb-2" width="300" height="300">
            <p>Primaria y secundaria realizada en la Escuela Domingo F. Sarmiento. Secundario con orientacion en
                ciencias sociales.</p>

        </div>
    </div>
</div>
    <!--
        EXPERIENCIAS LABORALES  
    -->
    <div class="container mb-3 bg-light" id="experiencias">
        <h1 class="text-center mb-3">Experiencias</h1>
        <div class="row justify-content-between">
            <div class="col-md-10 mx-auto col-lg-4 mb-3">
                <h2>Mi Familia S.R.L.</h2>
                <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YWRtaW58ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80"
                    alt="" class="d-block w-100 mb-2" width="300" height="300">
                <p>Fecha: desde 2015 hasta la actualidad.</p>
                <p>Tareas: desde el 04/2015 a 04/2019, desarrolle la tarea de camarero, adicionista. Estas tareas
                    incluian el manejo de stock, atender clientes, manejo de caja etc.
                    Del 10/2019 a la actualidad ocupo el cargo de administrativo. Estas tareas implican: liquidacion de
                    sueldos, pago a proveedores, manejos de caja, cashflow´s, pago de servicios, funciones similares a
                    un RR.HH.
                </p>

            </div>
            <div class="col-md-10 col-lg-4 mx-auto mb-3">
                <h2>Asistente Contable</h2>
                <img src="https://www.ziprecruiter.com/blog/static/wp-content/uploads/2017/11/28162552/accounting_manager.jpg"
                    alt="" class="d-block w-100 mb-2" width="300" height="300">
                <p>Fecha: 04/2021 - actualidad.</p>
                <p> Realizo informes economicos/financieros para distintas empresas. Asisto a CONTADOR PUBLICO en sus
                    tareas, recoleccion de informacion a traves de distintos sistemas de informacion, y luego se procesa la informacion por
                    medio de Excel y se presenta a quien corresponda.</p>
            </div>
            <div class="col-md-10 col-lg-4 mx-auto mb-3">
                <h2>Calico S.A.</h2>
                <img src="https://mecaluxar.cdnwm.com/blog/img/e-logistica.1.9.jpg" class="d-block w-100 mb-2"
                    width="300" height="300">
                <p>Fecha: 04/2019 a 10/2019.</p>
                <p>Tareas: Control de camiones de la empresa que prestaba servicio a UNILEVER S.A.
                    Se controlaban los palets de picking con una planilla y con remitos dados por la empresa
                    anteriormente
                </p>
            </div>
        </div>
    </div>
 
 
   <!-- CONTACTO  -->
    <div class="container bg-light" style="margin-bottom: 50px;">
        <form action="" method="post">
            <h1 class="text-center">CONTACTATE</h1>
            <label for="nombre" class="form-label mt-1">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control input" required> 
            <label for="email" class="form-label  mt-1" >Email de contacto</label>
            <input type="email" name="email" id="email" class="form-control input" required>
            <label for="telefono" class="form-label  mt-1">Telefono de contacto</label>
            <input type="number" name="telefono" id="telefono" class="form-control input" required>
            <label for="mensaje" class="form-label  mt-1">Escribe tu mensaje</label>
            <textarea class="form-control input" name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Escribe tu mensaje" required></textarea> 
            <input type="submit" value="Enviar" class="button btn btn-success m-3" name="submit" >
            

        </form>
    </div>



    </div>

    <!--FOOTER-->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-center align-items-center  border-top">

            <span class="text-muted">&copy; 2021 Gonzalo Rojas</span>


        </footer>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2fd8caf48c.js" crossorigin="anonymous"></script>
</body>

</html>
<script>
    let input = document.querySelector(".input");
    let button = document.querySelector(".button");
    button.disabled = true;
    input.addEventListener("change", stateHandle);
    function stateHandle() {
      if (document.querySelector(".input").value === "") {
        button.disabled = true; 
      } else {
        button.disabled = false;
      }
    }
    </script>