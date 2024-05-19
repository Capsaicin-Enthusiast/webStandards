<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="min-h-screen flex justify-center items-center">
    <div class="bg-white shadow-md rounded-md p-8 max-w-md w-full">
        <h5 class="text-center text-lg font-semibold mb-6">Sign In</h5>
        <form id="sign_in" class="form" method="post" name="login">
            <div class="mb-6">
                <label for="username" class="block text-sm font-medium mb-1">Username</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="material-icons">person</i>
                    </span>
                    <input type="text" class="form-control pl-10 pr-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring focus:border-blue-300 w-full" name="username" id="username" placeholder="Username" required autofocus>
                </div>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="material-icons">lock</i>
                    </span>
                    <input type="password" class="form-control pl-10 pr-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring focus:border-blue-300 w-full" name="password" id="password" placeholder="Password" required>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg" name="submit" type="submit">Sign In</button>
            </div>
            <div class="text-center mt-3">
                <a href="register.html" class="text-blue-500 hover:underline">Don't have an account? Register here</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>