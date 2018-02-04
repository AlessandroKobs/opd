<!DOCTYPE html>


<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Alessandro Kobs">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?><?php echo BASE_URL; ?>assets/img/favicon.png">

    <title>Open Diet</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <!-- nanoScroller -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/nanoscroller/bin/css/nanoscroller.css" />

    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/fontawesome/css/font-awesome.min.css" />

    <!-- Material Design Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/material-design-icons/css/material-design-icons.min.css" />

    <!-- IonIcons -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/ionicons/css/ionicons.min.css" />

    <!-- WeatherIcons -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/weather-icons/css/weather-icons.min.css" />

    <!-- Rickshaw -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/rickshaw/rickshaw.min.css" />

    <!-- nvd3 -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/nvd3/build/nv.d3.min.css" />

    <!-- MarkItUp -->
    <link href="<?php echo BASE_URL; ?>assets/_opendiet/markitup/skins/_opendiet/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL; ?>assets/bower_components/markitup-1x/markitup/sets/default/style.css" rel="stylesheet" type="text/css" />

    <!-- Squire -->
    <link href="<?php echo BASE_URL; ?>assets/_opendiet/squire/squire-ui.css" rel="stylesheet" type="text/css" />

    <!-- Select2 -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/select2/dist/css/select2.min.css" />

    <!-- Drop Zone -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/dropzone/dist/min/dropzone.min.css" />

    <!-- Tags Input -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/jquery.tagsinput/src/jquery.tagsinput.css" />

    <!-- Clockpicker -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/clockpicker/dist/jquery-clockpicker.min.css" />

    <!-- Pikaday -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/pikaday/css/pikaday.css" />

    <!-- Spectrum -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/spectrum/spectrum.css" />

    <!-- jvectormap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/jquery-jvectormap/jquery-jvectormap.css" />

    <!-- Full Calendar -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/fullcalendar/dist/fullcalendar.min.css" />

    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/animate.css/animate.min.css" />

    <!-- PhotoSwipe -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/photoswipe/dist/default-skin/default-skin.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/photoswipe/dist/photoswipe.css" />

    <!-- Video.js -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bower_components/video.js/dist/video-js/video-js.min.css" />

    <!-- jsTree -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/_opendiet/jstree/style.min.css" />

    <!-- Main -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/_opendiet/css/con-base.css" />

    <!--[if lt IE 9]>
    <script src="<?php echo BASE_URL; ?>assets/bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <![endif]-->


</head>


<body>

<nav class="navbar-top">
    <div class="nav-wrapper">

        <!-- Sidebar toggle -->
        <a href="#" class="yay-toggle">
            <div class="burg1"></div>
            <div class="burg2"></div>
            <div class="burg3"></div>
        </a>
        <!-- Sidebar toggle -->

        <!-- Logo -->
        <a href="#!" class="brand-logo">
            <img src="<?php echo BASE_URL; ?>assets/_opendiet/images/logo.png" alt="Con">
        </a>
        <!-- /Logo -->

        <!-- Menu -->
        <ul>
            <!-- Implementação futura das mensagens! -->
            <li>
                <a class="dropdown-button" data-activates="test-dropdown" href="#!">
                    <i class="mdi-communication-email"></i>
                    <span class="badge new">2</span>
                </a>
                <div id="test-dropdown" class="dropdown-content dropdown-media">
                    <div class="card-panel">

                        <div class="media-heading">Mensagens <a href="mail-compose.html"><i class="mdi-content-add-circle-outline"></i></a></div>

                        <div class="media-footer"><a href="#"><i class="mdi-hardware-keyboard-control"></i></a></div>

                        <div class="row mt-0">
                            <div class="col s2">
                                <img src="<?php echo BASE_URL; ?>assets/_opendiet/images/user2.jpg" alt="" class="circle responsive-img">
                            </div>
                            <div class="col s10">
                                <span class="media-date">10:20</span>
                                <a href="#" class="media-title">Alguém misterioso</a>
                                <span>
                                        Este é um recurso que poderemos implementar em uma segunda fase do projeto.
                                    </span>
                            </div>
                        </div>

                    </div>
                </div>
            </li>
            <!-- fim das mensagens -->
            <li class="user">
                <a class="dropdown-button" data-activates="user-dropdown" href="#!">
                    <img src="<?php echo BASE_URL; ?>assets/img/flavio.jpg" alt="Flávio Vasconcelos" class="circle"> Flávio Vasconcelos <i class="mdi-navigation-expand-more right"></i>
                </a>

                <ul id="user-dropdown" class="dropdown-content">
                    <li>
                        <a href="#meusdados">
                            <i class="fa fa-user"></i> Meus dados
                        </a>
                    </li>
                    <li>
                        <a href="#meusdados">
                            <i class="fa fa-map"></i> Pontos de Atendimento
                        </a>
                    </li>
                    <li>
                        <a href="#meusdados">
                            <i class="fa fa-key"></i> Alterar Senha
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>login/logout">
                            <i class="fa fa-sign-out"></i> Sair
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /Menu -->

    </div>
