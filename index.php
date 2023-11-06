<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<title> GameForge Academy </title>
<style>
        :root{
            --color-blu1:#0896c1;
    --color-blu2:#0a86ec;
    --color-blu3:#0858ec;
    --color-blu4:#040553;
    --color-blu5:#062588;
    --color-blu6:#160241;
    --color-blu7:#080d9e;
}
*{
    margin: 0;
    padding: 0;
}
body{
    font-family: Arial, Helvetica, sans-serif;
    background-color:#fff;
    color: var(--color-pink);

}
img{
    width: 100px;
}

.header,
.nagivation_header{
    display: flex;
    flex-direction: row;
    align-items: center;
}
.header{
    background-color: var(--color-blu1);
    box-shadow: 1px 1px 4px var(--color-blu6);
    height: 3.5em;
    justify-content:space-between;
    padding: 0 10%;
}
.nagivation_header{
    gap: 3em;
}
.nagivation_header a{
    text-decoration: none;
    color: var(--color-blu6);
    transition: 1s;
    font-weight: bold;
}
.active{
    background-color: var(--);
    padding: 10px;
    border-radius: 10px;
}

.content{
    text-align: center;
    padding-top: 5em;
    height: 100vh;
    transition: 1s;
}
.btn_icon_header{
background-color: transparent;
border: none;
color: var(--color-blu6);
cursor: pointer;
display: none;
}

.content img{
    width: 80%;
}

@media screen and (max-width: 600px){
    .btn_icon_header{
        display: block;
    }
    .nagivation_header{
        position: absolute;
        flex-direction: column;
        top: 0;
        background-color: var(--color-blu1);
        height: 100%;
        width: 35vw;
        padding: 16px;
        animation-duration: 1s;
        margin-left: -100vw;
    }
}
    @keyframes showSidebar {
        from {margin-left: -100vw;}
        top {margin-left: -10vw;}
    }

</style>
</head>
<body>
    <div class="header" id="header">
        <button onclick="toggleSidebar()" class="btn_icon_header">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
        </button>
        <div class="logo_header">
            <img src="img/logo-editor.png" alt="logo sla">
        </div>
            <div class="nagivation_header" id="nagivation_header">
                <button onclick="toggleSidebar()"class= "btn_icon_header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                         <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                </button>
                <a href="index.php" class="active">Home</a>
                <a href="teste.html">Quem Somos </a>
                <a href="cadastro.php">Cadastro</a>
            </div>
    </div>

<!-- 
    <div class="slideshow-container">
        <div class="slide fade">
            <img src="imagem1.jpg" alt="Imagem 1">
        </div>
        <div class="slide fade">
            <img src="download.jpg" alt="Imagem 2">
        </div>
        <div class="slide fade">
            <img src="jg2.jpg" alt="Imagem 3">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <script src="script.js"></script>


    </div> -->


            <div class="content" id="content">
                <br>
                <div class="img-logo">
                    <img src="img/jg3.jpeg" alt="logo-sla">
                </div>
                <br>
                <header>
        <h1>Bem-vindo à  GameForge Academy </h1>
        <p>Sua jornada para se tornar um mestre dos jogos começa aqui!</p>
    </header>
    <section id="cursos">
        <h2>Nossos Cursos</h2>
        <p>Explore nossa variedade de cursos de jogos e aprenda com os melhores instrutores. Aperfeiçoe suas habilidades e alcance o topo da tabela de classificação.</p>
    </section>
 
<section id="contato">
        <h2>Entre em Contato</h2>
        <p>Tire suas dúvidas, compartilhe suas sugestões ou simplesmente diga olá! Estamos aqui para ajudar. Envie-nos um e-mail em <a href="mailto:contato@ GameForge Academy.com">contato@academiadegames.com</a></p>
    </section>

    </div>
    
</body>
<script>
    var header = document.getElementById('header');
    var navigationHeader = document.getElementById('nagivation_header');
    var content= document.getElementById('content');
    var showSidebar = false;
    function toggleSidebar()
    {
        showSidebar = !showSidebar;
        if(showSidebar)
        {
            navigationHeader.style.marginLeft ='-10vw';
            navigationHeader.style.animationName ='showSidebar';
        }
        else
        {
            navigationHeader.style.marginLeft ='-100vw';
            navigationHeader.style.animationName ='';
        }
    }
</script>
</html>