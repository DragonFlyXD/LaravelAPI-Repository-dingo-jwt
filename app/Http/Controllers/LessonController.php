<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\LessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    private $lesson;

    /**
     * LessonController constructor.
     * @param LessonRepository $lesson
     */
    public function __construct(LessonRepository $lesson)
    {
        $this->lesson = $lesson;
        $this->middleware('auth.basic', ['only' => ['store', 'update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->lesson->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->get('title') || !$request->get('body')) {
            return $this->lesson->setStatusCode(422)->responseError('validate fails!');
        }
        $this->lesson->create($request->all());
        return $this->lesson->setStatusCode(201)->response('Lesson Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->lesson->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
