<?php

namespace App\Http\Controllers;

use App\Models\Rout;
use Illuminate\Http\Request;

/**
 * Class RoutController
 * @package App\Http\Controllers
 */
class RoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routs = Rout::paginate();

        return view('rout.index', compact('routs'))
            ->with('i', (request()->input('page', 1) - 1) * $routs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rout = new Rout();
        return view('rout.create', compact('rout'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Rout::$rules);

        $rout = Rout::create($request->all());

        return redirect()->route('rout.index')
            ->with('success', 'Ruta Creada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rout = Rout::find($id);

        return view('rout.show', compact('rout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rout = Rout::find($id);

        return view('rout.edit', compact('rout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Rout $rout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rout $rout)
    {
        request()->validate(Rout::$rules);

        $rout->update($request->all());

        return redirect()->route('rout.index')
            ->with('success', 'Ruta Actualizada Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rout = Rout::find($id)->delete();

        return redirect()->route('rout.index')
            ->with('success', 'Ruta eliminada Correctamente');
    }
}
