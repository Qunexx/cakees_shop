@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="heading_container heading_center">
            <h2>Изменить слайд</h2>
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
                        <h4 class="card-title">Изменить слайд</h4>
                        <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Заголовок</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="{{ $slider->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <textarea class="form-control" id="description"
                                          name="description">{{ $slider->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Изображение</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <img src="{{ asset('images/' . $slider->image) }}" alt="{{ $slider->title }}"
                                     style="width: 100px;" class="mt-3">
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
