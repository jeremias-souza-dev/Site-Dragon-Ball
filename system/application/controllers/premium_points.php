<?php
	class Premium_Points extends Controller
	{
		function index()
		{
			$ide = new IDE();
				if($ide->isLogged())
				{
					echo "Acesso Restrito!";
				}
		}
		
		function add()
		{
			$this->load->helper("form");
			echo form_open("servidores/add");
			echo form_input("text", "IP");
			echo form_input("text", "Name");
			echo form_input("text", "Port");
			echo form_submit("submit", "Enviar!");
			echo form_close();
		}
	}
?>