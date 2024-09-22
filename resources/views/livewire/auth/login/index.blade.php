<!-- resources/views/livewire/auth/login/index.blade.php -->
@extends('components.layouts.app')

@section('content')
    <div class="container-fluid min-vh-100 d-flex p-0 m-0">
        <!-- Left Side: Form with z-index lowest -->
        <div class="col-md-6 d-flex align-items-center justify-content-center container-awal">
            <div class="p-5">
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/auth/img/logo.png') }}" alt="Logo" class="mb-3">
                    <h1 class="fw-bold">Selamat Datang <span>👋</span></h1>
                    <p class="text-muted">Silahkan Masukan Email dan Password!</p>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email"
                            wire:model="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi"
                            wire:model="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-end mb-3">
                        <a href="#" class="text-decoration-none">Lupa Password?</a>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-gradient btn-lg text-white">Login</button>
                        <button class="btn btn-outline-gradient btn-lg">Daftar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Side: Fullscreen Background Image -->
        <div class="col-md-6 p-0 d-none d-md-flex position-relative">
            <!-- Gradient Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100 overlay-bg"></div>

            <!-- Background Image -->
            <img src="{{ asset('assets/auth/img/bg.jpg') }}" alt="bg"
                class="img-fluid h-100 w-100 position-absolute img-bg">

            <!-- Overlay Text -->
            <p class="copyright mb-1">Copyright © 2024 All rights reserved.</p>
            <div class="text-light overlay-text rounded-box text-center">
                <h3 class="overlay-title mb-0">Chase Your Dream with us!</h3>
            </div>

            <!-- Text Outside Rounded Box -->
            <div class="text-outside-box position-relative w-100 text-center mt-3">
                <p class="mb-0 text-black">
                    with <i class="fas fa-heart love-icon"></i> <b>Universitas Katolik Widya Mandala Surabaya</b>
                </p>
            </div>

        </div>
    @endsection
