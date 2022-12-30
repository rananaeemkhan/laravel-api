<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\device;

class deviceController extends Controller
{
    public function list($id=null){

      return  $id?device::find($id):device::all();
    }
    
    public function add(Request $request){

        $device = new device;

        $device->name = $request->name;
         $device->email = $request->email;
          $device->subject = $request->subject;
         $result = $device->save();
         if ($result) {
             return ["Result"=>"Data Saved Successfuly"];
         }else{
            return ["Result"=>"operation failed"];
         }
        
    }

    public function update(Request $request){

        $device = device::find($request->id);

        $device->name = $request->name;
        $device->email = $request->email;
        $device->subject = $request->subject;

        $result = $device->save();
        if ($result) {
             return ["Result"=>"Data update Successfuly"];
         }else{
            return ["Result"=>"operation failed"];
         }
    }

    public function delete($id){

        $device = device::find($id);
        $result = $device->delete();
        if ($result) {
             return ["Result"=>"Record deleted Successfuly"];
         }else{
            return ["Result"=>"delete operation failed"];
         }
    }

    public function search($name){
        return device::where('name',"like","%". $name."%")->get();
    }

}
