<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Principal</title>
	<link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="all.min.css" />
    <link rel="stylesheet" href="dark.css" />
	<script>
        function confirma(){
            if(!confirm('Deseja excluir o registro?')){
                return false;
            }else{
                return true;
            }
        }
    </script>


</head>
<body id="template-page">
    <div id="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="content">
                    <div id="loading"></div>
                    <div id="login" class="row">
                        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                        <div class="container mt-5">
                        <h2 class="title text-left">Editar:</h2>
                        <table class="table">
                        <tr>
                            <?php echo form_open('Dashboarduserlist/store') ?>
                                <td>
                                    <label for="username">User</label>
                                    <input type="text" name="user_name" id="user_name"
                                    value="<?php echo isset($user['user_name']) ? $user['user_name'] : ''?>">
                                </td>

                                <!--<td>
                                    <label for="username">Password</label>
                                    <input type="password" name="user_password" id="user_password"
                                    value="">
                                </td> -->
                                <td>
                                    <label for="username">E-mail</label>
                                    <input type="text" name="user_email" id="user_email"
                                    value="<?php echo isset($user['user_email']) ? $user['user_email'] : ''?>">
                                </td>
                                <td>
                                    <input type="submit" value="Salvar" class="btn btn-primary">
                                    <input type="hidden" name="id"
                                    value="<?php echo isset($user['id']) ? $user['id'] : ''?>">
                                </td>
                                    <?php form_close(); ?>
                        </tr>
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