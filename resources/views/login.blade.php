@extends('layouts.app')

@section('conteudo')
<div id="background-login">
    <main id="container-login">
        <div id="wrapper-login">
            <section id="left-login">
                <img src="assets/loginImgs/crianca-login.png" alt="">
            </section>
            <section id="right-login">
                <h2>Faça Login</h2>
                <form action="">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <input type="text" placeholder="Password">
                </form>
                <div id="itens-login">
                    <div>
                        <img src="assets/loginImgs/googlee.png" alt="">
                        <img src="assets/loginImgs/face.png" alt="">
                    </div>
                    <p>
                        esqueceu sua senha?
                    </p>
                </div>
                <button>Cadastrar</button>
            </section>
        </div>
    </main>
</div>
@endsection