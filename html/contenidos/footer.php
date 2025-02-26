<?php session_start(); ?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Georgia, 'Times New Roman', Times, serif;
        text-decoration: none;
    }
    .footer{
        font-size: 14px;
        padding: 20px 0;
        position: relative;
    }
    .wave{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 20vw;
        background-color: rgb(18, 170, 13);
        margin-top: -8vw;
    }

    .contenedor_footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 20px 0; /* Añade padding para dar espacio al contenido */
    }
    /* Logos */
    .logos {
        width: 20vw;
        height: 20vw;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: auto;
        margin-left: 10vw;
        
    }
    .logos img {
        width: 100%;
        height: 100%;
    }

    /* Menu */
    .menufooter {
        width: 45vw;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: auto;
        margin-left: 7vw;
        margin-top: 10vw;
    }
    .menufooter ul {
        display: flex;
        list-style: none;
        justify-content: space-between;
        width: 100%;
        padding: 0;
        flex-wrap: wrap;
    }
    .menufooter ul li {
        margin: auto;
        font-size: 1vw;
        text-transform: uppercase;
        transition: all 200ms ease-in-out;
        cursor: pointer;

        &:hover {
            transform: scale(1.1);
            color: #595959;
            transition-duration: 600ms;
        }
    }
    .menufooter ul li a {
        color: #595959;
        text-decoration: none;
    }
</style>

<!-- Footer -->
 <div class="footer">
    <div class="wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,128L60,122.7C120,117,240,107,360,122.7C480,139,600,181,720,202.7C840,224,960,224,1080,197.3C1200,171,1320,117,1380,90.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </div>
    <div class="contenedor_footer">
        <div class="logos">
            <img src="assets/img/NutriWeb-logo.png" alt="Logo">
        </div>
        <div class="menufooter">
            <ul>
                <li><a href="/NutriWeb/index.php">Inicio</a></li>
                <li><a href="/NutriWeb/html/paginas/about.php">Sobre Mí</a></li>
                <li><a href="/NutriWeb/html/paginas/services.php">Consultas Nutricionales</a></li>
                <li><a href="/NutriWeb/html/paginas/recipes.php">Recetario</a></li>
            </ul>
        </div> 
    </div>
 </div>