</nav>
<!-- /Top Navbar -->


<aside class="yaybar yay-shrink yay-hide-to-small yay-gestures">

    <div class="top">
        <div>
            <!-- Sidebar toggle -->
            <a href="#" class="yay-toggle">
                <div class="burg1"></div>
                <div class="burg2"></div>
                <div class="burg3"></div>
            </a>
            <!-- Sidebar toggle -->
            <a href="index.html" class="brand-logo">
                <img src="<?php echo BASE_URL; ?>assets/_opendiet/images/logo.png" alt="Con">
            </a>

        </div>
    </div>

    <div class="nano ">
        <div class="nano-content">

            <ul>
                <li class="yay-user-info">
                    <a href="#">
                        <img src="<?php echo BASE_URL; ?>/assets/img/flavio.jpg" alt="Fávio Vasconcelos" class="circle">
                        <h3 class="yay-user-info-name">Clinica Tal</h3>
                        <div class="yay-user-location">
                            <i class="fa fa-edit"></i> Alterar
                        </div>
                    </a>
                </li>



                <li class="label">Menu Principal</li>

                <li>
                    <a href="#" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-dashboard"></i> Página Inicial

                    </a>

                </li>

                <li>
                    <a href="#" class=" waves-effect waves-blue"> <i class="fa fa-calendar"></i> Agenda </a>

                </li>

                <li>
                    <a href="#" class=" waves-effect waves-blue"> <i class="fa fa-users"></i> Meus Pacientes

                    </a>

                </li>

                <li class="label">Alimentos</li>

                <li>
                    <a href="css-alerts.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-css3"></i> Alimentos e Prescrições
                        <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                    </a>
                    <ul>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="mdi-alert-warning"></i> Alimentos </a>

                        </li>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="mdi-action-stars"></i> Suplementos </a>

                        </li>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="mdi-image-palette"></i> Fitoterápicos </a>

                        </li>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="mdi-action-dashboard"></i> Receitas </a>

                        </li>


                    </ul>
                </li>



                <li class="label">Auxuliar</li>

                <li>
                    <a href="forms-base.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-cogs"></i> Configurações
                        <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                    </a>
                    <ul>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="fa fa-user"></i> Recepcionistas </a>

                        </li>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="fa fa-cubes"></i> Impressões </a>

                        </li>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="fa fa-check-square-o"></i> Preferências</a>

                        </li>

                    </ul>
                </li>

                <li>
                    <a href="page-profile.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-question"></i> Ajuda
                        <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                    </a>
                    <ul>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="fa fa-map"></i>  Tutoriais   </a>

                        </li>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="fa fa-question"></i> Principais Dúvidas   </a>

                        </li>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="fa fa-envelope"></i> Fale Conosco   </a>

                        </li>



                    </ul>
                </li>

                <li class="label">Administração do Sistema</li>

                <li>
                    <a href="mail-inbox.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-signin"></i> Assinaturas
                        <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                    </a>
                    <ul>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="mdi-content-inbox"></i> Ativas </a>

                        </li>

                        <li>
                            <a href="#" class=" waves-effect waves-blue"> <i class="fa fa-cog"></i> Configuração de Planos </a>

                        </li>

                    </ul>
                </li>


                <!-- Implementação futura -->
                <!--
                <li class="label">Status do Sistema</li>
                <li class="content">
                    <span><i class="fa fa-spinner"></i> Velocidade de carregamento</span>
                    <div class="progress small light-green lighten-4">
                        <div class="light-green accent-5" style="width: 37%"></div>
                    </div>

                    <span><i class="fa fa-thumbs-o-up"></i> Satisfação do Usuário</span>
                    <div class="progress small">
                        <div style="width: 91%"></div>
                    </div>
                </li>

                -->
                <!-- Fim -->
            </ul>
            </ul>

        </div>
    </div>
</aside>
<!-- /Yay Sidebar -->

