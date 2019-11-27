# CSV to SEO
Easy to use CSV file with PHP and MYSQL to import SEO content quickly

## Installation
0- download csv-to-seo folder and upload it to your website. (it's only a php script)

1- Configure the database in (inc/config.php).

2- Create new table call it csv_seo

```sql
CREATE TABLE `csv_seo` (
  `csv_seo_id` int(11) NOT NULL,
  `page_url` text NOT NULL,
  `h1` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
```

3- Modify seo.csv content to match your website. please keep the same column format.

4- Setup cron job on whatever interval you like and make run this comand
```shell script
/php /path/to/cron.php
```

## Usage

```php
<?php 
require_once 'path/to/csv-to-seo/csv-to-seo.php';

// the script will auto detect the current url and get the recommended title from the csv file.
// use this function to get the title of the page from the CSV
echo seo_get_title(); 

// use this function to get the h1 of the page from the CSV
echo seo_get_h1(); 

// use this function to get the description of the current page from the CSV
echo seo_get_description(); 

// you can use $url as a parameter with any of the functions above to get another page seo data ex:

echo seo_get_description('https://example.com/my-page/'); // to get https://example.com/my-page/ description from the CSV

// the functions will return false if the page doesn't exist in the csv file.

```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update readme as appropriate.

## License
GPLv2 

License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html

