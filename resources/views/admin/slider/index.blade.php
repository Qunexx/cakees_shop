@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="heading_container heading_center">
            <h2>Управление слайдерами</h2>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mb-3">Назад</a>
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Добавить новый слайд</h4>
                        <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Заголовок</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Изображение</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-12">
                <h4 class="mb-3">Текущие слайды</h4>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Заголовок</th>
                        <th>Описание</th>
                        <th>Изображение</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $slider)
                        <tr>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->description }}</td>
                            <td><img src="{{ asset('images/' . $slider->image) }}" alt="{{ $slider->title }}"
                                     style="width: 100px;"></td>
                            <td>
                                <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-warning">Изменить</a>
                                <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST"
                                      onsubmit="return confirm('Вы уверены, что хотите удалить этот слайд?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
