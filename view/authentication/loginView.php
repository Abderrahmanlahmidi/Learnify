<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/input.css">
    <link rel="stylesheet" href="/css/output.css">
    <title>Login</title>
</head>
<body class="bg-gray-100 flex justify-center items-center h-[100vh]">
    <section class="bg-gray-100 py-20">
        <div class="container mx-auto">
            <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Login</h2>
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label for="email" class="block text-gray-600 mb-2">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                            placeholder="Enter your email" 
                            required
                        >
                    </div>
                    <div>
                        <label for="password" class="block text-gray-600 mb-2">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                            placeholder="Enter your password" 
                            required
                        >
                    </div>
                    <button 
                        type="submit" 
                        class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
