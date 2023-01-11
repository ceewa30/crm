<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <nav class="bg-gray-100 px-8 py-4 text-gray-700 flex items-center justify-between">
    <span class="font-bold text-2xl pl-8">CRM</span>
    <span><i class="fa-solid fa-user text-[19px] text-blue-600 hover:opacity-60"></i>Hello, @yield('name')</span>
   </nav>
   <section class="p-12 mx-auto max-w-6xl text-gray-800"> 
        @yield('content')
   </section> 
</body>
</html>