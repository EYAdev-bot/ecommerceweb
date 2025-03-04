<?php
include_once "./connect_to_bd.php";
include_once "./head.php" ;

$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
?>

<div class=" overflow-x-auto shadow-md sm:rounded-lg mt-[300px] max-lg:mt-[430px]">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Users name
                </th>
                <th scope="col" class="px-6 py-3">
                    Surnames
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone number
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <?php
        foreach ($stmt->fetchAll() as $k => $v) {
        ?>
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $v["names"] ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $v["surnames"] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $v["emails"] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $v["phone_num"] ?>
                    </td>
                    <td class="px-6 py-4 flex gap-4">
                        <a href="./delete_users.php?sms=<?=$v["id"]?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete </a>
                    </td>
                </tr>

            </tbody>

</div>
<?php
        }
?>
</table>