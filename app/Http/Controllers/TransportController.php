<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

/**
 * Class TransportController
 * @package App\Http\Controllers
 */
class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transports = Transport::paginate();

        return view('transport.index', compact('transports'))
            ->with('i', (request()->input('page', 1) - 1) * $transports->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transport = new Transport();
        return view('transport.create', compact('transport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Transport::$rules);

        $transport = Transport::create($request->all());

        return redirect()->route('transport.index')
            ->with('success', 'Transporte Creado Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transport = Transport::find($id);

        return view('transport.show', compact('transport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transport = Transport::find($id);

        return view('transport.edit', compact('transport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Transport $transport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transport $transport)
    {
        request()->validate(Transport::$rules);

        $transport->update($request->all());

        return redirect()->route('transport.index')
            ->with('success', 'Transporte Editado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $transport = Transport::find($id)->delete();

        return redirect()->route('transport.index')
            ->with('success', 'Transporte Eliminado Correctamente');
    }
}
