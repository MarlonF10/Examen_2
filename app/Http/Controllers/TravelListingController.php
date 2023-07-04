<?php

namespace App\Http\Controllers;

use App\Models\TravelListing;
use Illuminate\Http\Request;

/**
 * Class TravelListingController
 * @package App\Http\Controllers
 */
class TravelListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travelListings = TravelListing::paginate();

        return view('travel-listing.index', compact('travelListings'))
            ->with('i', (request()->input('page', 1) - 1) * $travelListings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travelListing = new TravelListing();
        return view('travel-listing.create', compact('travelListing'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TravelListing::$rules);

        $travelListing = TravelListing::create($request->all());

        return redirect()->route('travel-listing.index')
            ->with('success', 'Lista de Viaje Creada Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $travelListing = TravelListing::find($id);

        return view('travel-listing.show', compact('travelListing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $travelListing = TravelListing::find($id);

        return view('travel-listing.edit', compact('travelListing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TravelListing $travelListing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TravelListing $travelListing)
    {
        request()->validate(TravelListing::$rules);

        $travelListing->update($request->all());

        return redirect()->route('travel-listing.index')
            ->with('success', 'Lista de viaje Editada Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $travelListing = TravelListing::find($id)->delete();

        return redirect()->route('travel-listing.index')
            ->with('success', 'Lista de viaje Eliminada Correctamente');
    }
}
