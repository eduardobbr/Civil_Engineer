<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Civil Engineer</title>

    <!-- links -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/responsive-index.css">
        <script
        src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
        <title>Civil Engineer</title>
</head>

<body>

    <header class="header" id="header-top">
        <div class="header-container">

            <!--NAV DESKTOP-->
            <ul class="nav-list-desktop">
                <li class="nav-item">
                    <a href="#" class="nav-link">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#about-us" class="nav-link">Sobre</a>
                </li>
                <li class="nav-item">
                    <a href="#facilitar" class="nav-link">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#function" class="nav-link">Contato</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
            </ul>
    
            <!--NAV MOBILE-->
            <ul class="nav-mobile">
                <li class="nav-item" style="padding-left: 10px;">
                    <a href="#" class="nav-hamburguer">
                        <div class="hamburguer"></div>
                    </a>
                </li>
                <li class="nav-item" style="z-index: 999;">
                    <img src="" class="logo" style="width: 100px;" alt="">
                </li>
            </ul> 
            
            <!--NAV ITEMS MOBILE-->
            <ul class="nav-list-mobile">
                <li class="nav-item-mobile">
                    <a href="{{ route('dashboard')}}" class="nav-link-mobile">Início</a>
                </li>
                <li class="nav-item-mobile">
                    <a href="#about-us" class="nav-link-mobile">Sobre</a>
                </li>
                <li class="nav-item-mobile">
                    <a href="#facilitar" class="nav-link-mobile">Serviços</a>
                </li>
                <li class="nav-item-mobile">
                    <a href="#function" class="nav-link-mobile">Contato</a>
                </li>
                <li class="nav-item-mobile">
                    <a href="{{ route('login') }}" class="nav-link-mobile">Login</a>
                </li>
            </ul>
        </div>
    </header>
    <!--Header-->



    <!--BANNER-->
    <section>
        <div class="banner-area">
            <div class="single-banner">
                <div class="banner-img">
                    <picture>
                        <source media="(max-width: 580px)" srcset="https://blog.intelbras.com.br/wp-content/uploads/2021/08/tecnologia-no-canteiro-de-obras.jpg" type="image/jpeg">
                        <source media="(max-width: 835px)" srcset="https://blog.intelbras.com.br/wp-content/uploads/2021/08/tecnologia-no-canteiro-de-obras.jpg" type="image/jpeg">
                        <img src="https://blog.intelbras.com.br/wp-content/uploads/2021/08/tecnologia-no-canteiro-de-obras.jpg" alt="">
                    </picture>
                </div>
                <div class="banner-text">
    
                    <p data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Civil Engineer</p>
                    
                    <h2 data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Mantenha tudo sob controle</h2>
                    
                    <p class="banner-btn"><a href="{{ route('login') }}">Acessar Login</a></p>
                </div>
            </div>            
            <div class="single-banner">
                <div class="banner-img">
                    <picture>
                        <source media="(max-width: 580px)" srcset="https://construpoint.construmarket.com.br/wp-content/uploads/2022/03/O-que-e-um-Diario-de-Obra-e1701458708424.jpg" type="image/jpeg">
                        <source media="(max-width: 835px)" srcset="https://construpoint.construmarket.com.br/wp-content/uploads/2022/03/O-que-e-um-Diario-de-Obra-e1701458708424.jpg" type="image/jpeg">
                        <img src="https://construpoint.construmarket.com.br/wp-content/uploads/2022/03/O-que-e-um-Diario-de-Obra-e1701458708424.jpg" alt="">
                    </picture>
                </div>
                <div class="banner-text">
                    <p>Civil Engineer</p>
                    <h2>Gestão Eficiente de Obras</h2>
                    <p class="banner-btn"><a href="{{ route('login') }}">Acessar Login</a></p>
                </div>
            </div>            
            <div class="single-banner">
                <div class="banner-img">
                    <picture>
                        <source media="(max-width: 580px)" srcset="https://orcafascio.com/papodeengenheiro/wp-content/uploads/2021/08/gerente-de-obras.jpg" type="image/jpeg">
                        <source media="(max-width: 835px)" srcset="https://orcafascio.com/papodeengenheiro/wp-content/uploads/2021/08/gerente-de-obras.jpg" type="image/jpeg">
                        <img src="https://orcafascio.com/papodeengenheiro/wp-content/uploads/2021/08/gerente-de-obras.jpg" alt="">
                    </picture>
                </div>
                <div class="banner-text">
                    <p>Civil Engineer</p>
                    <h2>Gerenciamento e Acompanhamento de Projetos</h2>
                    <p class="banner-btn"><a href="{{ route('login') }}">Acessar Login</a></p>
                </div>
            </div>            
            <div class="single-banner">
                <div class="banner-img">
                    <picture>
                        <source media="(max-width: 600px)" srcset="https://constru360.com.br/wp-content/uploads/2019/04/obras.jpg" type="image/jpeg">
                        <source media="(max-width: 835px)" srcset="https://constru360.com.br/wp-content/uploads/2019/04/obras.jpg" type="image/jpeg">
                        <img src="https://constru360.com.br/wp-content/uploads/2019/04/obras.jpg" alt="">
                    </picture>

                </div>
                <div class="banner-text">
                    <p>Controle Total para sua Obra</p>
                    <h2>Explore todas as funcionalidades</h2>
                    <p class="banner-btn"><a href="{{ route('login') }}">Acessar Login</a></p>
                </div>
            </div>            
        </div>
    </section>
    <!--BANNER-->


    <!--UM POUCO SOBRE NÓS-->
    <section class="hero" id="about-us">
        <div class="container" id="hero">
            <div style="margin: 0px 20px 25px;">
                <img class="alc" src="img\logo-civil.png" alt="">
                <p class="sub">Civil Engineer</p>
                <h2 style="margin-top: -12px;">Sobre o Nosso Software</h2>
                <p>O Software de Gerenciamento de Construção da Civil Engineer é uma solução abrangente para engenheiros e chefes de obra. Oferecemos uma plataforma centralizada para o acompanhamento e gestão eficiente de projetos de construção, proporcionando controle total sobre orçamentos, investimentos, observações, histórico de obras e muito mais...</p>
                <ul class="circulo" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Registro de Despesas e Investimentos</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Acompanhamento de Funcionários</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Histórico Detalhado de Obras Anteriores</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Observações e Comentários Relevantes</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Geração de Relatórios Precisos</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Atualizações em Tempo Real</li>
                </ul>  
            </div>
        </div>
    </section>
    <!--UM POUCO SOBRE NÓS-->



    <!--CERTIFICAÇÕES-->
    <section class="cs" style="margin-top: 10rem;">
        <div class="con">
            <div class="cards card-1">
                <!-- card-body -->
                <div class="card-body">
                    <p class="cards-texto">CERTIFICAÇÃO</p>
                    <h3 class="card-local">Certificações de Qualidade</h3>
                    <p class="cards-texto">
                        ISO 9001 - Garantia de Qualidade
                    </p>
                </div>
                <!-- card-body -->
            </div>

            <div class="cards card-1">
                <!-- card-body -->
                <div class="card-body">
                    <p class="cards-texto">PROFISSIONAIS</p>
                    <h3 class="card-local">Equipe Especializada</h3>
                </div>
                <!-- card-body -->
            </div>

            <div class="cards card-1">
                <!-- card-body -->
                <div class="card-body">
                    <p class="cards-texto">EXPERIÊNCIA</p>
                    <h3 class="card-local">Mais de 15 Anos de Experiência</h3>
                </div>
                <!-- card-body -->
            </div>
        </div>
    </section>
    <!--CERTIFICAÇÕES-->


    <!--TÍTULO (COMO PODEMOS TE AJUDAR)-->
    <section class="title" id="facilitar">
        <div>
            <img src="img\logo-civil.png" alt="">
            <p>Civil Engineer</p>
            <h3>Como Podemos Facilitar o Seu Trabalho</h3>
        </div>
    </section>
    <!--TÍTULO (COMO PODEMOS TE AJUDAR)-->
    
    
    <!--CARDS-->
    <section>
        <div class="con">
            <!-- Card 1 -->
            <div class="card card-1">
                <!-- card-header -->
                <div class="card-header">
                    <img src="https://www.educacaoconquista.com.br/wp-content/uploads/2022/07/Custos-gastos-e-despesas-de-uma-escola-entenda-a-diferenca.jpg" class="card-img" />
                </div>
                <!-- card-header -->
    
                <!-- card-body -->
                <div class="card-body">
                    <h3 class="card-local">Registre Despesas</h3>
                    <p class="card-texto">
                        Mantenha um registro detalhado de todas as despesas relacionadas ao projeto.
                    </p>
                </div>
                <!-- card-body -->
            </div>
            <!-- Card 1 -->
    
            <!-- Card 2 -->
            <div class="card card-2">
                <!-- card-header -->
                <div class="card-header">
                    <img src="https://www.indexgramado.com.br/wp-content/uploads/2021/04/obras-por-administracao.jpg" style="width: 100%;" />
                </div>
                <!-- card-header -->
    
                <!-- card-body -->
                <div class="card-body">
                    <h3 class="card-local">Acompanhe Investimentos</h3>
                    <p class="card-texto">
                        Tenha controle sobre todos os investimentos feitos durante a execução da obra.
                    </p>
                </div>
                <!-- card-body -->
            </div>
            <!-- Card 2 -->
    
            <!-- Card 3 -->
            <div class="card card-3">
                <!-- card-header -->
                <div class="card-header">
                    <img src="https://static.wixstatic.com/media/88d7c5_48994b9735894fa99a47e4a2da7d6e95~mv2.jpg/v1/fill/w_980,h_639,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/88d7c5_48994b9735894fa99a47e4a2da7d6e95~mv2.jpg" class="card-img" />
                </div>
                <!-- card-header -->
    
                <!-- card-body -->
                <div class="card-body">
                    <h3 class="card-local">Histórico de Obras</h3>
                    <p class="card-texto">
                        Tenha acesso a um histórico detalhado de todas as obras gerenciadas anteriormente.
                    </p>
                </div>
                <!-- card-body -->
            </div>
            <!-- Card 3 -->
  
            <!-- Card 4 -->
            <div class="card card-2">
                <!-- card-header -->
                <div class="card-header">
                    <img src="https://ogimg.infoglobo.com.br/in/17315658-63e-e8c/FT1086A/2015-843429610-2015082438852.jpg_20150824.jpg" class="card-img" />
                </div>
                <!-- card-header -->
              
                <!-- card-body -->
                <div class="card-body">
                    <h3 class="card-local">Observações Relevantes</h3>
                    <p class="card-texto">
                        Faça observações e anotações relevantes para cada etapa da obra.
                    </p>
                </div>
                <!-- card-body -->
            </div>
            <!-- Card 4 -->
        </div>
    </section>
    <!--CARDS -->


    <!--NÚMEROS-->
    <section class="Info" style="margin-top: 10rem;">
        <div class="con2">
            <div class="cardis card-1">
                <!-- card-body -->
                <div class="card-body">
                    <i class="fa-solid fa-tractor fa-2x"></i>
                    <span class="num" data-val="13">0</span>
                    <span class="text">Total de clientes ativos</span>
                </div>
                <!-- card-body -->
            </div>

            <div class="cardis card-1">
                <!-- card-body -->
                <div class="card-body">
                    <i class="fa-solid fa-tractor fa-2x"></i>
                    <span class="num" data-val="3">0</span>
                    <span class="text">Parcerias</span>
                </div>
                <!-- card-body -->
            </div>

            <div class="cardis card-1">
                <!-- card-body -->
                <div class="card-body">
                    <i class="fa-solid fa-tractor fa-2x"></i>
                    <span class="num" data-val="18">0</span>
                    <span class="text">Funcionarios</span>
                </div>
                <!-- card-body -->
            </div>
                <!-- card-body -->
            </div>
        </div>
    </section>
    <!--NÚMEROS-->


    <!--SOLICITE UM ORÇAMENTO-->
    <section id="function">
        <div class="conteiner">
            <div class="conteudo">
                <i class="fa-solid fa-envelope "></i>
                <p>Quer adquirir o sistema? Entre em contato conosco!</p>
                <a href="https://web.whatsapp.com/send?phone=41984880071" class="btn">Entrar em contato</a>
            </div>
        </div>
    </section>
    <!--SOLICITE UM ORÇAMENTO-->


    <!--FOOTER-->
    <footer class="footer">
        <div class="contayner">
            <div class="rows">
                <div class="footer-col">
                    <h4>Home</h4>
                    <ul>
                        <li><a href="#">Início</a></li>
                        <li><a href="#about-us">Sobre</a></li>
                        <li><a href="#facilitar">Serviços</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#facilitar">Registro de Despesas e Investimentos</a></li>
                        <li><a href="#facilitar">Acompanhamento de Funcionários</a></li>
                        <li><a href="#facilitar">Histórico de Obras</a></li>
                        <li><a href="#facilitar">Observações Relevantes</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-phone" style="font-size: 1.5rem;"></i> (41) 98488-0071</a></li>
                        <li><a href="#"><i class="fa-solid fa-envelope" style="font-size: 1.5rem;"></i> Eduardomj.bryan@gmail.com</a></li>
                        <li><a href="#"><i class="fa-solid fa-map-pin" style="font-size: 1.5rem;"></i> R. Leonardo Pianowski 625, casa 2</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Social Medias</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/ed_bryan_rbk/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOTER-->

    <!--BOTÃO WHATSAPP-->
    <a href="https://web.whatsapp.com/send?phone=41984880071" class="wpp-link" rel="stylesheet" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
    <!--BOTÃO WHATSAPP-->

    <!--TO-TOP-->
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!--TO-TOP-->


    <!--SCRIPTS-->
    <script src="js/scriptS.js"></script>
    <script src="js/to-top.js"></script>
    <script src="js/mobile-navbar.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/2de34c3ab2.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
        duration: 1500,
        once: true,
        });
    </script>

    <script>
        $('.banner-area').slick({
        autoplay: true,
        speed: 800,
        arrows: false,
        dots: true,
        fade: true
    });
  </script>

</body>

</html>
