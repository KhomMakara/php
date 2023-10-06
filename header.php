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
    
<header class="bg-gray-800 py-4">
  <div class="container mx-auto flex justify-between items-center px-4">
    <h1 class="text-white text-2xl font-bold">My Website</h1>
    
    <form class="flex" action="search.php" method="GET">
      <?php
          include "./config/database.php";

       $sql = "select * from categories limit 5";
       $result = $conn->query($sql);

       while($row = $result->fetch_array()){

        ?>
        <a class="text-white mx-5" href="list.php?category_id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
        <?php

       }      
       ?>
        <a class="text-white mx-5" href="service.php">service</a>
        <a class="text-white mx-5" href="index.php">user</a>
        <a class="text-white mx-5" href="product.php">product</a>

        <input type="hidden" name="source_url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">

      <input name="query" class="rounded-l-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" type="text" placeholder="Search...">
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white rounded-r-lg py-2 px-4 ml-2">Search</button>
    </form>
  </div>
</header>
</body>

</html>
