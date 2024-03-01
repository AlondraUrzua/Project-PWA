<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="CSS/LoginAndRegisterStyle.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>Do you already have an account?</h3>
                        <p>Log in to enter the page</p>
                        <button id="btn__iniciar-sesion">Log in</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>Do not you have an account yet?</h3>
                        <p>Register so you can log in</p>
                        <button id="btn__registrarse">Register</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">

                    <!--Login-->
                    <form method="POST" class="formulario__login">
                        <h2>Log in</h2>
                        <input type="text" placeholder="Email" name="correo">
                        <input type="password" placeholder="Password" name="contrasena">
                        <button><a href="Index.html">Sig in</a></button>
                    </form>

                    <!--Register-->
                    <form method="POST" class="formulario__register">
                        <h2>Register</h2>
                        <input type="text" placeholder="Fullname" name="nombre_completo">
                        <input type="text" placeholder="Email" name="correo">
                        <input type="text" placeholder="User" name="usuario">
                        <input type="password" placeholder="Password" name="contrasena">
                        <button><a href="Index.html">Register</a></button>
                    </form>
                </div>
            </div>

        </main>

        <script src="Scripts/LoginAndRegisterScript.js"></script>
</body>
</html>