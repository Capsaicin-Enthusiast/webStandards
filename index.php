<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</head>
<body class="bg-gray-200 font-sans">

    <header class="bg-white">
    <?php
    include 'nav.php';
    ?>
    </header>   
    
    <main class="container mx-auto py-5">
        <section id="slideshow" class="bg-gray-200">
            <div class="container mx-auto">
                <div class="relative overflow-hidden w-full">
                <div class="flex transition-transform duration-500 ease-in-out" id="slides">
                    <div class="flex-none w-full"><img src="img/slides/slide1.png" alt="Slide 1" class="w-full h-60 object-cover"></div>
                    <div class="flex-none w-full"><img src="img/slides/slide2.jpg" alt="Slide 2" class="w-full h-60 object-cover"></div>
                    <div class="flex-none w-full"><img src="img/slides/slide3.jpg" alt="Slide 3" class="w-full h-60 object-cover"></div>
                    <div class="flex-none w-full"><img src="img/slides/slide4.jpg" alt="Slide 4" class="w-full h-60 object-cover"></div>
                    <div class="flex-none w-full"><img src="img/slides/slide5.jpg" alt="Slide 5" class="w-full h-60 object-cover"></div>
                </div>
                </div>
            </div>
        </section>


        <section id="home" class="bg-gray-200 pt-5 py-10 text-center">
            <div class="container">
                <h1 class="text-4xl font-bold text-gray-1000 mb-8">Fuel Your Fitness Journey with Premium Protein Shakes</h1>
                <p class="text-lg text-gray-800 mb-8">Welcome to our premium protein shake website! Explore our range of delicious shakes tailored to fuel your workouts, enhance recovery, and support your overall wellness.</p>
                <a href="shop.html" class="bg-blue-600 inline-block px-8 py-3 rounded-lg text-white font-semibold hover:bg-blue-800 transition duration-300">Shop Now</a>
            </div>
        </section>

        <section id="products" class="bg-gray-200 py-10 text-center">
            <div class="container">
                <h2 class="text-3xl font-bold text-gray-1000 mb-8">Our Products</h2>
                <p class="text-lg text-gray-800 mb-8">Explore our diverse range of protein shakes, carefully crafted to meet your nutritional needs and fitness goals. From whey protein to plant-based blends, we have the perfect shake to support your journey.</p>
                <a href="products.html" class="bg-green-500 inline-block px-8 py-3 rounded-lg text-white font-semibold hover:bg-green-800 transition duration-300">Discover Now</a>
            </div>
        </section>
    
        <section id="about" class="bg-gray-200 py-10 text-center">
            <div class="container">
                <h2 class="text-3xl font-bold text-gray-1000 mb-8">About Us</h2>
                <p class="text-lg text-gray-800 mb-8">At Test, we're passionate about helping you achieve your fitness goals. Our mission is to provide premium-quality protein shakes made with the finest ingredients to fuel your performance and recovery.</p>
                <a href="about-us.html" class="bg-gray-600 inline-block px-8 py-3 rounded-lg text-white font-semibold hover:bg-gray-900 transition duration-300">Learn More</a>
            </div>
        </section>
    
        <section id="contact" class="bg-gray-200 py-10 text-center">
            <div class="container">
                <h2 class="text-3xl font-bold text-gray-1000 mb-8">Contact Us</h2>
                <p class="text-lg text-gray-800 mb-8">Have questions or need assistance? Our support team is here to help. Reach out to us for personalized assistance on your fitness journey.</p>
                <a href="connect.html" class="bg-gray-600 inline-block px-8 py-3 rounded-lg text-white font-semibold hover:bg-gray-900 transition duration-300">Get in Touch</a>
            </div>
        </section>
    </main>    

    <footer class="bg-gray-900 text-white text-center py-4">
        <p>&copy; <span id="currentYear" class="text-gray-400"></span> Test Website</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slidesContainer = document.getElementById('slides');
            const slides = slidesContainer.children;
            const totalSlides = slides.length;
            let currentIndex = 0;

            function showNextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            setInterval(showNextSlide, 3000);
        });
    </script>

    
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/660b5de6a0c6737bd1273483/1hqe6djvl';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>

</body>
</html>
