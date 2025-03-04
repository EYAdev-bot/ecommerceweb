<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="font-'segio-ui' font-tohoma font-verdana font-[400] max-sm:text-[10Px]">
    <footer class="w-screen">
        <section class=" bg-[url('<?php if (isset($bg)) {
                                        echo $bg;
                                    } else {
                                        echo "../img/back.png";
                                    } ?>')] bg-cover bg-no-repeat flex justify-between items-center px-8 py-2 max-md:flex-col ">
            <div class="flex gap-2 items-centrer p-2 max-sm:text-[10Px] ">
                <div>
                    <svg class="w-12 h-12 text-orange-500 dark:text-white max-sm:text-[10Px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z" />
                    </svg>
                </div>
                <p class="text-[25px] text-[#fff] max-sm:text-[10Px]">Join our newsletter and get offers <br>
                    sign up our newsletter </p>
            </div>
            <div>
                <form class="max-w-sm mx-auto flex max-sm:text-[10Px]">


                    <input type="email" id="email" aria-describedby="helper-text-explanation" class="h-[45px] w-[300px] bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your email">

                    <button type="submit" class="text-white w-[100px] h-[45px] bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:ring-blue-300 font-medium  text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
                </form>
            </div>
        </section>
        <section class="flex justify-around bg-[#2F333A] text-[#EEE] max-sm:flex-wrap max-sm:gap-2 p-4 max-sm:text-[10Px]">
            <div>
                <h1 id="ABOUT">
                    ABOUT US
                </h1>
                <p>
                    discover the apple product witch us! <br>
                    we're passionate about Apple product <br>
                    and we're here to help you find the perfect <br>
                    product for your needs
                </p>
            </div>
            <div class="flex flex-col max-sm:text-[10Px]">
                <h1>INFORMATION</h1>
                <a class="hover:text-orange-500" href="#ABOUT">About</a>
                <a class="hover:text-orange-500" href="#">delivery information</a>
                <a class="hover:text-orange-500" href="#">privacy polity</a>
                <a class="hover:text-orange-500" href="#">sales</a>
                <a class="hover:text-orange-500" href="#">terms & conditions</a>
            </div>
            <div class="flex flex-col max-sm:text-[10Px]">
                <h1>ACCOUNT</h1>
                <a class="hover:text-orange-500" href="#">My acount</a>
                <a class="hover:text-orange-500" href="#">My oders</a>
                <a class="hover:text-orange-500" href="#">Shopping</a>
                <a class="hover:text-orange-500" href="#">acount details</a>

            </div>
            <div>
                <h1>
                    CONTACT US
                </h1>
                <p>if you have any query, please contact us</p>
                <a href="mailto:ekangay18@gmail.com" class="text-orange-500">ekangay18@gmail.com</a>
            </div>
        </section>


    </footer>
</body>

</html>