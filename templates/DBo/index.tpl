<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="distribution" content="Global" />
		<meta name="author" content="ntodreams" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="Dragon Ball Online Brasil" />
		<meta name="keywords" content="Dragon Ball Online Brasil, Dragon Ball Online, Dragon Ball MMORPG, Dragon Ball Brasil, Dragon Ball Xenoverse, DBO Xenoverse, dbo xenoverse" />
		{$head}
		<title>.:: Dragon Ball War ::.</title>
		<link rel="stylesheet" type="text/css" href="{$path}/templates/DBo/main.css" />
		<link href="{$path}/templates/DBO/favicon1.ico" rel="shortcut icon" />
	</br>
	</center/>
	</center/>
	<script src="" type="text/javascript"></script>
	</center/>
	<br>
	</center/>
	<body>
									</center>
								<br />	
								
		<div id="vt_page">
		</center>
			<div id="vt_header"><a></div></center>
			<center>
											</center>
								<br />
			<div id="vt_container">
				<div id="vt_menu">
					<div id="vt_news_menu">
						<div class=""></div></center>
						<ul>
						 <li><a href="{$path}">Novidades</a></li>
						</ul>
					</div>
					<div id="vt_account_menu"><center>
						<div class="serv"></div></center>

						<ul>
              {if $logged == 1}
                <li><a href="{$path}/index.php/account/"><blink>Minha conta</blink></font></b></a></li>
                <li><a href="{$path}/index.php/p/v/shop/history"><blink>Histórico de compra</blink></font></b></li>
                
                <li><a href="{$path}/index.php/p/v/vpacc"><blink>Como Donatar</blink></font></b></a></li>                
              {else}
              <li><a href="{$path}/index.php/account/login"><blink>Login</blink></font></b></a></li>
			    <li><a href="{$path}/index.php/account/create"><blink>Criar Conta</blink></font></b></a></li>
							{/if}
							
						</ul>
					</div>
					<div id="vt_community_menu">
						<div class="comu"></div>
						<ul>
			  <li><a href="{$path}/index.php/p/v/torneio"><blink>Discord</blink></font></b></a></li>
              <li><a href="{$path}/index.php/character/view"><blink>Procurar Personagem</blink></font></b></a></li>
			  <li><a href="{$path}/index.php/p/v/wars"><blink>War System</blink></font></b></a></li>
			   <li><a href="{$path}/index.php/p/v/membros"><blink>Membros da Equipe</blink></font></b></a></li>
			  <li><a href="{$path}/index.php/p/v/ban"><blink>Banidos</blink></font></b></a></li>
              <li><a href="{$path}/index.php/highscores"><blink>Rank</blink></font></b></a></li>
              <li><a href="{$path}/index.php/p/v/fragers"><blink>Top Frags</blink></font></b></a></li>
			  <li><a href="{$path}/index.php/p/v/deaths"><blink>Ultimas Mortes</blink></font></b></a></li>
              <li><a href="{$path}/index.php/guilds"><blink>Guilds</blink></font></b></a></li>
              <li><a href="{$path}/index.php/character/online"><blink>Online</blink></font></b></a></li>

						</ul>
					</div>
					<div class="info"></div>
					<ul>
			<li><a href="{$path}index.php/p/v/cc21"><blink>Sistema de Boss</blink></font></b></a></a></li>
							</ul>
					</div>
					
				<div id="vt_content">
					{$main}
				</div>
				<div id="vt_panel">
					<div class="top">
						<div class="bot">
							<div id="vt_panel_buttons">
								<a href="{$path}/index.php/p/v/upload" class="button">
									 <span></span>
								</a>

								<a href="{$path}/index.php/p/v/gifts" class="button2"></a>
																</center>
								<br />
							
							<div class="vt_panel_module"><center>
								<font color="white"><div class="header">Server Status</font></div></centeR>
								{foreach from=$worlds key=id item=world}
								<center>
								<div>
									<b>Servidor:</b> {$world} <br />
									<b>Status:</b>  
									{if $serverOnline[$id]}
										<span style="color: green;font-weight: bold;">Online</span><br />
										<b>Uptime:</b> {$serverUptime[$id]} <br />
										<b>Players:</b> {$serverPlayers[$id]}/{$serverMax[$id]}<br /><br />
									{else}
										<span style="color: red;font-weight: bold;">Offline</span>
									{/if}
								</div>
								</center>
								<br />

<div>
{$poll} <br />
</div> 
								{/foreach}
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			<div id="vt_footer">
				<div class="column first">
					<a href=""><img src="" alt="" /></a>
				</div>
				<div class="column second">
					<p>Copyright © 2020 Dragon Ball War.</p>
					<p>
					<p> Créditos Website: Italo</p>
					<small>Page rendered in: {$renderTime} {$admin}</small>
					</p>
				</div>
				<div class="column third">

				</div>
			</div>
		</div>
	</body>
</html>