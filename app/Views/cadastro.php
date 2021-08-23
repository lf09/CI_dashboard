<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Cadastro</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="all.min.css" />
    <link rel="stylesheet" href="dark.css" />

</head>
<body>
<div id="wrapper">
        <div class="container-fluid">
            <div class="row" id="header">
                <div class="col">
                    <div class="float-right buttons-lang">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12" id="content">
                    <div id="loading"></div>
                                        <div id="access-login">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 pt-2">
                <div class="col-md-6 offset-md-3">
                 <div class="col-12 px-0" id="alerts"></div>
                    <div id="login-form">
                        <h1 class="title text-center">Cadastro</h1>
                        <hr class="my-3">
                        <div class="col-12 text-center mb-4">
                            <span>Preencha os campos abaixo</span>
                        </div>
                        <?php echo form_open('Dashboardcadastro/insert') ?>
                        <form id="FormRequestAccess" class="login" method="POST">
                            <div class="form-group">
                                <label class="control-label">Nome Completo</label>
                                <input type="text" class="form-control" name="user_name" placeholder="Nome" value="Nome" required/>
                                                            </div>
                             <div class="form-group mb-1">
                                <label class="control-label">E-mail</label>
                                <input type="email" class="form-control" name="user_email" placeholder="Email@email.com" value="Email@email.com" required/>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label">Entre com a Senha</label>
                                        <input type="password" name="user_password" class="form-control" placeholder="Senha" value="1234" required/>
                                </div>
                                <div class="form-group">
							
                                    <button type="submit" class="btn btn-default" id="send-request" value="Cadastrar">Cadastrar</button>
                                    <?php form_close(); ?>
                            </div>
                            </div>
                        </form>
                        <a href="<?php echo base_url('Dashboardloginpage') ?>">
                            <span>Voltar ao login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
    </footer>

</body>
</html>