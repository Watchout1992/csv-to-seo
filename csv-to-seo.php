<?php
require_once 'inc/config.php';

function seo_get_title($page_url = null){
  if(is_null($page_url)){
    $page_url = ACTUAL_URL;
  }
  $csv_seo = ORM::for_table('csv_seo')->where('page_url', $page_url)->find_one();
  if($csv_seo){
    return $csv_seo->title;
  }else{
    return false;
  }
}

function seo_get_h1($page_url = null){
  if(is_null($page_url)){
    $page_url = ACTUAL_URL;
  }
  $csv_seo = ORM::for_table('csv_seo')->where('page_url', $page_url)->find_one();
  if($csv_seo){
    return $csv_seo->h1;
  }else{
    return false;
  }
}

function seo_get_description($page_url = null){
  if(is_null($page_url)){
    $page_url = ACTUAL_URL;
  }
  $csv_seo = ORM::for_table('csv_seo')->where('page_url', $page_url)->find_one();
  if($csv_seo){
    return $csv_seo->description;
  }else{
    return false;
  }
}

