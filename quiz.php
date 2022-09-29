    
    <?php
    $title='Quiz';
    require_once 'header.php';
    $i = 0;
    $c = array('Hey ', 'How', 'Here', 'HURAAH', 'HOORAIN');
    $question=array(['PHP is loosely-based language','true'],['.NET is used for Machine Learning ','false'],['Django is PHP Framework ','false'],['HTML/CSS is used for Back-end development ','false'],['Python is mostly used for AI ','true']);
    $answer = array();
    ?>
    <br />
        

        <form method="POST" action="result.php">
            <?php
            $c = array('Hey ', 'How', 'Here', 'HURAAH', 'HOORAIN');
            $question=array(['PHP is loosely-based language','true'],['.NET is used for Machine Learning ','false'],['Django is PHP Framework ','false'],['HTML/CSS is used for Back-end development ','false'],['Python is mostly used for AI ','true']);
            $answer = array();
             for ($i = 0; $i < count($question); $i++) { ?>

                <?php
                echo "<p>Question no " . $i+1 . " : " . $question[$i][0] . " ?</p>";
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="option[<?php echo $i; ?>]" value="true" required>
                    <label class="form-check-label">
                        TRUE
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="option[<?php echo $i; ?>]" value="false" required>
                    <label class="form-check-label">
                        FALSE
                    </label>
                </div>
                <br />

            <?php
            }

            ?>

            <button type="submit" class="btn btn-primary" name="sub">SUBMIT</button>
        </form>
        <?php

        if (isset($_POST['sub'])) {
            $total=count($question);
            $score=0;
            for ($j = 0; $j < count($question); $j++) {
                if($_POST['option'][$j]==$question[$j][1])
                {
                    $score+=1;
                }
            }
            $obtained=($score/$total)*100;
            echo "<br><h6>You score : ".$obtained." %</h6>";
        }
        ?>
    <?php require_once 'footer.php'?>