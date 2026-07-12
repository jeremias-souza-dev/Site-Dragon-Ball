            <div class='message'>
            <div class='title'>Dragon Ball War</div>
            <div class='content'>
<?PHP
require("config.php");
$ots = POT::getInstance();
$ots->connect(POT::DB_MYSQL, connection());
$SQL = $ots->getDBHandle();
$ide = new IDE;
$light = '#151515';
$dark = '#070707';
if ($ide->isLogged() == true) {
include("shop/gifts.php");
}
else
echo '<div align="center"><br />Você precisa está logado na conta, para acessar o shop!</div>';
?>
</div></div>
