<?php
include_once "./connect_to_bd.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_GET["sms"])) {
    $id = $_GET["sms"];
    $stmt = $conn->prepare("SELECT * FROM produits WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
if (isset($_POST["oui"])) {
    $stmt = $conn->prepare("DELETE FROM produits WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location:./products.php");
} else if (isset($_POST["non"])) {
    header("location:./products.php");
}
?>

<body>

    <form class="max-w-sm mx-auto p-16" method="post" action="">
        <?php
        foreach ($stmt->fetchAll() as $k => $v) {
        ?>
            <div class=" overflow-x-auto shadow-md sm:rounded-lg mt-[300px]">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <?= $v["descriptions"] ?>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <img class="h-[50px] w-[50px]" src="../upload/<?= $v["pictures"] ?>" alt="">
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <?= $v["prix"] ?>
                            </th>
                        </tr>
                    </thead>
                    <label for="">Voulez vous supprimer ce produit ?</label>
                    <div class="flex items-start mb-5 gap-4">

                        <button type="submit" name="oui" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">oui</button>
                        <button type="submit" name="non" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">non</button>
                    </div>
                <?php
            }
                ?>
    </form>
    
    <script src="../js/deroule.js"></script>
</body>

</html>