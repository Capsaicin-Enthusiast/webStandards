<nav class="bg-gray-900">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="img/logo(white).png" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <a href="index.php" class="text-gray-300 hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium <?php if($currentPage == 'index.php') echo 'bg-gray-900'; ?>">Home</a>
            <a href="about-us.php" class="text-gray-300 hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium <?php if($currentPage == 'about-us.php') echo 'bg-gray-900'; ?>">About Us</a>
            <a href="products.php" class="text-gray-300 hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium <?php if($currentPage == 'products.php') echo 'bg-gray-900'; ?>">Products</a>
            <a href="how-it-works.php" class="text-gray-300 hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium <?php if($currentPage == 'how-it-works.php') echo 'bg-gray-900'; ?>">How It Works</a>
            <a href="shop.php" class="text-gray-300 hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium <?php if($currentPage == 'shop.php') echo 'bg-gray-900'; ?>">Shop</a>
            <a href="legal.php" class="text-gray-300 hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium <?php if($currentPage == 'legal.php') echo 'bg-gray-900'; ?>">Legal</a>
            <a href="connect.php" class="text-gray-300 hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium <?php if($currentPage == 'connect.php') echo 'bg-gray-900'; ?>">Connect</a>
          </div>
        </div>

      </div>
      <div>
        <a href="account.php">
          <button>
            <img class="h-8 w-8 rounded-full" src="img/user.jpg" alt="">
          </button>
        </a>
      </div>  

    </div>
  </div>

</nav>
