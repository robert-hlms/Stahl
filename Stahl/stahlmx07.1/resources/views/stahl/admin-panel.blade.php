@extends('layouts.app')
@section('content')

<div class="admin-panel">
	<div class="section">
		<div class="section-title">
			<h3>MENU</h3>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label> Logotipo </label>
				</div>
				<img id="menu_logotipo_img" class="section-element-image" src=" {{$MENU_LOGOTIPO->description}} ">
				<form class="form" method="post" id="menu_logotipo" enctype="multipart/form-data">
					{{ csrf_field() }}
    				<input type="file" name="image">
 				</form>
				<button class='btn btn-sm btn-success' onclick="update_img('menu_logotipo')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label> ISO </label>
				</div>
				<textarea id="iso_title" rows="5" readonly> {{$ISO->title}} </textarea>
				<button class='btn btn-sm btn-success' onclick="edit_input('iso_title')"> EDITAR </button>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-title">
			<h3>INICIO</h3>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label>Titulo</label>
				</div>
				<textarea id="inicio_title" rows="5" readonly> {{$INICIO->title}} </textarea>
				<button class='btn btn-sm btn-success' onclick="edit_input('inicio_title')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label>Descripcion</label>
				</div>
				<textarea id="inicio_description" rows="5" readonly> {{$INICIO->description}} </textarea>
				<button class='btn btn-sm btn-success' onclick="edit_input('inicio_description')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label>Video</label>
				</div>
				<video class="video" controls>
		            <source id="video" src=" {{$INICIO_MEDIA->description}} " type="video/mp4">
		        </video>
		        <form class="form" method="post" id="video_form" enctype="multipart/form-data">
					{{ csrf_field() }}
    				<input type="file" name="video">
 				</form>
				<button class='btn btn-sm btn-success' onclick="update_video('video')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label> Imagen ISO </label>
				</div>
				<img id="iso_img" class="section-element-image" src=" {{$ISO->description}} ">
				<form class="form" method="post" id="iso" enctype="multipart/form-data">
					{{ csrf_field() }}
    				<input type="file" name="image">
 				</form>
    			<button class='btn btn-sm btn-success' onclick="update_img('iso')"> EDITAR </button>

			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-title">
			<h3>NOSOTROS</h3>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label> Titulo </label>
				</div>
				<textarea id="nosotros_title" rows="5" readonly> {{$NOSOTROS->title}} </textarea>
				<button class='btn btn-sm btn-success' onclick="edit_input('nosotros_title')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label>Descripcion</label>
				</div>
				<textarea id="nosotros_description" rows="5" readonly> {{$NOSOTROS->description}} </textarea>
				<button class='btn btn-sm btn-success' onclick="edit_input('nosotros_description')"> EDITAR </button>
			</div>
			<div class="section-element-gallery">
				<div class="text">
					<h5> Galeria </h5> 
				</div>
				<div id="nosotros_images" class="section-gallery">
				@foreach($NOSOTROS->images as $image)
					<div class="gallery-image" id="nosotros_image_{{$image->id}}">
						<img class="image" src=" {{$image->url}} " id="nosotros_img_{{$image->id}}">
						<form class="form" method="post" id="nosotros_img_{{$image->id}}_form" enctype="multipart/form-data">
							{{ csrf_field() }}
				    		<input type="file" name="image">
				    		<input type="text" name="id_image" value='{{$image->id}}' hidden readonly>
				 		</form>
						<div class="gallery-options">
							<button class='button btn btn-sm btn-success' onclick="update_img('nosotros_img','{{$image->id}}')"> EDITAR </button>
							<button class='button btn btn-sm btn-danger' data-target="#delete-nosotros-{{$image->id}}" data-toggle="modal"> ELIMINAR </button>
						</div>
					@include('stahl.delete-nosotros')
					</div>
				@endforeach
					<div class="gallery-image" id="nosotros_new_image">
						<div class="text">
							<h5>Agregar Imagen</h5>
						</div>
						<form class="form" method="post" id="nosotros_gallery" enctype="multipart/form-data">
							{{ csrf_field() }}
				    		<input type="file" name="image">
				 		</form>
						<button class='btn btn-sm btn-info' onclick="store('nosotros')"> Enviar Imagen </button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-title">
			<h3>SERVICIOS</h3>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label> Titulo </label>
				</div>
				<textarea id="servicios_title" rows="3" readonly> {{$SERVICIOS->title}} </textarea>
				<button class='btn btn-sm btn-success' onclick="edit_input('servicios_title')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label> Descripcion </label>
				</div>
				<textarea id="servicios_description" rows="3" readonly> {{$SERVICIOS->description}} </textarea>
				<button class='btn btn-sm btn-success' onclick="edit_input('servicios_description')"> EDITAR </button>
			</div>
			<div class="section-services">
				<div class="section-element-services">
					<div class="service-element">
						<div class="service-part">
							<div class="text">
								<h5> Servicio Maquinado </h5>
							</div>
						</div>
						<div class="service-part">
							<div class="text">
								<label> Titulo </label>
							</div>
							<input id="servicio_m" type="text" value=" {{$SERVICIO_M->title}} " readonly>
							<button class='btn btn-sm btn-success' onclick="edit_input('servicio_m')"> EDITAR </button>
						</div>
						<div class="service-part">
							<div class="text">
								<label> Imagen de Fondo </label>
							</div>
							<img id="maquinado_img" class="service-image" src=" {{$SERVICIO_M->description}} ">
							<form class="form" method="post" id="maquinado" enctype="multipart/form-data">
								{{ csrf_field() }}
					    		<input type="file" name="image">
					 		</form>
							<button class='btn btn-sm btn-success' onclick="update_img('maquinado')"> EDITAR </button>
						</div>
					</div>
					<div class="service-element">
						<div class="service-part">
							<div class="text">
								<h5> Servicio Torno </h5>
							</div>
						</div>
						<div class="service-part">
							<div class="text">
								<label> Titulo </label>
							</div>
							<input id="servicio_t" type="text" value=" {{$SERVICIO_T->title}} " readonly>
							<button class='btn btn-sm btn-success' onclick="edit_input('servicio_t')"> EDITAR </button>
						</div>
						<div class="service-part">	
							<div class="text">
								<label> Imagen de Fondo </label>
							</div>
							<img id="torno_img" class="service-image" src=" {{$SERVICIO_T->description}} ">
							<form class="form" method="post" id="torno" enctype="multipart/form-data">
								{{ csrf_field() }}
					    		<input type="file" name="image">
					 		</form>
							<button class='btn btn-sm btn-success' onclick="update_img('torno')"> EDITAR </button>
						</div>
					</div>
					<div class="service-element">
						<div class="service-part">
							<div class="text">
								<h5> Servicio Soldadura </h5>
							</div>
						</div>
						<div class="service-part">
							<div class="text">
								<label> Titulo </label>
							</div>
							<input id="servicio_s" type="text" value=" {{$SERVICIO_S->title}} " readonly>
							<button class='btn btn-sm btn-success' onclick="edit_input('servicio_s')"> EDITAR </button>
						</div>
						<div class="service-part">		
							<div class="text">
								<label> Imagen de Fondo </label>
							</div>
							<img id="soldadura_img" class="service-image" src=" {{$SERVICIO_S->description}} ">
							<form class="form" method="post" id="soldadura" enctype="multipart/form-data">
								{{ csrf_field() }}
					    		<input type="file" name="image">
					 		</form>
							<button class='btn btn-sm btn-success' onclick="update_img('soldadura')"> EDITAR </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-title">
			<h3>TRABAJOS</h3>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label> Titulo </label>
				</div>
				<textarea id="trabajos_title" rows="3" readonly> {{$TRABAJOS->title}} </textarea>
				<button class='btn btn-sm btn-success' onclick="edit_input('trabajos_title')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label> Descripcion </label>
				</div>
				<textarea id="trabajos_description" rows="3" readonly> {{$TRABAJOS->description}} </textarea>
				<button class='btn btn-sm btn-success' onclick="edit_input('trabajos_description')"> EDITAR </button>
			</div>
			<div class="section-element-gallery">
				<div class="text">
					<h5> Galeria </h5> 
				</div>
				<div id="trabajos_gallery_images" class="section-gallery">
					@foreach($TRABAJOS->images as $image)
					<div class="gallery-element" id="trabajos_image_{{$image->id}}">
						<div class="gallery-element-image" id="">
							<img class="image" src=" {{$image->url}} " id="trabajos_img_{{$image->id}}">
							<form class="form" method="post" id="trabajos_img_{{$image->id}}_form" enctype="multipart/form-data">
								{{ csrf_field() }}
					    		<input type="file" name="image">
					    		<input type="text" name="id_image" value='{{$image->id}}' hidden readonly>
					 		</form>
							<div class="gallery-options">
								<button class='button btn btn-sm btn-success' onclick="update_img('trabajos_img','{{$image->id}}')"> EDITAR </button>
								<button class='button btn btn-sm btn-danger' data-target="#delete-trabajos-{{$image->id}}" data-toggle="modal"> ELIMINAR </button>
							</div>
						@include('stahl.delete-trabajos');
						</div>
						<div class="gallery-element-data">
							<label> Titulo </label>
							<input type="text" value=" {{$image->title}} " id="trabajos_image_title_{{$image->id}}" readonly>
							<button class='btn btn-sm btn-success' onclick="edit_input_image('trabajos_image_title','{{$image->id}}')"> EDITAR </button>
							<label> Descripción </label>
							<textarea rows="8" id="trabajos_image_description_{{$image->id}}" readonly> {{$image->description}} </textarea>
							<button class='btn btn-sm btn-success' onclick="edit_input_image('trabajos_image_description','{{$image->id}}')"> EDITAR </button>
						</div>
					</div>
					@endforeach
					<div class="gallery-form">
						<div class="text">
							<h5>Agregar Imagen</h5>
						</div>
						<form class="form" method="post" id="trabajos_gallery" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="form-element">
								<label>Titulo</label>
			    				<input type="text" name="title">
							</div>
							<div class="form-element">
			    				<label>Descripcion</label>
			    				<textarea type="textarea" name="description" rows="5"> </textarea>
							</div>
							<div class="form-element">
			    				<label>Imagen</label> 
			    				<input type="file" name="image">
							</div>
		 				</form>
						<button class='btn btn-sm btn-info' onclick="store('trabajos')"> Enviar Imagen </button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-title">
			<h3>CLIENTES</h3>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label> Titulo </label>
				</div>
				<textarea rows="3" id="clientes_title" readonly> {{$CLIENTES->title}} </textarea>
				<button class='btn btn-sm btn-success' onclick="edit_input('clientes_title')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label> Fondo </label>
				</div>
				<img id="clientes_img" class="section-element-image" src=" {{$CLIENTES_BACKGROUND->description}} ">
				<form class="form" method="post" id="clientes" enctype="multipart/form-data">
					{{ csrf_field() }}
    				<input type="file" name="image">
 				</form>
				<button class='btn btn-sm btn-success' onclick="update_img('clientes')"> EDITAR </button>
			</div>
		</div>
		<div class="section-content">
			<div class="text">
				<h5> Marcas </h5>
			</div>
			<div id="clientes_brands" class="section-gallery">
				@foreach($CLIENTES->images as $image)
				<div class="gallery-brand" id="clientes_image_{{$image->id}}">
					<div class="brand-element">
						<input type="text" value=" {{$image->title}} " id="clientes_image_title_{{$image->id}}" readonly>
						<button class='btn btn-sm btn-success' onclick="edit_input_image('clientes_image_title','{{$image->id}}')"> EDITAR TEXTO</button>
					</div>
					<div class="brand-element">
						<img class="brand-image" src=" {{$image->url}} " id="clientes_img_{{$image->id}}">
						<form class="form" method="post" id="clientes_img_{{$image->id}}_form" enctype="multipart/form-data">
							{{ csrf_field() }}
					    	<input type="file" name="image">
					    	<input type="text" name="id_image" value='{{$image->id}}' hidden readonly>
						</form>
					</div>
					<div class="brand-element">
						<div class="gallery-options">
							<button class='button btn btn-sm btn-success' onclick="update_img('clientes_img','{{$image->id}}')"> EDITAR </button>
							<button class='button btn btn-sm btn-danger' data-target="#delete-clientes-{{$image->id}}" data-toggle="modal"> ELIMINAR </button>
						</div>
					</div>
					@include('stahl.delete-clientes')
				</div>
				@endforeach
				<div class="gallery-brand">
					<div class="text">
						<h5>Agregar Marca</h5>
					</div>
					<form class="form" method="post" id="clientes_gallery" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-element">
							<label>Titulo</label>
		    				<input type="text" name="title">
						</div>
						<div class="form-element">
		    				<label>Imagen</label> 
				    		<input type="file" name="image">
						</div>
			 		</form>
					<button class='btn btn-sm btn-info' onclick="store('clientes')"> Enviar Imagen </button>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-title">
			<h3>CONTACTO</h3>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label> Titulo </label>
				</div>
				<input id="contacto_title" type="text" value=" {{$CONTACTO->title}} " readonly>
				<button class='btn btn-sm btn-success' onclick="edit_input('contacto_title')"> EDITAR </button>
			</div>
		</div>
		<div class="section-title">
			<h5>Ubicacion</h5>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label> Titulo </label>
				</div>
				<input id="ubicacion_title" type="text" value=" {{$UBICACION->title}} " readonly>
				<button class='btn btn-sm btn-success' onclick="edit_input('ubicacion_title')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label> Calle </label>
				</div>
				<input id="ubicacion_street" type="text" value=" {{$UBICACION->ubication->street}} " readonly>
				<button class='btn btn-sm btn-success' onclick="edit_input('ubicacion_street')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label> Colonia </label>
				</div>
				<input id="ubicacion_colony" type="text" value=" {{$UBICACION->ubication->colony}} " readonly>
				<button class='btn btn-sm btn-success' onclick="edit_input('ubicacion_colony')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label> Municipio / Estado </label>
				</div>
				<input id="ubicacion_located" type="text" value=" {{$UBICACION->ubication->located}} " readonly>
				<button class='btn btn-sm btn-success' onclick="edit_input('ubicacion_located')"> EDITAR </button>
			</div>
		</div>
		<div class="section-title">
			<h5>Telefono</h5>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label> Titulo </label>
				</div>
				<input id="telefono_title" type="text" value=" {{$TELEFONO->title}} " readonly>
				<button class='btn btn-sm btn-success' onclick="edit_input('telefono_title')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label> Telefono </label>
				</div>
				<input id="telefono_description" type="text" value=" {{$TELEFONO->description}} " readonly>
				<button class='btn btn-sm btn-success' onclick="edit_input('telefono_description')"> EDITAR </button>
			</div>
		</div>
		<div class="section-title">
			<h5>Correo</h5>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label> Titulo </label>
				</div>
				<input id="correo_title" type="text" value=" {{$EMAIL->title}} " readonly>
				<button class='btn btn-sm btn-success' onclick="edit_input('correo_title')"> EDITAR </button>
			</div>
			<div class="section-element">
				<div class="text">
					<label> Correo </label>
				</div>
				<input id="correo_description" type="text" value=" {{$EMAIL->description}} " readonly>
				<button class='btn btn-sm btn-success' onclick="edit_input('correo_description')"> EDITAR </button>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-title">
			<h3>FOOTER</h3>
		</div>
		<div class="section-content">
			<div class="section-element">
				<div class="text">
					<label> Titulo </label>
				</div>
				<input id="footer" type="text" value=" {{$FOOTER->title}} " readonly>
				<button class='btn btn-sm btn-success' onclick="edit_input('footer')"> EDITAR </button>
			</div>
		</div>
		<div class="text">
			<h5> Redes Sociales </h5>
		</div>
		<div id="redes" class="section-content">
			@foreach($FOOTER->networks as $network)
			<div class="section-element s-border" id="redes_network_{{$network->id}}">
				<div class="redes-element">
					<div class="text">
						<label> Url </label>
					</div>
					<input type="text" value=" {{$network->url}} " id="redes_network_url_{{$network->id}}" readonly>
					<button class='btn btn-sm btn-success' onclick="edit_input_image('redes_network_url','{{$network->id}}')"> EDITAR </button>
				</div>
				<div class="redes-element">
					<div class="text">
						<label> Icono (Font Awesome) </label>
					</div>
					<input type="text" value=" {{$network->icon}} " id="redes_network_icon_{{$network->id}}" readonly>
					<button class='btn btn-sm btn-success' onclick="edit_input_image('redes_network_icon','{{$network->id}}')"> EDITAR </button>
				</div>
				<div class="redes-element">
					<button class='btn btn-sm btn-danger' data-target="#delete-redes-{{$network->id}}" data-toggle="modal"> ELIMINAR </button>
				</div>
				@include('stahl.delete-redes')
			</div>
			@endforeach
			<div class="section-element s-border">
				<div class="text">
					<h5>Agregar Red Social</h5>
				</div>
				<form class="form" method="post" id="redes_gallery" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-element">
						<label>Url</label>
		    			<input type="text" name="url">
					</div>
					<div class="form-element">
						<label>Icono (Font Awesome)</label>
		    			<input type="text" name="icon">
					</div>
		 		</form>
				<button class='btn btn-sm btn-info' onclick="store('redes')"> Enviar </button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function edit_input(id){
		var input = document.getElementById(id);
		input.setAttribute("onblur", "update('"+input.id+"')");
		input.removeAttribute("readonly");
	}

	function edit_input_image(id, id2){
		var input = document.getElementById(id+"_"+id2);
		input.setAttribute("onblur", "update('"+id+"','"+id2+"')");
		input.removeAttribute("readonly");
	}

	function update(id, id2){
		if(id2 != null){
			var input = document.getElementById(id+"_"+id2);			
		}
		else{
			var input = document.getElementById(id);
		}
		var text = input.value;

		var url = "{{url('panel-admin-stahl')}}/"+id+"/stahl-update";

		$.ajax({
            type: 'PATCH',
            data: {"text": text, "id_image": id2, _token: '{{csrf_token()}}'},
            url: url,
            dataType: 'json',
            success: function (data) {
            	if(data.errors){
            		alert(data.errors);
            	}
            	else{
	            	input.setAttribute("readonly", true);		
					input.removeAttribute("onblur");
	            	alert(data.success);
            	}
            },
        });
	}

	function update_img(id, id2){
		if(id2 != null){
			var img = document.getElementById(id+"_"+id2);
			var form = document.getElementById(id+"_"+id2+"_form");
		}
		else{
			var img = document.getElementById(id+"_img");
			var form = document.getElementById(id);
		}
		var formData = new FormData(form);
		var url = "{{url('panel-admin-stahl')}}/"+id+"/stahl-update";

		$.ajax({
			url: url,
			method: "POST",
			data: formData,
			dataType: 'JSON',
			contentType: false,
			cache: false,
			processData: false,
			success: function(data){
				if(data.errors){
					alert(data.errors);
				}
				else{
					if(id2 != null){
						img.src = data.obj.url;
					}
					else{
						img.src = data.obj.description;
					}
					alert(data.success);
				}
			},
			error: function(data){
				console.log(data);
			}
		});
	}

	function update_video(id){
		var video = document.getElementById(id);
		var form = document.getElementById(id+"_form");
		var formData = new FormData(form);
		var url = "{{url('panel-admin-stahl')}}/"+id+"/stahl-update";

		$.ajax({
			url: url,
			method: "POST",
			data: formData,
			dataType: 'JSON',
			contentType: false,
			cache: false,
			processData: false,
			success: function(data){
				if(data.errors){
					alert(data.errors);
				}
				else{
					video.src = data.obj.description;
					alert(data.success);
				}
			},
			error: function(data){
				console.log(data);
			}
		});
	}

	function store(id){
		var url = "{{url('panel-admin-stahl')}}/"+id+"/stahl-store";
		var form_data = document.getElementById(id+"_gallery");
		var formData = new FormData(form_data);

		$.ajax({
			url: url,
			method: "POST",
			data: formData,
			dataType: 'JSON',
			contentType: false,
			cache: false,
			processData: false,
			success: function(data){
				console.log(data);
				if(data.errors){
					alert(data.errors);
				}
				else{
					if(data.id == "nosotros"){
						var divPadre = document.getElementById(id+"_images");

						var gallery_image = document.createElement('div');
						gallery_image.setAttribute("class","gallery-image");
						gallery_image.id = id+"_image_"+data.obj.id;
						
						var img = document.createElement('img');
						img.setAttribute("class","image");
						img.id = id+"_img_"+data.obj.id;
						img.src = data.obj.url;
						gallery_image.appendChild(img);

						var form = document.createElement('form');
						form.setAttribute("class","form");
						form.setAttribute("enctype","multipart/form-data");
						form.method = "post";
						form.id = id+"_img_"+data.obj.id+"_form";

						var input = document.createElement('input');
						input.setAttribute("type","hidden");
						input.setAttribute("name","_token");
						input.value = " {{csrf_token()}} ";
						form.appendChild(input);

						var input_image = document.createElement('input');
						input_image.setAttribute("type","file");
						input_image.setAttribute("name","image");
						form.appendChild(input_image);

						var input_text = document.createElement('input');
						input_text.setAttribute("type","hidden");
						input_text.setAttribute("name","id_image");
						input_text.value = data.obj.id;
						form.appendChild(input_text);
					 		
						gallery_image.appendChild(form);

						var gallery_options = document.createElement('div');
						gallery_options.setAttribute("class","gallery-options");

						var edit = document.createElement('button');
						edit.setAttribute("class","button btn btn-sm btn-success");
						edit.setAttribute("onclick","update_img('nosotros_img','"+data.obj.id+"')")
						edit.innerText = "EDITAR";
						edit.id = id+"_edit_"+data.obj.id;
						gallery_options.appendChild(edit);

						var del = document.createElement('button');
						del.setAttribute("class","button btn btn-sm btn-danger");
						del.setAttribute("data-target","#delete-nosotros-"+data.obj.id);
						del.setAttribute("data-toggle","modal");
						del.innerText = "ELIMINAR";
						del.id = id+"_delete_"+data.obj.id;
						gallery_options.appendChild(del);
						gallery_image.appendChild(gallery_options);

						var modal = modal(id, data.obj);
						gallery_image.appendChild(modal);

						var last_node = divPadre.childNodes[divPadre.childNodes.length - 1];
						divPadre.insertBefore(gallery_image, last_node);
					}
					if(data.id == "trabajos"){
						var divPadre = document.getElementById(id+"_gallery_images");

						var element = document.createElement('div');
						element.setAttribute("class","gallery-element");
						element.id = id+"_image_"+data.obj.id;

						var element_image = document.createElement('div');
						element_image.setAttribute("class","gallery-element-image");
						
						var img = document.createElement('img');
						img.setAttribute("class","image");
						img.src = data.obj.url;
						img.id = id+"_img_"+data.obj.id;
						element_image.appendChild(img);

						var form = document.createElement('form');
						form.setAttribute("class","form");
						form.setAttribute("enctype","multipart/form-data");
						form.method = "post";
						form.id = id+"_img_"+data.obj.id+"_form";

						var input = document.createElement('input');
						input.setAttribute("type","hidden");
						input.setAttribute("name","_token");
						input.value = " {{csrf_token()}} ";
						form.appendChild(input);

						var input_image = document.createElement('input');
						input_image.setAttribute("type","file");
						input_image.setAttribute("name","image");
						form.appendChild(input_image);

						var input_text = document.createElement('input');
						input_text.setAttribute("type","hidden");
						input_text.setAttribute("name","id_image");
						input_text.value = data.obj.id;
						form.appendChild(input_text);
					 		
						element_image.appendChild(form);

						var gallery_options = document.createElement('div');
						gallery_options.setAttribute("class","gallery-options");

						var edit = document.createElement('button');
						edit.setAttribute("class","button btn btn-sm btn-success");
						edit.setAttribute("onclick","update_img('trabajos_img','"+data.obj.id+"')")
						edit.innerText = "EDITAR";
						edit.id = id+"_edit_"+data.obj.id;
						gallery_options.appendChild(edit);

						var del = document.createElement('button');
						del.setAttribute("class","button btn btn-sm btn-danger");
						del.setAttribute("data-target","#delete-trabajos-"+data.obj.id);
						del.setAttribute("data-toggle","modal");
						del.innerText = "ELIMINAR";
						del.id = id+"_delete_"+data.obj.id;
						gallery_options.appendChild(del);

						element_image.appendChild(gallery_options);

						var modal = modal(id, data.obj);
						element_image.appendChild(modal);

						var element_data = document.createElement('div');
						element_data.setAttribute("class","gallery-element-data");

						var title = document.createElement('label');
						title.innerHTML = "Titulo";
						element_data.appendChild(title);

						var title_text = document.createElement('input');
						title_text.setAttribute("type","text");
						title_text.setAttribute("readonly",true);
						title_text.id = id+"_image_title_"+data.obj.id;
						title_text.value = data.obj.title;
						element_data.appendChild(title_text);

						var title_btn = document.createElement('button');
						title_btn.setAttribute("class","btn btn-sm btn-success");
						title_btn.setAttribute("onclick","edit_input_image('"+id+"_image_title','"+data.obj.id+"')");
						title_btn.innerText = "EDITAR";
						element_data.appendChild(title_btn);

						var description = document.createElement('label');
						description.innerHTML = "Descripcion";
						element_data.appendChild(description);

						var description_text = document.createElement('textarea');
						description_text.setAttribute("readonly",true);
						description_text.setAttribute("rows","8");
						description_text.id = id+"_image_description_"+data.obj.id;
						description_text.value = data.obj.description;
						element_data.appendChild(description_text);

						var description_btn = document.createElement('button');
						description_btn.setAttribute("class","btn btn-sm btn-success");
						description_btn.setAttribute("onclick","edit_input_image('"+id+"_image_description','"+data.obj.id+"')");
						description_btn.innerText = "EDITAR";
						element_data.appendChild(description_btn);

						element.appendChild(element_image);
						element.appendChild(element_data);

						var last_node = divPadre.childNodes[divPadre.childNodes.length - 1];
						divPadre.insertBefore(element, last_node);
					}
					if(data.id == "clientes"){
						var divPadre = document.getElementById(id+"_brands");

						var gallery_brand = document.createElement('div');
						gallery_brand.setAttribute("class","gallery-brand");
						gallery_brand.id = "clientes_image_"+data.obj.id;

						var brand_element = document.createElement('div');
						brand_element.setAttribute("class","brand-element");

						var title_text = document.createElement('input');
						title_text.setAttribute("type","text");
						title_text.setAttribute("readonly",true);
						title_text.id = id+"_image_title_"+data.obj.id;
						title_text.value = data.obj.title;
						brand_element.appendChild(title_text);

						var title_btn = document.createElement('button');
						title_btn.setAttribute("class","btn btn-sm btn-success");
						title_btn.setAttribute("onclick","edit_input_image('"+id+"_image_title','"+data.obj.id+"')");
						title_btn.innerText = "EDITAR TEXTO";
						brand_element.appendChild(title_btn);

						gallery_brand.appendChild(brand_element);

						var brand_element = document.createElement('div');
						brand_element.setAttribute("class","brand-element");

						var img = document.createElement('img');
						img.setAttribute("class","image");
						img.src = data.obj.url;
						img.id = id+"_img_"+data.obj.id;
						brand_element.appendChild(img);

						var form = document.createElement('form');
						form.setAttribute("class","form");
						form.setAttribute("enctype","multipart/form-data");
						form.method = "post";
						form.id = id+"_img_"+data.obj.id+"_form";

						var input = document.createElement('input');
						input.setAttribute("type","hidden");
						input.setAttribute("name","_token");
						input.value = " {{csrf_token()}} ";
						form.appendChild(input);

						var input_image = document.createElement('input');
						input_image.setAttribute("type","file");
						input_image.setAttribute("name","image");
						form.appendChild(input_image);

						var input_text = document.createElement('input');
						input_text.setAttribute("type","hidden");
						input_text.setAttribute("name","id_image");
						input_text.value = data.obj.id;
						form.appendChild(input_text);
					 		
						brand_element.appendChild(form);

						gallery_brand.appendChild(brand_element);

						var brand_element = document.createElement('div');
						brand_element.setAttribute("class","brand-element");

						var gallery_options = document.createElement('div');
						gallery_options.setAttribute("class","gallery-options");

						var edit = document.createElement('button');
						edit.setAttribute("class","button btn btn-sm btn-success");
						edit.setAttribute("onclick","update_img('"+id+"_img','"+data.obj.id+"')")
						edit.innerText = "EDITAR";
						gallery_options.appendChild(edit);

						var del = document.createElement('button');
						del.setAttribute("class","button btn btn-sm btn-danger");
						del.setAttribute("data-target","#delete-"+id+"-"+data.obj.id);
						del.setAttribute("data-toggle","modal");
						del.innerText = "ELIMINAR";
						gallery_options.appendChild(del);

						brand_element.appendChild(gallery_options);

						gallery_brand.appendChild(brand_element);

						var modal = modal(id, data.obj);
						gallery_brand.appendChild(modal);

						var last_node = divPadre.childNodes[divPadre.childNodes.length - 1];
						divPadre.insertBefore(gallery_brand, last_node);
					}
					if(data.id == "redes"){
						var divPadre = document.getElementById(id);

						var section = document.createElement('div');
						section.setAttribute("class","section-element s-border");
						section.id = id+"_network_"+data.obj.id;

						var element = document.createElement('div');
						element.setAttribute("class","redes-element");

						var text = document.createElement('div');
						text.setAttribute("class","text");

						var label = document.createElement('label');
						label.innerHTML = "Url";
						text.appendChild(label);
						element.appendChild(text);

						var input = document.createElement('input');
						input.id = id+"_network_url_"+data.obj.id;
						input.setAttribute("type","text");
						input.setAttribute("value", data.obj.url);
						input.setAttribute("readonly", true);
						element.appendChild(input);

						var button = document.createElement('button');
						button.setAttribute("class","btn btn-sm btn-success");
						button.setAttribute("onclick","edit_input_image('redes_network_url','"+data.obj.id+"')");
						button.innerText = "EDITAR";
						element.appendChild(button);

						section.appendChild(element);

						var element = document.createElement('div');
						element.setAttribute("class","redes-element");

						var text = document.createElement('div');
						text.setAttribute("class","text");

						var label = document.createElement('label');
						label.innerHTML = "Icono (Font Awesome)";
						text.appendChild(label);
						element.appendChild(text);

						var input = document.createElement('input');
						input.id = id+"_network_icon_"+data.obj.id;
						input.setAttribute("type","text");
						input.setAttribute("value", data.obj.icon);
						input.setAttribute("readonly", true);
						element.appendChild(input);

						var button = document.createElement('button');
						button.setAttribute("class","btn btn-sm btn-success");
						button.setAttribute("onclick","edit_input_image('redes_network_icon','"+data.obj.id+"')");
						button.innerText = "EDITAR";
						element.appendChild(button);

						section.appendChild(element);

						var element = document.createElement('div');
						element.setAttribute("class","redes-element");

						var button = document.createElement('button');
						button.setAttribute("class","btn btn-sm btn-danger");
						button.setAttribute("data-target","#delete-redes-"+data.obj.id);
						button.setAttribute("data-toggle","modal");
						button.innerText = "ELIMINAR";
						element.appendChild(button);

						section.appendChild(element);

						var modal = modal(id, data.obj);
						section.appendChild(modal);

						var last_node = divPadre.childNodes[divPadre.childNodes.length - 1];
						divPadre.insertBefore(section, last_node);
					}
					form_data.reset();
					alert(data.success);
				}

				function modal(id, obj){
					var modal = document.createElement('div');
					modal.setAttribute("class","modal fade");
					modal.setAttribute("role","dialog");
					modal.setAttribute("tabindex","-1");
					modal.setAttribute("data-backdrop","false");
					modal.id = "delete-"+id+"-"+obj.id;

					var dialog = document.createElement('div');
					dialog.setAttribute("class","modal-dialog");
					dialog.setAttribute("role","document");

					var content = document.createElement('div');
					content.setAttribute("class","modal-content");

					var header = document.createElement("div");
					header.setAttribute("class","modal-header");

					var title = document.createElement("h4");
					title.setAttribute("class","modal-title");
					title.innerHTML = "Eliminar ?";

					var body = document.createElement("div");
					body.setAttribute("class","modal-body");

					var p = document.createElement("p");
					p.innerHTML = "Confirme si desea eliminar";

					var footer = document.createElement("div");
					footer.setAttribute("class","modal-footer");

					var close = document.createElement("button");
					close.setAttribute("type","button");
					close.setAttribute("class","btn btn-secondary");
					close.setAttribute("data-dismiss","modal");
					close.innerText = "Close";

					var del = document.createElement("button");
					del.setAttribute("type","button");
					del.setAttribute("class","btn btn-danger");
					del.setAttribute("onclick","delete_obj('"+id+"','"+obj.id+"')");
					del.setAttribute("data-dismiss","modal");
					del.innerText = "Eliminar";

					header.appendChild(title);
					body.appendChild(p);
					footer.appendChild(close);
					footer.appendChild(del);
					content.appendChild(header);
					content.appendChild(body);
					content.appendChild(footer);
					dialog.appendChild(content);
					modal.appendChild(dialog);

					return modal;
				}
			},
			error: function(data){
				console.log(data);
			}
		});
	}

	function delete_obj(id, id2){
		var url = "{{url('panel-admin-stahl')}}/"+id+"/stahl-delete";

		$.ajax({
            type: 'DELETE',
            data: {"id_obj": id2, _token: '{{csrf_token()}}'},
            url: url,
            dataType: 'json',
            success: function (data) {
	            alert(data.success);
	            if(id != "redes"){
	           		var item = document.getElementById(id+"_image_"+id2);
	            }
	            else{
	            	var item = document.getElementById(id+"_network_"+id2);
	            }
	            item.parentNode.removeChild(item);
            },
        });
	}
</script>

@endsection