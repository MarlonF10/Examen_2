<?php

namespace App\Http\Controllers;

use App\Models\TravelTicket;
use Illuminate\Http\Request;

/**
 * Class TravelTicketController
 * @package App\Http\Controllers
 */
class TravelTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travelTickets = TravelTicket::paginate();

        return view('travel-ticket.index', compact('travelTickets'))
            ->with('i', (request()->input('page', 1) - 1) * $travelTickets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travelTicket = new TravelTicket();
        return view('travel-ticket.create', compact('travelTicket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TravelTicket::$rules);

        $travelTicket = TravelTicket::create($request->all());

        return redirect()->route('travel-ticket.index')
            ->with('success', 'TravelTicket created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $travelTicket = TravelTicket::find($id);

        return view('travel-ticket.show', compact('travelTicket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $travelTicket = TravelTicket::find($id);

        return view('travel-ticket.edit', compact('travelTicket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TravelTicket $travelTicket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TravelTicket $travelTicket)
    {
        request()->validate(TravelTicket::$rules);

        $travelTicket->update($request->all());

        return redirect()->route('travel-ticket.index')
            ->with('success', 'TravelTicket updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $travelTicket = TravelTicket::find($id)->delete();

        return redirect()->route('travel-ticket.index')
            ->with('success', 'TravelTicket deleted successfully');
    }
}
