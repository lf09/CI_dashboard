<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="all.min.css" />
    <link rel="stylesheet" href="dark.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/my.js"></script>
</head>
<body id="template-page">
    <div id="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="content">
                    <div id="loading"></div>
                        <div id="login" class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
        <h2 class="title text-left">Dashboard</h2>
    </div>
                    <table class="table" class="container mt-5">
					<tr class="root">
						<th>Distro OS: </th>
                        <td><?php echo"$uname" ?></td><br>
                    </tr>
                    <tr>
                        <th>CPU em uso: </th>
                        <td><?php echo"$cpu" ?>%</td><br>
                    </tr>
                    <tr>
                        <th>Memoria em uso: </th>
                        <td><?php echo"$memoriaEmUso" ?>G</td><br>
                    </tr>
                    <tr>
                        <th>Memoria Total: </th>
                        <td><?php echo"$memoriaTotal" ?>G</td><br>
                    </tr>
                    <tr>
                        <th>HD: </th>
                        <td><?php echo"$hd" ?></td>
					</tr>
					</table>
</div>
                    <a href="<?php echo base_url('Dashboardloginpage') ?>">
                        <span>Voltar ao login</span>
</div>
            </div>
        </div>
    </div>

    <footer id="footer">
    </footer>
    
</body>
</html>