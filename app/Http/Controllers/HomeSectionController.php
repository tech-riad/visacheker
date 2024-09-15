<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeMetaSection;
use App\Models\HomePopularCountrySection;
use App\Models\HomeServiceSection;
use App\Models\VisaPassSection;
use App\Models\GlobalVisaSection;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    public function index()
    {
        $metainfo = HomeMetaSection::first();
        $service = HomeServiceSection::first();
        $visapass = VisaPassSection::first();
        $popular = HomePopularCountrySection::first();
        $globalVisa = GlobalVisaSection::first();
        $testimonial = Testimonial::first();

        return view('backend.pagesettings.home',compact('metainfo','service','visapass','popular','globalVisa', 'testimonial'));
    }

    public function metaUpdate(Request $request,$id)
    {
        $metainfo = HomeMetaSection::find($id);

        $validatedData = $request->validate([
            'meta_title'        => 'string',
            'meta_description'  => 'string',
        ]);

        $metainfo->meta_title       = $validatedData['meta_title'];
        $metainfo->meta_description = $validatedData['meta_description'];

        $metainfo->save();

        return response()->json(['success' => 'Meta information updated successfully']);

    }

    public function serviceUpdate(Request $request, $id)
    {
        $service = HomeServiceSection::find($id);

        if (!$service) {
            return response()->json(['error' => 'Service not found'], 404);
        }

        $validatedData = $request->validate([
            'servicetitle'   => 'required',
            'shortdesc'      => 'required',
            'servicestatus'  => 'nullable|in:Hide,Show',
        ]);

        $service->servicetitle   = $validatedData['servicetitle'];
        $service->shortdesc      = $validatedData['shortdesc'];
        $service->servicestatus  = $validatedData['servicestatus'];

        $service->save();

        return response()->json(['success' => 'Service information updated successfully']);
    }
    public function visaUpdate(Request $request, $id)
    {
        $visapass = VisaPassSection::find($id);
        $validatedData = $request->validate([
            'visapasstitle'            => 'string',
            'visapassdescription'      => 'string',
            'visapassstatus'           => 'nullable|in:Hide,Show',
        ]);
        $visapass->visapasstitle        = $validatedData['visapasstitle'];
        $visapass->visapassdescription  = $validatedData['visapassdescription'];
        $visapass->visapassstatus       = $validatedData['visapassstatus'];

        $visapass->save();
        return response()->json(['success' => 'visa information updated successfully']);
    }

    public function popularUpdate(Request $request, $id)
{
    $popular = HomePopularCountrySection::find($id);

    $validatedData = $request->validate([
        'populartitle' => 'required|string',
        'populardesc' => 'required|string',
        'popularstatus' => 'nullable|in:Hide,Show',
    ]);

    $popular->populartitle = $validatedData['populartitle'];
    $popular->populardesc = $validatedData['populardesc'];
    $popular->popularstatus = $validatedData['popularstatus'];

    $popular->save();

    return response()->json(['success' => 'Popular Country Section updated successfully']);
}
public function globalvisaupdate (Request $request, $id)
{
    $global_visa = GlobalVisaSection::find($id);

    $validatedData = $request->validate([
        'global_visa_title' => 'string',
        'global_visa_desc'  => 'string',
        'global_visa_status'=> 'nullable|in:Hide,Show',
    ]);

    $global_visa->global_visa_title= $validatedData['global_visa_title'];
    $global_visa->global_visa_desc= $validatedData['global_visa_desc'];
    $global_visa->global_visa_status= $validatedData['global_visa_status'];

    $global_visa->save();

    return response()->json(['success' => 'Global Visa Section updated successfully']);

}

public function testimonialupdate (Request $request, $id)
{
    $testimonial = testimonial::find($id);
    $validatedData = $request->validate([
        'testimonial_title' => 'string',
        'testimonial_desc'  => 'string',
        'testimonial_status'=> 'nullable|in:Hide,Show',
    ]);
    $testimonial->testimonial_title= $validatedData['testimonial_title'];
    $testimonial->testimonial_desc= $validatedData['testimonial_desc'];
    $testimonial->testimonial_status= $validatedData['testimonial_status'];

    $testimonial->save();

    return response()->json(['success' => 'Testimonial Section updated successfully']);
}
}
