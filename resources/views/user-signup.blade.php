<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Signup</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-user-navbar></x-user-navbar>
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
        <h2 class="text-2xl text-center text-gray-800 mb-6">User Signup</h2>
         @error('user')
                <div class="text-red-500">{{$message}}</div>
                @enderror
        <form action="/user-signup" method="post" class="space-y-4">
            @csrf
            <div>
                <label for="" class="text-gray-600 mb-1">User Name</label>
                <input type="text" placeholder ="Enter user name" name="name" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none
                ">
                @error('name')
                <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="" class="text-gray-600 mb-1">User Email</label>
                <input type="text" placeholder ="Enter user email" name="email" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none
                ">
                @error('email')
                <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="" class="text-gray-600 mb-1">Password</label>
                <input type="password" placeholder= "Enter user password" name="password" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none">
                @error('password')
                <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="" class="text-gray-600 mb-1">Confirm Password</label>
                <input type="password" placeholder= "Confirm user password" name="password_confirmation" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none">
            </div>
            <button type="submit" class="w-full bg-blue-500 rounded-xl py-2 px-4 text-white">Signup</button>
        </form>
    </div>
</div>  
</body>
</html>