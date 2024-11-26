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
        $validateData = $request->validate([
            'passport_number'   => 'required|string',
            'name'              => 'required|string|max:255',
            'files'             => 'required|array',
            'files.*'           => 'mimes:jpeg,png,jpg,gif,svg,pdf',
            'short_description' => 'nullable|string',
        ]);

        $client = new Client();

        $client->passport_number   = $validateData['passport_number'];
        $client->name              = $validateData['name'];
        $client->short_description = $validateData['short_description'];

        // Array to store file paths (images and PDFs)
        $filePaths = [];

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

                // Store PDFs in a separate folder
                $folder = $file->getClientOriginalExtension() === 'pdf' ? 'Uploads/ClientDocuments' : 'Uploads/ClientImages';

                $file->move(public_path($folder), $fileName);
                $filePaths[] = $folder . '/' . $fileName;
            }

            // Store the file paths as a JSON array
            $client->images = json_encode($filePaths);
        }

        $client->save();

        $notification = array(
            'message'    => 'Client Info stored successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('clients.index')->with($notification);
    }




    public function edit($id)
    {
        $client = Client::findOrFail($id);

        return view('backend.client.edit',compact('client'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'passport_number'   => 'string',
            'name'              => 'string|max:255',
            'images'            => 'array',
            'images.*'          => 'image|mimes:jpeg,png,jpg,gif,svg',
            'short_description' => 'nullable|string',
        ]);

        $client = Client::findOrFail($id);

        $client->passport_number   = $validateData['passport_number'];
        $client->name              = $validateData['name'];
        $client->short_description = $validateData['short_description'];

        // Decode existing images
        $existingImages = json_decode($client->images, true) ?? [];

        // Handle new image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('Uploads/ClientImages'), $imageName);
                $existingImages[] = 'Uploads/ClientImages/' . $imageName; // Add new image path to existing ones
            }
        }

        // Handle deletion of old images that are no longer part of the updated image set
        $oldImages = json_decode($client->images, true) ?? [];

        foreach ($oldImages as $oldImage) {
            if (!in_array($oldImage, $existingImages) && file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage)); // Delete old image if it's not in the updated list
            }
        }

        // Update the client's images field with the updated image paths array
        $client->images = json_encode($existingImages);

        $client->save();

        $notification = array(
            'message'    => 'Client Info updated successfully',
            'alert-type' => 'info'
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
