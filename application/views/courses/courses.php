<?php
/**
 * Created by PhpStorm.
 * User: maliaga
 * Date: 7/13/17
 * Time: 07:20
 */
?>
<body>
<?php
    foreach ($courses->result() as $course){ ?>
        <ul>
            <li><?= $course->nombre; ?></li>
        </ul>
<?php } ?>
</body>

