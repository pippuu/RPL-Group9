<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <script src="https://cdn.tailwindcss.com"></script>
    <head>
    <body>
        <!-- <div class="flex items-center justify-center p-10 gap-y-10">
            <div class="flex flex-row justify-center">
                <img src="{{asset('images/Logo.png')}}">
                <span class="my-auto"><p class="inline-block align-middle font-semibold text-white text-4xl">LinkAe</p></span>
            </div>
            <div class="container bg-white rounded" width="10px">
                <p class="inline-block align-middle font-bold" style="color:#FF7A00">Login</p>
                <div>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
            </div>
        </div> -->
        <div class="flex items-center justify-center min-h-screen" style="background-color: #FF7A00">
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
        </div>
    <body>
</html>
