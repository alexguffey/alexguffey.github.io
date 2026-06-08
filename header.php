<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Guffey - Portfolio</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#3C55E7',
                        'background': '#E6E8EA',
                    },
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-white overflow-hidden">

    <div id="gsapWrapper" class="fixed border-[20px] border-white bg-background">
        <!-- Floating Navigation -->
        <nav class="fixed w-full top-0 left-0 bg-white z-50">
            <div class="mx-auto px-4 md:px-8 py-4 flex justify-between items-center">
                <div class="font-semibold text-lg md:text-xl lowercase tracking-tight">
                    <a href="/">alex guffey</a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex gap-6">
                    <a href="index.php#about" class="font-bold text-sm lowercase tracking-wide px-4 py-2 cursor-pointer <?= ($activePage == 'index') ? 'text-primary' : ''; ?>">about</a>
                    <a href="index.php#work" class="font-bold text-sm lowercase tracking-wide px-4 py-2 cursor-pointer <?= ($activePage == 'index') ? 'text-primary' : ''; ?>">work</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden bg-white border-2 border-black shadow-neo-sm w-10 h-10 rounded-full flex items-center justify-center hover:shadow-neo-md hover:-translate-y-0.5 transition-all duration-200">
                    <div class="flex flex-col gap-1">
                        <div class="w-4 h-0.5 bg-black"></div>
                        <div class="w-4 h-0.5 bg-black"></div>
                        <div class="w-4 h-0.5 bg-black"></div>
                    </div>
                </button>
            </div>

            <!-- Mobile Menu Dropdown -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 mx-auto bg-white border-4 border-black shadow-neo-lg rounded-full" style="max-width: calc(100vw - 80px);">
                <div class="p-4 space-y-2">
                    <a href="index.php#about" class="mobile-nav-link block font-bold text-sm lowercase tracking-wide px-4 py-3 cursor-pointer transition-all duration-200">about</a>
                    <a href="index.php#work" class="mobile-nav-link block font-bold text-sm lowercase tracking-wide px-4 py-3 cursor-pointer transition-all duration-200">work</a>
                </div>
            </div>
        </nav>
        <div id="content" class="relative py-[48px]">
