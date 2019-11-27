<?php
require_once 'inc/config.php';
$file = fopen(SEO_FILE_NAME, 'r');
while (($line = fgetcsv($file)) !== FALSE) {
    // skip the CSV header
    if (filter_var($line[0], FILTER_VALIDATE_URL) === FALSE) {
        continue;
    }

    // check if the url is in the database
    $csv_seo = ORM::for_table('csv_seo')->where('page_url', $line[0])->find_one();
    if ($csv_seo) {
        if ($line[1] != '') {
            $csv_seo->h1 = $line[1];
        }
        if ($line[2] != '') {
            $csv_seo->title = $line[2];
        }
        if ($line[3] != '') {
            $csv_seo->description = $line[3];
        }
        $csv_seo->save();
    } else {
        $csv_seo = ORM::for_table('csv_seo')->create();
        $csv_seo->page_url = $line[0];
        $csv_seo->h1 = $line[1];
        $csv_seo->title = $line[2];
        $csv_seo->description = $line[3];
        $csv_seo->save();
    }
}
fclose($file);
echo 'true';