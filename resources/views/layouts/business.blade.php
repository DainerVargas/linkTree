@extends('dashboard')
@section('title', 'Profile')

@section('business')
    <div id="main" class="main">
        @livewire('business', ['user' => $user])
    </div>
@endsection
