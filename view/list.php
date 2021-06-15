<body>
    <?php foreach($story as $row): ?>
    <form class="form2">
        <h1>to : Me</h1>
        <h1>from : <?=$row['from_who'] ?> </h1>
        <h3>"<?=$row['messages'] ?>..."</h3>
          </div>
          <a href='../php/messages.php?id=<?=$row['story_id'] ?>'>
          <button type="button" class="btn btn-primary">Selengkapnya</button><p>#pandENDmic</p>
          </a>
    </form>
    <?php endforeach ?>
    </body>