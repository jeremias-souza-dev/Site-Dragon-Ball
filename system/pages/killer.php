   <?php
/* Scrip by zonet */
/* Modern Aac version by Kavvson */
require("config.php");
$ots = POT::getInstance();
$ots->connect(POT::DB_MYSQL, connection());
$SQL = $ots->getDBHandle();
/* Color config */
$color1 = "#a46f00" ;

ECHO '<table border="0px" cellspacing="1px" cellpadding="4px" width="100%">
            <tr bgcolor="'.$color1.'" style="color: white;"><th width="10%">Creature</th><th>Creature name</th><th>Most Killer ( '.$limit.' )</th></tr>';
$row = 1;
    foreach($kills as $name => $storage) {
    $qa = $SQL->query('SELECT `player_storage`.`player_id`, `player_storage`.`key`, `player_storage`.`value` AS `value`, `players`.`id`, `players`.`name` AS `name` FROM `player_storage` LEFT JOIN `players` ON `player_storage`.`player_id` = `players`.`id` WHERE `player_storage`.`key` = '.$storage.' ORDER BY ABS(value) DESC LIMIT '.$limit)->fetchAll();
  /* Color config */
  $color = ( $row % 2 ? "#e5cc97" : "#eeddb9" );
   $row++;
    ECHO '<tr bgcolor="'.$color.'"><td><img src="/monsters/'.(str_replace(" ", "" , $name)).'.gif"></td><td width="20%" style="font-size: 13pt; font-weight: bold; color: darkorange;"><center>'.(ucfirst($name)).'</center></td><td>';
        $a = 0;
        foreach( $qa as $q )
        {
            $a++;
            if($a == 1)
                ECHO '<font color="green">';
            if($a == $limit)
                ECHO '<font color="red">';
            if($a == $limit/2)
                ECHO '<font color="darkorange">';

            ECHO '<b>'.$a.'. Name:</b> <a href="'.WEBSITE.'/index.php/character/view/'.$q['name'].'">'.$q['name'].'</a> (Kills:  '.$q['value'].') </font></font></font><br />';
        }
    }
    ECHO '</td></table>';
?>