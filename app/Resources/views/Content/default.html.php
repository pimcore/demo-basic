<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');

?>

<?= $this->date("date", [
    "format" => "d m Y",
    'outputFormat' => "%d.%m.%Y"
]); ?>

<?= $this->template('Includes/content-default.html.php') ?>
