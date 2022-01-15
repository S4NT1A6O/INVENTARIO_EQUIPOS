$(function(){
    $('table').find('a[class="btn btn-danger"]').click(function(){
        let ID = $(this).find('input[type="hidden"]').val();

        Swal.fire({
            title: 'Esta Seguro?',
            text: "No podra revertir o recuperar la informacion del registro!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Eliminado!',
                'El registro a sido eliminado correctamente',
                'success'
                )

                window.location.href = `http://localhost/inventario_equipos/?controlador=Empresas&accion=BorrarEmpresa&ID=`+ID;

            }
        });
    });
});