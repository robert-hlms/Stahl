<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use App\Image;
use App\Ubication;
use App\Network;
use Image as I;
use Validator;

class StahlController extends Controller
{
    public function __construct(){
    	$this->middleware('auth',['except'=>['index']]);
    }

    public function index(){
    	$titles = Title::all();

    	foreach($titles as $title){
    		$data[$title->name] = $title;
    	}
    	return view('stahl.index',$data);
    }

    public function admin(){
    	$titles = Title::all();

    	foreach($titles as $title){
    		$data[$title->name] = $title;
    	}

    	return view('stahl.admin-panel',$data);
    }

    public function store($id){
        switch ($id) {
            case "nosotros":
                $validation = Validator::make(request()->all(), [
                    'image' => 'required|mimes:jpeg,png,jpg'
                ]);

                if($validation->passes()){
                    $image = request()->file('image');
                    $new_name = rand() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images'), $new_name);

                    $obj = Image::create([  
                        'url' => 'images/' . $new_name,
                        'idTitle' => 5
                    ]);

                    $message = "La imagen se ha enviado exitosamente";
                }
                else{
                    return response()->json([
                        "errors" => $validation->errors()->all()
                    ]);
                }
                break;
            case "trabajos":
                $validation = Validator::make(request()->all(), [
                    'image' => 'required|mimes:jpeg,png,jpg',
                    'title' => 'required|max:100',
                    'description' => 'required|max:1000'
                ]);

                if($validation->passes()){
                    $image = request()->file('image');
                    $new_name = rand() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images'), $new_name);

                    $obj = Image::create([  
                        'url' => 'images/' . $new_name,
                        'title' => request()->title,
                        'description' => request()->description,
                        'idTitle' => 10
                    ]);

                    $message = "La imagen se ha enviado exitosamente";
                }
                else{
                    return response()->json([
                        "errors" => $validation->errors()->all()
                    ]);
                }
                break;
            case "clientes":
                $validation = Validator::make(request()->all(), [
                    'image' => 'required|mimes:jpeg,png,jpg',
                    'title' => 'required|max:100',
                ]);

                if($validation->passes()){
                    $image = request()->file('image');
                    $new_name = rand() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images'), $new_name);

                    $obj = Image::create([  
                        'url' => 'images/' . $new_name,
                        'title' => request()->title,
                        'idTitle' => 11
                    ]);

                    $message = "La imagen se ha enviado exitosamente";
                }
                else{
                    return response()->json([
                        "errors" => $validation->errors()->all()
                    ]);
                }
                break;
            case "redes":
                $validation = Validator::make(request()->all(), [
                    'url' => 'required|max:200',
                    'icon' => 'required|max:50',
                ]);

                if($validation->passes()){
                    $obj = Network::create([
                        'url' => request()->url,
                        'icon' => request()->icon,
                        'idTitle' => 16
                    ]);

                    $message = "La Red Social se ha creado exitosamente";
                }
                else{
                    return response()->json([
                        "errors" => $validation->errors()->all()
                    ]);
                }
                break;
            default:
                # code...
                break;
        }
        return response()->json([
           "success" => $message,
            "obj" => $obj, "id" => $id
        ],200);           
    }

