<?php session_start(); ?>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Arial';
        text-decoration: none;
    }

    /*HEADER SUPERIOR*/

    .header__superior {
        width: 100%;
        height: 8.6vw;
        position: relative;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 0px 20px 0px;
    }

    .logo {
        width: 20vw;
        height: 100%;
        position: relative;
        margin: 0 0 0 10%;
    }

    .logo img {
        max-width: 100%;
        object-fit: contain;
        margin: -6vw 0 0 0;
    }

    /*
    .titulo {
        text-align: center;
        align-items: center;
        align-content: center;
        margin-left: 3%;
    }

    .titulo p {
        font-size: 500%;
        align-items: center;
        text-align: center;
        font-family: 'Snell Roundhand';
        text-shadow: 3px 8px 5px rgb(158, 157, 157);
    }

    .titulo span {
        text-align: center;
        font-family: 'Snell Roundhand';
        text-shadow: 3px 8px 5px rgb(158, 157, 157);
    }*/
    /*-------------> Codigo de los botones <-------------*/

    .botones {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 3%;
    }

    /*Boton de busqueda*/

    .search{
        width: 2vw;
        height: 2vw;
        display: flex;
        position: relative;
        overflow: hidden;
        margin: 0 3% 0 3%;
        align-items: center;
        justify-content: center;
        transition: width 0.5s;
        border-radius: 1vw;
        cursor: pointer;
    }
    .search.active {
        width: 18vw;
        border: 0.5px solid #7f877c;
        justify-content: space-between;
        padding: 0 0.5vw;
    }
    .search::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 10px;
        height: 100%;
        z-index: 1;
        filter: blur(1px);
    }
    .search::after {
        content: '';
        position: absolute;
        top: 0;
        right: -1px;
        width: 10px;
        height: 100%;
        z-index: 1;
        filter: blur(1px);
    }
    .search input {
        position: relative;
        width: 15vw;
        height: 100%;
        border: none;
        outline: none;
        font-size: 0.8em;
        color: #7f877c;
        transition: color 0.5s;
    }
    .search input::placeholder, .search input {
        color: transparent;
    }
    .search.active input::placeholder, .search.active input {
        color: #7f877c;
    }
    .logoBusqueda {
        position: absolute;
        right: 0.5vw;
        color: #7f877c;
        font-size: 1.1em;
        cursor: pointer;
    }
    .logoBusqueda:hover {
        color: #dab3ab;
        transition: color 0.2s;
    }

    /*Boton carrito*/
    .carrito i{
        color: #7f877c;
        margin: 0 1vw 0 0.5vw;
    }
    .carrito i:hover{
        color: #dab3ab;
        transition: color 0.2s;
    }

    /*Boton login*/
    
    .login{
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin: 0 1vw 0 0;
    }

    .login .loginSinHover {
        display: block;
        color: #7f877c;
        font-size: 1vw;
    }

    .login .loginConHover {
        display: none;
    }

    .login:hover .loginSinHover {
        display: none;
        
    }

    .login:hover .loginConHover {
        display: block;
        color: #dab3ab;
        font-size: 1vw;
    }
    .login::before {
        content: 'Iniciar sesión';
        position: absolute;
        top: 50%;
        left: -6.3vw; /* Ajusta este valor según sea necesario */
        transform: translateY(-50%);
        background-color: #dab3ab;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.8vw;
        white-space: nowrap;
        margin-right: 5vw;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        z-index: 10;
        opacity: 0; /* Inicialmente oculto */
        transition: opacity 0.4s ease-in-out, left 0.4s ease-in-out; /* Transición suave */
    }

    .login:hover::before {
        left: -6.3vw; /* Ajusta este valor según sea necesario */
        opacity: 1; /* Mostrar el mensaje */
    }

    .login::after {
        content: '';
        position: absolute;
        top: 50%;
        left: -0.5vw; /* Ajusta este valor según sea necesario */
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #dab3ab;
        z-index: 10;
        opacity: 0; /* Inicialmente oculto */
        transition: opacity 0.4s ease-in-out, left 0.4s ease-in-out; /* Transición suave */
    }

    .login:hover::after {
        left: -0.5vw; /* Ajusta este valor según sea necesario */
        opacity: 1; /* Mostrar la flecha */
    }
</style>

<div class="header__superior">
    <div class="logo">
        <img src="../../assets/img/LogoAnita.png" alt="logo">
        <!--
            <div class="titulo">
                <p>NutriAna</p>
                <span>“Nutrición para el cuerpo, alimento para el alma.” (Mateo 4:4)</span>
            </div>
        -->
    </div>
    <div class="botones">
        <div class="login">
            <a href="login.php">
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