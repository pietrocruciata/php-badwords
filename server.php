<?php 
$paragraph = $_GET['paragraph'];
$paragraph_lenght = strlen($paragraph);
$new_paragraph = str_replace($paragraph, '***',$paragraph);
$new_paragraph_lenght = strlen($new_paragraph);
$changed_caracters_lenght = $paragraph_lenght - $new_paragraph_lenght;


?>

<div><strong>Messaggio</strong> = <?php echo $paragraph;?></div>
<div><strong>Lunghezza messaggio </strong>= <?php echo $paragraph_lenght;?></div>
<div><strong>Nuovo messaggio</strong> = <?php echo $new_paragraph;?></div>
<div><strong>Lunghezza messaggio</strong> = <?php echo $new_paragraph_lenght;?></div>
<div><strong>Caratteri cambiati</strong> = <?php echo $changed_caracters_lenght ;?></div>






