<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Quiz Page</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   <x-navbar name={{$name}}></x-navbar>
   
   <div class="bg-gray-100 flex flex-col items-center min-h-screen  pt-5">
   <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
    @if(!session('quizDetails'))
   <!-- <div class="bg-green-800 text-white pl-5">{{session('category')}}</div> -->
   
        <h2 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>
         <!-- @error('user')
                <div class="text-red-500">{{$message}}</div>
                @enderror -->
        <form action="/add-quiz" method="get" class="space-y-4">
            <!-- @csrf -->
            <div>
                <input type="text" placeholder ="Enter quiz name" name="quiz" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none
                ">
                <!-- @error('category')
                <div class="text-red-500">{{$message}}</div>
                @enderror -->
            </div>
             <div>
                <select type="text"  name="category_id" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none
                ">
                @foreach($categories as $category)
                <option value={{$category->id}} >{{$category->name}}</option>
                @endforeach
            </select>
                <!-- @error('category')
                <div class="text-red-500">{{$message}}</div>
                @enderror -->
            </div>
            <button type="submit" class="w-full bg-blue-500 rounded-xl py-2 px-4 text-white">Add</button>
        </form>
        @else
        <span class="text-green-500 font-bold">Quiz: {{session('quizDetails')->name}}</span>
         <h2 class="text-2xl text-center text-gray-800 mb-6">Add MCQs</h2>
         <form action="" method="get"  class="space-y-4">
            <div>
                <textarea type="text" placeholder ="Enter your question" name="quiz" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none
                "></textarea>
            </div>
            <div>
                <input type="text" placeholder ="Enter first option" name="quiz" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none
                ">
            </div>
            <div>
                <input type="text" placeholder ="Enter second option" name="quiz" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none
                ">
            </div>
            <div>
                <input type="text" placeholder ="Enter third option" name="quiz" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none
                ">
            </div>
            <div>
                <input type="text" placeholder ="Enter forth option" name="quiz" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none
                ">
            </div>
            <div>
                <select name="right answer" class="w-full py-2 px-4 border border-gray-300 rounded-xl focus:outline-none
                ">
                    <option>Select Right Answer</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-500 rounded-xl py-2 px-4 text-white">Add More</button>
            <button type="submit" class="w-full bg-green-500 rounded-xl py-2 px-4 text-white">Add and Submit</button>
         </form>
        @endif
    </div>
    
    <!-- <div class="w-200"> 
        <h1 class="text-2xl text-blue-500">Category List</h1>
        <ul class="border border-gray-200">
            <li class="p-2 font-bold">
                <ul class="flex justify-between">
                    <li class="w-30">S.No.</li>
                    <li class="w-70">Name</li>
                    <li class="w-70">Creator</li>
                    <li class="w-30">Action</li>
                </ul>
            </li>
            
            @foreach($categories as $category)
            <li class="even:bg-gray-300 p-2">
                <ul class="flex justify-between">
                    <li class="w-30">{{$category->id}}</li>
                    <li class="w-70">{{$category->name}}</li>
                    <li class="w-70">{{$category->creator}}</li>
                    <li class="w-30"><a href="/category/delete/{{$category->id}}"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"/></svg></a></li>
                </ul>
            </li>
            @endforeach
        </ul>
    </div> -->
    </div>
</body>
</html>