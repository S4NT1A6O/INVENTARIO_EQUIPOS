<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php   
        $info=array();
        // $info=array();
        $info['state']='ok';
        $info['msg']='Iniciando sesion';
        $info['link']='?controlador=Load&accion=Menu';
        // $info=array('success'=>true, 'msg'=>"Iniciando sesion...", 'link'=>"?controlador=Load&accion=Menu");

        http_response_code(200);
		header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
		header('Cache-Control: post-check=0, pre-check=0', false);
		header('Pragma: no-cache');
		header('Content-type: application/json; charset=UTF-8');
        echo json_encode($info);
    ?>
