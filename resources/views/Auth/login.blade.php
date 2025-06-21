<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <title>Login</title>
</head>

@vite('resources/scss/app.scss')

<body>
    <main class="main">
        <section class="container_login">
            <form class="form" action="{{ route('login.guest') }}" method="POST">
                @csrf
                <div class="conte_logo">
                    <img src="{{ asset('images/Logo  Beit.svg') }}" alt="">
                </div>
                <div class="container">
                    <div class="conteInput">
                        <span class="material-symbols-outlined icono">
                            alternate_email
                        </span>
                        <input type="text" name="email" value="{{ old('email') }}" class="input"
                            placeholder="Email"/>
                        <label class="label">Email</label>
                    </div>

                    <div class="conteInput">
                        <span class="material-symbols-outlined icono">
                            lock
                        </span>
                        <input type="password" name="password" class="input" placeholder="Contraseña"/>
                        <label class="label">Password</label>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="remember">
                        <input id="radio" name="remember" type="checkbox" />
                        <label for="radio">Recuerdame </label>
                    </div>
                    <span class="span">Forgot password?</span>
                </div>
                @error('email')
                    <small class="errors">{{ $message }}</small>
                @enderror
                @error('password')
                    <small class="error">{{ $message }}</small>
                @enderror
                <button class="button-submit">Iniciar Sesion</button>
                <p class="p">No tienes cuenta? <span class="span">Contactarme</span></p>
            </form>
        </section>
    </main>
</body>

</html>
