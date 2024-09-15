<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('id', 'DESC')->get();
        return view('backend.client.index',compact('clients'));
    }

    public function create()
    {
        return view('backend.client.create');
    }

    public function store(Request $request)
    {
        $validateData =  $request->validate([
            'passport_number'       => 'required|string',
            'name'                  => 'required|string|max:255',
            'image'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'short_description'     => 'nullable|string',
        ]);

        $client = new Client();

        $client->passport_number       = $validateData['passport_number'];
        $client->name                  = $validateData['name'];
        $client->short_description     = $validateData['short_description'];

        if ($request->hasFile('image')) {
            $image        = $request->file('image');
            $imageName    = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Uploads/ClientImage'), $imageName);
            $client->image  = 'Uploads/ClientImage/' . $imageName;
        }

        $client->save();

        $notification = array(
            'message'    =>'Client Info Store successfully ',
            'alert-type' =>'success'
        );


        return redirect()->route('clients.index')->with($notification);
    }


    public function edit($id)
    {
        $client = Client::findOrFail($id);

        return view('backend.client.edit',compact('client'));
    }

    public function update(Request $request,$id)
    {
        $validateData =  $request->validate([
            'passport_number'       => 'string',
            'name'                  => 'string|max:255',
            'image'                 => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'short_description'     => 'nullable|string',
        ]);
        $client = Client::findOrFail($id);


        $client->passport_number       = $validateData['passport_number'];
        $client->name                  = $validateData['name'];
        $client->short_description     = $validateData['short_description'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Uploads/ClientImage'), $imageName);

            if ($client->image && file_exists(public_path($client->image))) {
                unlink(public_path($client->image));
            }

            $client->image = 'Uploads/ClientImage/' . $imageName;
        }


        $client->save();

        $notification = array(
            'message'    =>'Client Info Update successfully ',
            'alert-type' =>'info'
        );

        return redirect()->route('clients.index')->with($notification);

    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);

        if ($client->image && file_exists(public_path($client->image))) {
            unlink(public_path($client->image));
        }

        $client->delete();

        $notification = array(
            'message'    =>'Client Info Delete successfully ',
            'alert-type' =>'warning'
        );
        return redirect()->route('clients.index')->with($notification);
    }
}
