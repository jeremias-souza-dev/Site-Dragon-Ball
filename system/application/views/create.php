<div class='errors'> <?php echo error(validation_errors()); ?> </div>
<?php include("public/js/keyboard.php");
global $config;
?>
<script>
	function createAccount() {
		$('.loader').show();
		var form = $('#createAccount').serialize();
		$.ajax({
			url: '<?php echo WEBSITE; ?>/index.php/account/create/1',
			  type: 'post',
			  data: form,
			  success: function(data) {
			  	$('.errors').html(data);
			  	$('.loader').hide();
			  }
		});
	}
</script>
<link rel="stylesheet" type="text/css" href="<?php echo WEBSITE; ?>/public/css/keyboard.css">
<div class='message'>
	<div class='title'>Create an Account</div>
	<div class='content'> <?php echo form_open('account/create', array('id'=>'createAccount')); ?>
		<fieldset>
			<legend >Account Info</legend>
			<div class="table">
				<ul style="width:30%">
					<li class="even">
						<label for="name">Login</label>
					</li>
					<li class="odd">
						<label for="nickname">Nickname</label>
					</li>
					<li class="even">
						<label for="email">E-mail</label>
					</li>
					<li class="odd">
						<label for="password">Senha</label>
					</li>
					<li class="even">
						<label for="repeat">Repita sua senha</label>
					</li>
				</ul>
				<ul style="width:70%">
					<li class="even">
						<input type="text" value="<?php echo set_value('name'); ?>" id="name" class="keyboardInput" name="name"/>
					</li>
					<li class="odd">
						<input type='text' name='nickname' id="nickname" value='<?php echo set_value('nickname'); ?>' />
					</li>
					<li class="even">
						<input  type="text" value="<?php echo set_value('email'); ?>" id="email" name="email"/>
					</li>
					<li class="odd">
						<input type="password" class="keyboardInput" id="password" name="password"/>
					</li>
					<li class="even">
						<input type="password" class="keyboardInput" id="repeat" name="repeat"/>
					</li>
				</ul>
			</div>
		</fieldset>
		<fieldset>
			<legend>Character Info</legend>
			<div class="table">
				<ul style="width:30%">
					<li class="even">
						<label for="character_name">Nick Personagem:</label>
					</li>
					<li class="odd">
						<label for="sex">Sexo:</label>
					</li>
					<li class="even">
						<label for="vocation">Escolha Vocação:</label>
					</li>
					<li class="odd">
						<label for="city">Cidade:</label>
					</li>
					<li class="even">
						<label for="world">Mundo:</label>
					</li>
				</ul>
				<ul style="width:70%">
					<li class="even">
						<input  type="text" id="character_name" value="<?php echo set_value('character_name'); ?>" name="character_name"/>
					</li>
					<li class="odd">
						<input name="sex" type="radio" id="sex" value="1" checked="checked" />
						male &nbsp;
						<input type="radio" id="sex" name="sex" value="0" />
						female </li>
					<li class="even">
						<select name="vocation" class="keyboardInput" id="vocation">
									<option value="1">Goku</option>
								<option value="17">Vegeta</option>
								<option value="32">Piccolo</option>
								<option value="45">C17</option>
								<option value="57">Gohan</option>
								<option value="71">Trunks</option>
								<option value="83">Cell</option>
								<option value="95">Freeza</option>
								<option value="111">Majin Boo</option>
								<option value="127">Broly</option>
								<option value="140">C18</option>
								<option value="152">Uub</option>
								<option value="164">Goten</option>
								<option value="178">Chibi Trunks</option>
								<option value="192">Cooler</option>
								<option value="206">Dende</option>
								<option value="218">Tsuful</option>
								<option value="230">Bardock</option>
								<option value="244">Kuririn</option>
								<option value="256">Pan</option>
								<option value="268">Kaio</option>
								<option value="280">Videl</option>
								<option value="292">Janemba</option>
								<option value="304">Tenshinhan</option>
								<option value="316">Jenk</option>
								<option value="328">Raditz</option>
								<option value="340">C16</option>
								<option value="352">Turles</option>
								<option value="364">Bulma</option>
								<option value="678">Yamcha</option>
								<option value="762">Putine</option>
								<option value="540">Bills</option>
								<option value="560">Whis</option>
								<option value="615">Mira</option>
						</select>
					</li>
					<li class="odd">
						<select name="city" id="city">
							<?php 
	foreach($config['cities'] as $city => $name)  
		echo '<option value="'.$city.'">'.$name.'</option>'; ?>
						</select>
					</li>
					<li class="even">
						<?php 
if(sizeof($config['worlds']) > 1) { ?>
						<select name="world" id="world">
							<?php
	foreach($config['worlds'] as $world => $name)  
		echo '<option value="'.$world.'">'.$name.'</option>'; ?>
						</select>
						<?php }else{ ?>
						<input type="hidden" name="world" value="0" />
						<?php echo $config['worlds'][0]; ?>
						<?php } ?>
					</li>
				</ul>
			</div>
		</fieldset>
		<fieldset>
			<legend>Security image</legend>
			<div class="table">
				<ul style="width: 30%">
					<li class="even">
						
					</li>
					<li class="even">
						<label>Captcha World</label>
					</li>
				</ul>
				<ul style="width: 70%">
					<li class="even">
						<?php echo $captcha;?>
					</li>
					<li class="even">
						 <input type='text' name='captcha'/> 
					</li>
				</ul>
			</div>
		</fieldset>
		<br/>
		<label>&nbsp;</label>
		<input class='sub' type="submit" value="Register"/>
		<?php echo loader(); ?>
		</form>
	</div>
	<div class='bar'>If you create an account you accept to our <a href='#' onClick='$("#rules").toggle(500);'>Rules</a>.</div>
</div>
<div id='rules' style='margin-top: 10px; width: 100%; height: 300px; overflow: auto; display: none;'><?php echo nl2br(getContent("system/rules.php")); ?></div>
