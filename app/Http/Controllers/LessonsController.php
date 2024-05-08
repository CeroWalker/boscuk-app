<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lessons;
use App\Models\LessonCategory;
class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("lessons");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return dd(Lessons::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $data['lesson'] = Lessons::query()->select('*')->where('slug', '=',$slug)->firstOrFail();
        return view('lesson',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
