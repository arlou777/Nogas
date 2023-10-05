@extends('layouts.example')


@section('title')
 Navigatu 
@endsection


@section('content')

    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    


    <div class="container py-5">
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="p-4 bg-white shadow rounded">
              <div class="max-w-xl">
                @include('profile2.partials.profile_image')
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="p-4 bg-white shadow rounded">
              <div class="max-w-xl">
                @include('profile2.partials.update-profile-information-form2')
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="p-4 bg-white shadow rounded">
              <div class="max-w-xl">
                @include('profile2.partials.update-password-form2')
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="p-4 bg-white shadow rounded">
              <div class="max-w-xl">
                @include('profile2.partials.delete-user-form2')
              </div>
            </div>
          </div>
        </div>
      </div>
    

    
    @endsection

    
    @section('scripts')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endsection