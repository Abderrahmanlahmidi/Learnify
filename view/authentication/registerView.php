<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/input.css">
    <link rel="stylesheet" href="/css/output.css">
    <title>Register</title>
</head>
<body class="bg-gray-100 flex justify-center items-center h-[100vh]">
  
    <main class="container   w-[450px] px-6">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Register</h2>
            <form action="/register" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-300"
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Enter your name"
                        required
                    >
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                        Age
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-300"
                        id="age"
                        name="age"
                        type="number"
                        placeholder="Enter your age"
                        required
                    >
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-300"
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Enter your email"
                        required
                    >
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-300"
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Enter your password"
                        required
                    >
                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Register
                    </button>
                </div>
            </form>
            <div class="mt-6 flex justify-between">
                <a href="/" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to Home</a>
                <a href="/login" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Go to Login</a>
            </div>
        </div>
    </main>
</body>
</html>
