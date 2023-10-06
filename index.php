<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>

    <?php
    include "header.php";

    include "./config/database.php";

    ?>
    <div class=" w-[80%] mx-auto mt-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <?php
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
        while ($row = $result->fetch_array()) {
        ?>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2"><?php echo $row['name']  ?></h2>
                <p class="text-gray-500"><?php echo $row['email']  ?></p>
            </div>
        <?php
        }

        ?>

</body>

</html>