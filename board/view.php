<link rel="stylesheet" href="css/board.css">
<?php
    include("../header.php");

    $db = new mysqli("localhost","root","1755","board");
    $query = "select * from board  where no = '".$_GET['no']."'";
    $res = $db->query($query);
    $view = $res->fetch_array();

    $query = "select * from coment  where post_no = '".$_GET['no']."'";
    $res = $db->query($query);
    $get_coment = $res->fetch_array();
    $get_coment['post_no']=$view['no'];
    $get_coment['name']='';
    $get_coment['content']='';
    $get_coment['board']=3;

    $res->data_seek(0);
?>
<article id="bo_v">
    <header>
        <h2 class="bo_v_table"><span class="bo_v_tit"><?php echo $view['title'];?></span></h2>
    </header>
    <section id="bo_v_info">
        <span>작성자 : <strong><?php echo $view['name'];?></strong></span>
        <span>조회 : <?php echo $view['hit'];?></span>
        <strong class="if_date">작성일 : <?php echo $view['regdate'];?></strong>
    </section>
     
    <section id="bo_v_atc">
        <div id="bo_v_con"><?php echo $view['content'];?></div>
    </section>
<?php
    $db->query("update doard set hit = hit+1 where no='".$view['no']."'");
?>
    <div id="bo_v_top">
        <ul class="bo_v_com">
            <li><a href="list.php" class="btn btn_cancel">목록</a></li>
            <li><a href="form.php?no=<?php echo $view['no']?> &act=u" class="btn btn_submit">수정</a></li>
            <li><a href="update.php?no=<?php echo $view['no']?> &act=d" class="btn btn_submit"
            onclick="return connfirm('정말 삭제 하시겠습니다?');">삭제</a></li>
            <li><a href="form.php" class="btn btn_submit">글쓰기</a></li>
            <li><input type="button" id="co_btn" class="btn btn_submit" value="댓글"></li>
        </ul>
    </div>
    <div id="coment" class="bo_w_info write_div" style="display: none;">
        <form action="coment.php" method="post">
            <input type="hidden" name="no" value="<?php echo $get_coment['board']?>">
            <input type="hidden" name="post_no" value="<?php echo $get_coment['post_no']; ?>">
            <input type="hidden" name="act" value="co">
            <input type="text" name="name" class="frm_inpur full_input" placeholder="글쓴이" required>
            <textarea name="content" class="frm_area" placeholder="내용" required></textarea>
            <div class="bo_v_com">
                <input type="submit" id="co_submit" class="btn btn_submit" value="작성"
                <?php $get_coment['board']=$get_coment['board']+1; ?>>
                <input type="button" id="co_cancel"  class="btn btn_submit" value="취소">
            </div>
        </form>
        <table class="table-container">
            <tr>
                <th>이름</th>
                <th>내용</th>
            </tr>
            <?php
                while($view_coment = $res->fetch_array()){
                ?>
                <tr>  
                    <td class="td_co_name"><?php echo $view_coment['name'];?></td>
                    <td class="td_co_content"><?php echo $view_coment['content']?></td>
                </tr>
            <?php
                }
            ?>
        </table>
    </div>
</article>
<script>
    let coment = document.getElementById("coment");
    let co_btn = document.getElementById("co_btn");
    let co_cancel = document.getElementById("co_cancel")

    co_btn.onclick = function(){
        coment.style.display = "block";
    }
    co_cancel.onclick = function(){
        coment.style.display = "none";
    }
</script>
<?php
    include("../footer.php");
?>