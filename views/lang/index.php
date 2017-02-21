<?php
use yii\helpers\Html;

echo HTML::a('Español', ['change.lang', 'lang' => 'es']);
echo"<br />";
echo HTML::a('Ingles', ['change.lang', 'lang' => 'en']);
echo "<br />";

$message1 = "Bienvenidos a nuestro mundo de programacion ";
echo \Yii::t('app', 'Hola chicos, {message1}' , ['message1' => $message1,
]);
?>
