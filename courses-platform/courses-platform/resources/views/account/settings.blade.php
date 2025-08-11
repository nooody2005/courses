@extends('layouts.app')

@section('title', 'Update Profile')

@section('styles')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }
    .form-container {
        max-width: 500px;
        margin: 50px auto;
        background: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
    }
    .profile-image {
        text-align: center;
        margin-bottom: 20px;
    }
    .current-image {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 3px solid #ddd;
        object-fit: cover;
        margin-bottom: 10px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-weight: bold;
    }
    input[type="text"], input[type="password"], input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 2px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        box-sizing: border-box;
    }
    input:focus {
        outline: none;
        border-color: #007bff;
    }
    .submit-btn {
        background-color: #4f8cff;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        margin-top: 10px;
    }
    .submit-btn:hover {
        background-color: #007bff;
    }
    .password-hint {
        font-size: 12px;
        color: #666;
        margin-top: 5px;
    }
    .alert { padding: 15px; margin-bottom: 20px; border-radius: 4px; }
    .alert-success { color: #155724; background-color: #d4edda; }
    .alert-danger { color: #721c24; background-color: #f8d7da; }
</style>
@endsection

@section('content')
<div class="form-container">
    <h2>Update Profile</h2>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('account.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="profile-image">
            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Image" class="current-image">
        </div>
        <div class="form-group">
            <label for="profile_picture">Change Profile Image</label>
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*">
        </div>

        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" id="full_name" name="full_name" value="{{ old('full_name', $user->full_name) }}" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" required>
        </div>
        
        <hr style="margin: 2rem 0;">
        <div class="form-group">
            <label for="current_password">Current Password</label>
            <input type="password" id="current_password" name="current_password">
             <div class="password-hint">Required only if you want to change your password.</div>
        </div>
        <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" id="password" name="password">
            <div class="password-hint">Leave blank if you don't want to change it.</div>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        
        <button type="submit" class="submit-btn">Update Profile</button>
    </form>
</div>
@endsection