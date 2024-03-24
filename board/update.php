<link rel="stylesheet" href="css/board.css">

<?php
    $db = new mysqli("localhost","root","1755","web");
    
    // 수정
    if($_POST['act']=='u' && $_POST['no']){
        $query = "update board
                        set name = '" . $_POST['name'] . "', 
                        title = '{$_POST['title']}', 
                        content = '{$_POST['content']}'
                        where no = '{$_POST['no']}'";

        $res = $db->query($query);
        if($res){
            echo "<script>alert('글수정 완료');location.href='view.php?no=".$_POST['no']."'</script>";
        }
        else {
            echo "<script>alert('글수정 실패');location.href='.php?no=".$_POST['no']."&act=u'</script>";
        }
    }

    //삭제
    elseif($_GET['act']=='d' && $_GET['no']){
        $query = "delete from board where no = '".$_GET['no']."'";
        $res = $db->query($query);
        if($res){
            echo "<script>alert('글삭제 완료');location.href='list.php'</script>";
        }
        else {
            echo "<script>alert('글삭제 실패');location.href='view.php?no".$_POST['no']."'</script>";
        }
    }
    
    //글작성
    else{
        $query = $query = "INSERT INTO board (name, title, content) 
                            VALUES ('" . $_POST['name'] . "', 
                            '" . $_POST['title'] . "', 
                            '" . $_POST['content'] . "')";

        $res = $db->query($query);

        if($res){
            echo "<script>alert('글작성 완료');location.href='list.php'</script>;";
        }
        else {
            echo "<script>alert('글작성 실패');location.href='form.php'</script>;";
            //echo "Query Failed: (" . $db->errno . ") " . $db->error;
        }
    }
?>
<div>
    
</div>
