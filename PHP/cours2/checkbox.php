<?php
if(isset($_POST['submit']))
{
    // Je vais boucler sur les éléments
    foreach($_POST['repas'] as $repas)
    {
        echo $repas.'<br>';
    }
}
?>