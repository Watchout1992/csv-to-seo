<?php
// DATABASE CONFIG
require_once 'libs/Idiorm.php';

ORM::configure('mysql:host=localhost;dbname=DATABASE_NAME');
ORM::configure('username', 'DATABASE_USER');
ORM::configure('password', 'DATABASE_PASS');
ORM::configure('id_column_overrides', array(
    'csv_seo'  => 'csv_seo_id'
));

// example csv_seo object
/*
$csv_seo = ORM::for_table('csv_seo')->create();
$csv_seo->page_url = 'https://www.ambertiles.com.au/';
$csv_seo->h1 = 'Indoor & Outdoor Tiles';
$csv_seo->title = 'Indoor &amp; Outdoor Tiles | Pavers | Stone Walls | Amber Tiles';
$csv_seo->description = 'Building or renovating, take the indoors out with Amber&#039;s range of Indoor and Outdoor Tiles, Pavers, Stone and Retaining Walls. Come in store for design ideas. Amber has the Answer.';
$csv_seo->save();
*/

// file to import relative to the index.php
// example excel: https://docs.google.com/spreadsheets/d/1hkxhohwO4Pc2gRWHzX_k2Ux-aufK-xWrFkx97fQFeeQ/edit?usp=sharing
define('SEO_FILE_NAME', 'seo.csv');

// ACTUAL URL
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
define('ACTUAL_URL', $actual_link);
