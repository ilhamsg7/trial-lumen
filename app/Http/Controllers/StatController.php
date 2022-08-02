<?php

namespace App\Http\Controllers;

use App\Models\Stats;
use Illuminate\Http\Request;
use App\Http\Requests\StatRequest;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $stat = Stats::all();
        return response()->json($stat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatRequest $request) {
        $validated = $request->validated();
        Stats::create($validated);
        return response()->json(
            ['message' => 'Statistic created successfully.'],
            201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stats $stat) {
        return response()->json($stat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stats $stat) {
        $validated = $request->validated();
        $stat->update($validated);
        return response()->json(
            ['message' => 'Statistic updated successfully.'],
            201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stats $stat) {
        $stat->delete();
        return response()->json(
            ['message' => 'Statistic deleted successfully.'],
            201
        );
    }
}
