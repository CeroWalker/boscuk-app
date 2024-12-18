<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestions;
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
        $lessons = Lessons::all();

        return view('lessons', compact('lessons'));
    }

    public function search(Request $request){

        $search = $request->search;

        $lessons = Lessons::where(function($query) use ($search){

            $query->where('title','like',"%$search%");
        })
            ->get();

        return view('lessons',compact('lessons','search'));

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
    public function show(string $title_id)
    {
        $data['lesson'] = Lessons::query()->select('*')->where('title_id', '=',$title_id)->firstOrFail();
        return view('getlesson', $data);
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
