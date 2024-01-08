@extends('layouts.template')

@section('content')

<div class="card">
        <div class="card-body">
            <form action="{{ route('letterType.update', $letterType['id']) }}" method="POST">
                @csrf
                @method('PATCH')

                @if($errors->any())
                <ul class="alert alert-danger p-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Kode Surat</label>
                    <input type="text" class="form-control" id="name" name="kode_surat" value="{{ $letterType['letter_code'] }}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Klasifikasi Surat</label>
                    <input type="text" class="form-control" id="klasifikasiSurat" name="klasifikasi_surat" value="{{ $letterType['name_type']}}">
                </div>
                <!-- <div class="mb-3"> -->
                    <!-- <label for="name" class="form-label">Surat Tertaut</label>
                    <input type="text" class="form-control" id="suratTertaut" name="surat_tertaut" >
                </div> -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary float-end">Edit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Form edit data staff tata usaha -->
@endsection