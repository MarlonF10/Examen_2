<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

/**
 * Class MechanicController
 * @package App\Http\Controllers
 */
class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanics = Mechanic::paginate();

        return view('mechanic.index', compact('mechanics'))
            ->with('i', (request()->input('page', 1) - 1) * $mechanics->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mechanic = new Mechanic();
        return view('mechanic.create', compact('mechanic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mechanic::$rules);

        $mechanic = Mechanic::create($request->all());

        return redirect()->route('mechanic.index')
            ->with('success', 'Mecanico Creado Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mechanic = Mechanic::find($id);

        return view('mechanic.show', compact('mechanic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mechanic = Mechanic::find($id);

        return view('mechanic.edit', compact('mechanic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mechanic $mechanic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mechanic $mechanic)
    {
        request()->validate(Mechanic::$rules);

        $mechanic->update($request->all());

        return redirect()->route('mechanic.index')
            ->with('success', 'Mecanico Editado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mechanic = Mechanic::find($id)->delete();

        return redirect()->route('mechanic.index')
            ->with('success', 'Mecanico Eliminado Correctamente');
    }
}
