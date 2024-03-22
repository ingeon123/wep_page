<?php
  if(isset($_GET['no'])){
    $db = new mysqli("localhost","root","1234","board"); //ip,id,pw,db
    $query = "select * from board where no = '".$_GET['no']."'";
    $res = $db->query($query);
    $form = $res->fetch_array();
  }else{
    $form['name'] = '';
    $form['title'] = '';
    $form['content'] = '';
  }
  include("../header.php");
?>
<link rel="stylesheet" href="css/board.css">
<div>
    <form action="update.php" method="post">
        <input type="hidden" name="no" value="<?php echo $form['no']; ?>">
        <input type="hidden" name="act" value="<?php echo $_GET['act']; ?>">
        <div class="bo_w_info write_div">
            <input type="text" name="name" class="frm_input full_input" placeholder="글쓴이" required value="<?php echo $form['name']; ?>">
            <input type="text" name="title" class="frm_input full_input" placeholder="제목" required value="<?php echo $form['title']; ?>">
            <textarea name="content" class="frm_area" placeholder="내용" required><?php echo $form['content']; ?></textarea>
        </div>
        <div class="btn_confirm write_div">
            <a href="list.php" class="btn btn_cancel">취소</a>
            <input type="submit" class="btn btn_submit" value="입력">
        </div>
    </form>
</div>
<?php
include("../footer.php");
?>