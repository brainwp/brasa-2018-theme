<?php
/*
	Template Name: Sites rápidos - landing page
*/

/**
 *
 * @since 1.0
 */

?>




<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <!-- HTML Meta Tags -->
        <meta name="description" content="Agência especializada em WordPress, criando sites com design exclusivo">
        
        <!-- Google / Search Engine Tags -->
        <meta itemprop="name" content="Brasa Design">
        <meta itemprop="description" content="Agência especializada em WordPress, criando sites com design exclusivo">
        <meta itemprop="image" content="https://brasa.art.br/wp-content/uploads/sites/77/2017/11/logo-brasa-moderninho-v2.png">
        
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://brasa.art.br/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Brasa Design">
        <meta property="og:description" content="Agência especializada em WordPress, criando sites com design exclusivo">
        <meta property="og:image" content="https://brasa.art.br/wp-content/uploads/sites/77/2017/11/logo-brasa-moderninho-v2.png">
        
        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Brasa Design">
        <meta name="twitter:description" content="Agência especializada em WordPress, criando sites com design exclusivo">
        <meta name="twitter:image" content="https://brasa.art.br/wp-content/uploads/sites/77/2017/11/logo-brasa-moderninho-v2.png">

        <link rel="alternate" href="https://brasa.art.br/" hreflang="pt-br">
        <link rel="shortcut icon" href="https://brasa.art.br/wp-content/uploads/2019/05/favicon-300x300.png" type="image/x-icon">
        <link rel="icon" href="https://brasa.art.br/wp-content/uploads/2019/05/favicon-300x300.png" type="image/x-icon">

        <style>
        :root {
            --brasa-white: #ffffff;
            --brasa-grey: #eeeeee;
            --brasa-green: #00566b;
            --brasa-green-hover: #484848;
            --brasa-green-flat: #14bac3;
            --brasa-orange: #EC462C;
        }
        @font-face {
            font-family: 'Odin Rounded Bold';
            src: url('assets/Odin-Rounded-Bold.otf');
        }
        @font-face {
            font-family: 'Open Sans';
            src: url('assets/OpenSans-Regular.ttf');
        }
        * {
            box-sizing: border-box;
        }
        html {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }
        body {
        	color: var( --brasa-green );
            font-family: 'Open Sans';
        	font-size: 16px;
            line-height: 1.6;
        	margin: 0;
        }
        h2 {
            color: var( --brasa-green );
            font-family: 'Odin Rounded Bold';
            font-size: 2.5rem;
            margin: 0 auto 0.5rem;
            text-transform: uppercase;
        }
        .container {
            margin: 0 auto;
            max-width: 1170px;
        }
        nav.primary-menu {
            background-color: #fff;
            font-family: 'Odin Rounded Bold';
            font-size: 1.4rem;
            height: auto;
            padding: 15px;
            position: fixed;
            text-transform: uppercase;
            top: 0;
            width: 100%;
            z-index: 99;
            -webkit-box-shadow: 0px 1px 5px 0px rgba(168,168,168,0.3);
            -moz-box-shadow: 0px 1px 5px 0px rgba(168,168,168,0.3);
            box-shadow: 0px 1px 5px 0px rgba(168,168,168,0.3);
        }
        nav.primary-menu .logo {
          float: left;
          max-width: 210px;
          padding-top: 10px;
        }
        nav.primary-menu ul {
            float: left;
            list-style: none;
            margin-left: 50px;
            padding-left: 0;
        }
        nav.primary-menu ul li {
            display: inline-block;
        }
        nav.primary-menu ul li a {
            color: var( --brasa-green );
            padding: 15px 30px;
            text-decoration: none;
        }
        nav.primary-menu ul li a:hover {
            color: var( --brasa-orange );
        }
        nav.primary-menu .hamburguer {
            display: none;
        }
        @media ( max-width: 1080px ) {
            nav.primary-menu ul {
                margin-left: 0;
            }
            nav.primary-menu ul li a {
                padding: 15px 0 15px 30px;
            }
        }
        @media ( max-width: 768px ) {
            nav.primary-menu .logo {
                margin-top: 20px;
                max-width: 50px;
            }
            nav.primary-menu ul li a {
                padding: 15px 0 15px 15px;
            }
            nav.primary-menu ul li:nth-child(1) a {
                padding-left: 30px;
            }
            nav.primary-menu .hamburguer {
                background-color: var( --brasa-green-flat );
                border-radius: 50px;
                cursor: pointer;
                display: inline-block;
                height: 50px;
                position: absolute;
                right: 15px;
                top: 35px;
                width: 50px;
            }
            nav.primary-menu .hamburguer div {
                background-color: var( --brasa-green );
                border-radius: 5px;
                height: 4px;
                left: 8px;
                overflow: hidden;
                position: absolute;
                top: 15px;
                transition: all 0.1s ease-in-out;
                width: 34px;
            }
            nav.primary-menu .hamburguer div:nth-child(1) {
                top: 24px;
            }
            nav.primary-menu .hamburguer div:nth-child(2) {
                top: 33px;
            }
            nav.primary-menu.active-mobile .hamburguer div:nth-child(1) {
                left: 8px;
                top: 24px;
                transform: rotate(45deg);
            }
            nav.primary-menu.active-mobile .hamburguer div:nth-child(2) {
                left: 8px;
                top: 24px;
                transform: rotate(135deg);
            }
            nav.primary-menu.active-mobile .hamburguer div:nth-child(3) {
                display: none;
            }
            nav.primary-menu ul {
                background-color: #ffffff;
                display: none;
                height: 100%;
                left: 0;
                padding: 15px;
                position: fixed;
                top: -25px;
                width: 80%;
                -webkit-box-shadow: 0px 1px 5px 0px rgba(168,168,168,0.3);
                -moz-box-shadow: 0px 1px 5px 0px rgba(168,168,168,0.3);
                box-shadow: 0px 1px 5px 0px rgba(168,168,168,0.3);
            }
            nav.primary-menu ul li {
                display: block;
                padding: 15px 15px 0 15px;
            }
            nav.primary-menu ul li:nth-child(1) a,
            nav.primary-menu ul li a {
                padding: 0;
            }
            nav.primary-menu.active-mobile ul {
                display: block;
            }
        }
        #what-is {
            background: url( 'assets/bg-whats-is.jpg' ) center no-repeat;
            background-size: cover;
            background-color: var( --brasa-green-flat );
            color: var( --brasa-white );
            display: block;
            margin-top: 65px;
            min-height: 500px;
            overflow: hidden;
            padding: 50px 30px;
        }
        #what-is h2 {
            color: var( --brasa-white );
            margin-top: 15px;
        }
        #what-is .container .text {
            float: right;
            width: 50%;
        }
        #what-is .container .slider {
            background-color: var( --brasa-green );
            border-radius: 20px;
            height: 400px;
            left: 8%;
            position: absolute;
            width: 40%;
        }
        #what-is .container .slider .dot {
            background-color: var( --brasa-green-flat );
            border-radius: 15px;
            height: 15px;
            left: 40px;
            overflow: hidden;
            position: absolute;
            top: 16px;
            width: 15px;
        }
        #what-is .container .slider .dot:nth-child(2) {
            left: 60px;
        }
        #what-is .container .slider .dot:nth-child(3) {
            left: 80px;
        }
        #what-is .container .slider .slider-content {
            background-color: var( --brasa-white );
            border: 5px solid #00556B;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            bottom: 0;
            height: 90%;
            left: 0;
            margin: 0 auto;
            overflow: scroll;
            position: absolute;
            width: 100%;
          	scroll-behavior:smooth;
        }
        #what-is p {
            max-width: 80%;
        }
        @media ( max-width: 1080px ) {
            #what-is .container .text {
                width: 40%;
            }
            #what-is .container .slider {
                height: 400px;
                left: 4%;
                width: 50%;
            }
            #what-is p {
                max-width: 100%;
            }
        }
        @media ( max-width: 768px ) {
            #what-is {
                margin-top: 100px;
            }
            #what-is .container .slider {
                height: 400px;
                left: initial;
                margin: 0 auto;
                position: relative;
                width: 80%;
            }
            #what-is .container .text {
                text-align: center;
                width: 100%;
            }
        }
        @media ( max-width: 320px ) {
        }
        #how-it-works    {
            display: block;
            overflow: hidden;
            padding: 50px 30px;
        }
        #how-it-works h2 {
            text-align: center;
        }
        #how-it-works .container {
            background: url( 'assets/bg-how-it-works.png' ) no-repeat;
            background-size: 40%;
            background-position: right 60px;
        }
        
        #how-it-works .container .each {
            align-items: center;
            display: flex;
            width: 50%;
        }
        #how-it-works .container .each p {
            text-align: right;
            width: 100%;
        }
        #how-it-works .container .each:nth-child(5) p {
            color: var( --brasa-orange );
            font-family: 'Odin Rounded Bold';
            font-size: 1.5rem;
            text-transform: uppercase;
        }
        #how-it-works .container .each span {
            color: var( --brasa-orange );
            font-family: 'Odin Rounded Bold';
            font-size: 4rem;
            text-align: center;
            width: 15%;
        }
        @media ( max-width: 768px ) {
            #how-it-works .container {
                background: none;
            }
            #how-it-works .container .each {
                width: 100%;
            }
        }
        #i-want-a-website {
            background: url( 'assets/bg-whats-is.jpg' ) center no-repeat;
            background-size: cover;
            background-color: var( --brasa-green-flat );
            float: left;
            padding: 50px 30px;
            width: 100%;
        }
        #i-want-a-website .container .right {
            float: right;
            width: 50%;
        }
        #i-want-a-website .container .text {
            color: var( --brasa-white );
            float: right;
            padding-left: 3%;
            width: 50%;
        }
        #i-want-a-website .container .text h2 {
            color: var( --brasa-white );
        }
        #i-want-a-website .container p {
            max-width: 80%;
        }
        #i-want-a-website .container form input[type="text"],
        #i-want-a-website .container form input[type="file"],
        #i-want-a-website .container textarea {
            background-color: var( --brasa-white );
            border: 0;
            border-radius: 30px;
            display: block;
            margin-bottom: 15px;
            outline: none;
            padding: 15px;
            width: 100%;
        }
        #i-want-a-website .container textarea {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 250px;
        }
        #i-want-a-website .container form input[type="text"]:active {
            outline: none;
        }
        #i-want-a-website .container form input[type="file"] {
            cursor: pointer;
            margin-top: -66px;
            opacity: 0;
        }
        #i-want-a-website .container form label.label-logo {
            background-color: var( --brasa-white );
            border: 0;
            border-radius: 30px;
            display: block;
            margin-bottom: 15px;
            min-height: 45px;
            outline: none;
            padding: 15px;
            position: relative;
            width: 100%;
        }
        #i-want-a-website .container form label.label-logo span {
            background-color: var( --brasa-green-flat );
            border-radius: 30px;
            padding: 5px 10px;
            color: white;
            font-size: 0.8rem;
            position: absolute;
            right: 10px;
            top: 7.5px;
        }
        #i-want-a-website .container form label.label-logo span.logo-show-value {
            background-color: transparent;
            color: #757575;
            left: 7px;
            right: auto;
        }
        #i-want-a-website .container form input[type="submit"] {
            background-color: var( --brasa-orange );
            border: none;
            box-shadow: none;
            color: var( --brasa-white );
            cursor: pointer;
            border-radius: 30px;
            display: inline-block;
            font-family: 'Odin Rounded Bold';
            min-width: 100px;
            padding: 15px;
            text-transform: uppercase;
        }
        #i-want-a-website .container form input[type="submit"]:hover {
            opacity: 0.8;
        }
        @media ( max-width: 768px ) {
            #i-want-a-website .container .text,
            #i-want-a-website .container .right {
                float: none;
                width: 100%;
            }
            #i-want-a-website .container .text {
                margin-bottom: 50px;
                padding-left: 0;
                text-align: center;
            }
            #i-want-a-website .container .text p {
                max-width: 100%;
            }
        }
        #frequently-asked-questions {
            float: left;
            padding: 50px 30px;
            width: 100%;
        }
        #frequently-asked-questions h2 {
            text-align: center;
        }
        #frequently-asked-questions ul {
            padding-left: 0;
        }
        #frequently-asked-questions ul li {
            background-color: var( --brasa-grey );
            border-radius: 20px;
            cursor: pointer;
            list-style: none;
            margin-bottom: 15px;
            padding: 10px 20px;
        }
        #frequently-asked-questions ul li h3 {
            margin: 0;
            
        }
        #frequently-asked-questions ul li span {
            display: inherit;
            height: 0;
            opacity: 0;
            transition: all 0.1s ease-in-out;
        }
        #frequently-asked-questions ul li.open span {
            display: block;
            height: auto;
            opacity: 1;
            padding: 15px 0 0 0;
        }
        footer.footer-main {
            background-image: url( './assets/bg-footer.jpg' );
            color: #ffffff;
            float: left;
            padding: 50px 30px;
            width: 100%;
        }
        footer.footer-main nav {
            margin-left: -30px;
        }
        footer.footer-main nav ul {
            float: left;
            font-size: 1.4rem;
            list-style: none;
            margin-left: 50px;
            padding-left: 0;
        }
        footer.footer-main nav ul li {
            display: inline-block;
        }
        footer.footer-main nav ul li a {
            color: #ffffff;
            font-family: 'Odin Rounded Bold';
            padding: 15px 30px;
            text-decoration: none;
            text-transform: uppercase;
        }
        footer.footer-main .credits {
            float: right;
            text-align: right;
            width: 50%;
        }
        footer.footer-main .credits a {
            margin: auto 10px;
        }
        footer.footer-main .credits .brasa {
            background-image: url( ./assets/sprite.png );
            background-position: top left;
            display: inline-block;
            height: 60px;
            margin-bottom: -10px;
            overflow: hidden;
            text-indent: -99999px;
            width: 110px;
        }
        footer.footer-main .credits .wordpress {
            background-image: url( ./assets/sprite.png );
            background-position: 0 71px;
            display: inline-block;
            height: 51px;
            margin-bottom: -10px;
            overflow: hidden;
            text-indent: 99999px;
            width: 51px;
        }
        @media ( max-width: 1080px ) {
            footer.footer-main nav {
                display: none;
            }
            footer.footer-main .credits {
                float: none;
                text-align: center;
                width: 100%;
            }
        }
        @media ( max-width: 450px ) {
            footer.footer-main {
                padding: 40px 15px;
            }
            footer.footer-main .credits a.brasa {
                background-size: 100%;
                height: 47px;
                margin-bottom: -13px;
                width: 80px;
            }
            footer.footer-main .credits a.wordpress {
                background-size: 176%;
                background-position: 0 51px;
                height: 43px;
                width: 43px;
            }
        }
        @media ( max-width: 380px ) {
            footer.footer-main .credits span:nth-child(3) {
                display: none;
            }
            footer.footer-main .credits a:nth-child(4) {
                display: none;
            }
        }

        </style>

        <script>
            
            document.addEventListener("DOMContentLoaded", function() {

                var $input = document.getElementById('logo'),
                    $fileName = document.getElementById('logo-show-value');

                $input.addEventListener('change', function () {
                    
                    var fullPath = this.value;
                    if ( fullPath ) {
                        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                        var filename = fullPath.substring(startIndex);
                        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                            filename = filename.substring(1);
                        }
                        $fileName.textContent = '/' + filename;
                    }

                });

                var $hamburguer = document.querySelector(".primary-menu .hamburguer");
                $hamburguer.addEventListener( "click", function() {

                    var $menu = document.querySelector(".primary-menu");

                    if ( $menu.classList.contains("active-mobile") ) {
                        $menu.classList.remove("active-mobile");
                    } else {
                        $menu.classList.add("active-mobile");
                    }

                });

                var $mobileMenuItems = document.querySelectorAll(".primary-menu.active-mobile ul li a");
                [].forEach.call($mobileMenuItems, function($mobileMenuEach) {
                    $mobileMenuEach.addEventListener("click", ()=>{
                        var $mobileMenu = document.querySelector(".primary-menu.active-mobile");
                        $mobileMenu.classList.remove("active-mobile");
                    });
                });

                var $toggle = document.querySelectorAll( "#frequently-asked-questions li" );
                [].forEach.call( $toggle, function( $each ) {
                    $each.addEventListener("click", ()=>{
                        if ( $each.classList.contains("open") ) {
                            $each.classList.remove("open");
                        } else {
                            var $toggle2 = document.querySelectorAll("#frequently-asked-questions li");
                            [].forEach.call( $toggle2, function( $each2 ) {
                                $each2.classList.remove("open");
                            });
                            $each.classList.add("open");
                        }
                    });
                });

                $menu = document.querySelectorAll(".primary-menu li a");
                [].forEach.call( $menu, function( $eachMenu ) {
                    
                    $eachMenu.addEventListener("click", ()=>{
                        event.preventDefault();
                        var $scrollToId = $eachMenu.getAttribute("href").replace("#", "");
                        var $scrollTo = document.getElementById($scrollToId);
                        if ( $scrollTo ) {
                            const $scrollToOffSet = $scrollTo.offsetTop;
                            window.scrollTo(0, $scrollToOffSet - 100);
                        }
                    });

                });
              	var scroll_max = document.querySelector(".slider-content").scrollHeight - document.querySelector(".slider-content").clientWidth;
						setInterval( function(){
  							var current = document.querySelector(".slider-content").scrollTop;
                          	var to = current + 50; 
                          	if ( to >= scroll_max ) {
                              	to = 0;
                            }
                          document.querySelector(".slider-content").scrollTop = to;
                        }, 500); 
            	});
            
        </script>
      	<?php wp_head(); ?>
    </head>

    <body>
        <header class="header-main">
            <nav class="primary-menu">
                <div class="hamburguer">
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                </div>
                <div class="container">
                    <img src="https://brasa.art.br/wp-content/uploads/sites/77/2017/11/logo-brasa-moderninho-v2.png" alt="Logo da Brasa Design" class="logo">
                    <ul>
                        <li><a href="#what-is">O que é?</a></li>
                        <li><a href="#how-it-works">Como funciona!</a></li>
                        <li><a href="#i-want-a-website">Quero um site!</a></li>
                        <li><a href="#frequently-asked-questions">Dúvidas</a></li>
                    </ul>
                </div><!-- /.container -->
            </nav>
        </header>

        <section id="what-is">
            <div class="container">
                <div class="slider">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="slider-content">
						<img src="https://brasa.art.br/wp-content/uploads/2020/01/site.jpg">
                    </div>
                </div>
                <div class="text">
                    <h2>O que é?</h2>
                    <p>Criamos uma forma muito simples e profissional de você ter o site de seu empreendimento ou projeto. É só nos enviar conteúdos em texto e imagens ou o link* de um site antigo e deixar com a gente. </p>
                    <p>Em 48 Horas te entregaremos o site pronto e te ensinaremos a mexer no conteúdo dele em um papo remoto de 1 hora.
                  </p> 
                  <p> *com acesso administrativo.</p>
                </div>
            </div><!-- /.container -->
        </section><!-- /#what-is -->

        <section id="how-it-works">
            <div class="container">
                <h2>Como funciona!</h2>
                <div class="each">
                    <p>Consultoria para encontrar a melhor solução de arquitetura de informação para seu projeto e seu domínio;</p>
                    <span>1</span>
                </div>
                <div class="each">
                    <p>Serviço de aplicação de sua Identidade Visual e publicação do conteúdo de seu projeto – Nessa hora aqui entramos em contato com você para homologarmos o site juntos, já no ar;</p>
                    <span>2</span>
                </div>
                <div class="each">
                    <p>Por fim, lançaremos o site no domínio que definiu e ele ficará hospedado nos 3 primeiros meses de graça* para você testar.</p>
                    <span>3</span>
                </div>
                <div class="each">
                    <p class="destach">E TÁ PRONTO – É ISSO!!</p>
                    <span>!</span>
                </div>

            </div><!-- /.container -->
        </section><!-- /#how-it-works -->

        <section id="i-want-a-website">
            <div class="container">
                <div class="text">
                    <h2>Quero um site!</h2>
                    <p>Se o que estamos propondo se encaixa com o que estava buscando, preencha o formulário ao lado e aguarde um pouco, entraremos em contato na sequência.</p>
                    <p>Sabemos que está nos dando dados preciosos sobre seu negócio ou projeto, nos garantimos o sigilo e a privacidade de tudo que nos enviar.</p>
                    <p>Sinta-se a vontade para colocar qualquer especificação ou observação, nós prestaremos atenção em tudo e chegaremos em uma solução com você participando.</p>
                    <p>Esse serviço experimental da Brasa está sendo disponibilizado para projeto rápidos, com uma quantidade total restrita de horas para sua criação e publicação. Escopos mais complexos e/ou novas funcionalidades serão tratados como novos serviços.</p>
                </div>
                <div class="right">
                  <?php echo do_shortcode('[contact-form-7 id="3631" title="Formulário de contato 1"]'); ?>
                </div>
            </div><!-- /.container -->
        </section><!-- /#i-want-a-website -->

	<?php while ( have_posts() ) : the_post(); ?>
      		
      <?php if ( have_rows( 'brasalp_perguntas_frequentes' ) ): ?>

        <section id="frequently-asked-questions">
          <div class="container">
            <h2>Dúvidas Frequentes</h2>
            <ul>

              <?php while( have_rows( 'brasalp_perguntas_frequentes' ) ): the_row(); 

                $ask = get_sub_field( 'brasalp_pergunta' );
                $answer = get_sub_field( 'brasalp_resposta' ); ?>

                <li>
                  <h3><?php echo apply_filters( 'the_title', $ask ); ?></h3>
                  <span><?php echo apply_filters( 'the_content', $answer ); ?></span>
                </li>

              <?php endwhile; ?>

            </ul>
          </div><!-- container -->
        </section>

      <?php endif; ?>
      
	<?php endwhile; ?>
  
	<?php wp_footer(); ?>
      
	</body>
<html>