<!-- Main Content -->
<section class="content-wrap">


    <!-- Breadcrumb -->
    <div class="page-title">

        <div class="row">
            <div class="col s12 m9 l10">
                <h1>Página Inicial</h1>

                <ul>
                    <li>
                        <a href="#"><i class="fa fa-home"></i> Início </a>
                    </li>

                </ul>
            </div>
            <div class="col s12 m3 l2 right-align">
                <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
            </div>
        </div>

    </div>
    <!-- /Breadcrumb -->


</section>
<!-- /Main Content -->

<!-- Search Bar  Ainda será implementada -->
<div class="search-bar">
    <div class="layer-overlay"></div>
    <div class="layer-content">
        <form action="#!">
            <!-- Header -->
            <a class="search-bar-toggle grey-text text-darken-2" href="#!"><i class="mdi-navigation-close"></i></a>

            <!-- Search Input -->
            <div class="input-field">
                <i class="mdi-action-search prefix"></i>
                <input type="text" name="con-search" placeholder="Pesquisar...">
            </div>

            <!-- Search Results -->
            <div class="search-results">

                <div class="row">
                    <div class="col s12 l4">
                        <h4>Pacientes</h4>

                        <div class="each-result">
                            <img src="<?php echo BASE_URL; ?>assets/_opendiet/images/user2.jpg" alt="Fulano da Silva" class="circle photo">
                            <div class="title">Fulano da Silva</div>
                            <div class="label">Content Manager</div>
                        </div>

                        <div class="each-result">
                            <img src="<?php echo BASE_URL; ?>assets/_opendiet/images/user3.jpg" alt="Beltrano" class="circle photo">
                            <div class="title">Max Brooks</div>
                            <div class="label">Programmer</div>
                        </div>

                        <div class="each-result">
                            <img src="<?php echo BASE_URL; ?>assets/_opendiet/images/user4.jpg" alt="Patsy Griffin" class="circle photo">
                            <div class="title">Patsy Griffin</div>
                            <div class="label">Support</div>
                        </div>

                        <div class="each-result">
                            <img src="<?php echo BASE_URL; ?>assets/_opendiet/images/user6.jpg" alt="Vernon Garrett" class="circle photo">
                            <div class="title">Vernon Garrett</div>
                            <div class="label">Photographer</div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <h4>Tutoriais</h4>

                        <div class="each-result">
                            <div class="icon circle blue white-text">MD</div>
                            <div class="title">Como fazer tal coisa..</div>
                            <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                        </div>

                        <div class="each-result">
                            <div class="icon circle teal white-text">
                                <i class="fa fa-dashboard"></i>
                            </div>
                            <div class="title">Como fazer tal coisa..</div>
                            <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                        </div>

                        <div class="each-result">
                            <div class="icon circle orange white-text">RD</div>
                            <div class="title">Como fazer tal coisa...</div>
                            <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                        </div>

                        <div class="each-result">
                            <div class="icon circle red white-text">
                                <i class="fa fa-tablet"></i>
                            </div>
                            <div class="title">Como fazer tal coisa..</div>
                            <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <h4>Alimentos</h4>

                        <div class="no-result">Nada encontrado ;(</div>
                    </div>
                </div>

            </div>

        </form>
    </div>
</div>
<!-- /Search Bar -->

<!--
Chat
.chat-light - light color scheme
-->
<div class="chat">
    <div class="layer-overlay"></div>

    <div class="layer-content">

        <!-- Contacts -->
        <div class="contacts">
            <!-- Top Bar -->
            <div class="topbar">
                <a href="#!" class="text">Comunicação</a>
                <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
            </div>
            <!-- /Top Bar -->

            <div class="nano">
                <div class="nano-content">

                    <span class="label">Online</span>

                    <div class="user">
                        <img src="<?php echo BASE_URL; ?>assets/img/flavio.jpg" alt="Flávio Vasconcelo" class="circle photo">

                        <div class="name">Flávio Vasconcelo</div>
                        <div class="status">Meu Status</div>

                        <div class="online"><i class="green-text fa fa-circle"></i></div>
                    </div>




                    <span class="label">Offline</span>

                    <div class="user">
                        <img src="http://placehold.it/100x100" alt="Outro Contato" class="circle photo">

                        <div class="name">Outro Contato</div>
                        <div class="status">Outro Status</div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Contacts -->

        <!-- Messages -->
        <div class="messages">

            <!-- Top Bar with back link -->
            <div class="topbar">
                <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
                <a href="#!" class="chat-back"><i class="mdi-hardware-keyboard-arrow-left"></i> Voltar</a>
            </div>
            <!-- /Top Bar with back link -->

            <!-- All messages list -->
            <div class="list">
                <div class="nano scroll-bottom">
                    <div class="nano-content">

                        <div class="date">Sábado, 03 de Fev / 2018</div>

                        <div class="from-me">
                            Opa, tudo bom?

                        </div>

                        <div class="clear"></div>

                        <div class="from-them">
                            <img src="http://placehold.it/100x100" alt="Administrador" class="circle photo"> Olá, posso te ajudar?
                        </div>

                        <div class="clear"></div>

                        <div class="from-me">
                            Sim! :)
                            <br> Queria escrever um texto grande para ver como chat ia se comportar.
                        </div>

                        <div class="clear"></div>



                    </div>
                </div>
            </div>
            <!-- /All messages list -->

            <!-- Send message -->
            <div class="send">
                <form action="#!">
                    <div class="input-field">
                        <input id="chat-message" type="text" name="chat-message">
                    </div>

                    <button class="btn waves-effect z-depth-0"><i class="mdi-content-send"></i></button>
                </form>
            </div>
            <!-- /Send message -->

        </div>
        <!-- /Messages -->
    </div>

