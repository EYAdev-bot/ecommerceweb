<?php
include_once "./head.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="w-screen">
    <section class="mt-[250px] max-lg:mt-[500px] w-screen">
        <h1 class="text-[25px] text-center max-lg:text-[start]">
            WELCOME TO ADMIN PAGE <?= $_SESSION["users"]["mail"]["username"] ?>
        </h1>
    </section>

    <div>
        <a href="./users.php" class="flex gap-2 text-[25px] items-center justify-start w-[25%] border-solide bors">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd" />
            </svg> users
        </a>
    </div>

    <div>
        <a href="./products.php" class="flex gap-2 items-center text-[25px] justify-start w-[25%]"><img src="../img/product.png" alt="" class="w-[25px] h-[25px]">products</a>
    </div>
    <div class="mb-[30px]">
        <a href="./addproducts.php" class="flex gap-2 text-[25px] items-center"><img src="../img/add1.png" alt="" class="w-[30px] h-[30px]">Add products</a>
    </div>
    <?php
    require('./footer.php');
    ?>
</body>
<script src=" ../js/deroule.js">
</script>

</html>