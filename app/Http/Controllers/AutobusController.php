<?php

namespace App\Http\Controllers;

use App\Autobus;
use Illuminate\Http\Request;

/**
 * Class AutobusController
 * @package App\Http\Controllers
 */
class AutobusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autobuses = Autobus::paginate();

        return view('autobus.index', compact('autobuses'))
            ->with('i', (request()->input('page', 1) - 1) * $autobuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autobus = new Autobus();
        return view('autobus.create', compact('autobus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Autobus::$rules);

        $autobus = Autobus::create($request->all());

        return redirect()->route('autobuses.index')
            ->with('success', 'Autobus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autobus = Autobus::find($id);

        return view('autobus.show', compact('autobus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autobus = Autobus::find($id);

        return view('autobus.edit', compact('autobus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Autobus $autobus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autobus $autobus)
    {
        request()->validate(Autobus::$rules);

        $autobus->update($request->all());

        return redirect()->route('autobuses.index')
            ->with('success', 'Autobus updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $autobus = Autobus::find($id)->delete();

        return redirect()->route('autobuses.index')
            ->with('success', 'Autobus deleted successfully');
    }
}
