<?php
$conn = mysqli_connect("localhost", "root", "123456", "cats_project");
$sql = "select * from cats_5";
$result = mysqli_query($conn, $sql);
$list='';
while($row = mysqli_fetch_array($result))
{
    $list = $list."<li><a href = \"1-2phpSelect2.php?id={$row['id']}\">{$row['name']}</a></li>";
}

$article = array(
    'title'=>'크림히어로즈 고양이 세상',
    'description'=>'크림이들의 세상에 오신 것을 환영합니다'
);

if(isset($_GET['id']))
{
    $sql = "select * from cats_5 where id={$_GET["id"]}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['name'] = $row['name'];
    $article['nickname'] = $row['nickname'];
    $article['description'] = $row['description'];
    $article['profile'] = $row['profile'];
}

?>

<html>
    <head>

    <style thpe = "text/css">
    tstyle
    {
    color:rgb(100, 180, 35);
    font-family:휴먼굵은샘체;
    font-size:40px;
    }
    </style>
        <meta charset = "utf-8">
        <title>고양이</title>
    </head>
    <body>
    <body bgcolor = "#ffffe0">
        

    <div id = "header">
        <p align = "center">
        <img src = "img/LULU1.png" width = "230" height = "106">
        <tstyle>🐱크림히어로즈와 10마리의 고양이🐱</style>
        <img src = "img/COCO6.png" width = "230" height = "106">
    </p></div>   
        <ol>
            <?php 
                echo $list; 
            ?>
        </ol>

        <h1>
            <?php 
                echo $article['name']; 
            ?>
        </h1>
        <h2>
            <?php 
                echo $article['nickname']; 
            ?>
        </h2>
        <marquee>
        <img src = "img/DD1.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/LALA1.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/LULU1.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/TT1.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/DD3.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/LALA3.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/LULU3.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/TT3.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/DD5.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/LALA5.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/LULU5.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/TT5.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/DD2.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/LALA2.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/LULU2.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/TT2.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/DD4.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/LALA4.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/LULU4.png" width = "350" height = "180" border = "3" hspace "20">
        <img src = "img/TT4.png" width = "350" height = "180" border = "3" hspace "20">
        </marquee>
        <h3>
            <?php 
                echo $article['description']; 
            ?>
        </h3>
        <h4>
            <?php 
                echo $article['profile']; 
            ?>
        </h4>

    </body>
</html>

