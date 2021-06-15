<body>
    <?php foreach($story as $row): ?>
    <form class="form2">
        <h1>to : <?=$row['from_who'] ?> </h1>
        <h3>"<?=$row['messages'] ?>..."</h3>
    <?php endforeach ?>
    </body>