<?php
$page=htmlspecialchars(@$_GET['page']);
switch ($page){
    case null:
        include 'page/beranda.php';
        break;
    case 'beranda':
        include 'page/beranda.php';
        break;
    case 'metode':
        include 'page/metode.php';
        break;
    case 'kriteria':
        include 'page/kriteria.php';
        break;
    case 'alternatif':
        include 'page/alternatif.php';
        break;
    case 'bobot':
        include 'page/bobot.php';
        break;
    case 'SAW':
        include 'page/SAW.html';
        break;
    case 'WP':
        include 'page/WP.html';
        break;
    case 'PM':
        include 'page/PM.html';
        break;
    case 'hasil':
        include 'page/hasil.php';
        break;
    case 'tambahbobot':
        include 'page/tambahbobot.php';
        break;
    default:
        include 'page/404.php';
}
