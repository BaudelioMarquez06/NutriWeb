<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/NutriWeb-logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/379358f3a7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <title>NutriWeb</title>
</head>

<body>
    <header class="content-header">
        <div class="header__superior">
            <div class="logo">
                <img src="assets/img/NutriWeb-logo.png" alt="logo">
            </div>
            <div class="botones">
                <div class="login">
                    <a href="/nutriologaWeb/html/paginas/login.php">
                        <i class="fa-regular fa-circle-user loginSinHover"></i>
                        <i class="fa-solid fa-circle-user loginConHover"></i>
                    </a>
                </div>
                <div class="search" onclick="activateSearch()">
                    <input type="search" placeholder="¿Que estas buscando?">
                    <i class="fa-solid fa-magnifying-glass logoBusqueda"></i>
                </div>
                <div class="carrito">
                    <a href="carrito.php">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php include "html/contenidos/navbar.php"; ?>
    </header>
    <main>
        <section id="Bienvenida">
            <div class="Bienvenida">
                <div class="redesSociales"></div>
                <div class="textBienvenida">
                    <h1>Bienvenidos</h1>
                    <p>
                        ¡Bienvenido(a)! Aquí encontrarás un espacio dedicado a tu salud y bienestar. Nos apasiona
                        ayudarte a
                        alcanzar un estilo de vida equilibrado con productos naturales y servicios diseñados para cuidar
                        de
                        ti.
                    </p>
                    <div class="boton_verMas">
                        <a href="about.php" class="btn_verMas">Conoce más</a>
                    </div>
                </div>
                <div class="imgBienvenida">
                    <img src="assets/img/imgBienvenida.png" alt="" class="imagenBienvenida">
                </div>
            </div>
        </section>
        <section id="Categorias">
            <div class="categorias">
                <div class="contenedor_1">
                    <a href="" class="contenedor_Consulta">
                        <i class="fa-solid fa-seedling iconConsulta"></i>
                        <div class="textoConsulta">
                            <h3>Consulta</h3>
                            <p>
                                Programa tu consulta, ya sea en línea o presencial, y comienza a mejorar tu salud.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="contenedor_2">
                    <a href="" class="contenedor_tienda">
                        <i class="fa-solid fa-apple-whole"></i>
                        <div class="textoTienda">
                            <h3>NutriShop</h3>
                            <p>Encuentra productos naturales y orgánicos para tu bienestar.</p>
                        </div>
                    </a>
                </div>
                <div class="contenedor_3">
                    <a href="" class="contenedor_receta">
                        <i class="fa-solid fa-mortar-pestle iconReceta"></i>
                        <div class="textoReceta">
                            <h3>Receta</h3>
                            <p>Encuentra recetas saludables y deliciosas para tu día a día.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section id="Productos">
            <div class="productos">
                <h2>Productos destacados</h2>
                <div class="contenedor">
                    <div class="card">
                        <img src="assets/img/Carrusel_1.png" alt="producto1" class="imgProducto">
                        <div class="textoProducto">
                            <div class="infoProducto">
                                <h3>Producto 1</h3>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut eligendi, molestiae a
                                    nihil
                                    aspernatur libero ut! Accusantium earum nam nostrum quos, architecto id dolorum
                                    suscipit
                                    tempore, omnis enim consequuntur. Alias?
                                </p>
                            </div>
                            <p class="precio">$100.00</p>
                        </div>
                        <div class="btnComprar">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <a href="" class="btn_comprar">Comprar</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/img/Carrusel_2.png" alt="producto1" class="imgProducto">
                        <div class="textoProducto">
                            <div class="infoProducto">
                                <h3>Producto 2</h3>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut eligendi, molestiae a
                                    nihil
                                    aspernatur libero ut! Accusantium earum nam nostrum quos, architecto id dolorum
                                    suscipit
                                    tempore, omnis enim consequuntur. Alias?
                                </p>
                            </div>
                            <p class="precio">$100.00</p>
                        </div>
                        <div class="btnComprar">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <a href="" class="btn_comprar">Comprar</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/img/Carrusel_3.png" alt="producto1" class="imgProducto">
                        <div class="textoProducto">
                            <div class="infoProducto">
                                <h3>Producto 3</h3>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut eligendi, molestiae a
                                    nihil
                                    aspernatur libero ut! Accusantium earum nam nostrum quos, architecto id dolorum
                                    suscipit
                                    tempore, omnis enim consequuntur. Alias?
                                </p>
                            </div>
                            <p class="precio">$100.00</p>
                        </div>
                        <div class="btnComprar">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <a href="" class="btn_comprar">Comprar</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/img/Carrusel_1.png" alt="producto1" class="imgProducto">
                        <div class="textoProducto">
                            <div class="infoProducto">
                                <h3>Producto 4</h3>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut eligendi, molestiae a
                                    nihil aspernatur libero ut! Accusantium earum nam nostrum quos, architecto id
                                    dolorum suscipit
                                    tempore, omnis enim consequuntur. Alias?
                                </p>
                            </div>
                            <p class="precio">$100.00</p>
                        </div>
                        <div class="btnComprar">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <a href="" class="btn_comprar">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Frase">
            <div class="contenedor_frase">
                <div class="frase">
                    <h2>“La salud no lo es todo, pero sin ella, todo lo demás es nada.”</h2>
                    <p>— Arthur Schopenhauer —</p>
                </div>
                <div class="imgFrase">
                    <img src="assets/img/reloj.png" alt="" class="imgReloj">
                    <img src="assets/img/floresLimones.png" alt="" class="imgFloresLimon">
                </div>
            </div>
        </section>
        <section id="Consulta">
            <div class="consulta_container">
                <img src="assets/img/platoConsultaGrande.png" alt="" class="platoConsulta">
                <div class="txtConsulta">
                    <div class="tituloConsulta">
                        <h3>Tu alimentación, tu</h3>
                        <h1>Bienestar</h1>
                    </div>
                    <div class="texto_Consulta">
                        <p>
                            Cada pequeño cambio en tu alimentación puede marcar una gran diferencia en cómo te sientes
                            cada
                            día. No se trata de dietas estrictas, sino de aprender a nutrir tu cuerpo y cuidar de ti
                            mismo.
                        </p>
                        <p>
                            <b>¿Sientes que es hora de:</b>
                            <ul>
                                <li>Mejorar tu energía y vitalidad?</li>
                                <li>Comer rico, sin culpas ni restricciones?</li>
                                <li>Alcanzar tus metas físicas de forma saludable?</li>
                            </ul>
                        </p>
                        <p>
                            ¡Estás en el lugar correcto! Con nuestra consulta nutricional, en línea o presencial, te
                            brindamos el acompañamiento que necesitas para transformar tu alimentación y disfrutar de
                            una
                            vida equilibrada.
                        </p>
                        <p>
                            Da el primer paso hoy. Tu salud lo merece.
                        </p>
                    </div>
                    <div class="btnConsulta">
                        <i class="fa-solid fa-calendar-check"></i>
                        <a href="" class="btn_consulta">Agenda tu consulta</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="Biografia">
            <div class="biografia_contenedor">
                <div class="biografia">
                    <div class="txtBiografia">
                        <h1>Sobre mí</h1>
                        <p>
                            [Nombre completo] es una apasionada de la salud y el bienestar con más de [número] años de
                            experiencia en el campo de la nutrición. Graduada de [nombre de la universidad o
                            institución], ha dedicado su carrera a ayudar a las personas a alcanzar su máximo potencial
                            a través de una alimentación equilibrada y sostenible.
                        </p>
                        <p>
                            Especialista en [áreas de especialización, como control de peso, nutrición clínica,
                            deportiva o infantil], [Nombre] ha trabajado con pacientes de diversas edades y necesidades,
                            diseñando planes alimenticios personalizados que promueven hábitos saludables y mejoran la
                            calidad de vida.
                        </p>                
                        <p>
                            Su filosofía es clara: “La clave de una buena salud está en encontrar el equilibrio entre lo
                            que comes, cómo vives y lo que amas hacer”.
                        </p>
                        <div class="btnBiografia">
                            <a href="about.php" class="btn_biografia">Contacto</a>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                    <div class="imgBiografia"></div>
                </div> 
            </div>
        </section>  
    </main>
    <footer>
        <?php include "html/contenidos/footer.php"; ?>
    </footer>
    <aside>
        <?php include "html/contenidos/asideRedes.php"; ?>
    </aside>

    <!--
        Icono de puerta tracera(funcional para cuando quiera cerrar sesión el usuario)
        <i class="fa-solid fa-right-to-bracket"></i>
    -->

    <script>
        function activateSearch() {
            const searchContainer = document.querySelector('.search');
            const searchInput = searchContainer.querySelector('input');
            searchContainer.classList.toggle('active');
            if (searchContainer.classList.contains('active')) {
                searchInput.focus();
            }
        }
    </script>
</body>

</html>