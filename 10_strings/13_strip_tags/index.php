<?php 

    $textoHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

    echo $textoHtml;

    $salvarTextoBanco = strip_tags($textoHtml); // strip_tags remove tags html

    echo $salvarTextoBanco;