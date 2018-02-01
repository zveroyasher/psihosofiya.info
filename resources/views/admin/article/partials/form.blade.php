<label for="">Статус</label>
<select name="published" id="" class="form-control">
  @if (isset($artсile->id))
    <options value="0" @if ($artсile->published == 0) selected ="" @endif> Не опубликовано</options>
    <options value="1" @if ($artсile->published == 1) selected ="" @endif>Опубликовано</options>
  @else
  <option value="0">Не опубликовано</option>
  <option value="1">Опубликовано</option>
  @endif
</select>
<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок Новости" value="{{$artiсile->title or
""}}" required>

<label for="">Slug (Уникальное значение)</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация"
value="{{$artiсile->slug or ""}}" readonly="">

<label for="">Родительский тип</label>
<select name="type_lichnostis[]" multiple="" class="form-control">
  @include('admin.article.partials.type_lichnosti',['type_lichnostis'=>$artiсiles]) // первый параметр путь к шаблону ->
    // второй  переменная с колекцией родительских элементов из контролелера

</select>
<label for="">Краткое описание</label>
<textarea name="description_short" class="form-control" id="description_short"> {{$article->description_short or ""}}</textarea>
<hr />
<label for="">Полное описание</label>
<textarea name="description" class="form-control" id="description"> {{$article->description or ""}}</textarea>

<hr />
<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$artiсile->meta_title or
""}}" required>
<hr />
<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$artiсile->meta_description or
""}}" required>
<hr />
<label for="">Ключивые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключивые слова" value="{{$artiсile->meta_keyword or
""}}" required>

  <input type="submit" class="btn btn-primary" value="save">
