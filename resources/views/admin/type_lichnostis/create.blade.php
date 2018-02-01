@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  <div class="row">
    @component('admin.components.breadcrumb')
      @slot('title') Создание типа личности @endslot
      @slot('parent') Главная @endslot
      @slot('active') Категории @endslot
    @endcomponent
    <hr />
    <form action="{{route('admin.type_lichnosti.store')}}" method="post" class="form-horizontal">
      {{ csrf_field()}}
      {{--Form include--}}
      @include('admin.type_lichnostis.partials.form')

    </form>
  </div>
</div>

@endsection
