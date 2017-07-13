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
if ($courses) {
    foreach ($courses->result() as $course) { ?>
        <ul>
            <li><a href=" <?= $course->idCurso; ?>"><?= $course->nombre; ?></a></li>
        </ul>
    <?php }
} else {
    echo "Data not found.";
} ?>
</body>

