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
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoretaskRequest $request)
    {
        //
        $task = Task::create($request->all());

        return $task
            ? response()->json($task, 201)
            : response()->json([], 500);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdatetaskRequest $request, task $task)
    {
        //
        $task->title = $request->title;

        return $task->update
            ? response()->json($task)
            : response()->json([], 500);
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(task $task)
    {
        //
        return $task->delete()
            ? response()->json($task)
            : response()->json([], 500);
    }
}
