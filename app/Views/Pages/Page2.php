<div class="Ramka">
<h2>Сесія: <?=Count($_SESSION['Show'])?> з <?=Count($_SESSION['AnShow'])+Count($_SESSION['Show'])?> слів</h2><br>
<div class="Word">
<span class="en"><?=$Word['en']?></span><br>
<span><?=$Word['ua']?></span>
</div>
<form action="<?=$_SERVER['PHP_SELF']?>?action=remember" method="post">
<br>
<input class="btn" type="submit" value="Наступне слово" name="btnNextWord">
</form>
</div>