<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="./src/css/styles.css">
  <title>To do List</title>
</head>

<body>
  <main>
    <div class="container">
      <h1>THINGS TO DO</h1>

      <form action="" class="create-tasks">
        <input type="text" name="task" id="input-task" placeholder="Write your task">
        <button class="button-form-create-task" type="submit">
          <i class="fa-solid fa-plus"></i>
        </button>
      </form>

      <div class="container-tasks">
        <div class="task">
          <div class="task-check">
            <input
              type="checkbox"
              name="task-complete"
              class="input-complete"
              data-task-id="idDaTask">
            <!-- Fazer if na linha de cima para ser checked ou não -->
            <p class="task-description">Trabalho de casa</p>
          </div>

          <div class="actions-task">
            <a href="action-button update-buttob">
              <i class="fa-solid fa-pen-to-square"></i>
            </a>

            <a class="action-button delete-buttob" href="lugar para apagar task">
              <i class="fa-solid fa-trash"></i>
            </a>
          </div>


          <form class="edit-task hide">
            <input type="text" value="idDaTask" name="id" class="hide">
            <input
              type="text"
              name="description"
              value="Trabalho de casa"
              class="input-description">
            <button type="submit" class="button-form-update-task">
              <i class="fa-solid fa-check"></i>
            </button>
          </form>
        </div>

      </div>

    </div>
  </main>

  <script src="./src/javascript/script.js"></script>
</body>

</html>