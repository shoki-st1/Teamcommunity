<!--登録をする画面-->
<h1>やることを入力してください</h1>
<form method="POST" action="quest_tablecheck.php">
    <!--上からタスク、開始日、終了日-->
    <input type="text" name="question" spellcheck="true" placeholder="100文字まで入力可能" maxlength="100">
    <input type="date" name="startday">
    <input type="date" name="finday">
    <button type="submit" name="insertButton">登録</button>
</form>