@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="heading_container heading_center">
            <h2 class="mt-5 mb-5">Изменить роль пользователя</h2>
        </div>

        <div class="row mt-5">

            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <a href="{{ route('admin.users') }}" class="btn btn-secondary ml-5 ">Назад</a>
                    <div class="card-body">
                        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="user">Пользователь</label>
                                <input type="text" class="form-control" id="user" value="{{ $user->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="role">Роль</label>
                                <select class="form-control" id="role" name="role">
                                    @foreach($roles as $role)
                                        <option value="{{ $role }}" {{ $user->hasRole($role) ? 'selected' : '' }}>
                                            {{ ucfirst($role) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Сохранить изменения</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
@endsection

<style>
    .footer {
        margin-top: 10%; /* добавляем отступ сверху, чтобы отодвинуть footer вниз */
    }
</style>
