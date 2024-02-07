<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index(Request $request) {
        // $employees = Employee::limit(10)->get();
        if($request->has('search')) {
            $employees = Employee::where('name', 'like', '%'.$request->search.'%')
            ->orWhere('job_title', 'like', '%'.$request->search.'%')
            ->paginate(10);
        } else {
            $employees = Employee::paginate(10);
        }
        return view('employees.index')->with('employees', $employees);
    }
    public function create() {
        return view('employees.create');
    }

    public function show($e_id) {
        $employee = Employee::find($e_id);
        return view('employees.show')->with('employee', $employee);
    }
    public function edit($e_id) {
        $employee = Employee::find($e_id);
        return view('employees.edit')->with('employee', $employee);
    }
    public function update(Request $request) {
        $rules = [
            'name' => 'required|max:255',
            'job_title' => 'required|max:255',
            'joining_date' => 'required|date|before_or_equal:today',
            'salary' => 'required',
            'email' => 'nullable|email|',
            'mobile_no' => 'required|numeric|max:99999999999',
            'address' => 'required'
        ];
        $this->validate($request, $rules);

        $e = Employee::find($request->id);

        $e->name = $request->name;
        $e->job_title = $request->job_title;
        $e->joining_date = $request->joining_date;
        $e->salary = $request->salary;
        $e->email = $request->email;
        $e->mobile_no = $request->mobile_no;
        $e->address = $request->address;

        $e->save();

        return redirect()->route('employees.show', $e->id);
    }

    public function store(Request $request) {
        $rules = [
            'name' => 'required|max:255',
            'job_title' => 'required|max:255',
            'joining_date' => 'required|date|before_or_equal:today',
            'salary' => 'required',
            'email' => 'nullable|email|',
            'mobile_no' => 'required|numeric|max:99999999999',
            'address' => 'required'
        ];
        $this->validate($request, $rules);

        $e = new Employee;

        $e->name = $request->name;
        $e->job_title = $request->job_title;
        $e->joining_date = $request->joining_date;
        $e->salary = $request->salary;
        $e->email = $request->email;
        $e->mobile_no = $request->mobile_no;
        $e->address = $request->address;

        $e->save();

        return redirect()->route('employees.show', $e->id);
    }
    public function destroy(Request $request) {
        $e = Employee::find($request->id);
        $e->delete();
        return redirect()->route('employees.index', $e->id);
    }
}
