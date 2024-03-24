<link rel="stylesheet" href="css/board.css">

<?php
    $db = new mysqli("localhost","root","1755","web");

    if($_POST['act']=='co' && $_POST['no']){
        $query = "INSERT INTO comment (name, content, post_no) 
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

    elseif($_POST['act']=='edit'&& $_POST['no']){
        $query = "update comment
                    set name = '" . $_POST['name'] . "', 
                    content = '{$_POST['content']}'
                    where no = '{$_POST['no']}'";
        $res = $db->query($query);
        if($res){
            echo "<script>alert('댓글 수정 성공');location.href='view.php?no=".$_POST['post_no']."'</script>;";
        }
        else {
            echo "<script>alert('댓글 수정 실패');location.href='view.php?no=".$_POST['post_no']."'</script>;";
        }
    }

    elseif($_GET['act']=='d' && $_GET['no']){
        $query = "delete from comment where no = '".$_GET['no']."'";
        $res = $db->query($query);
        if($res){
            echo "<script>alert('댓글 삭제 성공');location.href='view.php?no=".$_GET['post_no']."'</script>;";
        }
        else {
            echo "<script>alert('댓글 삭제 실패');location.href='view.php?no=".$_GET['post_no']."'</script>;";
        }
    }
    else{
        print("오류");
    }
?>
