<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        @vite(['resources/sass/login.scss', 'resources/js/app.js'])
    </head>
    <style>
        body {
            background: url('{{ asset('img/jodes.svg') }}') no-repeat center center fixed;
            background-size: cover;
            }
    </style>
    <body>
        <main>
            <div class="container vh-100 d-flex align-items-center justify-content-center">
                <div class="login-box">
                    <div class="header-form row align-items-center">
                        <div class="logo-form col-3">
                            <img src="{{asset('img/logo.svg')}}" alt="Logo" class="img-fluid">
                        </div>
                        <div class="title-form col-9 text-center">
                            <p class="name-universidad">UNIVERSIDAD NACIONAL DE INGENIERÍA</p>
                            <p class="name-facultad">Facultad de Ingeniería Mecánica</p>
                            <h4 class="name-sistema">SISTEMA DE PLANIFICACIÓN DE RECURSOS ACADÉMICOS Y EMPRESARIALES</h4>
                        </div>
                    </div>
                    <div class="main-form">
                        <form>
                            <div class="input-container mb-3">
                                <label for="email" class="form-label">Usuario</label>
                                <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo">
                                <span class="line"></span>
                            </div>
                            <div class="input-container mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                                <span class="line"></span>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">iniciar sesion</button>
                            <div class="footer-text text-center d-flex flex-column align-items-center">
                                <a href="#" class="forget">¿Olvidaste tu contraseña?</a>
                                <a class="link" href="">ver comunicados</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            
        </footer>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
