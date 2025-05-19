<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-Creations</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index/index.css') }}">
</head>

<body>

    <header>
        <nav>
            <h1>Eco-Creations</h1>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contactos</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner-content">
        <article>
            <h2>Transformamos residuos</h2>
            <h3>en Futuro recicla con Eco-Creations</h3>
            <aside>
                <button class="btn-ver-mas">Ver más</button>
                <div class="icono-flecha">➔</div>
            </aside>
        </article>
    </section>

    <!-- seccion 2 -->
    <section class="seccion_elegirnos">
        <h2>¿Por qué elegirnos?</h2>

        <div class="slider-container">
            <!-- flecha izquierda -->


            <!-- Tarjetas -->
            <div class="cards">
                <div class="arrow arrow-left">←</div>
                <!-- cua 1 -->
                <div class="card">
                    <div class="card-image">
                        <button class="btn-wenas" id="img_config">Ecológico y sostenible </button>

                        <div class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti facere
                            totam veritatis laboriosam harum voluptatibus iure, repellat sapiente commodi? Deserunt
                            illum eos harum possimus, labore vel odio officiis iste magnam.
                            Cada producto está diseñado pensando en el planeta. Utilizamos materiales
                            reutilizables, reciclables 
                        </div>
                        <img src="{{ asset('img/index/card_1.png') }}" alt="Imagen 1">
                    </div>
                </div>

                <!-- cua 2 -->
                <div class="card">
                    <div class="card-image">
                        <button class="btn-wenas">Envíos a todo el país <br> Llevamos nuestros </button>
                        <div class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo quia at
                            harum, commodi doloribus nobis consequatur aperiam dicta, odit eius facilis corporis
                            voluptates nihil fugiat, reprehenderit placeat officiis aspernatur! Similique.
                        </div>
                        <img src="{{ asset('img/index/card_2.png') }}" alt="Imagen 2">
                    </div>
                </div>

                <!-- cua 1 3 -->
                <div class="card">
                    <div class="card-image">
                        <button class="btn-wenas">Personalización a tu gusto</button>
                        <div class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo quia at
                            harum, commodi doloribus nobis consequatur aperiam dicta, odit eius facilis corporis
                            voluptates nihil fugiat, reprehenderit placeat officiis aspernatur! Similique. Creemos que
                            lo ecológico también puede ser único.
                           
                        </div>
                        <img src="{{ asset('img/index/card_3.png') }}" alt="Imagen 3">
                    </div>
                </div>
                <div class="arrow arrow-right">→</div>

            </div>
            <!-- flecha derecha -->

        </div>

    </section>
    {{-- seccion 3  --}}
    <section class="seccion_nuestra_ecologia">
        <div class="title_seccion">
            <h1>NUESTRAS ECOLOGIAS - GALERIA</h1>
            <img class="img_title" src="{{ asset('img/index/seccion_3.png') }}" alt="">
        </div>
        

        <section class="parth_pri">

            <article class="sec3_primario">
                <img class="img_primario" src="{{ asset('img/index/sec3_img1.png') }}" alt="">

            </article>

            <article class="sec3_img_content">
                <article class="contendores_img">
                    <img class="img_grid" src="{{ asset('img/index/sec3_img2.png') }}" alt="xd">
                </article>

                <article class="contendores_img">
                    <img class="img_grid" src="{{ asset('img/index/sec3_img3.png') }}" alt="xd">
                </article>

                <article class="contendores_img">
                    <img class="img_grid" src="{{ asset('img/index/sec3_img4.png') }}" alt="xd">
                </article>

                <article class="contendores_img">
                    <img class="img_grid" src="{{ asset('img/index/sec3_img5.png') }}" alt="xd">
                </article>
            </article>

        </section>

    </section>

    {{-- seccion 4  --}}
    <section class="seccion_nuestra_historia">
        <article class="content_primario">
            {{-- fila 1 : 3 columnas --}}
            <article class="fila columna3">
                {{-- 3 columnas --}}
                <article class="columna none">
                    <article class="content_text">
                        <button>Nuestra Historia</button>
                        <p>ECOCREATIONS S.A.C. abrió sus puertas en <br>
                            2004, innovando por completo el concepto de Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Similique asperiores suscipit eos blanditiis exercitationem in explicabo
                            debitis dolor quod doloremque! Veniam quia in nisi asperiores facere, non voluptatum
                            provident rem?
                            productos ecológicos personalizado.</p>
                    </article>
                </article>
                <article class="columna none1">
                    <img src="{{ asset('img/index/sec4_img1.png') }}" alt="" class="content_img imgmedio">
                </article>
                <article class="columna none2">
                    <img src="{{ asset('img/index/sec4_img2.png') }}" alt="" class="content_img imgmedio">
                </article>
            </article>

            {{-- fila 2 : 2 columnas --}}
            <article class="fila columna2">
                {{--   2.columnas 2  --}}


                <article class="columna colum_largo">
                    <img src="{{ asset('img/index/sec4_img3.png') }}" alt="" class="content_img imgnoe">
                </article>
                <article class="columna colum_medio">
                    <img src="{{ asset('img/index/sec4_img4.png') }}" alt="" class="content_img imgmedio">
                </article>
            </article>
        </article>
    </section>



</body>

</html>
