<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - How It Works</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-white">
    <?php
    include 'nav.php';
    ?>
    </header>
    
    <main>
        <section id="how-it-works" class="py-12">
            <div class="container mx-auto">
                <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">How to Use Our Products</h1>
                <p class="text-lg text-gray-600 mb-8 text-center">Here's a step-by-step guide on how to make the most of our premium supplements:</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Whey Protein Powder</div>
                            <ol class="list-decimal pl-4">
                                <li>Blend one scoop of whey protein powder with 8-12 ounces of water or milk in a shaker bottle.</li>
                                <li>Shake vigorously until the powder is fully dissolved.</li>
                                <li>Consume immediately after your workout for optimal muscle recovery, or as a convenient snack throughout the day.</li>
                                <li>For best results, incorporate whey protein powder into your daily routine as part of a balanced diet and exercise regimen.</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Creatine Monohydrate</div>
                            <ol class="list-decimal pl-4">
                                <li>Take one serving (typically 3-5 grams) of creatine monohydrate mixed with water or juice.</li>
                                <li>Consume immediately before or after your workout to enhance muscle strength and performance.</li>
                                <li>For best results, use creatine monohydrate consistently as part of your pre- and post-workout routine.</li>
                            </ol>
                            <p class="mt-4"><strong class="text-gray-1000">Disclaimer:</strong> Creatine monohydrate may cause dehydration if not consumed with adequate water. Consult your healthcare professional before using if you have any medical conditions.</p>
                        </div>
                    </div>
                    
                    <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Multivitamin Tablets</div>
                            <ol class="list-decimal pl-4">
                                <li>Take one multivitamin tablet with a meal, preferably with breakfast or lunch.</li>
                                <li>Swallow the tablet whole with a glass of water, or as directed by your healthcare professional.</li>
                                <li>For best results, use multivitamin tablets daily as part of your overall health and wellness regimen.</li>
                            </ol>
                            <p class="mt-4"><strong class="text-gray-1000">Disclaimer:</strong> Do not exceed the recommended dosage. Keep out of reach of children. Consult your healthcare professional before using if you are taking medication or have any medical conditions.</p>
                        </div>
                    </div>
                    
                    <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">BCAA's</div>
                            <ol class="list-decimal pl-4">
                                <li>Mix one serving of BCAA powder with water in a shaker bottle.</li>
                                <li>Shake well until fully dissolved.</li>
                                <li>Consume before, during, or after your workout to support muscle recovery and endurance.</li>
                                <li>For best results, incorporate BCAA's into your pre- and post-workout routine.</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Pre-workout</div>
                            <ol class="list-decimal pl-4">
                                <li>Mix one scoop of pre-workout powder with 8-12 ounces of water and consume 20-30 minutes before exercise.</li>
                                <li>Start with a half serving to assess tolerance, then gradually increase to a full serving as needed.</li>
                                <li>Avoid consuming within 4 hours of bedtime due to potential sleep disturbances from caffeine content.</li>
                                <li>For best results, use pre-workout as part of a comprehensive workout and nutrition plan.</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Other Products</div>
                            <ol class="list-decimal pl-4">
                                <li>Follow the recommended dosage and instructions provided on the product label.</li>
                                <li>Consult with your healthcare professional before using if you have any underlying health conditions or concerns.</li>
                                <li>For optimal results, incorporate the product into your daily routine as directed.</li>
                            </ol>
                        </div>
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
