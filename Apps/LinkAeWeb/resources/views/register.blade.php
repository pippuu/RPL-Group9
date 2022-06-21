<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <head>
    <body class="min-h-screen min-w-screen flex flex-col" style="background-color: #FF7400">
    @if ($errors->any())
    <div class="flex justify-between alert alert-danger alert-dismissible fade show" role="alert">
        <div>
        @foreach ($errors->all() as $error)
            <strong>
                <li>{{ $error }}</li>  
            </strong>
        @endforeach
        </div>
        <button type="button" data-bs-dismiss="alert" aria-label="Close">Close</button>
    </div>
    @endif
    @if(session('message'))
    <div class="flex justify-between alert alert-danger alert-dismissible fade show" role="alert">
        <div>
            <strong>
                {{ session('message')}}
            </strong>
        </div>
        <button type="button" data-bs-dismiss="alert" aria-label="Close">Close</button>
    </div>
    @endif
    <div class=" flex flex-col my-auto mx-auto text-center drop-shadow-md gap-y-5">
        <form action="/register" method="post" class="grid gap-y-6 bg-white border-black p-8 w-[350px] rounded" id="login-box">
            @csrf
            <p class="font-semibold" style="color: #FF7400">Create an account</p>
            <div class="flex flex-row justify-between">
                <label> Nama </label>
                <input type="text" class="w-[190px] border-2 rounded-lg" id="nama" name="nama" placeholder="">
            </div>
            <div class="flex flex-row justify-between">
                <label> Username </label>
                <input type="text" class="w-[190px] border-2 rounded-lg" id="username" name="username" placeholder="">
            </div>
            <div class="flex flex-row justify-between">
                <label for="">Password</label>
                <input type="password" class="w-[190px] border-2 rounded-lg" id="password" name="password" placeholder="">
            </div>
            <button type="submit" class="mx-auto text-sm font-semibold w-[100px] h-[40px]" style="color: #FF7400; border: solid 1px #FF7400; border-radius: 10px;" id="register-button">Register</button>
        </form>
        <button type="submit" onclick="window.location='/login'" class="mx-auto text-sm font-semibold w-[150px] h-[40px] bg-white" style="color: #FF7400; border-radius: 10px;" id="register-button">Back to login</button>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <body>
</html>
