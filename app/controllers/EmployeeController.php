<?php

namespace App\Controllers;

use App\Core\App;

class EmployeeController
{
    /**
     * Página "Home"
     */
    public function index()
    {
        if (isset($_GET['id']) && ! is_null($_GET['id']) && $_GET['id'] != '') {
            $employees = App::get('database')->selectById('employees',$_GET['id']);
        } else {
            $employees = App::get('database')->selectAll('employees');
        }

        $avg = App::get('database')->getAvgAge('employees');

        return view('employees_index', compact('employees', 'avg'));
    }

    /**
     * Página "Employees"
     */
    public function create()
    {
        $employees = App::get('database')->selectAll('employees');

        return view('employees_create', compact('employees'));
    }

    /**
     * Página "Employees"
     */
    public function store()
    {
        App::get('database')->insert('employees', [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'age' => $_POST['age'],
            'type' => $_POST['type'],
            'job' => $_POST['job']
        ]);

        return redirect('employees');
    }
}
