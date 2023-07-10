<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{
    public function index()
    {
        $data['result'] = Tasks::all();
        return view ('taskslist', $data);
    }
    public function create()
    {
        return view('modal.create');
    }

    public function store(Request $request, Tasks $tasks = null)
    {
        $rules = [
            'tasks_name' => 'required',
            'description' => 'required'
        ];

        if ($request->hasFile('attachment'))
        {
            $rules['attachment'] = 'required';
        }
        $this->validate($request, $rules);

        $input = $request->all();

        if ($request->hasFile('attachment')) {
            $fileName = $request->attachment->getClientOriginalName();
            $request->attachment->storeAs('tasks', $fileName);
            $input['attachment'] = $fileName;
        } 
        
        Tasks::updateOrCreate(['id' => @$tasks->id], $input);
        return redirect('tasks')->with('success', 'Data Berhasil Disimpan');
        
    }

}
