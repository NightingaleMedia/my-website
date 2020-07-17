<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Clicking</title>
    <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
</head>

<body>
    <div id="wrapper">
        <div id="wrapper-inner">
            <div class="editor">
                <div class="editor-content" contenteditable="true">
                <h1>My Little Text Editor</h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptatum nihil deleniti! Necessitatibus
                nisi placeat eius reprehenderit exercitationem dignissimos, a voluptate voluptas. Sapiente, illo
                incidunt consequatur voluptas ea amet aspernatur?
                <blockquote>Highlight some text to bring up a simple editor</blockquote>
                </div>
                <div class="context-menu">
                    <ul class="radial-menu">
                        <input id="tooltip" type="checkbox" checked name="open-context" />
                        <li class="radial-menu__menu-item bolder" data-role="bold">
                            <ul>
                                <i class="fas fa-bold"></i>
                            </ul>
                        </li>
                        <li class="radial-menu__menu-item italics">
                            <ul>
                                <i class="fas fa-italic"></i>
                            </ul>
                        </li>
                        <li class="radial-menu__menu-item">
                            <ul>
                                <i class="fas fa-align-center"></i>
                            </ul>
                        </li>
                        <li class="radial-menu__menu-item">
                            <ul>
                                <i class="fas fa-align-left"></i>
                            </ul>
                        </li>
                        <li class="radial-menu__menu-item">
                            <ul>
                                <i class="fas fa-highlighter"></i>

                            </ul>
                        </li>

                        <li class="radial-menu__exit exit">
                            <div>
                                +
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!--WRAPPER INNER-->
    </div>
    <!--WRAPPER-->
</body>
<style>
    body {
        font-family: Arial, sans-seriff;
        padding: 0;
        margin: 0;
        width: 100%;
        z-index: 0;

    }

    ul,
    li {
        padding: 0;
        margin: 0;
    }

    #wrapper {
        margin: 0;
        padding: 5rem;
        position: relative;
        height: 100vh;
        background: linear-gradient(18deg, rgba(85, 0, 238, 1) 0%, rgba(61, 207, 255, 1) 78%, rgba(5, 134, 255, 1) 100%);
        z-index: 1;


    }

    div#wrapper-inner {
        position: initial;
        margin-left: auto;
        margin-right: auto;
        background-color: none;
    }

    .editor {
        padding: 2rem;
        font-size: 2rem;
        color: grey;
        cursor: text;
        height: 50vh;
        border-radius: 10px;
        background-color: white;
        position: relative;
        width: 90%;
    }
    
    .editor-content{
        position: relative;
    }

    .context-menu {
        position: absolute;
        height: 150px;
        width: 150px;
        border-radius: 100%;
        transition: top 0.1s;
        top: 0%;
        left: 100%;
        transform: rotate(45deg)translate(-90px, 10px);
    }

    [data-role = "bold"]{
        font-weight: 900;
        font-size: 5rem;
    }
    .editor blockquote {
        font-size: 1.5rem;
        margin-top: 2rem;
        margin-left: 0;
        font-weight: 600;
        color: rgba(0, 40, 120);
        padding: 0;
    }

    .radial-menu {
        list-style: none;
        width: 150px;
        height: 150px;
        border-radius: 100%;
        margin: 0;
        padding: 0;
        transform: rotate(45deg);
    }

    #tooltip {
        -webkit-appearance: none;
        margin: 0;
        padding: 0;
        position: absolute;
        border-radius: 100%;
    }

    #tooltip:checked~li {
        transform: translate(54%, 54%)scale(1.5) !important;
        transition-delay: all 0.2s;
        transition: all 0.2s cubic-bezier(0.18, -1.45, 0.62, 0.88);
        cursor: default !important;
        /* display: none; */
        user-select: none;
    }

    #tooltip:checked~li ul {
        transform: translate(-18px, -18px) !important;
        transform-origin: 50%;
        transition-delay: all 0.2s;
        transition: translate 0.2s cubic-bezier(0, 0, 0, 1.45);
        cursor: default !important;
        user-select: none;
    }

    #tooltip:checked~li:last-of-type {
        transform: rotate(45deg)translate(-5%, 0%)scale(1.5) !important;
        user-select: none;
    }

    #tooltip:checked~li:last-of-type div:hover {
        background-color: green;
    }

    .radial-menu li {
        height: 100%;
        width: 100%;
        border-radius: 100%;
        position: absolute;
        transform-origin: center;
        opacity: 1;
        transition-delay: all 0.2s;
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    /* .radial-menu li:nth-of-type(1) {
        transform: rotate(270deg);
    } */

    /* .radial-menu li:nth-of-type(1) ul {
        transform: rotate(45deg)translateX(-90%);

    } */

    /* .radial-menu li:nth-of-type(2) {
        transform: rotate(330deg)
    } */

    /* .radial-menu li:nth-of-type(2) ul {
        transform: rotate(-15deg)translate(-45%, -75%);
    } */

    /* .radial-menu li:nth-of-type(3) {
        transform: rotate(30deg)
    } */

    /* .radial-menu li:nth-of-type(3) ul {
        transform: rotate(-74deg)translate(47%, -74%)
    } */

    /* .radial-menu li:nth-of-type(4) {
        transform: rotate(90deg);
    } */

    /* .radial-menu li:nth-of-type(4) ul {
        transform: rotate(-135deg)translateX(90%);
    } */

    .radial-menu li:last-of-type div {
        border-radius: 100%;
        background-color: orange;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 2rem;
        color: white !important;
        height: 40%;
        width: 40%;
        z-index: 99;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none;
        transition-delay: all 0.2s;
        transition: all 0.3s ease;
        transform: rotate(135deg)translate(-3px, -66px);
    }

    .radial-menu li:last-of-type div:hover {
        background-color: red;
    }

    .radial-menu li ul {
        position: relative;
        list-style: none;
        height: 45%;
        width: 45%;
        margin: 0;
        border-radius: 100%;
        transform: rotate(-45deg)translateY(-70px);
        opacity: 1;
        font-size: 1.25rem;
        background-image: linear-gradient(45deg, #01112c 0%, #000535 15%, #243f81 60%);
        background-position: 10% 10%;
        background-size: 150% 120%;
        color: white;
        padding: 0.25rem;
        box-shadow: 0 10px 6px 0 rgba(0, 40, 120, .35);

        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-weight: 600;

        cursor: pointer;
        user-select: none;

    }

    .radial-menu li ul li {
        background-color: red;
        position: absolute;
        transform: translateY(150px);
    }

    .radial-menu li:hover ul {

        z-index: 100;
        background-image: linear-gradient(210deg, #01112c 0%, #000535 15%, #243f81 60%);
        box-shadow: 0 0px 0px 0 rgba(0, 40, 120, 0);
        background-position: 0 0;
     user-select: none;

    }


    input[type="checkbox"]:focus {
        outline: 0;
    }
</style>
<script src="clickOpen.js"></script>

</html>