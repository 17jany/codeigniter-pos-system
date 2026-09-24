<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'Task List',
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->orderBy('id', 'ASC')
                ->findAll(),
        ];

        return view('templates/header', $data)
            . view('tasks/index', $data)
            . view('templates/footer');
    }
}