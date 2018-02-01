<label for="">Статус</label>
<select name="published" id="" class="form-control">
  @if (isset($type_lichnosti->id))
    <options value="0" @if ($type_lichnosti->published == 0) selected ="" @endif> Не опубликовано</options>
    <options value="1" @if ($type_lichnosti->published == 1) selected ="" @endif>Опубликовано</options>
  @else
  <option value="0">Не опубликовано</option>
  <option value="1">Опубликовано</option>
  @endif
</select>
<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок типа" value="{{$type_lichnosti->title or
""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация"
value="{{$type_lichnosti->slug or ""}}" readonly="">

<label for="">Родительский тип</label>
<select name="parent_id" class="form-control">
  <option value="0">-- без Родительской категории --</option>
  @include('admin.type_lichnostis.partials.type_lichnosti',['type_lichnostis'=>$type_lichnostis]) // первый параметр путь к шаблону ->
    // второй  переменная с колекцией родительских элементов из контролелера

</select>
<hr />

  <input type="submit" class="btn btn-primary" value="save">
