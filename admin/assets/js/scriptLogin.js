//
// $(document).ready(function(){
//   $.notify({
//     icon: 'fa fa-user-circle-o',
//     message: "<b>Bienvenido </b><?php echo $usu;?><b> al sitio web de administracion de</b> Developer Men."
//
//   },{
//     type: 'danger',
//     /*timer: 4000 Tiempo para desaparecer*/
//   });
//
//
//   $.notify({
//     icon: 'fa fa-commenting-o',
//     message: "Recuerda que este sitio web fue diseñado para hacerte la administracion mas facil"
//
//   },{
//     type: 'success',
//     timer: '4000'
//     /*Tiempo para desaparecer*/
//   });
//
//   $.notify({
//     icon: 'fa fa-pencil-square-o',
//     message: "En la seccion <b>Perfil de Usuario</b> podras editar tu perfil en nuestra plataforma"
//
//   },{
//     type: 'warning',
//     timer: '7000'
//     /*Tiempo para desaparecer*/
//   });
//
//   $.notify({
//     icon: 'fa fa-file',
//     message: "En la seccion <b>Tabla de contactanos y Usuarios</b> puedes visualizar los mensajes que nos han dejado nuestros usuarios"
//
//   },{
//     type: 'info',
//     timer: '8000'
//     /*Tiempo para desaparecer*/
//   });
//
// });
// 
// $.notify({
// 	// options
// 	icon: 'glyphicon glyphicon-warning-sign',
// 	title: 'Bootstrap notify',
// 	message: 'Turning standard Bootstrap alerts into "notify" like notifications',
// 	url: 'https://github.com/mouse0270/bootstrap-notify',
// 	target: '_blank'
// },{
// 	// settings
// 	element: 'body',
// 	position: null,
// 	type: "info",
// 	allow_dismiss: true,
// 	newest_on_top: false,
// 	showProgressbar: true,
// 	placement: {
// 		from: "top",
// 		align: "left"
// 	},
// 	offset: 20,
// 	spacing: 10,
// 	z_index: 1031,
// 	delay: 0,
// 	timer: 1000,
// 	url_target: '_blank',
// 	mouse_over: null,
// 	animate: {
// 		enter: 'animated fadeInDown',
// 		exit: 'animated fadeOutUp'
// 	},
// 	onShow: null,
// 	onShown: null,
// 	onClose: null,
// 	onClosed: null,
// 	icon_type: 'class',
// 	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
// 		'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
// 		'<span data-notify="icon"></span> ' +
// 		'<span data-notify="title">{1}</span> ' +
// 		'<span data-notify="message">{2}</span>' +
// 		'<div class="progress" data-notify="progressbar">' +
// 			'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
// 		'</div>' +
// 		'<a href="{3}" target="{4}" data-notify="url"></a>' +
// 	'</div>'
// });
$.notify({
	icon: 'http://developermen.webcindario.com/assets/images/logotipo_2.png',
	title: 'Developer Men',
	message: '!Hola¡ Bienvenido a la página de administración de Developer Men esperamos serte de ayuda.'
},{
	type: 'developermen',
	delay: 5000,
	icon_type: 'image',
	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
		'<img data-notify="icon" class="img-thumbnail pull-center">' +
		'<h3 style="margin-top:2%;align:center;" data-notify="title">{1}</h3>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});
$.notify({
	icon: 'https://randomuser.me/api/portraits/med/women/3.jpg',
	title: 'Samantha Morgan',
	message: '!Hola¡ Mi nombre es Samantha y te estare acompañando en tus labores.'
},{
	type: 'minimalist',
  delay: 6000,
	icon_type: 'image',
	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
		'<img data-notify="icon" class="img-circle pull-left">' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});
