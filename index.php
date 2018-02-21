<?php
header("Content-type: text/html;charset=\"utf-8\"");
    $error = ""; $mensajeExito = "";

    if ($_POST){
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
            $error = "E-mail no válido. <br>";
        }
        if($error != ""){
            $error = '<div class="alert alert-danger" role="alert"><p><b>Se generó un error:</b></p>' . $error . '</div>';
        } else{
            $nombre = $_POST['nombre'];
            $mail = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensajeC = $_POST['mensaje'];

            $header = 'From: ' . $mail . " \r\n";
            $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
            $header .= "Mime-Version: 1.0 \r\n";
            $header .= "Content-Type: text/plain";

            $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
            $mensaje .= "Su e-mail es: " . $mail . " \r\n";
            $mensaje .= "Asunto: " . $asunto . " \r\n";
            $mensaje .= "Mensaje: " . $mensajeC . " \r\n";
            $mensaje .= "Enviado el " . date('d/m/Y', time());

            $para = 'miguelromeroing@gmail.com';
            $asunto = 'Mensaje de mi sitio web';

            if (mail($para, $asunto, utf8_decode($mensaje), $header)){
                $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado con éxito</div>';
            } else{
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Mensaje sin enviar</div>';
            }
        }
    }
?>






<!DOCTYPE html>



<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">


    <!-- estilos en  CSS -->

    <style>
        html {
            font-size: 16px;
        }
        
        p {
            font-size: 1.2rem;
        }
        
        .slider {
            background: url("images/image.jpeg");
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
    </style>



</head>

<body>

    <section class="container-fluid slider d-flex justify-content-center align-items-center">
        <h1 class="display-4 bg-success text-white p-3">Bootstrap 4!</h1>
    </section>


    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <a class="navbar-brand" href="#">IoTTech</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown link
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- Card -->
    <section class="container mt-3 pt-3">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top img-fluid" src="images/imagen1.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="images/imagen2.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="images/imagen3.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Jumbotron -->

    <div class="jumbotron mt-5  rounded-0">
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <div class="d-flex justify-content-between align-items-center">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Fin del jumbotron -->

    <!-- formulario -->


    <section class="container">
        <h3 class="text-uppercase text-center">Formulario de Contacto</h3>
        <p class="lead text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit sit iusto placeat officiis suscipit et! Dolor inventore, deleniti blanditiis a neque doloremque ea voluptates optio quaerat eaque ab autem delectus?</p>

        <div class="row justify-content-center">
            <div class="col-6">
                <form>
                    <div class="form-group row">
                        <label for="" class="col-2 col-form-label">Nombre:</label>
                        <input type="text" placeholder="Escribe tu nombre aquí" class="form-control col-10">
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-2 col-form-label">Email:</label>
                        <input type="email" placeholder="Escribe tu e-mail aquí" class="form-control col-10">
                    </div>
                    <div class="form-group row">
                        <button class="btn btn-success col-12">Enviar</button>
                    </div>
                </form>
            </div>
        </div>



    </section>

    <section class="container">

        <h3 class="text-uppercase text-center">Enviar mensaje por Email</h3>
        <p class="lead text-center">Cillum dolore adipisicing amet tempor laborum minim cillum non irure veniam excepteur.</p>
        <div class="container">

            <div>
                <? echo $error .$mensajeExito; ?>
    </div>
    <form method="post">
    <div class="form-group row">
            <label for="NOMBRE" class="col-sm-2 form-control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre aqui" name="nombre">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 form-control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Escribe tu email aqui" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="asunto" class="col-sm-2 form-control-label">Asunto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="asunto" placeholder="Asunto del correo" name="asunto">
            </div>
        </div>
        <div class="form-group row">
            <label for="mensaje" class="col-sm-2 form-control-label">Mensaje</label>
            <div class="col-sm-10">
                <textarea name="mensaje" id="mensaje" class="form-control" rows="3" placeholder="Que quieres preguntar?"></textarea>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-warning offset-2">Enviar</button>
        </div>
    </form>

    </div>

    </section>


    <section class="container">
        <p class="mt-5 text-center font-weight-bold bg-success text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum tenetur ea, id facilis itaque repellendus sint ipsa accusamus reiciendis vitae quos, dolores modi, consectetur, odio recusandae. Magni debitis omnis dolor. Lorem ipsum dolor
            sit amet, consectetur adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores.</p>
        <p class="text-justify text-white p-4 w-25 float-left mr-4" style="background-color: #5cb85c;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum tenetur ea, id facilis itaque repellendus sint ipsa accusamus reiciendis vitae quos, dolores modi, consectetur, odio recusandae. Magni debitis omnis dolor. Lorem ipsum dolor
            sit amet, consectetur adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores.</p>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum tenetur ea, id facilis itaque repellendus sint ipsa accusamus reiciendis vitae quos, dolores modi, consectetur, odio recusandae. Magni debitis omnis dolor. Lorem ipsum dolor
            sit amet, consectetur adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores.</p>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum tenetur ea, id facilis itaque repellendus sint ipsa accusamus reiciendis vitae quos, dolores modi, consectetur, odio recusandae. Magni debitis omnis dolor. Lorem ipsum dolor
            sit amet, consectetur adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores.</p>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum tenetur ea, id facilis itaque repellendus sint ipsa accusamus reiciendis vitae quos, dolores modi, consectetur, odio recusandae. Magni debitis omnis dolor. Lorem ipsum dolor
            sit amet, consectetur adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores.</p>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum tenetur ea, id facilis itaque repellendus sint ipsa accusamus reiciendis vitae quos, dolores modi, consectetur, odio recusandae. Magni debitis omnis dolor. Lorem ipsum dolor
            sit amet, consectetur adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores.</p>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum tenetur ea, id facilis itaque repellendus sint ipsa accusamus reiciendis vitae quos, dolores modi, consectetur, odio recusandae. Magni debitis omnis dolor. Lorem ipsum dolor
            sit amet, consectetur adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nisi at facilis ut quod eveniet nesciunt natus repellendus eum dicta. Earum perferendis id aspernatur nemo, aliquam cupiditate quos quae voluptates asperiores.</p>

    </section>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>

    </html>