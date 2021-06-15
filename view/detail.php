<body>
    <?php foreach($story as $row): ?>
    <form class="form2">
        <h1>to : Me</h1>
        <h1>from : <?=$row['from_who'] ?> </h1>
        <h3>"<?=$row['messages'] ?>..."</h3>
    <?php endforeach ?>
    </body>