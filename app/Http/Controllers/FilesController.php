<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use App\People;
use App\Order;
use App\OrderItem;
use App\Ship;


class FilesController extends Controller
{
    public function index(){
        $files = Files::all();

        return view('xmllist', compact('files'));
    }

    public function fileCreate()
    {
        return view('xmlupload');
    }

    public function fileStore(Request $request)
    {
        $xml = $request->file('file');
        $xmlName = $xml->getClientOriginalName();
        $xml->move(public_path('xml'),$xmlName);
        
        $xmlUpload = new Files();
        $xmlUpload->path = $xmlName;
        $xmlUpload->save();
        return response()->json(['success'=>$xmlName]);
    }

    public function fileGet(Request $request, $id){
        
        $file = Files::findOrFail($id);
        $xml = simplexml_load_file(public_path('xml')."\\".$file->path);
        if($xml->person){
            echo "entrou if person <hr>";
            foreach($xml as $person){
                $people = People::updateOrCreate(
                    ['id' => $person->personid],
                    ['name' => $person->personname]
                );
                $phoneArray = [];
                foreach($person->phones->phone as $phoneItem){
                    $people->phones()->updateOrCreate(
                        ['people_id' => $person->personid, 'phone'=>"$phoneItem"]
                    );
                }
                
            }

        }else if($xml->shiporder){
            foreach($xml as $shiporder){
                $order = Order::updateOrCreate(
                    ['people_id' => $shiporder->orderperson]
                );
                $itemArray = [];
                foreach($shiporder->items->item as $orderItem){
                    $order->orderItem()->updateOrCreate(
                        ['order_id' => $order->id, 'title'=>$orderItem->title, 'note'=>$orderItem->note, 'quantity'=>$orderItem->quantity, 'price'=>$orderItem->price ]
                    );
                }
                $order->ship()->updateOrCreate(
                    ['order_id' => $order->id, 'name'=>$shiporder->shipto->name, 'address'=>$shiporder->shipto->address, 'city'=>$shiporder->shipto->city, 'country'=>$shiporder->shipto->country ]
                );
            }
        }
        //echo File::get('\storage\xml\1581251516103file.xml');
        dd($request);//(Storage::disk('local')->get('1581251516103file.xml'));
    }
}
