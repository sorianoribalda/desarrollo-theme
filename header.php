<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content="<?php bloginfo('description') ?>"> 
    <title><?php bloginfo('name') ?></title>
    <?php wp_head() ?>
</head>
<body>
<?php 
    get_template_part('templates/content','custom-logo');

?>
    
<?php 
    get_template_part('templates/content','navbar');
?>
<?php 
    get_template_part('templates/content', 'jumbotron');
?>

