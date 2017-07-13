<?php
/**
 * Created by PhpStorm.
 * User: maliaga
 * Date: 7/13/17
 * Time: 08:03
 */
?>
<body>
<?= form_open("/course/update/$id") ?>
<?php
$name = array(
    'name' => 'name',
    'placeholder' => 'Escribe tu nombre',
    'value' => $course->result()[0]->nombre
);

$videos = array(
    'name' => 'videos',
    'placeholder' => 'Cant videos',
    'value' => $course->result()[0]->cantidad
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