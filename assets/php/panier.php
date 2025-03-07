<?php include_once './head.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./assets/css/conn.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="overflow-x-auto shadow-md sm:rounded-lg mt-[250px] " id="panie">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        quantité
                    </th>
                    <th scope="col" class="px-6 py-3">
                        product
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['panier'])) {

                    foreach ($_SESSION['panier'] as $k => $v) {


                ?>

                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $v["nom"] ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= $v["quantite"] ?>
                            </td>
                            <td class="px-6 py-4">
                                <img src="../upload/<?= @$v["photo"] ?>" alt="" class="w-[50px] h-[50px]">
                            </td>
                            <td class="px-6 py-4">
                                $<?= $v["prix"] ?>
                            </td>
                            <td class="px-6 py-4">
                                <a href="./supprimer_panier.php?id=<?= $k ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">supprimer</a>
                            </td>
                        </tr>


                    <?php

                    }
                    // var_dump($_SESSION['panier']) ;
                    ?>
                    <?php
                    $sums = 0;
                    $sum = 0;
                    foreach ($_SESSION["panier"] as $k => $v) {
                        $sum += $v["quantite"] * $v["prix"];
                        $sums += $v["quantite"]

                    ?>
                <?php
                    }
                    if ($sums == 0) {
                        echo "votre panier est vide";
                    }
                }
                ?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-4">Total</td>
                    <td class="px-6 py-4"><?= $sums ?></td>
                    <td class="px-6 py-4"></td>
                    <td class="px-6 py-4">$<?= $sum ?></td>
                    <td class="px-6 py-4"><a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">buy</a></td>
                </tr>
            </tbody>

        </table>


    </div>
    <script src=" ../js/deroule.js">
    </script>
</body>

</html>