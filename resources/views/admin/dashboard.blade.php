@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <p><span class="badge badge-primary">Категорий 0</span></p>
            </div>
            <div class="col-sm-3">
                <p><span class="badge badge-secondary">Материалов 0</span></p>
            </div>
            <div class="col-sm-3">
                <p><span class="badge badge-secondary">Посетителей 0</span></p>
            </div>
            <div class="col-sm-3">
                <p><span class="badge badge-secondary">Сегодня 0</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('admin.category.create')}}" class="btn btn-block btn-primary">Создать категорию</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Категория первая</h4>
                        <p class="list-group-item-text">
                            Кол-во материалов
                        </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-primary">Создать материал</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Материал первый</h4>
                    <p class="list-group-item-text">
                        Категории
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection
