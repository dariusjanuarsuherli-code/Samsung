<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung Navbar</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Inter', sans-serif;
        }

        nav a{
            position: relative;
        }

        nav a::after{
            content:'';
            position:absolute;
            left:50%;
            bottom:-6px;
            width:0%;
            height:2px;
            background:black;
            transition:.3s;
            transform:translateX(-50%);
        }

        nav a:hover::after{
            width:100%;
        }
    </style>

</head>
<body>

<header class="w-full border-b border-gray-200">

<div class="max-w-[1500px] mx-auto px-8">

<div class="flex items-center justify-between h-20">

    <!-- Left -->
    <div class="flex items-center gap-14">

        <!-- Logo -->
        <h1 class="text-4xl font-black tracking-tight">
            SAMSUNG
        </h1>

        <!-- Desktop Menu -->
        <nav class="hidden lg:flex items-center gap-9 text-[14px] font-semibold">

            <a href="#">Shop</a>
            <a href="#">Mobile</a>
            <a href="#">TV & AV</a>
            <a href="#">Appliances</a>
            <a href="#">Monitors</a>
            <a href="#">Wearables</a>
            <a href="#">Accessories</a>

        </nav>

    </div>


    <!-- Right -->
    <div class="hidden lg:flex items-center gap-8">

        <a href="#" class="font-medium hover:text-gray-500">
            Dukungan
        </a>

        

        <button class="hover:scale-110 transition">
            <i data-lucide="search" class="w-6 h-6"></i>
        </button>

        <button class="hover:scale-110 transition">
            <i data-lucide="shopping-cart" class="w-6 h-6"></i>
        </button>

        <button class="hover:scale-110 transition">
            <i data-lucide="user-round" class="w-6 h-6"></i>
        </button>

    </div>

    <!-- Mobile Button -->
    <button
    id="menuBtn"
    class="lg:hidden">

        <i data-lucide="menu" class="w-8 h-8"></i>

    </button>

</div>

<!-- Mobile Menu -->
<div
id="mobileMenu"
class="hidden lg:hidden py-5 space-y-5 border-t">

    <a class="block">Shop</a>
    <a class="block">Mobile</a>
    <a class="block">TV & AV</a>
    <a class="block">Appliances</a>
    <a class="block">Monitors</a>
    <a class="block">Wearables</a>
    <a class="block">Accessories</a>
    <a class="block">Dukungan</a>
   

</div>

</div>

</header>

<script>

lucide.createIcons();

const btn=document.getElementById("menuBtn");
const menu=document.getElementById("mobileMenu");

btn.onclick=()=>{
    menu.classList.toggle("hidden");
}

</script>

</body>
</html>