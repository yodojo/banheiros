<?php
error_reporting(E_ALL);
ini_set("display_startup_errors",1);
ini_set("display_errors",1);

require_once ('vendor/autoload.php');
use App\Banheiros;

$mictorios = array(1,1,0,0,0,0,1);
$banheiro = new Banheiros($mictorios);
print_r($mictorios);echo '<br/>correto: ';
print_r(array(3,4));echo '<br/>';
print_r($banheiro->ondeMijar());

echo '<hr/>';
$mictorios = array(0,0,1,0,0,0,0,1);
$banheiro = new Banheiros($mictorios);
print_r($mictorios);echo '<br/>correto: ';
print_r(array(0,4,5));echo '<br/>';
print_r($banheiro->ondeMijar());

echo '<hr/>';
$mictorios = array(0);
$banheiro = new Banheiros($mictorios);
print_r($mictorios);echo '<br/>correto: ';
print_r(array(0));echo '<br/>';
print_r($banheiro->ondeMijar());

echo '<hr/>';
$mictorios = array(1);
$banheiro = new Banheiros($mictorios);
print_r($mictorios);echo '<br/>correto: ';
print_r((null));echo '<br/>';
print_r($banheiro->ondeMijar());

echo '<hr/>';
$mictorios = array(0,0);
$banheiro = new Banheiros($mictorios);
print_r($mictorios);echo '<br/>correto: ';
print_r(array(0,1));echo '<br/>';
print_r($banheiro->ondeMijar());

echo '<hr/>';
$mictorios = array(0,1,0,1,0,0);
$banheiro = new Banheiros($mictorios);
print_r($mictorios);echo '<br/>correto: ';
print_r(null);echo '<br/>';
print_r($banheiro->ondeMijar());

