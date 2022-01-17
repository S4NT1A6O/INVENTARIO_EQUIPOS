/* 
    *Estas funciones hacen posible la validacion de la accion a realizar
    en este caso es para las eliminaciones de registros, apoyado en las 
    librerias de JQuery y Sweet Alert...
*/

$(function(){

    /*  Permite la validacion por medio de JQuery para los registros de empleados
        al realizar click en el boton correspondiente a "a[class="btn btn-danger"]"
        dposteriormente se extrae el "ID" del registro, logrando un correcto borrado
        del objeto-informacion...
    */
    $("#employeesTable").find('a[class="btn btn-danger"]').click(function(){

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

                window.location.href = `http://localhost/inventario_equipos/?controlador=Empleados&accion=BorrarEmpleados&ID=`+ID;

            }
        });
    });

    /*  Permite la validacion por medio de JQuery para los registros de empresas
        al realizar click en el boton correspondiente a "a[class="btn btn-danger"]"
        dposteriormente se extrae el "ID" del registro, logrando un correcto borrado
        del objeto-informacion...
    */
    $("#companyTable").find('a[class="btn btn-danger"]').click(function(){

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

    /*  Permite la validacion por medio de JQuery para los registros de computadores
        al realizar click en el boton correspondiente a "a[class="btn btn-danger"]"
        dposteriormente se extrae el "ID" del registro, logrando un correcto borrado
        del objeto-informacion...
    */
    $("#computersTable").find('a[class="btn btn-danger"]').click(function(){

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

                window.location.href = `http://localhost/inventario_equipos/?controlador=Computador&accion=BorrarComputador&ID=`+ID;

            }
        });
    });

    /*  Permite la validacion por medio de JQuery para los registros de asignaciones
        al realizar click en el boton correspondiente a "a[class="btn btn-danger"]"
        dposteriormente se extrae el "ID" del registro, logrando un correcto borrado
        del objeto-informacion...
    */
    $("#assingmentTable").find('a[class="btn btn-danger"]').click(function(){

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

                window.location.href = `http://localhost/inventario_equipos/?controlador=Asignaciones&accion=BorrarAsignacion&ID=`+ID;

            }
        });
    });

});