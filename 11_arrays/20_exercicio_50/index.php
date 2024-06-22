<?php 


    $pessoas = [
        "Hendrew" => 23,
        "Cleber" => 25,
        "João" => 30,
        "Maria" => 40
    ];

    ?>


<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    <?php foreach($pessoas as $nome => $idade): ?>

        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>

    <?php endforeach; ?>
</table>