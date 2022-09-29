<?php
$title = 'result';
require_once 'header.php' ?>

<?php

$question = array(['PHP is loosely-based language', 'true'], ['.NET is used for Machine Learning ', 'false'], ['Django is PHP Framework ', 'false'], ['HTML/CSS is used for Back-end development ', 'false'], ['Python is mostly used for AI ', 'true']);

if (isset($_POST['sub'])) {
    $total = count($question);
    $score = 0;
    for ($j = 0; $j < count($question); $j++) {
        if ($_POST['option'][$j] == $question[$j][1]) {
            $score += 1;
        }
    }
    $obtained = ($score / $total) * 100;
?>
    <div class="box shadow p-3 mb-5 rounded">
        <h3 style="text-align:center">You Got : <?php echo $obtained ?> %</h3>
        <form action="index.php">
            
        <center><button class="btn btn-primary" >RETRY</button></center>
        </form>
    </div>
<?php
}
?>
<?php require_once 'footer.php' ?>