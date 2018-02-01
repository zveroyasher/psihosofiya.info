<?php

namespace App\Http\Controllers\Admin;

use App\Type_lichnosti;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Type_lichnostiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.type_lichnostis.index',[
          'type_lichnostis'=> Type_lichnosti::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //создание записи
      return view('admin.type_lichnostis.create',[
        'type_lichnosti' =>[],
        // переменная с колекцией вложенных категорий, метод with делает колекцию children
        // прописан в моделе
        'type_lichnostis'=>Type_lichnosti::with('children')->where('parent_id','0')->get(),
        'delimiter'      => '' //тут будет симвоз обозначающий вложенность
        // для визуального понимания вложенности
      ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //добавляем запись в базу
        //можно и методом save но сдесь метод creste
        Type_lichnosti::create($request->all());
        return redirect()->route('admin.type_lichnosti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type_lichnosti  $type_lichnosti
     * @return \Illuminate\Http\Response
     */
    public function show(Type_lichnosti $type_lichnosti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type_lichnosti  $type_lichnosti
     * @return \Illuminate\Http\Response
     */
    public function edit(Type_lichnosti $type_lichnosti)
    {
      //создание записи
    return view('admin.type_lichnostis.edit',[
      'type_lichnosti' => $type_lichnosti,//лара сам обратится к модели
      // переменная с колекцией вложенных категорий, метод with делает колекцию children
      // прописан в моделе
      'type_lichnostis'=>Type_lichnosti::with('children')->where('parent_id','0')->get(),
      'delimiter'      => '' //тут будет симвоз обозначающий вложенность
      // для визуального понимания вложенности
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type_lichnosti  $type_lichnosti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type_lichnosti $type_lichnosti)
    {
        //
        $type_lichnosti->update($request->except('slug'));  //метод exept исключает поле slug и reques
        return redirect()->route('admin.type_lichnosti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type_lichnosti  $type_lichnosti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type_lichnosti $type_lichnosti)
    {
        //удаление типов личности
        $type_lichnosti->delete();
    }
}
