<?php
    $db = new mysqli("localhost", "root", "1234", "board"); //ip,id,pw,db
    if($_POST['act'] == 'u' && $_POST['no']){
        $query = "update board
                        set name = '" . $_POST['name'] . "', 
                        title = '{$_POST['title']}', 
                        content = '{$_POST['content']}'
                    where no = '{$_POST['no']}'";
        $res = $db->query($query);
        
        if ($res) {
            echo "<script>alert('글수정 완료.');location.href='view.php?no=".$_POST['no']."';</script>";
        }else{
            echo "<script>alert('글수정 실패.');location.href='form.php?no=".$_POST['no']."&act=u';</script>";
        }

    }else if($_GET['act'] == 'd' && $_GET['no']){
        $query = "delete from board where no = '".$_GET['no']."'";
        $res = $db->query($query);
        
        if ($res) {
            echo "<script>alert('글삭제 완료.');location.href='list.php';</script>";
        }else{
            echo "<script>alert('글삭제 실패.');location.href='view.php?no=".$_POST['no']."';</script>";
        }

    }else{
        $query = "insert board 
                        set name = '" . $_POST['name'] . "', 
                            title = '{$_POST['title']}', 
                            content = '{$_POST['content']}',
                            regdate = NOW()";
        $res = $db->query($query);
        
        if ($res) {
            echo "<script>alert('글작성 완료.');location.href='list.php';</script>";
        }else{
            echo "<script>alert('글작성 실패.');location.href='form.php';</script>";
        }
    }
?>