@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Типы личностей</span></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">посетителей</span></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
              <p><span class="label label-primary">сегодня </span></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
              <p><span class="label label-primary">сегодня </span></p>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <a href="{{route('admin.type_lichnosti.create')}}" class="btn btn-block btn-default">создание типа</a>
        <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Категория 1</h4>
        <p class="list-group-item-text">
          Кол-во материалов
        </p>
        </a>
      </div>

      <div class="col-sm-6">
        <a href="#" class="btn btn-block btn-default">создание записи</a>
        <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Категория 1</h4>
        <p class="list-group-item-text">
          последний добавленный материал
        </p>
        </a>
      </div>


    </div>
</div>
@endsection
