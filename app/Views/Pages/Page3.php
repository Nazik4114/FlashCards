<div class="Ramka">
<h2>Слово: №<?=count($_SESSION['Audit'])?> з <?=count($_SESSION['Audit'])+count($_SESSION['Show'])?></h2><br>
<form action="<?=$_SERVER['PHP_SELF']?>?action=test" method="post">
<div class="Word"><span class="en"><?=$word['ua']?></span></div>
<br>
<input type="text" name="en"><br><br>
<input class="btn" type="submit" value="Наступне слово" name="btnNextWord">
</form>
</div>