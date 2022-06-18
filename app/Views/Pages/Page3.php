<div class="Ramka">
<h2>Слово: №<?=Count($_SESSION['Audit'])?> з <?=Count($_SESSION['Audit'])+Count($_SESSION['Show'])?></h2><br>
<form action="<?=$_SERVER['PHP_SELF']?>?action=test" method="post">
<div class="Word"><span class="en"><?=$Word['ua']?></span></div>
<br>
<input type="text" name="en"><br><br>
<input class="btn" type="submit" value="Наступне слово" name="btnNextWord">
</form>
</div>