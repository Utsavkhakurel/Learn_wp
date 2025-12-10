<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Home Screen</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#13c8ec",
            "background-light": "#f6f8f8",
            "background-dark": "#101f22",
            "text-light": "#111718",
            "text-dark": "#f0f4f4",
            "subtle-text-light": "#618389",
            "subtle-text-dark": "#94a3b8"
          },
          fontFamily: {
            "display": ["Inter", "sans-serif"]
          },
          borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
        },
      },
    }
  </script>
<style>
    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 24
    }
  </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<div class="flex flex-1 justify-center py-5">
<div class="layout-content-container flex flex-col max-w-[960px] flex-1 px-4 sm:px-10">
<!-- TopNavBar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-800 py-4">
<div class="flex items-center gap-4">
<div class="size-6 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_6_330)">
<path clip-rule="evenodd" d="M24 0.757355L47.2426 24L24 47.2426L0.757355 24L24 0.757355ZM21 35.7574V12.2426L9.24264 24L21 35.7574Z" fill="currentColor" fill-rule="evenodd"></path>
</g>
<defs>
<clippath id="clip0_6_330"><rect fill="white" height="48" width="48"></rect></clippath>
</defs>
</svg>
</div>
<h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Olivia Chen</h2>
</div>
<div class="hidden sm:flex flex-1 justify-end gap-8">
<div class="flex items-center gap-9">
<a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Work</a>
<a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">About</a>
<a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Contact</a>
</div>
</div>
</header>
<main class="flex-grow">
<!-- HeroSection -->
<div class="@container py-16 sm:py-24">
<div class="flex flex-col gap-10 @[864px]:flex-row @[864px]:items-center">
<div class="flex flex-col gap-6 @[864px]:justify-center flex-1">
<div class="flex flex-col gap-4 text-left">
<h1 class="text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl">
                      Digital Product Designer
                    </h1>
<h2 class="text-base font-normal leading-normal text-subtle-text-light dark:text-subtle-text-dark">
                      I create intuitive and beautiful user experiences. Passionate about solving complex problems through clean code and user-centric design.
                    </h2>
</div>
<div class="flex">
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-text-light text-base font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
<span class="truncate">View My Work</span>
</button>
</div>
</div>
<div class="w-full flex-1 bg-center bg-no-repeat aspect-square bg-cover rounded-xl @[480px]:h-auto @[480px]:min-w-[400px] @[864px]:w-full" data-alt="Abstract vibrant geometric shapes on a light background" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDEyYbIZHGLcWFlIRuu4QmF5JA-iMFIzu0j0n82pOCdIVAWcq8dLm_cvffVqBTTLrpO_oJnl_quBCjcG5ZRpJIxWuM8t4ZSZlsW633l7X36NsQEa8jKuiD-TuuSGxoGKoM8pHj9fTkd96TWtnj25-4M9oiFbyaX3Ctt3K2Z4FwbPGncHitZQ2jFw4a7ss_2CUiImlL3cnlEYwZhsP2GX_uBf9X6iFQj2Rxi6vGihkt8GeFnbgkyWvvX85N8lUrSiz7PDsai-SIT8QKf");'></div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="flex flex-col gap-6 py-10 text-center border-t border-solid border-gray-200 dark:border-gray-800">
<div class="flex flex-wrap justify-center gap-4">
<a class="text-subtle-text-light dark:text-subtle-text-dark hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined !text-2xl">alternate_email</span>
</a>
<a class="text-subtle-text-light dark:text-subtle-text-dark hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined !text-2xl">code</span>
</a>
<a class="text-subtle-text-light dark:text-subtle-text-dark hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined !text-2xl">palette</span>
</a>
</div>
<p class="text-subtle-text-light dark:text-subtle-text-dark text-base font-normal leading-normal">© 2024 Olivia Chen</p>
</footer>
</div>
</div>
</div>
</div>
</body></html>