    public function update($id){
    	$value = "";  //id de la bd del registro que se va a actualizar

    	$type = 0;    //1.- titulo, 2.- descripcion, 3.- url, 4.- street, 5.- colony 
    	              //6.- located, 7.- icon, 8.- video

    	$model = 0;   //Para identificar de que tabla se va a actualizar
    				  //1.- titles, 2.- images, 3.- ubications, 4.- networks

        $image = 0;   //Sirve para identificar si es una imagen, valor 0 es que no

    	switch ($id) {
    		case "iso_title":
    			$value = 2; $type = 1; $model = 1;
    			break;
    		case "inicio_title":
    			$value = 3; $type = 1; $model = 1;
    			break;
    		case "inicio_description":
	    		$value = 3; $type = 2; $model = 1;
    			break;
    		case "nosotros_title":
	    		$value = 5; $type = 1; $model = 1;
    			break;
    		case "nosotros_description":
	    		$value = 5; $type = 2; $model = 1;
    			break;
    		case "servicios_title":
	    		$value = 6; $type = 1; $model = 1;
    			break;
    		case "servicios_description":
	    		$value = 6; $type = 2; $model = 1;
    			break;
    		case "servicio_m":
	    		$value = 7; $type = 1; $model = 1;
    			break;
            case "maquinado":
                $value = 7; $type = 2; $model = 1; $image = 1;
                break;
    		case "servicio_t":
	    		$value = 8; $type = 1; $model = 1;
    			break;
            case "torno":
                $value = 8; $type = 2; $model = 1; $image = 1;
                break;
    		case "servicio_s":
	    		$value = 9; $type = 1; $model = 1;
    			break;
            case "soldadura":
                $value = 9; $type = 2; $model = 1; $image = 1;
                break;
    		case "trabajos_title":
	    		$value = 10; $type = 1; $model = 1;
    			break;
    		case "trabajos_description":
	    		$value = 10; $type = 2; $model = 1;
    			break;
    		case "clientes_title":
	    		$value = 11; $type = 1; $model = 1;
    			break;
    		case "contacto_title":
	    		$value = 12; $type = 1; $model = 1;
    			break;
    		case "ubicacion_title":
	    		$value = 13; $type = 1; $model = 1;
    			break;	
    		case "ubicacion_street":
	    		$value = 1; $type = 4; $model = 3;
    			break;	
    		case "ubicacion_colony":
	    		$value = 1; $type = 5; $model = 3;
    			break;	
    		case "ubicacion_located":
	    		$value = 1; $type = 6; $model = 3;
    			break;	
    		case "telefono_title":
    			$value = 14; $type = 1; $model = 1;
    			break;
    		case "telefono_description":
    			$value = 14; $type = 2; $model = 1;
    			break;
    		case "correo_title":
    			$value = 15; $type = 1; $model = 1;
    			break;
    		case "correo_description":
    			$value = 15; $type = 2; $model = 1;
    			break;
    		case "footer":
    			$value = 16; $type = 1; $model = 1;
                break;
            case "menu_logotipo":
                $value = 1; $type = 2; $model = 1; $image = 1;
                break;
            case "iso":
                $value = 2; $type = 2; $model = 1; $image = 1;
                break;
            case "clientes":
                $value = 17; $type = 2; $model = 1; $image = 1;
                break;
            case "nosotros_img":
                $type = 3; $image = 1;
                $obj = Image::findOrFail(request()->id_image);
                break;
            case "trabajos_image_title":
                $type = 1;
                $obj = Image::findOrFail(request()->id_image);
                break;
            case "trabajos_image_description":
                $type = 2;
                $obj = Image::findOrFail(request()->id_image);
                break;
            case "trabajos_img":
                $type = 3; $image = 1;
                $obj = Image::findOrFail(request()->id_image);
                break;
            case "clientes_img":    
                $type = 3; $image = 1;
                $obj = Image::findOrFail(request()->id_image);
                break;
            case "clientes_image_title":
                $type = 1;
                $obj = Image::findOrFail(request()->id_image);
                break;
            case "redes_network_url":
                $type = 3;
                $obj = Network::findOrFail(request()->id_image);
                break;
            case "redes_network_icon":
                $type = 7;
                $obj = Network::findOrFail(request()->id_image);
                break;
            case "video":
                $model = 1; $value = 4; $type = 8;
                break;
    		default:
    			# code...
    			break;
    	}
    	
    	switch ($model) {
    		case 1:
    			$obj = Title::findOrFail($value);
    			break;
    		case 2:
    			$obj = Image::findOrFail($value);
    			break;
    		case 3:
    			$obj = Ubication::findOrFail($value);
    			break;
    		case 4:
    			$obj = Network::findOrFail($value);
    			break;
    		default:
    			# code...
    			break;
    	}

    	switch ($type) {
    		case 1:
                $validation = Validator::make(request()->all(), [
                    'text' => 'required|max:100'
                ]);
                if($validation->passes()){
                    $obj->title = request()->text;
                }
                else{
    			    return response()->json([
                        "errors" => $validation->errors()->all()
                    ]);     
                }
    			break;
    		case 2:
                if($image){
                    $validation = Validator::make(request()->all(), [
                        'image' => 'required|mimes:jpeg,png,jpg'
                    ]);

                    if($validation->passes()){
                        $image = request()->file('image');
                        $new_name = rand() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('images'), $new_name);

                        if(is_file($obj->description)){   
                            unlink($obj->description);
                        }
                        $obj->description = 'images/' . $new_name;
                    }
                    else{
                        return response()->json([
                            "errors" => $validation->errors()->all()
                        ]);
                    }
                }
                else{
                    $validation = Validator::make(request()->all(), [
                        'text' => 'required|max:1000'
                    ]);

                    if($validation->passes()){
                        $obj->description = request()->text;
                    }
                    else{
                        return response()->json([
                            "errors" => $validation->errors()->all()
                        ]);     
                    }
                }
    			break;
    		case 3:
                if($image){
                    $validation = Validator::make(request()->all(), [
                        'image' => 'required|mimes:jpeg,png,jpg'
                    ]);

                    if($validation->passes()){
                        $image = request()->file('image');
                        $new_name = rand() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('images'), $new_name);

                        if(is_file($obj->url)){   
                            unlink($obj->url);
                        }
                        $obj->url = 'images/' . $new_name;
                    }
                    else{
                        return response()->json([
                            "errors" => $validation->errors()->all()
                        ]);
                    }
                }
                else{
                    $validation = Validator::make(request()->all(), [
                        'text' => 'required|max:1000'
                    ]);

                    if($validation->passes()){
                        $obj->url = request()->text;
                    }
                    else{
                        return response()->json([
                            "errors" => $validation->errors()->all()
                        ]);     
                    }
                }
    			break;
    		case 4:
    			$obj->street = request()->text;
    			break;
    		case 5:
    			$obj->colony = request()->text;
    			break;
    		case 6:
    			$obj->located = request()->text;
    			break;
    		case 7:
    			$obj->icon = request()->text;
    			break;
    		case 8:
                $validation = Validator::make(request()->all(), [
                    'video' => 'required|mimes:mp4|max:22000'
                ]);

