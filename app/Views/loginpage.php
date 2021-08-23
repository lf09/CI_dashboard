<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="all.min.css" />
    <link rel="stylesheet" href="dark.css" />

</head>
<body id="template-page">
    <div id="wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12" id="content">
                    <div id="loading"></div>
                    <div id="login" class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
        <div id="login-form">
            <h2 class="title text-center">Seja bem vindo!</h2>
            <hr />

            <form class="login" action="<?php echo base_url('Dashboardloginpage/SignIn') ?>" method="POST">
                <div class="form-group">
                
                    <label class="control-label">Entre com o Login</label>
                    <input type="text" class="form-control" name="user_email" placeholder="Email" value="email@email.com" required />
                
                </div>
                <div class="form-group">
                
                    <label class="control-label">Entre com a Senha</label>
                    <input type="password" name="user_password" class="form-control" placeholder="Senha" required />
                
                </div>

                <div class="form-group mb-2">
                
                    <button type="submit" class="btn btn-primary">Autenticar</button>
                
                </div>
                    <p class="text-center pt-1 mt-2 mb-0">
                        <a href="<?php echo base_url('Dashboardcadastro') ?>">
                            <span>Cadastrar</span>
                        </a>
                    </p>
                <input type="hidden" name="service_desk_auth" value="" />
            </form>
                <?php $msg = session() -> getFlashData('msg') ?>
                <?php if (!empty($msg)) : ?>
                    <div class="alert alert-danger">
                        <?php echo $msg ?>
                    </div>
                <?php endif; ?>

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