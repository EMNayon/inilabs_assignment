<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     $todo =  Todo::latest()->get();
    //     return view('welcome', $todo);

    //     $data = YourModel::all(); // Fetch your data using Eloquent ORM or any other method
    // return response()->json($data);
    }

    public function getAllData(){
        return Todo::latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Todo $request)
    {
        $data =  $request->validated();
        Todo::create($data);
        // dd($data);
        return 1;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Todo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return Todo::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = Todo::find($id);
        $todo->name = $request->name;
        $todo->company_name = $request->company_name;
        $todo->department = $request->department;
        $todo->image = $request->image;

        $todo->save();
        return "Ok";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Todo::find($id)->delete();
        return "Ok";
    }
}
