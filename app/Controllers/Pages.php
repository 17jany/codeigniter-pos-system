<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Pages extends BaseController
{
    public function home()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => "Today's Tasks",
            'tasks' => $taskModel
                ->where('task_date', date('Y-m-d'))
                ->orderBy('id', 'ASC')
                ->findAll(),
        ];

        return view('templates/header', $data)
            . view('pages/home', $data)
            . view('templates/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About',
        ];

        return view('templates/header', $data)
            . view('pages/about', $data)
            . view('templates/footer');
    }
}