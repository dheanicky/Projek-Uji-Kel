@extends('layouts.template')

@section('content')
    <div class="jumbotron p-4 bg-light mt-5">
        <div class="container"> 
            <h1 class="display-4">Selamat Datang, .</h1>
            <p class="lead">Jangan lupa untuk mengecek informasi secara berkala ya!</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
              <div class="card h-500 w-500 mb-50" style="">
                <div class="card-body">
                  <h5 class="card-title">Surat Keluar</h5>
                  <p class="card-text" style="margin-top: 11%; font-size: 1.5rem;">
                    <i class="fi fi-rr-envelope-open-text" style="margin-right: 20px;"></></i>
                    1
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 w-60 mb-1">
                <div class="card-body">
                  <h5 class="card-title">klasifikasi Surat</h5>
                  <p class="card-text" style="margin-top: 10%; font-size: 1.5rem;">
                    <i class="fi fi-rr-envelope-open-text" style="margin-right:20px;"></i>
                    4
                  </p>
                </div>
              </div>
            </div>
        </div>
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
              <div class="card h-100 w-100 mb-3">
                <div class="card-body">
                  <h5 class="card-title">Staff Tata Usaha</h5>
                  <p class="card-text" style="margin-top: 10%; font-size: 1.5rem;">
                    <i class="fi fi-sr-users" style="margin-right:20px;"></i>
                    2
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 w-60 mb-1">
                <div class="card-body">
                  <h5 class="card-title">Guru</h5>
                  <p class="card-text" style="margin-top: 10%; font-size: 1.5rem;">
                    <i class="fi fi-sr-users" style="margin-right:20px;"></i>
                    3
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .jumbroton.py-2.px-3 h4 p{
        color: black;
    }
</style>