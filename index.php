<!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title></title>
        <style type="text/css">
			.mictorios span{
				display: inline-block;
				width: 150px;
				height: 170px;
				margin: 0 2px;
			}
			.mictorios span.ocupado{
				background: url(css/imagens/mictorio-ocupado.png) center center no-repeat;
			}
			.mictorios span.vazio{
				background: url(css/imagens/mictorio-vazio.png) center center no-repeat;
			}
			.mictorios span.desativado{
				background: url(css/imagens/desativado.png) center center no-repeat;
			}
			.mictorios span.ok{
				background: url(css/imagens/mictorio-vazio.png) center center no-repeat;
			}
        </style>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript">
        $(function(){
        	$('.mictorios div').each(function(){
        		var total = ($(this).find('span').length/2) + 1;
        		$(this).width(
        		 total * $(this).find('span').eq(0).width()
        		);
        	})
        	
        })
        </script>
    </head>
    <body>
	<div class="mictorios">
		<?php

		require_once ('vendor/autoload.php');
		use App\Banheiros;

		$mictorios = array(
				array(1,1,0,0,0,0,1),
				array(0,0,1,0,0,0,0,1),
				array(0),
				array(1),
				array(0,0),
				array(0,1,0,1,0,0)
			);

		foreach ($mictorios as $key => $banheiro) {
			echo '<h3>Problema</h3>';
			echo '<div>';
			foreach ($banheiro as $key => $value) {
				echo ($value == 1) ? '<span class="ocupado"></span>' : '<span class="vazio"></span>'; 
			}
			echo '<br/> ';
			echo '<h3>Solução</h3>';

			$ondeir = new Banheiros($banheiro);
			$vazios = $ondeir->ondeMijar();
			if(!empty($vazios)){
				foreach ($banheiro as $key => $value) {

					echo (!in_array($key, $vazios)) ? '<span class="desativado"></span>' : '<span class="ok"></span>'; 
				}
				echo '<br/> ';
			
			}else{
				echo '<h4><i>Vaza dai manolo</i></h4><br/>';
			}
			echo '</div>';
			echo '<hr/>';
		}

		?>
	</div>
    </body>
</html>

