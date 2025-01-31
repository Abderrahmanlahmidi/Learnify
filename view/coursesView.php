<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/input.css">
    <link rel="stylesheet" href="/css/output.css">
    <title>Courses</title>
</head>
<body class="bg-gray-100">
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                Learnify
            </div>
            <!-- Navigation Links -->
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="text-gray-300 hover:text-white">Home</a>
                <a href="#services" class="text-gray-300 hover:text-white">Services</a>
                <a href="#about" class="text-gray-300 hover:text-white">About</a>
                <a href="#contact" class="text-gray-300 hover:text-white">Contact</a>
            </nav>
            <!-- Buttons -->
            <div class="space-x-4">
                <a href="/login" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</a>
                <a href="/register" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-600">Register</a>
            </div>
            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-300 focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-500 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Learnify</h1>
            <p class="text-lg mb-6">Discover the best courses to enhance your skills and achieve your goals.</p>
            <a href="#courses" class="bg-white text-blue-500 px-6 py-3 rounded font-bold hover:bg-gray-200">Explore Courses</a>
        </div>
    </section>
      <section id="course-list" class="container mx-auto mt-10 px-6">
          <h2 class="text-3xl font-bold text-gray-800 mb-6">Available Courses</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              <!-- Replace the example data with dynamic data -->
              <?php foreach($courses as $course){ ?>
              <div class="bg-white shadow-md rounded-lg p-6">
                  <h3 class="text-xl font-bold text-gray-800 mb-2"><?= $course['titre'] ?></h3>
                  <p class="text-gray-600 mb-4"><?= $course['description_course'] ?></p>
                  <p class="text-gray-600 mb-4"><strong>Category:</strong> <?= $course['categorie'] ?></p>
                  <p class="text-gray-600 mb-4"><strong>Tags:</strong> <?= $course['tags'] ?></p>
                  <p class="text-gray-600 mb-4"><strong>Instructor:</strong><?= $course['enseignant'] ?></p>
                  <!-- <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Learn More</a> -->
              </div>
              <?php };?>
          </div>
      </section>
    </main>
    <footer class="bg-gray-800 text-white py-6 mt-10">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2025 Learnify. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>