<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registro de Empresas</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/ff77c957bf.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <!-- Page Content -->
        <div class="container-sm">
            <br>
            <div class="card text-dark bg-light">
                <div class="card-header" style="background-color:#317EB5; color:#FFFFFF;">
                    <h3 class="card-title">Registro para Empresas</h3>
                </div>
                <div class="card-body">
                    <div class="container-sm">
                        <div class="container-md">                     
                            <form action="" method="POST">

                                <div class="mb-3">
                                    <label for="RAZON_SOCIAL_EMPRESA" class="form-label">Razon Social</label>
                                    <input type="text" class="form-control" name="RAZON_SOCIAL_EMPRESA" id="RAZON_SOCIAL_EMPRESA" placeholder=" Razon social...">
                                </div>



                                <div class="mb-3">
                                    <label for="NIT_EMPRESA" class="form-label">NIT</label>
                                    <input type="number" class="form-control" name="NIT_EMPRESA" id="NIT_EMPRESA"  placeholder=" NIT...">
                                </div>

                                <div class="mb-3">
                                    <label for="DIRECCION_EMPRESA" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" name="DIRECCION_EMPRESA" id="DIRECCION_EMPRESA" placeholder=" Dirección...">
                                </div>

                                <div class="mb-3">
                                    <label for="CODIGO_POSTAL_EMPRESA" class="form-label">Codigo Postal</label>
                                    <input type="number" class="form-control" name="CODIGO_POSTAL_EMPRESA" id="CODIGO_POSTAL_EMPRESA" placeholder=" Codigo Postal...">
                                </div>

                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <input name="" id="btn_set_company" class="btn btn-danger" type="submit" value="Registrar Empresa">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>