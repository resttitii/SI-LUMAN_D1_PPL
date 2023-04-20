@extends('layouts.app')
<!--blade => template engine Laravel-->
<!--form login-->
@php
    $title = 'Login';
    $id_page = 'auth';
@endphp

@section('content')

    <div class="container-fluid">
        <div class="row mx-2 justify-content-center align-items-start">
            <form class="col-xl-4 p-4 mb-5 position-relative rounded" style="top: 50px; background: #fff" action="{{ route('login') }}" method="POST">
            @csrf
                <div>
                    <h5 class="text-center">
                        <strong>Selamat Datang</strong> <!--login menggunakan username terdaftar dan password terdaftar-->
                    </h5>

                    <div class="mt-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Masukkan Username" class="form-control @error('username') is-invalid @enderror" style="font-size: 14px; height: 55px; border: 1px solid #ddd;">
                        @error('username')
                        <span class="text-danger" style="font-size: 13px">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password" class="form-control @error('password') is-invalid @enderror" style="font-size: 14px; height: 55px; border: 1px solid #ddd;">
                        @error('password')
                        <span class="text-danger" style="font-size: 13px">
                            {{ $message }}
                        </span>
                        @enderror
                        <p class="text-end" style="font-size: 14px"> <!--lupa password maka akan diarahkan ke halaman reset.blade.php-->
                            <a href="{{ route('password.request') }}" style="text-decoration: none">
                                Lupa Password?
                            </a>
                        </p>
                    </div>

                    <button class="btn py-2 px-4 mt-3 text-light" style="width: 100%; background: #c19a79">
                        <strong>Masuk</strong>
                    </button>
                    <p class="text-center mb-0 mt-2" style="font-size: 13px">Belum punya akun? <a href="{{ route('register') }}">Daftar di sini.</a></p> <!--jika belum mempunyai akun maka akan diarahkan ke halaman register.blade.php-->
                </div>
            </form>
        </div>
    </div>

@endsection
