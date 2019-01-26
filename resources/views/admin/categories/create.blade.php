@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr>
        <form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
            {{csrf_field()}}
            @include('admin.categories.partials.form', ['categories'=>$categories ])
        </form>

    </div>

@endsection