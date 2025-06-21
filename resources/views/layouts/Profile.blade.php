@extends('dashboard')
@section('title', 'Profile')

@section('profile')
    <div id="main" class="main">
        <div class="conte_form">
            <form class="form">
                <p class="title">Actualiza tus datos </p>
                <div class="flex">
                    <label>
                        <input name="name" class="input" type="text" placeholder="" value="{{ old('name'). $user->name }}">
                        <span>Name</span>
                    </label>

                    <label>
                        <input name="email" class="input" type="email" placeholder="" value="{{ old('name'). $user->email }}">
                        <span>Email</span>
                    </label>
                </div>
                <div class="flex">
                    <label>
                        <input class="input" type="password" placeholder="" required="">
                        <span>Password</span>
                    </label>
                    <label>
                        <input class="input" type="password" placeholder="" required="">
                        <span>Confirm password</span>
                    </label>
                </div>
                <button class="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
