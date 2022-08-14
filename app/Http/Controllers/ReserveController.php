<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

/**
 * Class ReserveController
 * @package App\Http\Controllers
 */
class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserves = Reserve::paginate();

        return view('reserve.index', compact('reserves'))
            ->with('i', (request()->input('page', 1) - 1) * $reserves->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reserve = new Reserve();
        return view('reserve.create', compact('reserve'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Reserve::$rules);

        $reserve = Reserve::create($request->all());

        return redirect()->route('reserves.index')
            ->with('success', 'Reserve created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserve = Reserve::find($id);

        return view('reserve.show', compact('reserve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserve = Reserve::find($id);

        return view('reserve.edit', compact('reserve'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reserve $reserve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserve $reserve)
    {
        request()->validate(Reserve::$rules);

        $reserve->update($request->all());

        return redirect()->route('reserves.index')
            ->with('success', 'Reserve updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reserve = Reserve::find($id)->delete();

        return redirect()->route('reserves.index')
            ->with('success', 'Reserve deleted successfully');
    }
}
