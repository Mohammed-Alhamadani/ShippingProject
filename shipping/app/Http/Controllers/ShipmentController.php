<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShipmentRequest;
use App\Http\Requests\UpdateShipmentRequest;
use App\Models\Container;
use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index(){
        $shipment=Shipment::paginate(5);
        return response()->json($shipment);
    }
    public function show($id){
        $shipment=Shipment::find($id);
        return response()->json($shipment);
    }

    public function store(StoreShipmentRequest $request){
        $shipment_id=Container::all()->id;
        $shipment=Shipment::create($request->validated());
        $validatedData['container_id']=$shipment_id;
        return response()->json($shipment);
    }
    public function update(UpdateShipmentRequest $request,$id){
        $shipment=Shipment::find($id);
        $shipment->update($request->validated());
        return response()->json($shipment);
    }
    public function destroy($id){
        $shipment=Shipment::find($id);
        $shipment->delete();
        return response()->json(['message'=>' '.'Shipment has been deleted'],200);
    }
    }


