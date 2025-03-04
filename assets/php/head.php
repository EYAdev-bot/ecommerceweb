<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../css/panier.css">
    <link rel="stylesheet" href="../css/conn.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)) {
                echo $title;
            } else {
                echo "document";
            } ?></title>
</head>

<body class="font-'segio-ui' font-tohoma font-verdana font-[400] w-screen">
    <div class="fixed left-0 right-0 top-0 max-sm:w-[95%]" id="head">
        <div class=" flex justify-between bg-[#2F333A] text-[#fff] font-'segio ui' font-tohoma font-verdana font-[100] px-[40px] py-[10Px] w-screen max-lg:px-[10px]">
            <h1 class=" max-sm:text-sm max-sm:w-[95%]  "> Welcome to Eya & Get the best product </h1>
            <p class="max-sm:flex max-sm:justify-center">
                <?php if (!empty(@$_SESSION["users"])) {
                    echo @$_SESSION["users"]["mail"]["username"];
                }  ?>
            </p>
        </div>
        <section class=" px-[40px] flex justify-between items-center bg-[#F4F5F8] py-[20px] w-screen max-lg:p-1 max-lg:justify-around">
            <div class=" max-sm:hidden max-sm:absolute "><strong class=" text-[20px] font-[500]">Eya <span class="text-[#E73C17]">.</span></strong></div> <br>

            <div>
                <form action="" method="post" class="max-sm:ml-4">
                    <input type="text" id="text" onkeydown="searchproduct()" name="p" id="" placeholder="search product" class="w-[300px] h-[40px] p-[5px] bg-[#F4F5F8] border-[1px] border-solid border-slade-300 max-sm:w-[50%]">
                    <div id="result" class="absolute bg-[#000] w-[300px] text-[#fff] leading-[30px]"></div>
                </form>
            </div>

            <div class="flex gap-8 max-sm:flex-col max-sm:gap-1">
                <div class=" gap-10 absolute bg-[#2F333A] p-4 leading-[40px] right-[110px] top-[100px]  " id="conn">
                    <div href="" id="close">
                    </div>
                    <a class="hover:text-orange-500" href="<?php if (isset($login)) {
                                                                echo $login;
                                                            } else {
                                                                echo "./login.php";
                                                            }
                                                            ?>">Login</a> <br>

                    <a class="hover:text-orange-500" href="<?php if (isset($connect)) {
                                                                echo $connect;
                                                            } else {
                                                                echo "./sing_up.php";
                                                            }
                                                            ?>">Sing up</a>
                </div>
                <div>
                    <svg id="users" class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>

                <a class="hover:text-orange-500" href="<?php
                                                        if (isset($panier)) {
                                                            echo $panier;
                                                        } else {
                                                            echo "./panier.php";
                                                        }
                                                        ?>
                ">
                    <div>

                        <svg id="btn_panier" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                        </svg>

                        <div class="h-[15px] w-[15px] bg-[#E73C17] rounded-full  flex justify-center items-center p-1 text-[10px] " id="add">
                            <strong class="font-[400] " id="add">

                                <?php
                                if (isset($_SESSION['nombres'])) {
                                    echo $_SESSION['nombres'];
                                } else {
                                    echo 0;
                                }
                                ?>
                            </strong>
                        </div>
                    </div>

                </a>

        </section>
        <header class="bg-[#2F333A] text-[#fff] w-screen">
            <nav class="max-sm:w-[100%]">
                <ul class=" flex justify-around items-center max-sm:flex-col max-md:flex-col max-lg:flex-col max-lg:items-center max-lg:justify-center max-lg:gap-2">
                    <li class="absolute   left-[45px] top-[180px] leading-[40px] bg-[#2F333A] p-4 max-sm:w-[100%] max-sm:p-[0px]" id="cat">
                        <a class="hover:text-orange-500" href="../../index.php">All Categories</a> <br>
                        <a class="hover:text-orange-500" href="<?php
                                                                if (isset($phonect)) {
                                                                    echo $phonect;
                                                                } else {
                                                                    echo "./phonect.php";
                                                                }
                                                                ?>">Phones collections</a> <br>
                        <a class="hover:text-orange-500" href="<?php
                                                                if (isset($pcct)) {
                                                                    echo $phonect;
                                                                } else {
                                                                    echo "./computerct.php";
                                                                }
                                                                ?>">Pc collections</a>

                    </li>
                    <li class="max-lg:w-[95%]">
                        <div class="flex gap-5 bg-[#E73C17] h-[60px] items-center px-1 max-lg:w-[95%] max-sm:p-[0px] max-sm:flex max-lg:justify-center" id="win">
                            <div id="btncat">
                                <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke=" currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h8m-8 6h8m-8 6h8M4 16a2 2 0 1 1 3.321 1.5L4 20h5M4 5l2-1v6m-2 0h4" />
                                </svg>
                            </div>
                            <strong><?php if(isset($ct)){echo$ct ; }else{echo"PRODUCTS" ;}?></strong>

                        </div>
                    </li>
                    <li class="max-sm:w-[95%] max-sm:text-center"><?php if (@$_SESSION["users"]["mail"]["roles"] == "admin") { ?>
                            <a class="hover:text-orange-500" href="<?php if (isset($admin)) {
                                                                            echo "$admin";
                                                                        } else {
                                                                            echo "./admin.php";
                                                                        } ?>">
                            <?php
                                                                        echo "admin";

                                                                        'echo </a>';
                                                                    }  ?>
                    </li>
                    <li class="max-sm:w-[95%] max-sm:text-center"><a class="hover:text-orange-500 hover:border-b-3" href="../../index.php">HOME</a></li>
                    <li class="max-sm:w-[95%] max-sm:text-center"><a class="hover:text-orange-500 hover:border-b-3" href="#ABOUT">ABOUT</a></li>
                    <li class="max-sm:w-[95%] max-sm:text-center"><a class="hover:text-orange-500 hover:border-b-3" href="">DASHBORD</a></li>
                    <li class="max-sm:w-[95%] max-sm:text-center"><a class="hover:text-orange-500 hover:border-b-3" href="">PRODUCTS</a></li>
                    <li class="max-sm:w-[95%] max-sm:text-center"><a class="hover:text-orange-500 hover:border-b-3" href="">CONTACT</a></li>
                </ul>
            </nav>
        </header>

    </div>
    <script src=" ../js/deroule.js">
    </script>
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
                        document.querySelector("#result").innerHTML += '<a href="#' + post.descriptions + '">' + post.descriptions + "</a>" + "<br>"
                    });

                }
            }
        }
    </script>
    <script>
        function updatebge() {
            const btn_pan = document.getElementById("btn_panier");
            const cart = document.getElementById("add");
            cart.style.position = "absolute"

            const rect = btn_pan.getBoundingClientRect();
            cart.style.left = `${rect.right-10}px`
            cart.style.top = `${rect.top-5}px`
            console.log(`x:${rect.left}`)
        }
        updatebge()
        window.addEventListener('load', updatebge);
        window.addEventListener('resize', updatebge);
        window.addEventListener('scroll', updatebge);
    </script>
</body>
<?php

?>

</html>