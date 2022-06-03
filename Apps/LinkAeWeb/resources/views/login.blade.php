<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <script src="https://cdn.tailwindcss.com"></script>
    <head>
    <body class="min-h-screen min-w-screen flex flex-col" style="background-color: #FF7400">
    <div class=" flex flex-col my-auto mx-auto text-center drop-shadow-md gap-y-5">
        <div class="flex flex-row gap-x-3 place-items-center justify-center">
            <img src="{{url('/images/logo.png')}}" alt="logo">
            <p class="text-white text-5xl">LinkAe</p>
        </div>
        <form action="{{ url('/login') }}" method="post" class="grid gap-y-6 bg-white border-black p-8 w-[300px] rounded" id="login-box">
            @csrf
            <p class="font-semibold" style="color: #FF7400">Login</p>
            <input type="text" class="px-1 rounded-sm" id="username" name="username" placeholder="username">
            <input type="password" class="px-1 rounded-sm" id="password" name="password" placeholder="password">
            <button type="submit" class="mx-auto text-sm font-semibold w-[100px] h-[40px]" style="color: #FF7400; border: solid 1px #FF7400; border-radius: 10px;" id="submit-button">Submit</button>
        </form>
    </div>
        <!-- <div class="flex justify-center min-h-screen" style="background-color: #FF7A00">
            <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg rounded">
                <h3 class="text-2xl font-bold text-center">Login to your account</h3>
                <form action="">
                    <div class="mt-4">
                        <div>
                            <label class="block" for="email">Email<label>
                                    <input type="text" placeholder="Email"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="mt-4">
                            <label class="block">Password<label>
                                    <input type="password" placeholder="Password"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="flex items-baseline justify-between">
                            <button class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
                            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->
    <body>
</html>
