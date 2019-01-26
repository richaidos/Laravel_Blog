@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr>
        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать категорию </a>

        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Наименование</th>
                <th>Публикация</th>
                <th class="text-right">Действие</th>
            </thead>
            <tbody>
                @forelse($categories as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->title}}</td>
                        <td>{{$cat->published}}</td>
                        <td class="text-right">
                            <form method="post" onsubmit="if(confirm('Are you sure DELETE?')){return true}else{return false}" action="{{route('admin.category.destroy', $cat)}}">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <a class="btn btn-dark" href="{{route('admin.category.edit', $cat)}}"><i class="fa fa-edit"></i>Edit</a>
                                <button type="submit" class="btn "><i class="fa fa-trash-o"></i></button>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$categories->links()}}
                    </ul>
                </td>
            </tfoot>
        </table>
    </div>
@endsection
