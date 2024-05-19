<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-white">
    <?php
    include 'nav.php';
    ?>
    </header>
    
    <main class="container mx-auto py-5">
        <section id="account" class="text-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <a href="login.php" class="hover:no-underline">
                    <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Login</h2>
                            <img src="img/login.png" alt="Login Image" class="mx-auto mb-4">
                        </div>
                    </div>
                </a>
                <a href="register.php" class="hover:no-underline">
                    <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Register</h2>
                            <img src="img/register.png" alt="Register Image" class="mx-auto mb-4">
                        </div>
                    </div>
                </a>
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
