
<style type="text/css">
font.details_wars {
color: #004294;
}
font.details_wars:hover {
color: #0063DC;
}
</style>
<?PHP
require("config.php");
$ots = POT::getInstance();
$ots->connect(POT::DB_MYSQL, connection());
$SQL = $ots->getDBHandle();
echo "<center>
<div class='TableContainer'> 
<div class='CaptionContainer'>      
<div class='CaptionInnerContainer'>        
<span class='CaptionEdgeLeftTop' style='background-image:url(/templates/tibiacom/images/content/box-frame-edge.gif);'></span>        
<span class='CaptionEdgeRightTop' style='background-image:url(/templates/tibiacom/images/content/box-frame-edge.gif);'></span>        
<span class='CaptionBorderTop' style='background-image:url(/templates/tibiacom/images/content/table-headline-border.gif);'></span>       
 <span class='CaptionVerticalLeft' style='background-image:url(/templates/tibiacom/images/content/box-frame-vertical.gif);'></span>        
<div class='Text'>Comandos P. War</div>        
<span class='CaptionVerticalRight' style='background-image:url(/templates/tibiacom/images/content/box-frame-vertical.gif);'></span>        
<span class='CaptionBorderBottom' style='background-image:url(/templates/tibiacom/images/content/table-headline-border.gif);'></span>        
<span class='CaptionEdgeLeftBottom' style='background-image:url(/templates/tibiacom/images/content/box-frame-edge.gif);'></span>        
<span class='CaptionEdgeRightBottom' style='background-image:url(/templates/tibiacom/images/content/box-frame-edge.gif);'></span>      
</div>    
</div>
<table class='Table1' cellpadding='0' cellspacing='0'>        
<tbody><tr>      <td>        
<div class='InnerTableContainer'>          
<table style='width: 100%;'><tbody><tr>


<td><tr bgcolor='#D4C0A1'><td><b><font color='black'>Comandos</font></b></td><td><font color='black'><b>Ação</font></b></td></tr> 
<tr bgcolor='#D4C0A1'><td><font color='black'>/war invite, guild name, fraglimit </font></td><td><font color='black'>Send an invitation to start a war.<br>
Example: war invite, Guild Example, 150</font></td></tr> 
<tr bgcolor='#D4C0A1'><td><font color='black'>/war invite, guild name, fraglimit, money, time </font></td><td><font color='black'>Send an invitation to start a war.
<br>Example: war invite, Guild Example, 150, 10000, 3</font></td></tr> 
<tr bgcolor='#D4C0A1'><td><font color='black'>/war accept, guild name </font></td><td><font color='black'>Accept the invitation to start a war.</font></td></tr> 
<tr bgcolor='#D4C0A1'><td><font color='black'>/war reject, guild name </font></td><td><font color='black'>Reject the invitation to start a war.</font></td></tr> 
 
<tr bgcolor='#D4C0A1'><td><font color='black'>/war cancel, guild name</font></td><td><font color='black'>This will cancel the invitation to the guild Guild Example</font></td></tr> 
</table></td>
</tr>               </td></tr></tbody></table></div>

</center>

<div align='center'><br>
<font color='red'>Os comandos da War de Guilda devem ser escritos em seu canal de guilda para que funcionem</font> 
    <TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH=90%> 
        <TR> 
            <TD align='center'>
   <img src='/templates/dragonballaf/images/Symbol/green.gif'/> Guild Members | 
   <img src='/templates/dragonballaf/images/Symbol/red.gif'/> Guild Enemies | 
   <img src='/templates/dragonballaf/images/Symbol/blue.gif'/> Allies or other active wars</TD> 
</TD> 
        </TR> 
    </TABLE> 
</div>
<br />
<script type=\"text/javascript\"><!--
function show_hide(flip)
{
    var tmp = document.getElementById(flip);
    if(tmp)
        tmp.style.display = tmp.style.display == 'none' ? '' : 'none';
}
--></script>
<center>
<div class='TableContainer'> 
<div class='CaptionContainer'>      
<div class='CaptionInnerContainer'>        
<span class='CaptionEdgeLeftTop' style='background-image:url(/templates/tibiacom/images/content/box-frame-edge.gif);'></span>        
<span class='CaptionEdgeRightTop' style='background-image:url(/templates/tibiacom/images/content/box-frame-edge.gif);'></span>        
<span class='CaptionBorderTop' style='background-image:url(/templates/tibiacom/images/content/table-headline-border.gif);'></span>       
 <span class='CaptionVerticalLeft' style='background-image:url(/templates/tibiacom/images/content/box-frame-vertical.gif);'></span>        
