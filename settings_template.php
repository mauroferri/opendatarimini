<?php
//modulo delle KEYs per funzionamento dei bot (da non committare)

//Telegram
define('APIT','AIzaSyDe4R1jRRqId46Zl54IPWdCHpF0xotdRIU'); // inserire API key google per short link
define('TELEGRAM_BOT',''); // inserire il token
define('BOT_WEBHOOK', '');
define('LOG_FILE', 'telegram.log');

$db_path=dirname(__FILE__).'/./lecceod.sqlite';
$csv_path=dirname(__FILE__).'/./map_data.csv';
define ('DB_NAME', "sqlite:". $db_path);
define('DB_TABLE',"user");
define('DB_TABLE_GEO',"segnalazioni");
define('DB_CONF', 0666);
define('DB_ERR', "errore database SQLITE");

// Your Openstreetmap Query settings
define('AROUND', 5000);						//Number of meters to calculate radius to search
define('MAX', 30);							//max number of points to search
//define('TAG','"amenity"="pharmacy"');

?>
