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

        let ID_EMPLOYEE = $(this).find('input[type="hidden"]').val();

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

                $.ajax({

                    url: "http://localhost/inventario_equipos/?controlador=Empleados&accion=BorrarEmpleados",
                    type: "POST",
                    dataType:"json",
                    data: {
                        ID_EMPLEADO:ID_EMPLOYEE
                    },
                    // success:function( data){

                    // Swal.fire('Eliminado!','El registro a sido eliminado correctamente','success')

                    // }
                    success:setTimeout(function(){
                        Swal.fire({
                            title: 'El registro a sido eliminado correctamente',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        // let URL = "http://localhost/inventario_equipos/?controlador=Empleados&accion=Empleados";
                        // window.location.href=URL;
                    }),
                    success:setTimeout(function(){
                        let URL = "http://localhost/inventario_equipos/?controlador=Empleados&accion=Empleados";
                        window.location.href=URL;
                    },1000)
                })

                
                // window.location.href = `http://localhost/inventario_equipos/?controlador=Empleados&accion=BorrarEmpleados&ID=`+ID;

            }
        });
    });

    /*  Permite la validacion por medio de JQuery para los registros de empresas
        al realizar click en el boton correspondiente a "a[class="btn btn-danger"]"
        dposteriormente se extrae el "ID" del registro, logrando un correcto borrado
        del objeto-informacion...
    */
    $("#companyTable").find('a[class="btn btn-danger"]').click(function(){

        let ID_COMPANY = $(this).find('input[type="hidden"]').val();

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

                $.ajax({

                    url: "http://localhost/inventario_equipos/?controlador=Empresas&accion=BorrarEmpresa",
                    type: "POST",
                    dataType:"json",
                    data: {
                        ID_EMPRESA:ID_COMPANY
                    }
                    // ,
                    // success:function(data){
                    //     location.reload();
                    // }

                })

            }
        });
    });

    /*  Permite la validacion por medio de JQuery para los registros de computadores
        al realizar click en el boton correspondiente a "a[class="btn btn-danger"]"
        dposteriormente se extrae el "ID" del registro, logrando un correcto borrado
        del objeto-informacion...
    */
    $("#computersTable").find('a[class="btn btn-danger"]').click(function(){

        let ID_COMPUTER = $(this).find('input[type="hidden"]').val();

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

                $.ajax({

                    url: "http://localhost/inventario_equipos/?controlador=Computador&accion=BorrarComputador",
                    type: "POST",
                    dataType:"json",
                    data: {
                        ID_PC:ID_COMPUTER
                    }
                    // ,
                    // success:function(data){
                    //     location.reload();
                    // }

                })

                // window.location.href = `http://localhost/inventario_equipos/?controlador=Computador&accion=BorrarComputador`+ID;

            }
        });
    });

    /*  Permite la validacion por medio de JQuery para los registros de asignaciones
        al realizar click en el boton correspondiente a "a[class="btn btn-danger"]"
        dposteriormente se extrae el "ID" del registro, logrando un correcto borrado
        del objeto-informacion...
    */
    $("#assingmentTable").find('a[class="btn btn-danger"]').click(function(){

        let ID_ASSIGMENT = $(this).find('input[type="hidden"]').val();

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

                $.ajax({

                    url: "http://localhost/inventario_equipos/?controlador=Asignaciones&accion=BorrarAsignacion",
                    type: "POST",
                    dataType:"json",
                    data: {
                        ID_PRESTAMO:ID_ASSIGMENT
                    }
                    // ,
                    // success:function(data){
                    //     location.reload();
                    // }

                })

                // window.location.href = `http://localhost/inventario_equipos/?controlador=Asignaciones&accion=BorrarAsignacion&ID=`+ID;

            }
        });
    });


});