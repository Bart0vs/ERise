<?php
$date = new Twig\TwigFunction('date', function($param){
    return date($param);
});

return [
    $date,

];