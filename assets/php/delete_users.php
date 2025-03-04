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
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
if (isset($_POST["oui"])) {
    $stmt= $conn->prepare("DELETE FROM users WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location:./users.php");
}else if (isset($_POST["non"])) {
    header("location:./users.php");
}
?>

<body>

    <form class="max-w-sm mx-auto p-16" method="post" action="">
        <?php
        foreach ($stmt->fetchAll() as $k => $v) {
        ?>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Voulez vous supprimer</label>
            <input type="text" id="email" name="mail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " value="<?=$v["surnames"].' '.$v["names"]?>"  required />
        </div>
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
