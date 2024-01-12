<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index() 
    {
        $workers = Worker::all();
        
        return view('worker.index', compact('workers'));
    }

    public function show() 
    {
        $worker = Worker::find(2);
        dd($worker);
    }

    public function create() 
    {
        $worker = [
            'name' => 'Ivanreg',
            'surname' => 'Ivanoveg',
            'email' => 'ivanov@gmail.com.ua',
            'age' => 20,
            'description' => 'Hello',
            'is_married' => false,
        ];

        Worker::create($worker);

        return 'Created';
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
