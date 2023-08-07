<!-- statar server php -S localhost:8000 -t public
php -a  é para chat interativo no terminal -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjord+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="\recurso\estilo.css">
    <link rel="shortcut icon" href="recurso/\caveira.png"  type="image/png"/>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Currículo Carol</title>
</head>

<body id="app">
    <header class="cabecalho">
        <h1>Meu nome é: {{ username }}</h1>
        <input type="text" id="username" v-model="username" />
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">

                <div class="modulo">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">Exercício A - Olá</a>
                        </li>                       
                    </ul>
                  
                </div>
                <div class="modulo">
                    <h3>Módulo 02</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=basico&file=desafio">Exercício B - Desafio 1</a>
                            </li>
                        
                        </ul>
                </div>
                <div class="modulo">
                    <h3>Módulo 03</h3>
                        <ul>
                            <li>
                                <a href="#">Exercício C </a>
                            </li>
                        
                        </ul>
                </div>
            </nav>
        </div>


    </main>
    <footer class="rodape">
        © <?= date('Y');?> Udemy, Inc.
    </footer>
</body>

<div class="container">
  <h2>Dynamic Tabs</h2>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
    </div>
  </div>
</div>
</html>

<script>
const MyNameApp = {
    data() {
        return{
            name: "Carol",
            username: ""
        }
    },
    methods: {
  }
}
Vue.createApp(MyNameApp).mount("#app");
</script>