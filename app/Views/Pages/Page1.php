
    <div class="Start">
        <div>
        <h2>Картки для вивчуння англійських слів</h2>
        <p>Для того, щоб, запамятати якомога більше слів, та поповнити словниковий запас, ми рекомендуємо вам вивчати слова невеликими порціями, шляхом використання методу карток. Ви обираєте кількість слів в наборі, які хочете опанувати. Програма відображає по одному слову з перекладом. Після того як ви оглянули усі члова з обраного набору, програма знову продемонструє ці слова, але цього ж разу програма запропонує самостійно прописати переклад для кожного зі слів. По результатам вам буде встановленна оцінка.</p>
        </div><br>
    <form action="<?=$_SERVER['PHP_SELF']?>?action=remember" method="post">
        <input type="number" name="Count">
        <input class="btn" type="submit" value="Поїхали" name="btnGo">
    </form>
    </div>