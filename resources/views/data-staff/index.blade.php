@extends('layouts.template')

@section('content')

    <h2>Data Staff TU</h2>

    <div class="card">
        <div class="card-body">
            <a href="{{ Route('staff.create')}}" class="btn btn-primary">Tambah</a>

            @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @php($number = 1)
                    @foreach ($staff as $value)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->role }}</td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <a href="{{ route('staff.edit', $value->id )}}" 
                                class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ route('staff.delete', $value->id)}}" method="POST">
                                    @csrf 
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection