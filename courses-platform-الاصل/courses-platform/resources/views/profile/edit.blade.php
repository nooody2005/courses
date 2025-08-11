@extends('layouts.app')

@section('title', 'Profile Settings')

@section('content')
<div class="container" style="max-width: 800px; margin: 2rem auto; padding: 1rem;">
    
    <h1 style="text-align: center; margin-bottom: 2rem;">Profile Settings</h1>

    {{-- Update Profile Information Form --}}
    <div style="background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 2rem;">
        @include('profile.partials.update-profile-information-form')
    </div>

    {{-- Update Password Form --}}
    <div style="background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 2rem;">
        @include('profile.partials.update-password-form')
    </div>

    {{-- Delete Account Form --}}
    <div style="background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        @include('profile.partials.delete-user-form')
    </div>

</div>
@endsection