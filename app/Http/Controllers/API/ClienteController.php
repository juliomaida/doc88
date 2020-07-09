<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Model\Cliente;


class ClienteController extends Controller
{
    
    public function __construct(Cliente $cliente, Request $request)
    {
        $this->cliente  = $cliente;
        this->request = $request;
    }


    public function index(Request $request)
    {
        $data = this->cliente->all();
        return response()->json($data);

    }


    public function show($id)
    { 
        if(!$data = $this->cliente->find($id))
        {
            return response->json(['error'=>'Nada foi encontrado!'],404);
        } else {
            return response()->json($data);
        }
    }

  

    public function store(Request $request)
    {
        $this->validate($request, $this->cliente->rules());
        $dataform = $request->all();
        $data = this->cliente->create($dataform);
        return response()->json($data,201);

    }


     
    public function update(Request $request, $id)
    {

        if (!$data = $this->model->find($id))
            return response()->json(['error' => 'Nada foi encontrado!'], 404);

        $this->validate($request, $this->model->rules());  

        $dataform=$request->all();

        $data->update($dataForm);

        return response()->json($data);
          
    }






    public function destroy($id)
	{
        if(!$data=$this->cliente->find($id))
            return resopnse()->json(['error'=>'Nada foi encontrado'],404);
        $data->delete();
        return response()->json(['success'=>'Deletado com sucesso!']);

    }

}
