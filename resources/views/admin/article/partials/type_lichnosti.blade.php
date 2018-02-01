@foreach ($type_lichnostis as $type_lichnosti)
<option value="{{$type_lichnosti->id or ""}}"
  @isset($type_lichnosti->id)

@isset($aricle->id)
  @foreach ($article->type_lichnostis as $type_lichnosti_article)
    @if($type_lichnosti->id == type_lichnosti_article->id)
      selected ="selected"

    @endif
  @endforeach

@endisset

  >
  {!! $delimiter or "" !!} {{$type_lichnosti->title or ""}}
</option>
@if (count($type_lichnosti->children)>0) //проверяем вложенность, если да
//то опять вызываем(вложинность может быть сколько угодно)
  @include('admin.article.partials.type_lichnosti',
   [
    'type_lichnostis'=> $type_lichnosti->children,
    'delimiter' => ' - ' .$delimiter
  ])

@endif

@endforeach
