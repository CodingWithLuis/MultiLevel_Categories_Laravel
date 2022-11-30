@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Category') }}</div>

                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Categoría</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
                        </div>

                        <div class="mb-3">
                            <label for="category_id" class="form-label">Categoría Padre</label>
                            <select name="category_id" class="form-control">
                                <option value="">Seleccione una categoría</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
