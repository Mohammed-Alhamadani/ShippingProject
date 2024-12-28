<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContainerRequest;
use App\Http\Requests\UpdateContainerRequest;
use App\Models\Container;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    public function index(){
        $shipment=Container::paginate(5);
        return response()->json($shipment);
    }
    public function show($id){
        $shipment=Container::find($id);
        return response()->json($shipment);
    }

    public function store(StoreContainerRequest $request){
        $shipment=Container::create($request->validated());
        return response()->json($shipment);
    }
    public function update(UpdateContainerRequest $request,$id){
        $shipment=Container::find($id);
        $shipment->update($request->validated());
        return response()->json($shipment);
    }
    public function destroy($id){
        $shipment=Container::find($id);
        $shipment->delete();
        return response()->json(['message'=>' '.'Shipment has been deleted'],200);
    }
}
