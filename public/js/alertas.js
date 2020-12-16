/*Mensaje de Bienvenida*/ 

Swal.fire({
    title:'Bienvenido a Topic Restaurante'
})

/*Ventana Modal (Área de Sugerencias-Página Principal)*/
function sugerencias(){
Swal.fire({
    title:'Hola, te gustaría hacernos alguna Sugerencia?',
    input: 'textarea',
    inputPlaceholder: 'Escribe tu sugerencia aquí...',
    confirmButtonColor:'#2ecc71',
    confirmButtonArialLabel:'Enviar',
    icon:'question'
})
}


/*Ventana Modal (Área de reservación)*/ 
function reserva(){
Swal.fire({

   
   title:'Restaurante 길버트',
   input:'text',
   inputPlaceholder:'Nombre Completo',
   html:'<input type="date" id="swal-input1" class="swal2-input" placeholder="Fecha de Reserva">',
   showConfirmButton:true,
   confirmButtonColor:'#2ecc71',
   cancelButtonArialLabel:'Cancelar',
   showCancelButton:true,
   cancelButtonColor:'#e74c3c',
   confirmButtonArialLabel:'Reservar',
   buttonsStyling:true,
   showCloseButton:true,
   closeButtonArialLabel:'Cerrar Ventana',
   footer:'Alls Rights Reserved Gilbert E. Tineo'

   
})
};


/* Esta página fue creada por Gilbert E. Tineo - 18/08/2020
Nota: Está disponible para uso personal y para uso didáctico. En caso de querer usar esta página
por favor contactarse al correo: tineogilbert@gmail.com!
-->*/







