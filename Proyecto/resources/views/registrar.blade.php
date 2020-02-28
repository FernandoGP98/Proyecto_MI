@extends('layouts.index')
@section('content')

<style>
    .loginBackground{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 570px;
    background: url('https://images.squarespace-cdn.com/content/v1/540df639e4b01d517a0773d3/1495522769075-69WVF1M0EQVKL1AXDZJ3/ke17ZwdGBToddI8pDm48kCfD5VhG_v4AoG9r1szEQU0UqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYwL8IeDg6_3B-BRuF4nNrNcQkVuAT7tdErd0wQFEGFSnBlmxMwF-qJcfq6dw5jYfi6uK6E-0yWJ134SXwDjkOVdC10wnnoXfSNyKpQymiZEVw/sailing+past+Tahiti+copy.jpg?format=1000w') center center no-repeat;
    background-size: cover;
}

.contact-form
{
    position:relative;
    margin :40px;
    width: 400px;
    height:430px;
    padding-top: 30px;
    padding-left: 30px;
    padding-right: 30px;
    box-sizing: border-box;
    background: rgba(0,0,0,.5);
    color:#E3E3E3;
}
</style>
<div class="row d-flex justify-content-center">
    <div class="loginBackground">
    </div>
    <div class="contact-form">
        <h2>Registrate</h2>
        <form action="">
            <label for="">E-mail</label>
            <input class="form-control" type="email" name="email" placeholder="Ingrese su email">

            <label for="">Nick</label>
            <input class="form-control" type="text" name="username" placeholder="Ingrese su nombre de usuario">

            <label for="">Contraseña</label>
            <input class="form-control" type="password" name="password" placeholder="Ingrese su contrase;a">

            <br><input class="mb-2 btn btn-primary" type="submit" value="Registrarse"><br>

            <a style="color:aliceblue" href="/Login"><u>¿Ya tienes una cuenta? Inicia Sesion!</u></a><br>

        </form>
    </div>
</div>
@endsection
