<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\FilterEmployeesRequest;
use App\Models\Department;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * display filtered employees.
     */
    public function filtered_employees(FilterEmployeesRequest $request)
    {
        $employees = Employee::whereHas('departments_data')
            ->get()
            ->map(function ($employee) {
                $maxSalary = $employee->departments_data->max(function ($department) {
                    return $department->salary_data->amount ?? 0;
                });

                $employee->max_salary = $maxSalary;
                return $employee;
            })
            ->sortByDesc('max_salary')
            ->take(
                $request->min_employees_salary
            );
        return view('welcome', [
            'employees' => $employees,
            'min_employees_salary' => $request->min_employees_salary
        ]);
    }
}
