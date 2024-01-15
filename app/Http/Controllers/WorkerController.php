<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Http\Requests\Worker\StoreRequest;

class WorkerController extends Controller
{
    public function index() 
    {
        $workers = Worker::all();
        
        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker) 
    {
        return view('worker.show', compact('worker'));
    }

    public function create() 
    {
        return view('worker.create');
    }

    public function store(StoreRequest $request) 
    {
        $data = $request->validated();
       
        $data['is_married'] = isset($data['is_married']);

        Worker::create($data);

        return redirect()->route('worker.index');

    }

    public function update() 
    {
        $worker = Worker::find(3);

        $worker->update([
            'name' => 'Karl'
        ]);

        return "Update";
    }

    public function delete() 
    {
        $worker = Worker::find(3);

        $worker->delete();

        return "Delete";
    }

}
