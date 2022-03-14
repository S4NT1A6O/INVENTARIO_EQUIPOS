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