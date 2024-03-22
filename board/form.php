<link rel="stylesheet" href="css/board.css">
<?php
    include("../header.php");
    if(isset($_GET['no'])){
        $db = new mysqli("localhost","root","1755","board");
        $query = "select * from board  where no = '".$_GET['no']."'";
        $res = $db->query($query);
        $form = $res->fetch_array();                
    }
    else{
        $form['name'] = '';
        $form['title'] = '';
        $form['content'] = '';
    }
?>
<div>
    <form action="update.php" method="post">
        <div class="bo_w_info write_div">
            <input type="hidden" name="no" value="<?php echo $form['no'];?>">
            <input type="hidden" name="act" value="<?php echo $_GET['act']; ?>">
            <input type="text" name="name" class="frm_inpur full_input" placeholder="글쓴이" required
            value="<?php echo $form['name'];?>">
            <input type="text" name="title" class="frm_inpur full_input" placeholder="제목" required
            value="<?php echo $form['title'];?>">
            <textarea name="content" class="frm_area" placeholder="내용" required><?php echo $form['content'];?></textarea>
        </div>
        <div class="write_div btn_confirm">
            <a href="list.php" class="btn btn_cancel">취소</a>
            <input type="submit" class="btn btn_submit" value="입력">
        </div>
    </form>
</div>
<?php
    include("../footer.php");
?>