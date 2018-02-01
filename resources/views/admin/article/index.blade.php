@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  @component('admin.components.breadcrumb')
    @slot('title') Список новостей @endslot
    @slot('parent') Главная @endslot
    @slot('active') новости @endslot
  @endcomponent
  <hr>

  <a href="{{route('admin.article.create')}} " class="btn btn-primary pull-right">
    <i class="fa fa-plus-square-o">создать новость</i></a>
    <table class="table table-striped">
      <therd>

        <th>Тип личностей</th>
        <th>публикация</th>
        <th class="text-right">Действие</th>
          </therd>
          <tbody>
          @forelse($articles as $article)
          <tr>
            <td> {{$article->title}}  </td>
            <td> {{$article->publisher}}  </td>
            <td class="text-right">
              <form action="{{route('admin.article.destroy',$article)}}" onsubmit="if(confirm('Удалить')){ return true} else{ return false}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field()}}
                  <a href="{{route('admin.article.edit',$articles)}}"><i class="fa-pencil-square-o" >Редактирование</i></a>
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
              {{$articles->links()}}
            </ul>
          </td>
        </tr>

      </tfoot>



      </tbody>
    </table>

</div>
@endsection
