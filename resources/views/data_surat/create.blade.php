@extends('layouts.template')

@section('content')
    <form action="{{ route('letterType.store') }}" method="POST" class="card p-5">
        @csrf
        
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div class="mb-3 row">
            <label for="price" class="col-sm-2-col-form-label" >Kode Surat :</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="kodeSurat" name="kode_surat">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-sm-2-col-form-label" >Klasifikasi Surat :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="klasifikasiSurat" name="klasifikasi_surat">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
    </form>