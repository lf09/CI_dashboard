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
            <div class="alert alert-info">
                <?php echo $userlist_messages ?>
           
				</div>
            </div>
        </div>
    </div>

    <footer id="footer">
    </footer>
    
</body>
</html>