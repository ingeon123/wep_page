<?php
  $db = new mysqli("localhost","root","1234","board"); //ip,id,pw,db
  $query = "select * from board";
  $res = $db->query($query);
  $count = $res->num_rows;
  include("../header.php");
?>

<link rel="stylesheet" href="css/board.css">
<div class="list_top"><a href="form.php" class="btn btn01">글쓰기</a></div>
<div class="tbl_head01 tbl_wrap">
    <table>
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
<?php
    while ($row = $res->fetch_array()) {
?>
            <tr>
                <td class="td_num"><?php echo $row['no'];?></td>
                <td class="td_subject">
                <a href="view.php?no=<?php echo $row['no'];?>"><?php echo $row['title'];?></a>
                </td>
                <td class="td_name"><?php echo $row['name'];?></td>
                <td class="td_datetime"><?php echo date("Y.m.d H:i",strtotime($row['regdate']));?></td>
                <td class="td_hit"><?php echo $row['hit'];?></td>
            </tr>
<?php
    }
    $count = $res->num_rows;
    if ($count == 0) {
        echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
    }
?>
        </tbody>
    </table>
</div>
<?php
include("../footer.php");
?>