                if($validation->passes()){
                    $video = request()->file('video');
                    $new_name = rand() . '.' . $video->getClientOriginalExtension();
                    $video->move(public_path('videos'), $new_name);

                    if(is_file(public_path().'/'.$obj->description)){   
                        unlink(public_path().'/'.$obj->description);
                    }
                    $obj->description = 'videos/' . $new_name;
                }
                else{
                    return response()->json([
                        "errors" => $validation->errors()->all()
                    ]);
                }
    			break;
    		default:
    			# code...
    			break;
    	}
    	$obj->update();

        if($image){
            return response()->json([
                "success" => "La imagen se ha actualizado correctamente",
                "obj" => $obj
            ],200);           
        }
        if($type == 8){
            return response()->json([
                "success" => "El video se ha actualizado correctamente",
                "obj" => $obj
            ],200);   
        }
        else{
    	   return response()->json(["success" => "El dato se ha actualizado correctamente"],200); 
        }
    }

    public function destroy($id){
        if($id != "redes"){
            $obj = Image::findOrFail(request()->id_obj);

            if(is_file($obj->url)){   
                unlink($obj->url);
            }

            $obj->delete();
            $message = "La imagen se ha eliminado correctamente";
        }
        else{
            $obj = Network::findOrFail(request()->id_obj);

            $obj->delete();
            $message = "La red social se ha eliminado correctamente";
        }
            
        return response()->json([
           "success" => $message
        ],200);          
    }
}
