@extends('layouts.template')

@section('content')

    <h2>Data kalsifikasi Surat</h2>

    <div class="card">
        <div class="card-body">
            <a href="{{ Route('letterType.create')}}" class="btn btn-primary">Tambah</a>
            @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Surat</th>
                        <th scope="col">Klasifikasi Surat</th>
                        <th scope="col">Surat Tertaut</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @php($number = 1)
                    @foreach ($letterType as $value)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td>{{ $value->letter_code }}</td>
                        <td>{{ $value->name_type }}</td>
                        <td>0</td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <a href="{{ route('letterType.edit', $value->id )}}" 
                                class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ route('letterType.delete', $value->id)}}" method="POST">
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