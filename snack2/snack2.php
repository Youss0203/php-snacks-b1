<?php
$entraaa = 'può entrare';
$nonentraaa = 'non può entrare';

    if ( empty($_GET['name']) && empty($_GET['mail']) && empty($_GET['age']) ){
        echo $nonentraaa;
    } else {
        if ( strlen($_GET['name']) > 3
            && str_contains($_GET['mail'], '.')
            && str_contains($_GET['mail'], '@')
            && is_numeric($_GET['age'])){
                echo $entraaa;
        } else {
            echo $nonentraaa;
        }
    }
?>


 <form action="./snack2.php" method="GET">
    <label for="name">type your name</label>
    <input type="text" id="name" name="name">

   <label for="mail">type your mail</label>
   <input type="text" id="mail" name="mail">

   <label for="age">type your age</label>
   <input type="number" id="age" name="age">
   <button>submit</button>
 </form>

