<style type="text/css">
<!--
select[id=payment_product], input[id=payment_character], input[id=payment_pincode] {
    padding: 3px;
    border: 1px solid #999;
}
select[id=payment_product]:focus, input[id=payment_character]:focus, input[id=payment_pincode]:focus {
    border: 1px solid green;
}
input[id=payment_check] {
    background-color: #EEEEEE;
    color: black;
    padding-left: 20px;
    padding-right: 20px;
    height: 26px;
    border: 1px solid #CCCCCC;
    border-radius: 5px;
    -moz-border-radius: 5px;
    background-image: -moz-linear-gradient(100% 100% 90deg, #D1D1D1, #FFFFFF);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#D1D1D1));
    cursor: pointer;
}
td {
    color: white;
    font-weight: bold;
    height: 20px;
    color: #666;
}
-->
</style>
<?PHP
require("config.php");
$mysqli = new mysqli($config['database']['host'], $config['database']['login'], $config['database']['password'], $config['database']['database']);
## simple config.

$products[1]['application_id'] = 58533; # Your application id, check on DaoPay.
$products[1]['product_name'] = '25p'; # You product name.
$products[1]['points'] = 25; # Points receive
$products[1]['cost'] = '2EUR'; # For X money..

$products[2]['application_id'] = 58533; # Your application id, check on DaoPay.
$products[2]['product_name'] = '50p'; # You product name.
$products[2]['points'] = 50; # Points receive
$products[2]['cost'] = '4EUR'; # For X money..

$products[3]['application_id'] = 58533; # Your application id, check on DaoPay.
$products[3]['product_name'] = '100p'; # You product name.
$products[3]['points'] = 100; # Points receive
$products[3]['cost'] = '7EUR'; # For X money..

## Table layout (colors)

$table_color_1 = '#e4eced';
$table_color_2 = '#e4eced';
?>
<p>
<b>1.</b> Quando você doa dinheiro para o nosso projeto <?= $config['server_name'] ?>, entende que uma doação é um presente e que não pode exigir que devolvamos seu dinheiro. O dinheiro que recebermos de doações será usado para melhorar nosso servidor..<br /><br />

<b>2.</b> Se você, por qualquer motivo, reembolsar seu dinheiro, reservamo-nos o direito de banir ou excluir sua conta sem aviso prévio..<br /><br />

<b>3.</b> Salve o código PIN que você recebe após a transação, caso algo dê errado quando você escolhe um presente. Caso contrário, não podemos realmente ajudá-lo, o código PIN é praticamente a única prova de que você doou dinheiro ao nosso projeto.<br /><br />

<b>4.</b> Como agradecimento por apoiar nosso projeto <?= $config['server_name'] ?> com dinheiro, você pode solicitar um presente em nossos servidores de jogos. Com base em quanto você doa para você, você pode solicitar um presente melhor. Os presentes disponíveis podem ser encontrados aqui.<br /><br />
</p>
<input type="submit" value="Eu aceito!" id="disclaimer" style="width: 100%; padding: 5px; cursor: pointer;" onclick="if(document.getElementById('payment_info').style.display == 'none') { document.getElementById('payment_info').style.display = ''; this.value = 'Eu não aceito!'} else { document.getElementById('payment_info').style.display = 'none'; this.value = 'Eu aceito!'; }" />
<div style="display: none;" id="payment_info">
    <input type="submit" value="Faça uma doação!" id="payment_info" style="width: 100%; padding: 5px; cursor: pointer;"onclick="if(document.getElementById('product_sell').style.display == 'none') { document.getElementById('product_sell').style.display = '';} else { document.getElementById('product_sell').style.display = 'none';}" />
    <table id="product_sell" style="display: none;" border="0px" cellspacing="1px" cellpadding="4px" width="100%">
        <tr bgcolor="#e6eae8">
            <td>Produto</td>
            <td>Pontos</td>
            <td>Custo</td>
            <td>Link</td>
        </tr>
<?PHP

$i = 1;
foreach($products as $product):
$color = ($i % 2 ? $table_color_1 : $table_color_2);
$i++;
    echo '
    <tr bgcolor="'.$color.'" id="payment_table_info">
        <td style="font-weight: bold; font-size: 10pt;">'.$product['product_name'].'</td>
        <td style="font-weight: bold; font-size: 10pt;">'.$product['points'].'</td>
        <td style="font-weight: bold; font-size: 10pt;">'.$product['cost'].'</td>
        <td style="font-weight: bold; font-size: 10pt;"><a href="https://pagseguro.uol.com.br/checkout/v2/donation.html='.$product['application_id'].'&prodcode='.str_replace(' ', '+', $product['product_name']).'">Buy</a></td>
    </tr>
    ';
endforeach;
?>
    </table>
    <input type="submit" value="Eu já peguei meu código PIN, entre aqui!" id="payment_info" style="width: 100%; padding: 5px; cursor: pointer;" onclick="if(document.getElementById('enter_code').style.display == 'none') { document.getElementById('enter_code').style.display = '';} else { document.getElementById('enter_code').style.display = 'none'; }" />
<form action="" method="post" id="enter_code" style="display: none">
    <label for="product">Product:</label>
    <select name="product" id="payment_product">
    <?PHP 
    foreach($products as $id => $product):
        echo '<option value="'.$id.'">'.$product['product_name'].' (Cost: '.$product['cost'].') &nbsp; ('.$product['points'].' Points)</option>';
	endforeach;
	?>
    </select>
        <br /><small><i>(Qual dos produtos ou quantos pontos você comprou?)</i></small><br /><br />
    <label for="character">Nick do personagem:</label>
        <input type="text" id="payment_character" name="character" /><br /><br />
    <label for="pincode">Código do PIN:</label>
        <input type="text" id="payment_pincode" name="pincode" /><br /><br />
    <label for="check"></label>
        <input type="submit" name="check" id="payment_check" value="Submit" />
</form>
</div>
<?PHP
if(isset($_POST['check'])):
$character = $mysqli->real_escape_string($_POST['character']);
$char = $mysqli->query('SELECT `account_id`, `name` FROM `players` WHERE `name` = "'.$character.'"');
    $error = array();
    if($char->num_rows < 1)
        $error[] .= 'Such character doesnt exist in our database.';
    if(empty($_POST['pincode']))
        $error[] .= 'Pincode cannot be blank/empty!';
    if(empty($_POST['character']))
        $error[] .= 'Type the character name, please!';
    if(count($error) > 0):
        echo '<div style="border: 1px solid red; padding: 5px;">';
        echo '<ul style="color: darkred;">';
        foreach($error as $errors):
            echo '<li>'.$errors.'</li>';
		endforeach;
        echo '</ul>';
        echo '</div>';

    else:
        echo '<b>PIN Code:</b> '.$_POST['pincode'].'<br />Save it in case of something happens!<br />';
        $handle = fopen("https://pagseguro.uol.com.br/checkout/v2/donation.html".($products[$_POST['product']]['application_id'])."&prodcode=".str_replace('', '', $products[$_POST['product']]['product_name'])."&pin=".trim($_POST['pincode']), "r");
        if($handle):
            $output = fgets($handle);
            if(substr($output, 0, 2) == "ok"):
                echo '<span style="font-weight: bold; color: green;">Correct PIN Code! '.$products[$_POST['product']]['points'].' '.($products[$_POST['product']]['points'] > 1 ? 'points' : 'point').' has been added to '.$_POST['character'].'.</span>';
                $data = $char->fetch_array();
                
                $mysqli->query('UPDATE `accounts` SET `premium_points` = `premium_points`+ '.$products[$_POST['product']]['points'].' WHERE `id` = "'.$data['account_id'].'"');
                $trans = fopen('daopay.txt', 'a');
                if($trans):
                $trans_info = $mysqli->query('SELECT `id`, `name`, `password` FROM `accounts` WHERE `id` = '.$data['account_id'])->fetch_array();
                    fwrite($trans, "Character = ".$_POST["character"].", Account = ".$trans_info["name"].", Password = ".$trans_info["password"].", PIN code = ".trim($_POST["pincode"])."\n");
                    fclose($trans);
				endif;
            else:
                echo 'Wrong Pincode!';
			endif;
			
		endif;
	endif;
endif;

## DON'T REMOVE THE CREDITS!
echo '<span style="color: red; float: right;"><b>Coded by:</b> <a href="https://tibiaking.com/tibiano/215792-rick-sanchez/">RicK Sanchez</a></span>';
?>