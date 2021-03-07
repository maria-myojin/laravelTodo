<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    protected $taskRepo;

    public function __construct()
    {
        $this->taskRepo = new TaskRepository;
    }

    public function index()
    {

        $tasks = $this->taskRepo->findtask();

        \Log::debug($tasks);

        return view('index', [
            'tasks' => $tasks,
        ]);
    }
}
