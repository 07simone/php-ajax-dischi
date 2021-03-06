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
    
<header>

</header>

<main id="app">
    <div class="container" >
        <div class="dischi" v-for="disk in dischi">
            <img :src="disk.poster" alt="">
            <div class="text">
                <h1> {{disk.title}} </h1>
                <h4> {{disk.autore}} </h4>
                <p> {{disk.genere}}</p>
                <p> {{disk.anno}}</p>
            </div>
            
        </div>
    </div>
        

</main>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
