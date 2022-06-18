<div class="Ramka">
<h2>Результат <?=Audit1()?> з <?=Count($_SESSION['Audit'])+Count($_SESSION['Show'])?></h2><br>
<ul>
<?php for ($i=0; $i < Count($_SESSION['Audit']); $i++)
{
echo "<li>";
echo "<span class='Control'>".$_SESSION['Audit'][$i]['ua']."</span> - <span class='".Audit($_SESSION['Audit'][$i],$_SESSION['Answer'][$i]['en'])."'>".$_SESSION['Answer'][$i]['en']."</span>";
echo "</li>";
}
?>
</ul>
<form action="<?=$_SERVER['PHP_SELF']?>?action=home" method="post">
<input class="btn" type="submit" value="Спробувати ще раз!" name="Recet">
</form>
</div>