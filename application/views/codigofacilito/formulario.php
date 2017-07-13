<?php
/**
 * Created by PhpStorm.
 * User: maliaga
 * Date: 7/12/17
 * Time: 21:23
 */
?>
<body>
<?= form_open("/codigofacilito/recibirdatos") ?>
<?php
$name = array(
    'name' => 'name',
    'placeholder' => 'Escribe tu nombre'
);

$videos = array(
    'name' => 'videos',
    'placeholder' => 'Cant videos'
);
?>
<?= form_label('Name: ', 'name') ?>
<?= form_input($name) ?>
<br/>
<?= form_label('Videos count: ', 'videos') ?>
<?= form_input($videos) ?>
<br/>
<?= form_submit('', 'Upload Curse') ?>
<?= form_close() ?>
</body>
