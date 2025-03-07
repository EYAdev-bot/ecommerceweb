<?php
//require("./head.php") ;
require("./connect_to_bd.php");

//verifier si une image a été soumise
if (isset($_FILES["image_file"])) {
    $tmpname = $_FILES["image_file"]["tmp_name"];
    $name =  $_FILES["image_file"]["name"];
    $size = $_FILES["image_file"]["size"];
    $error = $_FILES["image_file"]["error"];
    $type = $_FILES["image_file"]["type"];
    if (isset($_POST["sub"])) {


        // echo$tmpname ;
        @$quant = $_POST["quant"];
        @$prix = $_POST["cout"];
        @$descrip = $_POST["descrip"];
        $tabextension = explode('.', $name);
        $extension = strtolower(end($tabextension));

        //tableau des extension autorisés
        $extensionautorise = ['jpg', 'png', 'jpeg', 'gif'];

        //verifier si le fichier est une image
        if (in_array($extension, $extensionautorise)) {
            $uniquname = uniqid('', true);
            $filename = $uniquname . '.' . $extension;
            move_uploaded_file($tmpname, '../upload/' . $filename);
        } else {
            // echo"mauvaise extension";
        }



        try {
            $stmt = $conn->prepare("INSERT INTO produits (pictures,descriptions,prix,quantites) VALUE(:photo,:descrp,:prix,:quant)");
            $stmt->bindParam(":photo", $filename);
            $stmt->bindParam(":descrp", $descrip);
            $stmt->bindParam(":prix", $prix);
            $stmt->bindParam(':quant', $quant);
            $stmt->execute();
            header("location:./products.php");
            echo "evoyer";
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
    }
}
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

<body>
    <?php
    require('./head.php')
    ?>
    <form action="" method="post" enctype="multipart/form-data" class="mt-[250px]">
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PRODUCTS</label>
            <input type="file" accept="iamge/*" id="email" name="image_file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <input type="text" id="email" name="descrip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">prix</label>
            <input type="text" name="cout" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">QUANTITE</label>
            <input type="number" id="email" name="quant" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <input type="submit" value="evoyer" name="sub" class="mb-2">
    </form>
    <?php
    require('./footer.php')
    ?>
    <script src="../js/panier.js">
    </script>
    <script src=" ../js/deroule.js">
    </script>
</body>

</html>