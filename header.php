<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" />
    <title>Financeiro</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" href="img/logo.png" type="image/x-icon"/> 

    <!-- Fonts and icons -->
    <script src="js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/atlantis.min.css">
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/select2-bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="datatables/dataTables.bootstrap4.min.css">

    <script src="jquery/jquery.min.js"></script>
    <script src="js/select2.min.js"></script>   
</head>

<body data-background-color="white">
    <div class="wrapper">
        <div class="main-header">
        
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark2">
                <a href="index.php" class="logo">

            <!--<img src="img/logo.svg" alt="navbar brand" class="navbar-brand">-->
                <font color="white"> <strong>FINANCEIRO</strong></font>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="img/logo.png" alt="..." class="avatar-img rounded-circle" title="Perfil">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="<?php //echo 'upload/'. $resultado_final['foto'] .'' ?>" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4><?php //echo $_SESSION['nomeUsuario']; ?></h4>
                                            
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                     
                                        <a class="dropdown-item" href="./#.php">PERFIL</a> 
                                        <!-- abre os modais de mudar senha e alterar foto -->
                                        <a class="dropdown-item" data-toggle="modal" data-target="#alterar_senha">ALTERAR SENHA</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#alterar_foto">FOTO DE PERFIL</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="./login.php">SAIR</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2" data-background-color="dark2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="img/profile-profile.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" aria-expanded="true">
                                <span>
                                USUARIO
                                    <?php //echo $_SESSION['nomeUsuario']; ?>      
                                </span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="index.php">
                                <i class="fas fa-home"></i>
                                <p>HOME</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="#jovem">
                            <i class="fas fa-users"></i>
                                <p>LANÇAMENTOS</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="jovem">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="cadastrar_jovem.php">
                                            <span class="sub-item">DESPESAS</span>
                                        </a>
                                        <li>
                                        <a href="cadastrar_jovem.php">
                                            <span class="sub-item">RECEITAS</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                        <a data-toggle="collapse" href="#empresa">
                            <i class="fa fa-building"></i>
                                <p>EMPRESAS</p>
                                <span class="caret"></span>
                        </a>
                        <div class="collapse" id="empresa">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="cadastrar_empresa.php">
                                        <span class="sub-item">CADASTRO</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="consultar_empresa.php">
                                        <span class="sub-item">CONSULTA</span>
                                    </a>
                                </li> 
                            </ul>  
                        </div>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="#rela">
                            <i class="fa fa-archive"></i>
                                <p>RELATÓRIOS</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="rela">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">MENSAIS</span>
                                        </a>
                                        <a href="#">
                                            <span class="sub-item">SEMESTRAIS</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="alterar_senha" role="dialog" tabindex="-1" id="alterar_senha" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Alteração de senha.</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="./alterar_senha.php" method="post">
                        <div class="modal-body">
                            <p>Digite sua senha atual</p>
                            <input type="password" name="senha_atual" autocomplete="off" class="form-control placeholder-no-fix" required>
                        </div>

                        <div class="modal-body">
                            <p>Digite sua nova senha</p>
                            <input type="password" name="nova_senha" id="nova_senha" autocomplete="off" class="form-control placeholder-no-fix" required>
                        </div>

                        <div class="modal-body">
                            <p>Confirme sua nova senha</p>
                            <input type="password" name="confirma_senha" id="confirma_senha" autocomplete="off" class="form-control placeholder-no-fix" required>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                            <button class="btn btn-theme" type="submit" type="button">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- modal -->
     <div aria-hidden="true" aria-labelledby="alterar_foto" role="dialog" tabindex="-1" id="alterar_foto" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Alterar foto de prefil.</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="alterar_foto.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <p>Foto de Perfil</p>
                            <input type="file" name="foto" autocomplete="off" class="form-control placeholder-no-fix" required>
                        </div>
                            <input type="text" hidden name="idUsuario" autocomplete="off" class="form-control placeholder-no-fix" value=" <?php echo $_SESSION['idUsuario'];?>" >
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                            <button class="btn btn-theme" type="submit" type="button">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script>
            var password = document.getElementById("nova_senha"),
                confirm_password = document.getElementById("confirma_senha");

            function validatePassword() {
                if (password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("A nova senha e a confirmação estão diferentes!");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        </script>
