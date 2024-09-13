<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretaskRequest;
use App\Http\Requests\UpdatetaskRequest;
use App\Models\task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        //
        return Task::orderByDesc('id')->get();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetaskRequest $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        //
    }
}
