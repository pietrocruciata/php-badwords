<?php
$paragraph = $_GET['paragraph'];
$censored = $_GET['censored'];

$paragraph_lenght = strlen($paragraph);

$new_paragraph = str_replace($censored, '***', $paragraph, $count);
$new_paragraph_lenght = strlen($new_paragraph);



?>

<div>
    <strong>paragrafo</strong> = <?php echo $paragraph; ?>
</div>
<div>
    <strong>Lunghezza paragrafo </strong>= <?php echo $paragraph_lenght; ?>
</div>
<div>
    <strong>Nuovo paragrafo</strong> = <?php echo $new_paragraph; ?>
</div>
<div>
    <strong>Lunghezza nuovo paragrafo</strong> = <?php echo $new_paragraph_lenght; ?>
</div>
<div>
    <strong>Caratteri cambiati</strong> = <?php echo $count; ?>
</div>