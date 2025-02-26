<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial';
            text-decoration: none;
        }
        .menuRedesSociales {
            position: fixed; /* Fija el contenedor en la pantalla */
            top: 50%; /* Centra verticalmente */
            left: 0; /* Alinea a la izquierda */
            transform: translateY(-50%); /* Ajusta para centrar completamente */
            z-index: 1000; /* Asegura que esté por encima de todos los demás elementos */
        }
        .iconosRedes {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .facebook{
            width: 3vw;
            height: 2vw;
            background: white;
            justify-content: center;
            align-items: center;
            border-radius: 0 50px 50px 0;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 1vw;
            margin-right: auto;
            animation:slide-right 300ms linear both;
            transition: all 300ms ease-in-out;

            &:hover{                            
                width: 7vw;                                                        
            }
        }
        .facebook::before {
            content: 'Facebook';
            position: absolute;
            top: 100%;                
            left: 5%;
            transform: translateY(-50%);
            width: 4vw;
            height: 3vw;
            margin: 0 3px 0 3px;                       
            color: #3b5998;
            opacity: 0;
            transition: all 100ms ease-in-out;
        }
        .facebook:hover::before{
            opacity: 1;
            transition-duration: 300ms;
        }
        .facebook a {
            color: #3b5998;
            font-size: 1.5vw;
            margin-left: .5vw;
        }
        .facebook > a > i{
            font-size: 1.5vw;
            margin-top: .3vw;
            margin-left: .2vw;
            transition: all 300ms ease-in-out;
        }

        .facebook:hover > a > i{
            transform: translateX(4vw);
            transition-duration: 300ms;
        }

        .instagram{
            width: 3vw;
            height: 2vw;
            background: white;
            justify-content: center;
            align-items: center;
            border-radius: 0 50px 50px 0;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 1vw;
            margin-right: auto;
            animation:slide-right 300ms linear both;
            animation-delay: 300ms;
            transition: all 300ms ease-in-out;

            &:hover{                            
                width: 7vw;                                                        
            } 
        }

        .instagram::before {            
            content: 'Instagram';
            position: absolute;
            top: 100%;                
            left: 5%;
            transform: translateY(-50%);
            width: 4vw;
            height: 3vw;
            margin: 0 3px 0 3px;                                
            opacity: 0;
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            transition: all 100ms ease-in-out;
        }
        .instagram:hover::before{
            opacity: 1;
            transition-duration: 300ms;
        } 

        .instagram a {        
            font-size: 1.5vw;
            margin-left: .5vw;
        }
        .instagram > a > i{
            font-size: 1.5vw;
            margin-top: .3vw;
            margin-left: .2vw;
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            transition: all 300ms ease-in-out;
        }
        .instagram:hover > a > i{
            transform: translateX(4vw);
            transition-duration: 300ms;
        }

        .whatsapp{
            width: 3vw;
            height: 2vw;
            background: white;
            justify-content: center;
            align-items: center;
            border-radius: 0 50px 50px 0;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 1vw;
            margin-right: auto;
            animation:slide-right 300ms linear both;
            animation-delay: 600ms;
            transition: all 300ms ease-in-out;
            overflow: hidden;

            &:hover{                            
                width: 7vw;                                                        
            }                                  
        }
        .whatsapp::before {            
            content: 'Whatsapp';
            position: absolute;
            top: 100%;                
            left: 10%;
            transform: translateY(-50%);
            width: 3vw;
            height: 3vw;
            margin: 0 3px 0 3px;
            opacity: 0;
            color: #25d366;
            transition: all 100ms ease-in-out;
        }
        .whatsapp:hover::before{
            opacity: 1;
            transition-duration: 300ms;
        }        
        .whatsapp a {
            color: #25d366;
            font-size: 1.5vw;
            margin-left: .5vw;
        }
        .whatsapp > a > i{
            font-size: 1.5vw;
            margin-top: .3vw;
            margin-left:.2vw;            
            transition: all 300ms ease-in-out;
        }
        .whatsapp:hover > a > i{
            transform: translateX(4vw);
            transition-duration: 300ms;
        }
        /* Animaciones */
        
        @keyframes slide-right {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }
</style>

<div class="menuRedesSociales">
    <div class="iconosRedes">
        <div class="facebook">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
        </div>
        <div class="instagram">
            <a href="#"><i class="fab fa-instagram-square"></i></a>
        </div>
        <div class="whatsapp">
            <a href="#"><i class="fab fa-whatsapp-square"></i></a>
        </div>
    </div>
</div>