<!-- resources/views/livewire/auth/login/index.blade.php -->
@extends('components.layouts.app')

@section('content')
    {{-- <div class="container-fluid min-vh-100 d-flex p-0 m-0">
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

        </div> --}}

        <div style="display: flex; width: 100%; height: 100vh;">
            <!-- First container (the form content) -->
            <div style="width: 50%; display: flex; justify-content: center; align-items: center; background-color: white; box-shadow: 10px 0 20px -5px rgba(0, 0, 0, 0.3);">
                <div>
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/auth/img/logo.png') }}" alt="Logo" class="mb-3">
                        <h1 class="fw-bold">Selamat Datang <span>👋</span></h1>
                        <p class="text-muted">Silahkan Masukan Email dan Password!</p>
                    </div>
                    <form wire:submit.prevent="submit">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan Email" wire:model="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi" wire:model="password">
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
        
            <!-- Second container (background image) -->
            <div class="parent-container" style="width: 50%; position: relative; background-image: url('{{ asset('assets/auth/img/bg2.jpg') }}'); background-size: cover; background-position: center; box-shadow: -10px 0 20px -5px rgba(0, 0, 0, 0.3);">
                <!-- Background Image -->
                {{-- <img src="{{ asset('assets/auth/img/bg2.jpg') }}" alt="bg" style="height: 100%; width: 100%; position: flex; top: 0; left: 0; object-fit: cover;"> --}}
            
                <!-- Overlay Text (Centered near bottom) -->
                <div class="text-light overlay-text rounded-box" style="position: absolute; bottom: 50px; left: 50%; transform: translateX(-50%); text-align: center; background: rgba(255, 255, 255, 0.5); padding: 10px 20px; border-radius: 10px;">
                    <h3 class="overlay-title mb-0" style="font-size: 24px; font-weight: bold;">Chase Your Dream with us!</h3>
                </div>
            
                <!-- Text Outside Rounded Box (at bottom) -->
                <div class="text-outside-box" style="position: absolute; bottom: 45px; left: 0; width: 100%; text-align: center; padding: 10px 0; z-index: 2;">
                    <p class="mb-0 text-black">
                        with <i class="fas fa-heart love-icon"></i> from <b>Universitas Katolik Widya Mandala Surabaya</b>
                    </p>
                </div>

                <!-- Copyright Text (Top) -->
                <p class="copyright mb-1" style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); color: #000; font-size: 14px; padding: 5px 10px; border-radius: 5px;">
                    <b>Copyright</b> © 2024 All rights reserved.
                </p>
            </div>
            
        </div>
        
    @endsection
