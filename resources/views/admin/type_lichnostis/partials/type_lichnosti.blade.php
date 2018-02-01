@foreach ($type_lichnostis as $type_lichnostis_list)
<option value="{{$type_lichnostis_list->id or ""}}"
  @isset($type_lichnostis_list->id)

    @if ($type_lichnosti->parent_id == $type_lichnostis_list->id)

      selected=""
    @endif

    @if($type_lichnosti->id == $type_lichnostis_list->id)

      hidden=""
    @endif
    @endisset

  >
  {!! $delimiter or "" !!} {{$type_lichnostis_list->title or ""}}
</option>
@if (count($type_lichnosti->children)>0) //проверяем вложенность, если да
//то опять вызываем(вложинность может быть сколько угодно)
  @include('admin.type_lichnostis.partials.type_lichnosti',
   [
    'type_lichnostis'=> $type_lichnostis_list->children,
    'delimiter' => ' - ' .$delimiter
  ])

@endif

@endforeach
