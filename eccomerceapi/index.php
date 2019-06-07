<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elite Games</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="topo">
            <figure>
                <img src="img/logo.png" class="logo" alt="">
                <img src="img/login.png" id="login" alt="">
                <img src="img/subscribe.png" id="subscribe" alt="">
            </figure>
        </div>
        <div class="sub-topo">
            <ul>
                <li>Playstation 4</li>
                <li>Xbox One</li>
                <li>Nintendo Switch</li>
                <li>Playstation 3</li>
                <li>Xbox 360</li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <aside class="opcoes">

                <div class="opcao">
                    <label>Playstation 4</label>
                </div>
                <div class="opcao">
                    <label>Xbox One</label>
                </div>
                <div class="opcao">
                        <label>Nintendo Switch</label>
                </div>
                <div class="opcao">
                        <label>Playstation 3</label>
                </div>
                <div class="opcao">
                        <label>Xbox 360</label>
                </div>

            </aside>
            <aside class="pub">
        
            </aside>
            <article class="games" >

              <?php
        /*
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "elitegames";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = 'SELECT * from games';

        $result = mysqli_query($conn, $sql);
               while($row = mysqli_fetch_assoc($result)) {
                   echo "<div class='game'>";
                   echo "<img src='img/".$row['imagem']. "'>";
                   echo "<a href='view/game.php?id=".$row['id']."' class='nome' >".$row['nome']."</a>";
                   echo "<h2 class='preco' >R$".$row['preco']."</h2>";
                   echo "<button class='botao' >Comprar<button>";
                   echo "</div>";
               }
          */     
        ?>    

                <div class="game" style="margin-left: 60px;" >
                    <img src="img/bf1.jfif" alt="">
                    <label class="nome" >Battlefield 1</label>
                    <label class="preco" >R$ 199,00</label>
                    <button class="botao">Comprar</button>
                </div>
                <div class="game">
                    <img src="img/bo3.png" alt="">
                    <label class="nome" >Call of Duty: Black Ops 3</label>
                    <label class="preco" >R$ 99,00</label>
                    <button class="botao">Comprar</button>
                </div>
                <div class="game">
                    <img src="img/bo4.png" alt="">
                    <label class="nome" >Call of Duty: Black Ops 4</label>
                    <label class="preco" >R$ 230,00</label>
                    <button class="botao">Comprar</button>
                </div>
                <div class="game" style="margin-left: 60px;">
                    <img src="img/fallout4.png" alt="">
                    <label class="nome" >Fallout 4</label>
                    <label class="preco" >R$ 70,00</label>
                    <button class="botao">Comprar</button>
                </div>
                <div class="game">
                    <img src="img/gow.png" alt="">
                    <label class="nome" >Gof of War</label>
                    <label class="preco" >R$ 170,00</label>
                    <button class="botao">Comprar</button>
                </div>
                <div class="game">
                    <img src="img/mgs5.png" alt="">
                    <label class="nome" >Metal Gear Solid 5</label>
                    <label class="preco" >R$ 150,00</label>
                    <button class="botao">Comprar</button>
                </div>
                <div class="game" style="margin-left: 60px;" >
                    <img src="img/sekiro.png" alt="">
                    <label class="nome" >Sekiro: Shadow Die Twice</label>
                    <label class="preco" >R$ 199,00</label>
                    <button class="botao">Comprar</button>
                </div>
                <div class="game">
                    <img src="img/spider.png" alt="">
                    <label class="nome" >Spider man</label>
                    <label class="preco" >R$ 179,00</label>
                    <button class="botao">Comprar</button>
                </div>
            </article>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>