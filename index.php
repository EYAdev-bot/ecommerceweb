<?php
$ct="All Categories" ;
$title = "home";
$connect = "./assets/php/sing_up.php";
$login = "./assets/php/login.php";
$admin = "./assets/php/admin.php";
$about = "./assets/php/about.php";
$panier = "./assets/php/panier.php";
$bg = "./assets/img/back.png";
$phonect="./assets/php/phonect.php" ;
$pcct="./assets/php/computerct.php"



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/imagede.css">
    <link rel="stylesheet" href="./assets/css/conn.css">
    <link rel="stylesheet" href="./assets/css/panier.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)) {
                echo $title;
            } else {
                echo "document";
            } ?>
    </title>
</head>

<body>
    <div>

        <?php

        require("./assets/php/head.php");
        require("./assets/php/connect_to_bd.php");

        ?>
    </div>

    </div>
    <section id="sect1" class="mt-[170px] w-screen max-lg:mt-[330px]">
        <img id="iphone" src="./assets/img/yan3.jpg" alt="iphone">
        <img id="iphone" src="./assets/img/yann.jpg" alt="iphone">
        <img id="iphone" src="./assets/img/yann1.png" alt="iphone">
        <img id="iphone" src="./assets/img/yann2.jpg" alt="iphone">

    </section>
    <section class="bg-[#F4F5F8] mb-2 w-screen">
        <div class="text-center p-[30px]">
            <h3 class="text-[20px] font-[350] ">
                ALL CATEGORIS
            </h3>
            <p class="text-[15px]">
                HOME / PRODUCT / ALL CATEGORIS
            </p>
        </div>
    </section>

    <div class="flex flex-wrap justify-center gap-8 m-2 w-screen">
        <?php
        try {
            $stmt = $conn->prepare("SELECT * FROM produits");
            $stmt->execute();

            foreach ($stmt->fetchAll() as $k => $v) {



        ?>

                <div class="w-[300px] bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 max-sm:w-[95%]">
                    <a href="#">
                        <img class="p-8 rounded-t-lg w-[300pxpx]  h-[300px] hover:h-[350px] hover:w-[350px]" src="./assets/upload/<?= $v['pictures'] ?>" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class=" text-x font-semibold tracking-tight text-gray-900 dark:text-white "><?= $v["descriptions"] ?></h5>
                        </a>
                        <div class=" flex items-center mt-2.5 mb-5">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                        </div>
                        <div class="bg-orange-500 w-[40px]  text-center py-[1px] rounded-full"><?= $v["quantites"] ?></div>
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-gray-900 dark:text-white" id="prix">$<?= $v["prix"] ?></span>
                            <a href="./assets/php/add_panier.php?id=<?= $v['id'] ?>" id="" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                        <div></div>
                    </div>
                </div>

        <?php
            }
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
        //  session_destroy() ;
        ?>
    </div>


    <script src="./assets/js/deroule.js"></script>
    <script src="./assets/js/iphone.js"></script>
    <script src="./assets/js/panier.js"></script>
    <script>
        const searchproduct = async () => {
            document.querySelector("#result").innerHTML = ""
            let keyproduct = document.querySelector("#text").value;
            if (keyproduct.length >= 3) {

                const req = await fetch(`./assets/php/search.php?keyproduct=${keyproduct}`)
                const json = await req.json()
                console.log(json)
                if (json.length > 0) {
                    json.forEach((post) => {
                        document.querySelector("#result").innerHTML += '<a href="#' + post.slug + '">' + post.descriptions + "</a>" + "<br>"
                    });

                }
            }
        }
    </script>
    <?php
    include_once "./assets/php/footer.php"
    ?>
</body>

</html>