<link rel="stylesheet" href="css/board.css">

<?php
    $db = new mysqli("localhost","root","1755","board");

    if($_POST['act']=='co' && $_POST['no']){
        $query = "INSERT INTO coment (name, content, post_no) 
                  VALUES ('" . $_POST['name'] . "', '" . $_POST['content'] . "',
                  '" . $_POST['post_no'] . "')";


        $res = $db->query($query);
        if($res){
            echo "<script>alert('댓글 작성 성공');location.href='view.php?no=".$_POST['post_no']."'</script>;";
        }
        else {
            echo "<script>alert('댓글 작성 실패');location.href='view.php?no=".$_POST['post_no']."'</script>;";
        }
    }
    else{
        print("오류");
    }
?>