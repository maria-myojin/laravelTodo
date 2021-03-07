<?php

namespace App\Repositories;

use DB;

class TaskRepository implements TaskRepositoryInterface
{
    protected $table = 'tasks';
    // private $task;

    // public function __construct(Task $task)
    // {
    //     $this->task = $task;
    // }
//IDでとってくるとかならfindById
    public function findtask()
    {
      // return [];
        return DB::table($this->table)->get();
    }
}
