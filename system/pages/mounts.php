<?PHP
require("config.php");	
echo "<center><h2> | Montarias | {$config['server_name']} |</h2></center>";
echo "<style type=\"text/css\">
.bordafina {
border-collapse : collapse;
}
</style>";



echo "<div align=\"center\">";
  echo "<table width=\"550\" class=\"bordafina\" border=\"1\" >
    <tr>
      <th width=\"119\" bordercolor=\"#0000FF\" scope=\"col\"><div align=\"center\">Command</div></th>
      <th width=\"54\" bordercolor=\"#0033FF\" scope=\"col\"><div align=\"center\">Mounts</div></th>
      <th width=\"220\" scope=\"col\"><div align=\"center\">Items Needed</div></th>
      <th width=\"389\" scope=\"col\"><div align=\"center\">Monsters that drop</div></th>
    </tr>
    <tr>
      <td><div align=\"center\">!mountwidowqueen</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/3/36/Widow_Queen.gif\" width=\"50\" height=\"50\"></div></td>
      <td><div align=\"left\"><img src=\"http://tibiawiki.com.br/images/d/df/Sweet_Smelling_Bait.gif\" width=\"32\" height=\"32\">1 Sweet Smelling Bait</div></td>
      <td><div align=\"center\">Banshee, The Old Widow, Haunted Treeling.</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mountblacksheep</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/1/14/Black_Sheep_%28Mount%29.gif\" width=\"32\" height=\"32\"></div></td>
      <td><div align=\"left\"><img src=\"http://tibiawiki.com.br/images/9/91/Reins.gif\">1 Reins</div></td>
      <td><div align=\"center\">Dark Apprentice, Dark Magician, Orc Rider.</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mountblazebringer</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/e/ea/Blazebringer.gif\" width=\"40\" height=\"50\"></div></td>
      <td><div align=\"left\"><img src=\"http://www.tibiawiki.com.br/images/d/db/Deed_of_Ownership.gif\" width=\"32\" height=\"32\">1 Deed of OwnerShip</div></td>
      <td><div align=\"center\">???</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mountdraptor</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/b/b5/Draptor_%28Mount%29.gif\" width=\"54\" height=\"54\"></div></td>
      <td><div align=\"left\"><img src=\"http://tibiawiki.com.br/images/2/25/Harness.gif\" width=\"32\" height=\"32\">1 Harness</div></td>
      <td><div align=\"center\">Draken Spellweaver.</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mountmidnightpanther</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/1/1f/Midnight_Panther_%28Mount%29.gif\" width=\"32\" height=\"50\"></div></td>
      <td><div align=\"left\"><img src=\"http://tibiawiki.com.br/images/4/44/Leather_Whip.gif\" width=\"32\" height=\"32\">1 Leather Whip</div></td>
      <td><div align=\"center\">Vampire Bride, Bog Raider, Diblis the Fair, Nightmare.</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mountracingbird</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/d/d1/Racing_Bird.gif\" width=\"48\" height=\"48\"></div></td>
      <td><div align=\"left\"><img src=\"http://tibiawiki.com.br/images/b/b7/Carrot_on_a_Stick.gif\" width=\"32\" height=\"32\">1 Carrot on a Stick</div></td>
      <td><div align=\"center\">Carniphila e Tiquandas Revenge.</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mountrapidboar</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/9/9e/Rapid_Boar.gif\" width=\"32\" height=\"46\"></div></td>
      <td><div align=\"left\"><img src=\"http://tibiawiki.com.br/images/e/e7/Hunting_Horn.gif\">1 Hunting Horn</div></td>
      <td><div align=\"center\">???????</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mountstampor</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/a/a0/Stampor_%28Mount%29.gif\" width=\"44\" height=\"44\"></div></td>
      <td><div align=\"left\"><img src=\"http://tibiawiki.com.br/images/3/39/Hollow_Stampor_Hoof.gif\">30 Hollow Stampor Hoof<br>
        <img src=\"http://tibiawiki.com.br/images/c/c6/Stampor_Horn.gif\">50 Stampor Horn<br>
        <img src=\"http://tibiawiki.com.br/images/f/ff/Stampor_Talon.gif\">100 Stampor Talon</div></td>
      <td><div align=\"center\">Stampor.</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mounttinlizzard</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/c/c2/Tin_Lizzard.gif\" width=\"45\" height=\"65\"></div></td>
      <td><div align=\"left\"><img src=\"http://tibiawiki.com.br/images/f/fe/Tin_Key.gif\">1 Tim Key</div></td>
      <td><div align=\"center\">Behemoth, War Golem, Destroyer?, Hydra?, Plaguesmith?, Morgaroth?</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mounttitanica</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/3/32/Titanica.gif\" width=\"56\" height=\"56\"></div></td>
      <td><div align=\"left\"><img src=\"http://tibiawiki.com.br/images/b/b6/Giant_Shrimp.gif\">1 Giant Shrimp</div></td>
      <td><div align=\"center\">Quara Pincher, Quara Pincher Scout, Quara Predator.</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mountundeadcavebear</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/8/86/Undead_Cavebear_%28Mount%29.gif\" width=\"54\" height=\"54\"></div></td>
      <td><div align=\"left\"><img src=\"http://tibiawiki.com.br/images/2/25/Maxilla_Maximus.gif\">1 Maxilla Maximus</div></td>
      <td><div align=\"center\">Undead Gladiator?, Grim Reaper?, Lich.</div></td>
    </tr>
    <tr>
      <td><div align=\"center\">!mountwarbear</div></td>
      <td><div align=\"center\"><img src=\"http://www.tibiawiki.com.br/images/e/e5/War_Bear.gif\" width=\"32\" height=\"50\"></div></td>
      <td><div align=\"left\"><img src=\"http://www.tibiawiki.com.br/images/0/0b/Slingshot.gif\">1 Slingshot</div></td>
      <td><div align=\"center\">Hunter e Poacher</div></td>
    </tr>
  </table>";
echo "</div>";
?>