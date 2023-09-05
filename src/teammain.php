<?php
require_once 'header.php';
?>

<?php
$temp = $_POST['button'];
echo '選択したのは' . $temp . 'です。';

?>


<br>
<br>
<form method="POST" action="question.php">
    <input type="submit" value="質問する">
</form>

<?php
require_once 'footer.php';
?>