<?php


$idade = 16;
$acompanhado = false;
if($idade >= 18) {
    echo "Você pode entrar";
} else if($acompanhado) {
    echo "Você pode entrar";
}else {
    echo "Você não pode entrar";
}