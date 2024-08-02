@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Manage Users</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                {{-- <th>Ảnh đại diện</th> --}}
                <th>Tên tài khoản</th>
                <th>Email</th>
                <th>Vai trò</th>
                <th>Active</th>
                <th>Trạng thái hoạt động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                
                <td>{{ $user->fullname }}</td>
                {{-- <td>
                     <!-- Hiển thị avatar -->
            @if (Auth::user()->avatar)
            <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;">
            @else
                <img src="{{ asset('images/default-avatar.png') }}" alt="Avatar" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;">
            @endif
                </td> --}}
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->active ? 'Yes' : 'No' }}</td>
                <td>
                    <form method="POST" action="{{ url('/admin/users/'.$user->id.'/toggle-active') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            {{ $user->active ? 'Hủy kích hoạt': 'Kích hoạt' }}
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
