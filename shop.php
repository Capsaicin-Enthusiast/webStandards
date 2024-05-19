<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-white">
    <?php
    include 'nav.php';
    ?>
    </header>
    
    <main class="container mx-auto py-12">
        <section id="products">    
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">MuscleTech NitroTech Whey Protein</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product1.webp" alt="Whey Protein Powder">
                    <div class="product-description hidden px-4 py-4">
                        The clinically tested formula of MuscleTech NitroTech Performance Series is ideal to boost the process of muscle building. It is loaded with all the nutrients that are required to trigger protein synthesis and maintain energy for longer duration. A scoop (46 g) of NitroTech Performance Series provides 30 g of whey protein (a blend of whey isolates and peptides). This is a low carb, low fat and low sugar formula that is geared to help build lean muscle mass faster. It also contains ingredients like creatine and BCAA that boosts the performance for enhanced results.
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">BSN Syntha-6 ultra-premium Protein Powder</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product2.webp" alt="Whey Protein Powder">
                    <div class="product-description hidden px-4 py-4">
                        SYNTHA-6® is an ultra-premium protein powder with 22g protein per serving and is our best-tasting protein on the market. SYNTHA-6® is the go-to protein for any nutrition or exercise regimen because it is designed to suit a variety of active lifestyles and diet plans. And with SYNTHA-6®, the high standard of quality protein comes with taste to match, thanks to our exclusive flavor technology.
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">Scivation Xtend BCAA</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product3.webp" alt="BCAA">
                    <div class="product-description hidden px-4 py-4">
                        Scivation Xtend BCAA is one of the most advanced BCAA formulas available. It is highly recommended by experts for athletes as well as bodybuilders because of its ability to enhance the training performance. It helps to provide the most out of each session by preventing muscle fatigue and muscle breakdown while workout. Scivation Xtend BCAA is loaded with BCAA or Branched Chain Amino Acids that are the most abundant amino acids in the muscle structure.
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">Nutrex Liquid Carnitine 3000</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product4.webp" alt="Vitamins">
                    <div class="product-description hidden px-4 py-4">
                        Nutrex Liquid Carnitine 3000 has been around for decades for one main reason - IT WORKS. It taps into the body’s fat supply by supporting the transport of fatty acids to the muscles’ mitochondria where they can be burned off as energy. Muscle contains the highest concentration of Carnitine in the body, which is why it is important for athletes.
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">GNC Pro Performance Weight Gainer</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product5.webp" alt="Whey Protein Powder">
                    <div class="product-description hidden px-4 py-4">
                        GNC Pro Performance Weight Gainer - contains 50 grams of high-quality protein in a wellness formula designed to digest and release varied intervals throughout the day to ensure your muscles get the amino acids they need. This formula is designed to support your body composition goals with naturally occurring branched-chain amino acids (BCAA), which may help reduce muscle breakdown during exercise, added medium-chain triglycerides (MCT), which are quickly absorbed by the body for use of energy, and a dual carbohydrate system to preserve and replenish energy stores. GNC Pro Performance Weight Gainer also includes naturally occurring arginine to fuel muscle cells and influence the cardiovascular system through nitric oxide production.
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">Now Foods Omega 3 Fish Oil</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product6.webp" alt="Vitamins">
                    <div class="product-description hidden px-4 py-4">
                        Now Foods Omega 3 Fish Oil concentrate is manufactured under strict quality control standards. It is tested to be free of potentially harmful levels of contaminants such as PCBs, dioxins, mercury and other heavy metals. Now Foods Omega 3 Fish Oil are specially formulated using fish oil to give a highly concentrated source of Omega-3 Polyunsaturates, EPA and DHA in their free from for improved digestibility, assimilation, and efficacy. A valuable supplement to help maintain circulation and cholesterol control as well as improve general wellbeing (heart, skin, joints) and brain function.
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">Ronnie Coleman Signature Series Yeah Buddy Pre-Workout Supplement</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product7.webp" alt="Pre-Workout">
                    <div class="product-description hidden px-4 py-4">
                        FLAVOUR	<br>
                        Cherry Limeade, Green Apple, Kiwi Strawberry, Mango Pineapple, Sour Berry, Strawberry Lemonade
                        <br><br>
                        SERVINGS <br>
                        30 Servings, 60 Servings
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">Universal Nutrition Animal Pak, 30 Packs</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product8.webp" alt="Vitamin">
                    <div class="product-description hidden px-4 py-4">
                        Universal Nutrition Animal Pak was developed to cover the wide backs of the hardest and heaviest trainers on the planet Earth. The “Ultimate Training Pack” is far more than a mere multivitamin, but is the trusted, sturdy foundation upon which the most dedicated bodybuilders and powerlifters have built their nutritional regimens, since the supplement industry was in its mere infancy.
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">Kevin Levrone Anabolic Test 90 tabs</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product9.webp" alt="Vitamin">
                    <div class="product-description hidden px-4 py-4">
                        Kevin Levrone Anabolic Test 90 tabs are a multi-ingredient composition combining high-class standardized plant extracts with valuable minerals, which have been prepared especially for people exposed to high levels of psychophysical fatigue. The components used in the Kevin Levrone Anabolic Test 90 tabs have been chosen in the right proportions, and their properties enable a multi-dimensional effect – from supporting immunity and the general feeling of vitality, through assistance with sexual performance, to maintaining correct metabolism of macronutrients from the daily diet. Kevin Levrone Anabolic Test 90 tabs  is recommended for recreational exercisers, professional athletes, men over 30, and all supporters of a healthy and varied diet.
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">Labrada Glutalean 250g</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product10.webp" alt="Vitamin">
                    <div class="product-description hidden px-4 py-4">
                        Labrada Glutalean 250gcan lead to your body tearing down muscle tissue to supply the rest of your system with Glutamine, reversing the effects of your training! Vigorous workouts, high levels of stress, and poor nutrition can deplete our bodies’ natural stores of Glutamine, a vitally important element in muscle growth.
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">Optimum Nutrition Micronized Creatine Monohydrate Powder</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product11.webp" alt="Creatine">
                    <div class="product-description hidden px-4 py-4">
                        Optimum Nutrition Micronized Creatine Monohydrate Powder has been extensively studied and shown to help support muscle size, strength and recovery when used consistently over time in conjunction with a healthy, balanced diet and regular weight training.
                        <br><br>
                        BENEFITS <br>
                        <ul>
                            <li>100% Pure Creatine Monohydrate</li>
                            <li>5 Grams of Pure Creatine Monohydrate per Serving</li>
                            <li>Helps Support ATP Recycling & Explosive Movements</li>
                            <li>Micronized for easy mixing</li>
                            <li>Banned Substance Tested</li>
                        </ul>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" onclick="toggleDescription(this)">
                    <div class="px-6 py-4 product-content">
                        <h2 class="font-bold text-xl mb-2 product-name">MuscleTech Platinum 100% Creatine 83 servings</h2>
                    </div>
                    <img class="w-full product-image" src="img/products/product12.webp" alt="Creatine">
                    <div class="product-description hidden px-4 py-4">
                        MuscleTech Platinum 100% Creatine is formulated with the highest quality and most clinically researched form of micronized creatine to facilitate lean and strong muscles. being a slow-digesting protein provides nourishment to your muscles for long hours and enhances muscle protein synthesis, thus enabling lean muscle build-up. Intake of this supplement increases the strength and endurance required to perform heavy workouts. Creatine not only supports muscle gain but also reduces muscle loss to promote overall muscle development. It boosts the energy level of your body to recover and repair muscle tissues after strenuous workouts. This further reduces the risk of muscle loss helping you retain your hard-earned muscles. So, if you are looking to get lean and toned muscles, try MuscleTech Platinum Creatine. Grab one for yourself and experience the change.
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

        function toggleDescription(product) {
            const productContent = product.querySelector('.product-content');
            const productDescription = product.querySelector('.product-description');
            const productImage = product.querySelector('.product-image');
        
            if (productDescription.classList.contains('hidden')) {
                productContent.style.display = 'none';
                productDescription.classList.remove('hidden');
                productImage.style.display = "none";
            } else {
                productContent.style.display = 'block';
                productDescription.classList.add('hidden');
                productImage.style.display = "block";
            }
        }
                  
    </script>
</body>
</html>
