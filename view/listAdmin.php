<body>
    <?php foreach($story as $row): ?>
    <form class="form2">
        <h1>to : <?=$row['from_who'] ?> </h1>
        <h3>"<?=$row['messages'] ?>..."</h3>
          </div>
          <a href='../php/messages.php?id=<?=$row['story_id'] ?>'>
          <button type="button" class="btn btn-primary">Selengkapnya</button><p>#pandENDmic</p>
          </a>
          <a href='../php/delete.php?id=<?=$row['story_id'] ?>'>
          <button type="button" class="btn btn-danger">Hapus</button>
          </a>
          
    </form>
    <?php endforeach ?>
    </body>