<div class='title'>Guerras atuais</div>        
<span class='CaptionVerticalRight' style='background-image:url(/templates/tibiacom/images/content/box-frame-vertical.gif);'></span>        
<span class='CaptionBorderBottom' style='background-image:url(/templates/tibiacom/images/content/table-headline-border.gif);'></span>        
<span class='CaptionEdgeLeftBottom' style='background-image:url(/templates/tibiacom/images/content/box-frame-edge.gif);'></span>        
<span class='CaptionEdgeRightBottom' style='background-image:url(/templates/tibiacom/images/content/box-frame-edge.gif);'></span>      
</div>    
</div>
<table class='Table1' cellpadding='0' cellspacing='0'>        
<tbody><tr>      <td>        
<div class='InnerTableContainer'>          
<table style='width: 100%;'><tbody><tr>
<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
<tr>
<td style=\"background: #505050\" width=\"150\"><font color=\"white\"><b><center>Aliado</center></b></font></td>
<td style=\"background: #505050\"><font color=\"white\"><b><center>Informação</center></b></font></td>
<td style=\"background: #505050\" width=\"150\"><font color=\"white\"><b><center>Inimigo</center></b></font></td>
</tr>";
$counting = 0;
foreach($SQL->query('SELECT * FROM `guild_wars` WHERE `status` IN (1,4) OR ((`end` >= (UNIX_TIMESTAMP() - 604800) OR `end` = 0) AND `status` IN (0,5));') as $war)
{
    $counting++;
    $a = $ots->createObject('Guild');
    $a->load($war['guild_id']);
    if(!$a->isLoaded())
        continue;
        
    $e = $ots->createObject('Guild');
    $e->load($war['enemy_id']);
    if(!$e->isLoaded())
        continue;
        
    $alogo = $a->getCustomField('id');
    if(empty($alogo) || !file_exists('../../public/guild_logos/' . $alogo))
        $alogo = 'default.gif';
        
    $elogo = $e->getCustomField('id');
    if(empty($elogo) || !file_exists('../../public/guild_logos/' . $elogo))
        $elogo = 'default.gif';
    
    echo "<tr style=\"background: " . (is_int($counting / 2) ? '#D4C0A1' : '#F1E0C6') . ";color:black;\">
<td align=\"center\"><center><a href=\"".WEBSITE."/index.php/guilds/view/".$a->getId()."\"><img src=\"".$config['website']."/public/guild_logos/".$alogo."\" width=\"64\" height=\"64\" border=\"0\"/><br /><font class=\"details_wars\">".$a->getName()."</center></font></a></td>
<td align=\"center\">";

$date_begin = $war['begin'] - (5 * 60 * 60);
$date_end = $war['end'] - (5 * 60 * 60);

    switch($war['status'])
    {
        case 0:
        {
            echo "<center><b>Pending acceptation</b><br />Invited on " . date("M d Y, H:i:s", $date_begin) . " for " . ($date_end > 0 ? (($date_end - $date_begin) / 86400) : "unspecified") . " days. The frag limit is set to " . $war['frags'] . " frags, " . ($war['payment'] > 0 ? "with payment of " . $war['payment'] . " bronze coins." : "without any payment.")."<br />Will expire in three days.</center>";
            break;
        }
 
        case 3:
        {
            echo "<center><s>Canceled invitation</s><br />Sent invite on " . date("M d Y, H:i:s", $date_begin) . ", canceled on " . date("M d Y, H:i:s", $date_end) . ".</center>";
            break;
        }
 
        case 2:
        {
            echo "<center>Rejected invitation<br />Invited on " . date("M d Y, H:i:s", $date_begin) . ", rejected on " . date("M d Y, H:i:s", $date_end) . ".</center>";
            break;
        }

        case 1:
        {
            echo "<center><br /><font size=\"5\"><span style=\"color: red;\">" . $war['guild_kills'] . " </span> : <span style=\"color: lime;\">" . $war['enemy_kills'] . " </span></font><br /><br /><span style=\"color: darkred; font-weight: bold;\">Em Guerra</span><br />Began on " . date("M d Y, H:i:s", $date_begin) . ($date_end > 0 ? ", will end up at " . date("M d Y, H:i:s", $date_end) : "") . ".<br />The frag limit is set to " . $war['frags'] . " frags, " . ($war['payment'] > 0 ? "with payment of " . $war['payment'] . " bronze coins." : "Sem nenhum tipo de pagamento.</center>");
            break;
        }
 
        case 4:
        {
            echo "<center><font size=\"5\"><span style=\"color: red;\">" . $war['guild_kills'] . " </span> : <span style=\"color: lime;\">" . $war['enemy_kills'] . " </span></font><br /><br /><span style=\"color: darkred;\">Pending end</span><br />Began on " . date("M d Y, H:i:s", $war['begin']) . ", signed armstice on " . date("M d Y, H:i:s", $war['end']) . ".<br />Will expire after reaching " . $war['frags'] . " frags. ".($war['payment'] > 0 ? "The payment is set to " . $war['payment'] . " bronze coins." : "There's no payment set.</center>");
            break;
        }
 
        case 5:
        {
            echo "<center><i>Ended</i><br />Began on " . date("M d Y, H:i:s", $date_begin) . ", ended on " . date("M d Y, H:i:s", $date_end) . ". Frag statistics: <span style=\"color: red;\">" . $war['guild_kills'] . " </span> to <span style=\"color: lime;\">" . $war['enemy_kills'] . " </span>.</center>";
            break;
        }
 
        default:
        {
            echo "<center>Unknown, please contact with gamemaster.</center>";
            break;
        }
    }
 
    echo "<br /><br /><a onclick=\"show_hide('war-details:" . $war['id'] . "'); return false;\" style=\"cursor: pointer;\"><font class=\"details_wars\"><center>Detalhes</center></font></a></td>
<td align=\"center\"><center><a href=\"".WEBSITE."/index.php/guilds/view/".$e->getId()."\"><img src=\"".$config['website']."/public/guild_logos/".$elogo."\" width=\"64\" height=\"64\" border=\"0\"/><br /><font class=\"details_wars\">".$e->getName()."</center>    </font></a></td>
</tr>
<tr id=\"war-details:" . $war['id'] . "\" style=\"display: none; background: " . (is_int($counting / 2) ? '#D4C0A1' : '#F1E0C6') . ";color:black;\">
<td colspan=\"3\">";
    if(in_array($war['status'], array(1,4,5))) {
        $deaths = $SQL->query('SELECT `pd`.`id`, `pd`.`date`, `gk`.`guild_id` AS `enemy`, `p`.`name`, `pd`.`level`
FROM `guild_kills` gk
    LEFT JOIN `player_deaths` pd ON `gk`.`death_id` = `pd`.`id`
    LEFT JOIN `players` p ON `pd`.`player_id` = `p`.`id`
WHERE `gk`.`war_id` = ' . $war['id'] . ' AND `p`.`deleted` = 0
    ORDER BY `pd`.`date` DESC')->fetchAll();
        if(!empty($deaths)) {
            foreach($deaths as $death) {
                $killers = $SQL->query('SELECT `p`.`name` AS `player_name`, `p`.`deleted` AS `player_exists`, `k`.`war` AS `is_war`
FROM `killers` k
    LEFT JOIN `player_killers` pk ON `k`.`id` = `pk`.`kill_id`
    LEFT JOIN `players` p ON `p`.`id` = `pk`.`player_id`
WHERE `k`.`death_id` = ' . $death['id'] . '
    ORDER BY `k`.`final_hit` DESC, `k`.`id` ASC')->fetchAll();
                
                $i = 0;
                $count = count($killers); 
                
                $others = false;
                $deathdate = $death['date'] - (5 * 60 * 60);
                echo date("j M Y, H:i", $deathdate) . " <span style=\"font-weight: bold; color: " . ($death['enemy'] == $war['guild_id'] ? "red" : "green") . ";\"><font size=3>+</font></span>
<a href=\"".WEBSITE."/index.php/character/view/".$death['name']. "\"><b><font class=\"details_wars\">".$death['name']."</font></b></a> ";
                foreach($killers as $killer) {
                    $i++;
                    if($killer['is_war'] != 0) {
                        if($i == 1)
                            echo "killed at level <b>".$death['level']."</b> by ";
                        else if($i == $count && $others == false)
                            echo " and by ";
                        else
                            echo ", ";
 
                        if($killer['player_exists'] == 0)
                            echo "<a href=\"".WEBSITE."/index.php/character/view/".$killer['player_name']."\">";
 
                        echo '<font class="details_wars">'.$killer['player_name'].'</font>';
                        if($killer['player_exists'] == 0)
                            echo "</a>";
                    }
                    else
                        $others = true;
 
                    if($i == $count) {
                        if($others == true)
                            echo " and few others";
 
                        echo ".<br />";
                    }
                }
            }
        }
        else
            echo "<center>There were no frags on this war so far.</center>";
    }
    else
        echo "<center>This war did not began yet.</center>";
 
    echo "</td>
</tr>";
}

if($counting == 0) {
    echo "<tr style=\"background: #D4C0A1;\">
<td colspan=\"3\" style=\"color:black;\"><center>No active wars.</center></td>
</tr>";
 }
echo "</tbody></table></td></tr></tbody></table></div>";
?>