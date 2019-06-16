<h1 class="text-center">MCV</h1>

<div class="row">
    <div class="col-md-12 col-sm-12">
        É uma arquitetura de software que divide a aplicação em três partes principais,  <span class="mcv blue">O Model, Control e a View</span>
    </div>
</div>

<div class="row">
    <div class="col-md-5 col-sm-12">
        <img class="d-inline" src="<?php echo IMG . 'mcv_img.png'?>">
    </div>
    <div class="col-md-7 col-sm-12">
        <br>
        <p>
            É um ciclo em que cada parte é responsavel por um tipo de ação,
            pode ser exemplificado como o <span class="red">usuario acessando a pagina de login</span>
        </p>
        <span class="red">"localhost/usuario/login"</span> que é mandado ao <span class="blue">controller</span>,
        <p>
            pode requisitar alguma informação,
            como quantidade de usuarios registrados ao
            <span class="blue">model</span>, mandado para a
            <span class="blue">view</span>, que é entao rendeniza
            <span class="red">a tela de login</span>
        </p>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <h1 class="text-center">Model</h1>

        <!--Row -->
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <br>
                Ele se preocupa principalmente em como o <span class="red">armazenamento e manipulação de informações</span> sera feito,
                sendo independente da <span class="blue">view</span> informações vão ser apresentadas.
            </div>
            <div class="col-md-4 col-sm-12">
                <img class="d-inline" src="<?php echo IMG . 'banco_dados.gif'?>">
                    Site monolitonimbus.com.br
                <br>
            </div>
        </div>
        <!--Fim -->
    </div>

    <div class="col-md-12 col-sm-12">
        <h1 class="text-center">Controller</h1>

        <!--Row -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img class="d-inline" src="<?php echo IMG . 'router.png'?>">
            </div>
            <div class="col-md-6 col-sm-12">
                <br><br>
                Ele interpreta informaçoes recebidas pelo usuario, como teclado,  extraindo a url requisitada pelo usuario,
                <span class="red">"localhost/usuario/login"</span> onde
                <span class="red">usuario</span> é o
                <span class="blue">controller</span> e
                <span class="red">login</span>
                seu metodo, chamado de <span class="blue">ação(action)</span>
                que pode levar a uma <span class="blue">View</span>
            </div>
        </div>
        <!--Fim -->
    </div>

    <div class="col-md-12 col-sm-12">
        <h1 class="text-center">View</h1>
        Basicamente ela é a parte em que vemos e o usuario por meio deste pode interagir, como se fosse uma representaçao do modelo existente
    </div>
</div>

<p>https://tableless.com.br/mvc-afinal-e-o-que/</p>
<p>https://www.researchgate.net/figure/A-typical-Model-View-Controller-MVC-software-pattern_fig4_316916116</p>
<p>https://pt.wikipedia.org/wiki/MVC</p>
<p>https://medium.com/tht-things-hackers-team/banco-de-dados-cap%C3%ADtulo-1-3857a0a8997a</p>