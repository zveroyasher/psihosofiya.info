@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  <div class="row">
    @component('admin.components.breadcrumb')
      @slot('title') Создание новость @endslot
      @slot('parent') Главная @endslot
      @slot('active') новости @endslot
    @endcomponent
    <hr />
    <form action="{{route('admin.article.store')}}" method="post" class="form-horizontal">
      {{ csrf_field()}}
      {{--Form include--}}
      @include('admin.article.partials.form')
      <input type="hidden" name="created_by" value="{{Auth::id()}}">

    </form>
  </div>
</div>

@endsection
