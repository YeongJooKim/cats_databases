<?php
    //var_dump($_POST);
    $conn = mysqli_connect("localhost", "root", "123456", "cats_project");
        
    $sql = "
    INSERT INTO cats_3
        (name, age, nickname, description, profile) 
        VALUES(
            '{$_POST['name']}',
            '{$_POST['age']}',
            '{$_POST['nickname']}',
            '{$_POST['description']}',
            '{$_POST['profile'']}'
            );
    ";

    // $sql = "
    // INSERT INTO books 
    //     (title, description, created) 
    //     VALUES(
    //         '{$filtered['title']}',
    //         '{$filtered['description']}',
    //         NOW()
    //     );
    // ";

    //die($sql);

    //INSERT INTO books (title, description, created) VALUES( 'hehe', 'haha','2021-1-1 00:00:00');--NOW(), '1');

    $result = mysqli_query($conn, $sql);
    if($result === false)
    {
        echo '문제가 발생했습니다.';
        echo mysqli_error($conn);
    }
    else
    {
        echo '성공했습니다. <a href = "1-2phpSelect2.php">돌아가기</a>';
    }
?>