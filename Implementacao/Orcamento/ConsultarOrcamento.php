<html>
	<head>
		<?php
			include_once '../Html/head.html';
		?>
	</head>
	<body>
		<div id="titulo">
			<?php
				include_once '../Html/titulo.html';
			?>
		</div>
		
		<div id="menu">
			<?php
				include_once '../Html/menu.html';
			?>
		</div>
		
		<div id="conteudo">
			<?php
				include_once 'FormConsultaOrcamento.php';
				if($tipoRes == "tabela"){
					include_once "ResultadoConsultaOrcamento.php";	
				}else if($tipoRes == "mensagem"){
					echo '<div class="quadro">
						<div class="erroConsulta">Não foram encontrados resultados que atendam aos critérios de pesquisa.</div>
					</div>';
				}
			?>
		</div>
		
		<div id="rodape">
			<?php
				include_once '../Html/rodape.html';
			?>
		</div>
	</body>
</html>