<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Estilos CSS proporcionados */

        /* Estilos para el panda y el formulario */
        .panda {
            /* Estilos para el panda proporcionados */
        }

        /* Ajusta los estilos del formulario según sea necesario */
        .signin-form {
            /* Estilos de tu formulario existente */
        }

        /* Estilos para los cuadros de entrada de datos */
        .input-box {
            position: relative;
            margin-bottom: 10px;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        /* Estilos para los campos de entrada de datos */
        .data-input {
            border: none;
            width: 100%;
            padding: 5px;
            background-color: #f0f8ff;
            border-bottom: 1px solid #86c2e3;
            font-size: 16px;
            color: #333;
            outline: none;
        }

        /* Estilos para el fondo */
        body {
            font-family: "Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif; 
            background: url('https://www.w3schools.com/w3images/forestbridge.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .signin-card {
            max-width: 350px;
            border-radius: 2px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(236, 239, 241, 0.8); /* Color de fondo con transparencia */
            box-shadow: 0 10px 20px rgba(0, 0, 0, .19),
                        0 6px 6px rgba(0, 0, 0, .23);
        }

        .display1 {
            font-size: 28px;
            font-weight: 100;
            line-height: 1.2;
            color: #757575;
            text-transform: inherit;
            letter-spacing: inherit;
        }

        .subhead {
            font-size: 16px;
            font-weight: 300;
            line-height: 1.1;
            color: #212121;
            text-transform: inherit;
            letter-spacing: inherit;
        }
    </style>
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-5">
                <!-- se puede agregar contenido adicional aquí, como un encabezado o un título -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="login-wrap p-4 p-md-5 signin-card">
                    <div class="panda">
                        
                    </div>
                    <h3 class="mb-4 text-center display1">App Final</h3>
                    <form class="signin-form" action="https://localhost/ci4/testbd" method="post">
                        <!-- Cuadro de entrada para "Usuario" -->
                        <div class="input-box">
                            <label for="username">Usuario</label>
                            <input type="text" class="data-input" id="username" name="username" autocomplete="off" required>
                        </div>
                        <!-- Cuadro de entrada para "Contraseña" -->
                        <div class="input-box">
                            <label for="password">Contraseña</label>
                            <input id="password-field" type="password" class="data-input" name="password" autocomplete="off" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Iniciar Sesión</button>
                        </div>
                    </form>
                    <p class="text-center subhead">¿No eres miembro? <a data-toggle="tab" href="#signup">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="public/main.js"></script>

</body>
</html>
