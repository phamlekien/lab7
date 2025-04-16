<!-- resources/views/profiles/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Your Profile') }}</div>
            <div class="card-body">
                @if ($user->avatar)
                    <img src="{{ asset('storage/avatars/' . $user->avatar) }}" alt="Avatar" class="img-thumbnail mb-3">
                @endif
                <h5>{{ $user->name }}</h5>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                @if ($user->phone)
                    <p><strong>Phone:</strong> {{ $user->phone }}</p>
                @endif
                @if ($user->bio)
                    <p><strong>Bio:</strong> {{ $user->bio }}</p>
                @endif
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>
@endsection
