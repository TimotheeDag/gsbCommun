<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require '../src/Modeles/PdoGsb.php';

$pdo = Modeles\PdoGsb::getPdoGsb();
$pdo->setMdpHash();