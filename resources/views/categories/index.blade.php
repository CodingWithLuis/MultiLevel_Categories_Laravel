@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categorias</div>

                <div class="card-body">
                    <a href="{{ route('categories.create') }}" class="btn btn-success">
                        Nueva Categoria
                    </a>

                    <h3 class="mt-3">Listado de Categorias</h3>
                    <hr>

                    <ul>
                        @forelse ($categories as $category)
                        <li>{{ $category->name }}</li>

                        <ul>
                            @foreach ($category->children_categories as $children_categories)
                            @include('categories.children_categories', ['children_categories' => $children_categories])
                            @endforeach

                        </ul>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
