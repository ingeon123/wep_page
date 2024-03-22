<?php
    $db = new mysqli("localhost","root","1755","board");
    $query = "select * from board";
    $res = $db->query($query);
    $count = $res->num_rows;
    include("../header.php");
?>
<link rel="stylesheet" href="css/board.css">
<div class="list_top"><a href="form.php" class="btn btn01">글쓰기</a></div>
<div class="tbl_head01 tn1_wrap">
    <table class="table-container">
        <thead>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>글쓴이</th>
                <th>날짜</th>
                <th>조회</th>
            </tr>
        </thead>
        <tbody> 
                <?
                    while($row = $res->fetch_array()){
                ?>
                <tr>
                    <td class="td_num"><?php echo $row['no'];?></td>
                    <td class="td_subject">
                        <a href="view.php?no=<?php echo $row['no']?>"><?php echo $row['title'];?></a>
                    </td>
                    <td class="td_name"><?php echo $row['name'];?></td>
                    <td class="td_datetime"><?php echo date("Y.m.d H:i",strtotime($row['regdate']));?></td>
                    <td class="td_hit"><?php echo $row['hit'];?></td>
                </tr>
                <?
                    }
                    $count = $res->num_rows;
                    if($count == 0){
                        echo "<tr><td colspan>";
                    }
                ?>
        </tbody>
    </table>
</div>
<script>
    let delete_btn = document.getElementById()
    function e_delete(){

    } 
</script>
<?php
    include("../footer.php");
?>