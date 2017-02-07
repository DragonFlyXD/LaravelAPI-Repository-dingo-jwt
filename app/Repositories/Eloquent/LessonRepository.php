<?php

namespace App\Repositories\Eloquent;

class LessonRepository extends Repository
{
    function model()
    {
        return 'App\Lesson';
    }

    function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'content' => $lesson['body'],
            'is_free' => $lesson['is_free'],
        ];
    }

    public function index()
    {
        try {
            $lessons = $this->all();
            return $this->setStatusCode(200)->response($this->transformCollection($lessons));
        } catch (\Exception $ex) {
            return $this->setStatusCode(404)->responseNotFound('Lesson Not Found');
        }
    }

    public function show($id)
    {
        try {
            $lesson = $this->find($id);
            return $this->setStatusCode(200)->response($this->transform($lesson));
        } catch (\Exception $ex) {
            return $this->setStatusCode(404)->responseNotFound('Lesson Not Found!!!');
        }
    }
}