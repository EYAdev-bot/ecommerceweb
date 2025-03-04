<?php
include_once "./connect_to_bd.php";
include_once "./head.php";

$stmt = $conn->prepare("SELECT * FROM produits");
$stmt->execute();
?>

<div class=" overflow-x-auto shadow-md sm:rounded-lg mt-[200px] max-lg:mt-[440px]">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    product
                </th>
                <th scope="col" class="px-6 py-3">
                    price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                <th>
                    QUANTITE
                </th>
            </tr>
        </thead>
        <?php
        foreach ($stmt->fetchAll() as $k => $v) {
        ?>
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $v["descriptions"] ?>
                    </th>
                    <td class="px-6 py-4">
                        <img class="w-[50px] h-[50px]" src="../upload/<?= $v["pictures"] ?>" alt="">

                    </td>
                    <td class="px-6 py-4">
                        <?= $v["prix"] ?>
                    </td>
                    <td class="px-6 py-4 flex gap-4">
                        <a href="./delete_products.php?sms=<?= $v["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete </a>
                        <a href="./edit_products.php?sms=<?= $v["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">edit </a>
                    </td>
                    <td class="px-6 py-4">
                        <?= $v["quantites"] ?>
                    </td>
                </tr>

            </tbody>

</div>
<?php
        }
?>
<div>
    <a href="./addproducts.php" class="flex text-[25px] justify-start itmes-center gap-2 "><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd" />
        </svg>ADD PRODUCT
    </a>
</div>
</table>