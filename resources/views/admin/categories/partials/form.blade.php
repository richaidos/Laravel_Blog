<label for="">Статус</label>
<select class="form-control" name="published">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if($category->published == 1) selected="" @endif>Опубликовано</option>
        @else
        <option value="0"> Не опубликовано</option>
        <option value="1"> Опубликовано</option>
    @endif
</select>
<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{optional($category)->title}}" required="">

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{optional($category)->slug}}" readonly="">

<label for="">Родительская категория</label>

<select class="form-control" name="parent_id">
    <option value="0">-- без родительской категории --</option>
    @include('admin.categories.partials.categories', ['categories' => $categories ])
</select>
@if(isset($category->id))
    @if(isset($createdbyuser->name))
        <p>Created by: {{ $createdbyuser->name }}</p>
    @endif
    @if(isset($modifiedbyuser->name))
        <p>Modified by: {{ $modifiedbyuser->name }}</p>
    @endif
@endif

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
