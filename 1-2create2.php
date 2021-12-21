<?php
$conn = mysqli_connect("localhost", "root", "123456", "cats_project");
$sql = "select * from cats_2";
$result = mysqli_query($conn, $sql);
$list='';
while($row = mysqli_fetch_array($result))
{
    $list = $list."<li><a href = \"1-2create2.php?id={$row['id']}\">{$row['name']}</a></li>";
}

$article = array(
    'title'=>'크림히어로즈 고양이 세상',
    'description'=>'크림이들의 세상에 오신 것을 환영합니다'
);

if(isset($_GET['id']))
{
    $sql = "select * from cats_2 where id={$_GET["id"]}";
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
        <meta charset = "utf-8">
        <title>고양이</title>
    </head>
    <body>
        <h1>고양이 나라</h1>    
        <ol>
            <?php 
                echo $list; 
            ?>
        </ol>

        <form action = "1-2process_create2.php" method = "POST">
            <p><input type = "text" name = "name" placeholder = "name"></p>
            <p><input type = "text" name = "nickname" placeholder = "nickname"></p>
            <p><textarea name = "description" placeholder = "description"></textarea></p>
            <p><textarea name = "profile" placeholder = "profile"></textarea></p>
            <p><input type = "submit"></p>
        </form>

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