</div>
<!-- /Chat -->
<footer>&copy; 2018
    <strong>OpenDiet</strong>. Todos os direitos Reservados. </footer>


<!-- jQuery -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- jQuery RAF (improved animation performance) -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/jquery-requestAnimationFrame/dist/jquery.requestAnimationFrame.min.js"></script>

<!-- nanoScroller -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>

<!-- Materialize -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/materialize/bin/materialize.js"></script>

<!-- Simple Weather -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>

<!-- Sparkline -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

<!-- Flot -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/flot/jquery.flot.time.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/flot/jquery.flot.categories.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

<!-- d3 -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/d3/d3.min.js"></script>

<!-- nvd3 -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/nvd3/build/nv.d3.min.js"></script>

<!-- Rickshaw -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/rickshaw/rickshaw.min.js"></script>

<!-- MarkItUp -->
<script src="<?php echo BASE_URL; ?>assets/bower_components/markitup-1x/markitup/sets/default/set.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>assets/bower_components/markitup-1x/markitup/jquery.markitup.js" type="text/javascript"></script>

<!-- CKEditor -->
<script src="<?php echo BASE_URL; ?>assets/bower_components/ckeditor/ckeditor.js" type="text/javascript"></script>

<!-- Squire -->
<script src="<?php echo BASE_URL; ?>assets/bower_components/squire/build/squire.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>assets/_opendiet/squire/squire-ui.js" type="text/javascript"></script>

<!-- Select2 -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- Tags Input -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/jquery.tagsinput/src/jquery.tagsinput.js"></script>

<!-- Drop Zone -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/dropzone/dist/min/dropzone.min.js"></script>

<!-- Clockpicker -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>

<!-- Pikaday -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/pikaday/pikaday.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/pikaday/plugins/pikaday.jquery.js"></script>

<!-- Spectrum -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/spectrum/spectrum.js"></script>

<!-- Input Mask -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

<!-- Parsley (validation) -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/parsleyjs/dist/parsley.min.js"></script>

<!-- Google Maps API -->
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>

<!-- GMaps -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/gmaps/gmaps.min.js"></script>

<!-- jvectormap -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/jquery-jvectormap/gdp-data.js"></script>

<!-- Data Tables -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/datatables-scroller/js/dataTables.scroller.js"></script>

<!-- Full Calendar -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

<!-- WOW.js -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/wow/dist/wow.min.js"></script>

<!-- PhotoSwipe -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/photoswipe/dist/photoswipe.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Isotope -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/isotope/dist/isotope.pkgd.min.js"></script>

<!-- Video.js -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/video.js/dist/video-js/video.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/videojs-youtube/dist/vjs.youtube.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/videojs-vimeo/vjs.vimeo.js"></script>

<!-- Nestable -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/nestable/jquery.nestable.js"></script>

<!-- jsTree -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/jstree/dist/jstree.min.js"></script>

<!-- Sortable -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/Sortable/Sortable.min.js"></script>

<!-- Main -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/_opendiet/js/_con.js"></script>

<!-- Google Prettify -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bower_components/code-prettify/src/prettify.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/_opendiet/css/con-green.min.css" />

</body>

</html>