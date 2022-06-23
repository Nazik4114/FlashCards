<div class="Ramka">
<h2>Сесія: <?=count($_SESSION['Show'])?> з <?=count($_SESSION['AnShow'])+count($_SESSION['Show'])?> слів</h2><br>
<div class="Word">
<span class="en"><?=$word['en']?></span><br>
<span><?=$word['ua']?></span>
</div>
<form action="<?=$_SERVER['PHP_SELF']?>?action=remember" method="post">
<br>
<input class="btn" type="submit" value="Наступне слово" name="btnNextWord">
</form>
</div>