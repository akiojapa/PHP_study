<div class="title">Integração CSS</div>

<h1 center>
<?php
echo 'Olá  ';
echo '<small>';
echo 'Mundo!';
echo '</small>';
//Isso é um comentário de uma linha

/*Isso
é um
Comentário de várias
Linhas */


?>

</h1>

<!--
Comentários em HTML.
Aparece no opção "Inspecionar"
Do site.
-->
<?= "<div center blue> Outra forma de me 'expressar'! </div>" ?>

<br>
<div center><button dobro><?="legal"?></button></div>

<style>
    button{
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }

    [blue]{
        color: #4286f4;
    }

    [dobro]{
        font-size: 2rem;
    }
</style>