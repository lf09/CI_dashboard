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
        <h2 class="title text-left">Lista de usuários:</h2>            
    </div>
</div>
                </div>
				
				<div class="container mt-5">
					<?php echo anchor(base_url('Dashboarduserlist/create'), 'Novo usuário', ['class' => 'btn btn-success mb-3']) ?>
					<table class="table">
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>e-mail</th>
					</tr>
					
					<?php foreach($userlist as $user){ ?>
						<tr>
							<td><?php echo $user['id'] ?></td>
							<td><?php echo $user['user_name'] ?></td>
							<td><?php echo $user['user_email'] ?></td>
                            <td>
                            <?php echo anchor('Dashboarduserlist/edit/'.$user['id'], 'Editar') ?>
                            <?php echo anchor('Dashboarduserlist/delete/'.$user['id'], 'Deletar', ['onclick' => 'return confirma()']) ?>
                            </td>
						</tr>
					<?php } ?>
					</table>
				</div>
            </div>
        </div>
    </div>

    <footer id="footer">
    </footer>
    
</body>
</html>