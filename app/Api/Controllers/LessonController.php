<?php

namespace App\Api\Controllers;

use App\Repositories\Eloquent\LessonRepository;

class LessonController extends BaseController
{
    protected $lesson;

    /**
     * LessonController constructor.
     * @param LessonRepository $lesson
     */
    public function __construct(LessonRepository $lesson)
    {
        $this->lesson = $lesson;
    }

    public function index()
    {
        return $this->lesson->all();
    }
}