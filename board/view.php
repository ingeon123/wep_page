<link rel="stylesheet" href="css/board.css">
<?php
    include("../header.php");

    $db = new mysqli("localhost","root","1755","web");
    $query = "select * from board  where no = '".$_GET['no']."'";
    $res = $db->query($query);
    $view = $res->fetch_array();

    $query = "select * from comment  where post_no = '".$_GET['no']."'";
    $res = $db->query($query);
    $get_comment = $res->fetch_array();
    $get_comment['post_no']=$view['no'];
    $get_comment['name']='';
    $get_comment['content']='';
    $get_comment['board']=3;

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
    <div id="comment" class="bo_w_info write_div" style="display: none;">
        <form action="comment.php" method="post">
            <input type="hidden" name="no" value="<?php echo $get_comment['board']?>">
            <input type="hidden" name="post_no" value="<?php echo $get_comment['post_no']; ?>">
            <input type="hidden" name="act" value="co">
            <input type="text" name="name" class="frm_inpur full_input" placeholder="글쓴이" required>
            <textarea name="content" class="frm_area" placeholder="내용" required></textarea>
            <div class="bo_v_com">
                <input type="submit" id="co_submit" class="btn btn_submit" value="작성"
                <?php $get_comment['board']=$get_comment['board']+1; ?>>
                <input type="button" id="co_cancel"  class="btn btn_submit" value="취소">
            </div>
        </form>
        <table class="table-container">
            <tr>
                <th>이름</th>
                <th>내용</th>
            </tr>
            <?php
                while($view_comment = $res->fetch_array()){
                ?>
                <tr>  
                    <td class="td_co_name"><?php echo $view_comment['name'];?></td>
                    <td class="td_co_content"><?php echo $view_comment['content']?></td>
                    <td>
                        <input type="button" class="comment_edit btn btn_submit" value="수정"
                        post_no="<?php echo $view_comment['post_no']?>"
                        data-no="<?php echo $view_comment['no']; ?>">
                    </td>
                    <td><a href="comment.php?no=<?php echo $view_comment['no']; ?>&post_no=<?php echo $view_comment['post_no']; ?>&act=d"
                    class="btn btn_submit">삭제</a></td>
                    
                    
                </tr>
            <?php
                }
            ?>
        </table>
    </div>
</article>
<script>
    let comment = document.getElementById("comment");
    let co_btn = document.getElementById("co_btn");

    document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.comment_edit').forEach(function(button) {
        button.addEventListener('click', function() {
            var comment_no = this.getAttribute('data-no');
            var comment_post_no = this.getAttribute('post_no');
            var act = "edit";

            console.log(comment_post_no)

            var form = document.createElement('form');
            form.setAttribute('method', 'POST');
            form.setAttribute('action', 'comment.php');

            form.innerHTML = `
                <input type="hidden" name="no" value="${comment_no}">
                <input type="hidden" name="post_no" value="${comment_post_no}">
                <input type="hidden" name="act" value="${act}">
                <input type="text" name="name" placeholder="이름" required>
                <textarea name="content" placeholder="내용" required></textarea>
                <input type="submit" class="btn btn_submit" value="댓글 수정">
            `;

            var parentTr = this.closest('tr');
            if (parentTr.nextElementSibling && parentTr.nextElementSibling.classList.contains('edit-form')) {
                parentTr.nextElementSibling.remove();
                this.value="수정";
            } else {
                var formTr = document.createElement('tr');
                var formTd = document.createElement('td');
                formTd.setAttribute('colspan', '4'); // 컬럼 수에 맞게 조정
                formTd.appendChild(form);
                formTr.appendChild(formTd);
                formTr.classList.add('edit-form');
                parentTr.parentNode.insertBefore(formTr, parentTr.nextSibling);
                this.value="취소";
            }
        });
    });
});            
    

    co_btn.onclick = function(){
        comment.style.display = "block";
    }
    co_cancel.onclick = function(){
        comment.style.display = "none";
    }
</script>
<?php
    include("../footer.php");
?>
