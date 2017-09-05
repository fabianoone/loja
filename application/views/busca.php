<div id="homebody">
	<div class="alinhado-centro borda-base espaco-vertical">
	<h3>Você buscou por:<?php echo $termo; ?></h3>
	<p>Os seguintes resultados foram encontrados.</p>
	<a class="btn btn-medium btn-success" href="#">Cadastre-se</a>
</div>
    
<div class="row-fluid">
    <?php
      $contador = 0;
      foreach($destaques as $destaque){
          $contador++;
          echo "<div class='span4 col-sm-4 caixacategoria'>" .
          heading($destaque->titulo,3);
          echo "<p>". word_limiter($destaque->descricao,20) ."</p>" .
            anchor(base_url("produto/".$destaque->id ."/". limpar($destaque->titulo)),"Ver produto", array('class'=>'btn btn-info')) .
          "</div>";
          if($contador%3 == 0){
              echo "</div><div class='row-fluid'>";
          }
      }
      ?>
    
</div>
</div>

