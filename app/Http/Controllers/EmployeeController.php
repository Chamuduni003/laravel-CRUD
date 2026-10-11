<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    


    protected $employee;
    
    public function __construct(){

    $this->employee = new Employee();
    }
    



public function index()
    {
       $response['employees'] = $this->employee->all();
       return view('pages.index')->with($response);
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
    public function store(Request $request)
    {
      
{
    $this->employee->create([
        'emp_name' => $request->emp_name,
        'dob' => $request->emp_dob,
        'Phone' => $request->phone,
    ]);

    return redirect()->route('employee.index');
}
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['edit'] = $this->employee->find($id);
        return view('pages.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = $this->employee->find($id);
        $employee->update([
            'emp_name' => $request->emp_name,
            'dob' => $request->emp_dob,
            'Phone' => $request->phone,
        ]);
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = $this->employee->find($id);
        if($employee){
            $employee->delete();
        }
        return redirect()->route('employee.index');
    }
}
