<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
        <?php 
            include __DIR__ . '/server/data.php';

        ?>

<header>

</header>
<main>
    <div>
        <?php foreach($dischi as $disk){ ?>
        <img src="" alt="">
        <h1> <?php echo $disk["title"] ?></h1>
        <h4><?php echo $disk["autore"] ?></h4>
        <p><?php echo $disk["genere"] ?></p>
        <p><?php echo $disk["anno"] ?></p>
        <?php } ?>
    </div>
        

</main>

<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>