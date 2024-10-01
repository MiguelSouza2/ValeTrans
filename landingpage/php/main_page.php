<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <nav class="navbar navbar-expand navbar-dark" id="main_nav">
        <div class="test"></div>
        <div class="container-fluid" id="main_nav_container">
            <ul class="navbar-nav">
                <li class="navbar-brand">MarioBet</li>
                <li id="user-icon" onclick="show_user()" class="navbar-brand">User-icon</li>
                </li>
            </ul>
        </div>
    </nav>
    <div id="user_popup" style="
             visibility:hidden;
             position: absolute;
             display: flex;
             left: 30vw;
             top: 5vh;
             background-color: #E3D9AE;
             width: 200px;
             border: 1px solid #202020;
             padding: 20px;"
        >
        
        <ul>
            <li>texto</li>
            <li>texto</li>
            <li onclick="user_logout()">Logout</li>
        </ul>
    </div>
    <button id="show-nav" onclick="show_nav()">___</button>
    <nav id="menu">
        <ul>
            <li>MarioBet</li>
            <li>Home</li>
            <li>Jogo do aspinhas</li>
            <li>Cubinho</li>
            <li>Campo Neyamado</li>
            <li><a href="html/termo.html">termo de cria</a></li>
        </ul>
    </nav>

    <h1>essa é a pagina principal!</h1>

    <div class="container">
        <p style="white-space: pre-line">
            A [nome da agência] é uma agência de viagens especializada em oferecer experiências personalizadas para seus
            clientes. Com uma equipe dedicada de especialistas em turismo, a agência se destaca por criar roteiros sob
            medida que atendem às expectativas e preferências de cada viajante.

            A agência oferece uma ampla gama de serviços, incluindo a reserva de passagens aéreas, hospedagem em hotéis
            de qualidade, aluguel de veículos, e a organização de passeios e excursões guiadas. Além disso, a [nome da
            agência] também conta com pacotes exclusivos para destinos nacionais e internacionais, sempre priorizando o
            conforto, a segurança e a satisfação do cliente.

            O compromisso da [nome da agência] é transformar cada viagem em uma experiência única e memorável. Seja para
            férias em família, viagens de negócios, ou aventuras solo, a agência oferece suporte completo desde o
            planejamento até o retorno, garantindo que todos os detalhes sejam cuidadosamente gerenciados.

            Com anos de experiência no mercado, a [nome da agência] construiu uma sólida reputação pela excelência no
            atendimento e pela capacidade de superar as expectativas dos seus clientes. A agência se orgulha de criar
            conexões duradouras com seus clientes, sempre focando na qualidade e no bem-estar de quem escolhe viajar com
            eles.
        </p>
    </div>




    <script>
        menu_button = document.getElementById("show-nav");
        menu = document.getElementById("menu");

        function show_nav() {
            var computedStyle = window.getComputedStyle(menu);
            var displayProperty = computedStyle.getPropertyValue("display");

            if (displayProperty === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }

            menu.classList.toggle("show");
        }

        function show_user() {
            let popup_user = document.getElementById("user_popup");

            if (popup_user.style.visibility == "hidden") {
                popup_user.style.visibility = "visible";
            } else if (popup_user.style.visibility == "visible") {
                popup_user.style.visibility = "hidden";
            }
        }

        function user_logout() {
            document.window.location = "main_page.php";
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>