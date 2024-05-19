<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - About us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-white">
    <?php
    include 'nav.php';
    ?>
    </header>
    
    <main class="container mx-auto py-8">
        <section class="flex justify-center mb-6">
            <video width="90%" controls>
                <source src="img/CANON_PREFINAL-EXAM_A.mp4" type="video/mp4">
            </video>
        </section>
        <section id="about" class="px-4">
            <h1 class="text-4xl font-bold text-gray-1000 mb-8 text-center">Meet the Team</h1>
            <p class="text-lg text-gray-800 mb-8">Hey there! we are TEST.</p>
            <p class="text-lg text-gray-800 mb-8">Our mission is to exceed industry standards by consistently providing top-quality products for your fitness journey.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="img/photo.jpg" alt="CEO Photo">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Louis</div>
                        <p class="text-gray-1000 text-base">Chief Executive Officer</p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="img/photo.jpg" alt="CEO Photo">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Jasper</div>
                        <p class="text-gray-1000 text-base">Chief Technology Officer</p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="img/photo.jpg" alt="CEO Photo">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Cañon</div>
                        <p class="text-gray-1000 text-base">Marketing Director</p>
                    </div>
                </div>
            </div>
            <p class="text-lg text-gray-800 mt-8">Together, we envision a future where every scoop of our protein powder fuels not just physical strength, but also dreams and aspirations. Our team is dedicated to crafting the finest protein powder in the industry, not just for today, but for generations to come.</p>
        </section>
    </main>

    <footer class="bg-gray-900 text-white text-center py-4">
        <p>&copy; <span id="currentYear" class="text-gray-400"></span> Test Website</p>
    </footer>
    
    <script>
        document.getElementById("currentYear").innerHTML = new Date().getFullYear();
    </script>
</body>
</html>
