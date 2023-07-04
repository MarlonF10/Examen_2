<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

/**
 * Class PassengerController
 * @package App\Http\Controllers
 */
class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passengers = Passenger::paginate();

        return view('passenger.index', compact('passengers'))
            ->with('i', (request()->input('page', 1) - 1) * $passengers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passenger = new Passenger();
        return view('passenger.create', compact('passenger'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Passenger::$rules);

        $passenger = Passenger::create($request->all());

        return redirect()->route('passenger.index')
            ->with('success', 'Pasajero Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $passenger = Passenger::find($id);

        return view('passenger.show', compact('passenger'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $passenger = Passenger::find($id);

        return view('passenger.edit', compact('passenger'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Passenger $passenger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passenger $passenger)
    {
        request()->validate(Passenger::$rules);

        $passenger->update($request->all());

        return redirect()->route('passenger.index')
            ->with('success', 'Pasajero Actualizado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $passenger = Passenger::find($id)->delete();

        return redirect()->route('passenger.index')
            ->with('success', 'Pasajero Eliminado Correctamente');
    }
}
