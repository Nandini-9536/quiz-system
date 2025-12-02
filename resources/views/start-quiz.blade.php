<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Categories Page</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   <x-user-navbar></x-user-navbar>
  
   <div class="bg-gray-100 flex flex-col items-center min-h-screen  pt-5">
  
        <h1 class="text-4xl text-center text-green-800 mb-6 font-bold">Quiz Name : {{$quizName}} </h1>
        <h2 class="text-lg text-center text-green-800 mb-6 font-bold">This Quiz contains {{$quizCount}} Questions and no limit to attempt this Quiz</h2>
        <h1 class="text-2xl text-center text-green-800 mb-6 font-bold">Good Luck!</h1>
    <a href="/user-signup" class=" bg-green-700 rounded-md px-4 py-2 my-5 text-white font-bold">Login/SignUp for Start Quiz</a>
    </div>
</body>
</html>