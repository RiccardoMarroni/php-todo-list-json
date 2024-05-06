<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://unpkg.com/axios@1.6.7/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js" defer></script>
    <title>TO DO LIST</title>

</head>

<body>
    <div id="app">
        <h1 class="title title-square"> Todo-List</h1>
        <div class="container">
            <div class="user-inputs">
                <input type="text" placeholder="aggiungi un nuovo elemento" v-model="newText">
                <button @click = "addItem">Aggiungi</button>
            </div>
            <!-- Elenco tasks -->
            <div class="user-tasks">
                <!-- Singola task -->
                <div v-for="eachTask,index in tasks" class="task">
                    <span :class="(eachTask.done) ? 'done' : '' ">{{ eachTask.text }}</span>
                    <span @click = "removeItem(index)">
                        <i class="fa-solid fa-xmark"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
  <script type='text/javascript' src='javascript/script.js'></script>
</body>
</html>