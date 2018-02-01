@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  @component('admin.components.breadcrumb')
    @slot('title') Список типов @endslot
    @slot('parent') Главная @endslot
    @slot('active') типы @endslot
  @endcomponent
  <hr>

  <a href="{{route('admin.type_lichnosti.create')}} " class="btn btn-primary pull-right">
    <i class="fa fa-plus-square-o">Создать тип</i></a>
    <table class="table table-striped">
      <therd>

        <th>Тип личностей</th>
        <th>публикация</th>
        <th class="text-right">Действие</th>
          </therd>
          <tbody>
          @forelse($type_lichnostis as $type_lichnosti)
          <tr>
            <td> {{$type_lichnosti->title}}  </td>
            <td> {{$type_lichnosti->publisher}}  </td>
            <td class="text-right">
              <form action="{{route('admin.type_lichnosti.destroy',$type_lichnosti)}}" onsubmit="if(confirm('Удалить')){ return true} else{ return false}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field()}}
                  <a href="{{route('admin.type_lichnosti.edit',$type_lichnosti)}}"><i class="fa-pencil-square-o" >Редактирование</i></a>
                <button type="sudmit"  class="btn"><i class="fa fa-trash">del</i></button>
              </form>
            </td>
            <td></td>
          </tr>
          @empty
          <tr>
            <td colspan="3" class="text-center"> данные отсуцтвуют</td>
          </tr>

          @endforelse
      <tfoot>
        <tr>
          <td colspan="3">
            <ul class="pagination pull-right">
              {{$type_lichnostis->links()}}
            </ul>
          </td>
        </tr>

      </tfoot>



      </tbody>
    </table>

</div>
@endsection
