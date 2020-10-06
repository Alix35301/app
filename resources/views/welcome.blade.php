<!DOCTYPE html>
<html lang="en">
<head>
  <title>Smart Health Monitoring Wristwatch</title>
  <link href = {{ asset('css/tw.css') }} rel = "stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="text-gray-700 bg-" style="font-family: 'Source Sans Pro', sans-serif">
  <nav>
    <div class="container mx-auto px-6 py-2 flex justify-between items-center">
      <a class="font-bold text-2xl lg:text-4xl" href="#">
        My Profile
      </a>
      <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:block">
        <ul class="inline-flex">
          <li><a class="px-4 font-bold" href="/">Home</a></li>
          <li><a class="px-4 hover:text-gray-800" href="#">About</a></li>
          <li><a class="px-4 hover:text-gray-800" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-60" style="background: linear-gradient(90deg, #0d0e0d 0%, #1800a3 100%)" >
    <h2 class="mb-6 text-4xl font-bold text-center text-white">
      Hey, there!
    </h2>

    <h2 class="mb-6 text-4l font-bold text-center text-white">
      My name is Ali Hassan.
    </h2>
  </div>
</body>
</html>