<?php session_start(); ?>

<style> 
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Arial';
        text-decoration: none;
    }      
   /*barra menu*/

   .container__menu {
        max-width: 100%;
        height: 70px;
        background:rgb(18, 170, 13);
        padding: 0px 20px;
        position: relative;
        justify-content: space-between;
        align-items: center;
        display: flex;
    }

    .menu {
        max-width: 1200px;
        margin: auto;
        height: 100%;
    }

    nav {
        height: 100%;
    }

    nav > ul {
        height: 100%;
        display: flex;
    }

    nav ul li {
        height: 100%;
        list-style: none;
        position: relative;
    }

    nav > ul > li > a {
        width: 100%;
        height: 100%;
        display: flex;
        color: white;
        align-items: center;
        padding: 14px;
        text-transform: uppercase;
        font-size: 14px;
        transition: all 300ms ease;
        text-decoration: none;
    }

    nav > ul > li > a:hover {
        transform: scale(1.1);
        color: rgb(18, 170, 13);
        background: white;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0.5);
    }

    /*Submenu*/

    nav ul li ul {
        width: 200px;
        display: flex;
        flex-direction: column;
        background-color: white;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0.5);
        top: 90px;
        left: -5px;
        position: absolute;
        padding: 14px 0px;
        visibility: hidden;
        opacity: 0;
        z-index: 10;
        transition: all 300ms ease;
        text-decoration: none;
    }

    nav ul li:hover ul {
        visibility: visible;
        opacity: 1;
        top: 70px;
    }

    nav ul li ul:before {
        content: '';
        width: 0;
        height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-bottom: 12px solid white;
        position: absolute;
        top: -12px;
        left: 20px;
    }

    nav ul li ul li a {
        display: block;
        color: rgb(18, 170, 13);
        padding: 6px;
        padding-left: 14px;
        margin-top: 10px;
        font-size: 14px;
        text-transform: uppercase;
        transition: all 300ms ease;
    }

    nav ul li ul li a:hover {
        background-color: rgb(18, 170, 13);
        color: white;
        transform: scale(1.1);
        padding-left: 30px;
        font-size: 14px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0.5);
    }
</style>

<!-- Este es el codigo en HTML -->
<div class="container__menu">
    <div class="menu">
        <nav>
            <ul>
                <li><a href="/NutriWeb/index.php">Inicio</a></li>
                <li><a href="/NutriWeb/index.php#Biografia">Sobre Mí</a></li>
                <li>
                    <a href="/NutriWeb/html/paginas/services.php">Consultas Nutricionales</a>
                    <ul>
                        <li><a href="#">Online</a></li>                        
                        <li><a href="#">Presencial</a></li>
                    </ul>
                </li>
                <li><a href="/NutriWeb/html/paginas/recipes.php">Recetario</a>
                    <ul>
                        <li><a href="#">Bebidas</a></li>
                        <li><a href="#">Guarniciones</a></li>
                        <li><a href="#">Snacks</a></li>
                    </ul>
                </li>
                <!--
                    <li><a href="/NutriWeb/html/paginas/testimonials.php">Testimonios</a></li>
                    <li><a href="/NutriWeb/html/paginas/blog.php">Blog</a>
                        <ul>
                            <li><a href="recent.php">Artículos Recientes</a></li>
                            <li><a href="categories.php">Categorías</a></li>
                        </ul>
                    </li>
                -->
            </ul>
        </nav>
    </div>  
</div>
