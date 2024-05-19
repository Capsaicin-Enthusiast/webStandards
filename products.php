<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - Products</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-white">
    <?php
    include 'nav.php';
    ?>
    </header>
    
    <main class="container mx-auto py-12">
        <section id="products" class="px-4">
            <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Our Products & Services</h1>
            <p class="text-lg text-gray-600 mb-8 text-center">Discover our range of premium products to support your fitness journey.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="img/protein.webp" alt="Containers of Whey Protein Powder">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Protein Powder</div>
                        <p class="text-gray-1000 text-base">Our whey protein powder is formulated to fuel your muscles and aid in recovery after intense workouts. Made with high-quality whey protein isolate, it provides essential amino acids for muscle growth and repair.</p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="img/creatine.avif" alt="Bottles and tubs of Creatine">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Creatine</div>
                        <p class="text-gray-1000 text-base">Boost your strength and power with our creatine monohydrate supplement. Scientifically proven to enhance performance, creatine helps increase muscle mass and improve athletic performance during high-intensity exercises.</p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="img/vitamins.jpg" alt="Vitamin capsules, herbs, a bottle of oil, and mortars and pestles">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Vitamins and Minerals</div>
                        <p class="text-gray-1000 text-base">Support your overall health and well-being with our vitamins and minerals. Packed with essential vitamins and minerals, they help fill nutritional gaps in your diet, promote immune function, and enhance energy levels.</p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="img/BCAA.jpg" alt="Bottles of BCAA supplements, with 'BCAA' written on them">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">BCAA's</div>
                        <p class="text-gray-1000 text-base">Maximize your fitness results with our premium Branched-Chain Amino Acids (BCAAs) supplement. Formulated to support muscle recovery and growth, our BCAAs provide essential amino acids Leucine, Isoleucine, and Valine in optimal ratios to fuel your workouts and accelerate recovery.</p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="img/preworkout.png" alt="Tubs and packets of Preworkout">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Pre-workout</div>
                        <p class="text-gray-1000 text-base">Get ready to crush your fitness goals with our high-performance Pre-Workout supplement. Designed to boost energy, focus, and endurance, our pre-workout formula delivers a potent blend of ingredients including caffeine, beta-alanine, and creatine to optimize your workout intensity and performance.</p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="img/others.avif" alt="A myriad of containers of different supplements.">
                    <div class="px-6 py-4">
                        <button onclick="location.href='shop.php'" class="btn-shop flex items-center justify-center w-full bg-blue-500 hover:bg-blue-1000 text-white font-bold py-2 px-4 rounded">
                            Shop Now <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>
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
