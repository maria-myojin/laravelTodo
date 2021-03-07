<?php

namespace App\Services;

use App\Repositories\TaskRepositoryInterface;

class TaskService
{
  protected $taskRepository;

  public function __construct(TaskRepositoryInterface $taskRepository)
  {
      $this->taskRepository = $taskRepository;
  }

    public function showTask()
    {
        return $this->taskRepository->findtask();
    }
}
