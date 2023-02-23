<?php

namespace App\Http\Controllers\Dashboard;
use App\Medias;
use App\Models\Property;
use App\Http\Controllers\Controller;
use App\Services\MediaService;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePropertyRequest;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Property  $property)
    {

//        $properties =  $property->latest( 'created_at' )->with('user')->paginate( $this->per_page ?? ( 10 ) );
        $properties =  Property::all();

        return view('dashboard.property.properties')->with('properties',  $properties);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.property.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePropertyRequest $request)
    {

//        $input = $request->all();
//        Property::create($input);
//        return redirect('dashboard.property.properties')->with('flash_message', '  Property Addedd!');


       $property =  Property::create($request->validated());
        if($request->hasFile('image')) {
            $property->addMediaFromRequest( 'image' )->toMediaCollection('property-img');
        }
        return redirect()->route('dashboard.properties.index')->with('success','Property has been updated successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {

        return view('dashboard.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        $input = $request->all();
        $property->update($input);

        if($request->hasFile('image')){
            $property->clearMediaCollection('property-img');
            $property->addMediaFromRequest('image')->toMediaCollection('property-img');
        }

        return redirect()->route('dashboard.properties.index')->with('success','Property has been updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::destroy($id);


        return redirect()->route('dashboard.properties.index')->with('success','Property has been deleted! ');

    }




//    public function uploadImg(MediaService $service){
//
//        // if ( isset( $request->tiny_uploader ) ) {
//        $imgID = $service->uploadImg('file');
//        $media = Medias::where('id', $imgID)->first();
//        return json_encode( [ 'location' => url( $media->path ) ] );
//
//        // }
//    }
}
