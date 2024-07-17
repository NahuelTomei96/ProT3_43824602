<body class="bodyprincipal"> <!-- Cuerpo del documento con clase personalizada -->
    <!-- Sección de Carrusel -->
    <section>
        <h1 class="text-center">Bienvenidos a mi primer proyecto en CodeIgniter!</h1> <!-- Título centrado -->
        <div class="principal_conteiner"> <!-- Contenedor principal -->
            <div id="carouselExampleIndicators" class="carousel slide"> <!-- Carrusel de Bootstrap -->
                <div class="carousel-indicators"> <!-- Indicadores del carrusel -->
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="text-align: center;"> <!-- Contenedor interno del carrusel con alineación centrada -->
                    <div class="carousel-item active"> <!-- Primer elemento del carrusel -->
                        <img src="assets/img/imagen1.jpg" class="d-block w-100" alt="Imagen1"> <!-- Imagen para el primer slide -->
                    </div>
                    <div class="carousel-item"> <!-- Segundo elemento del carrusel -->
                        <img src="assets/img/imagen2.jpg" class="d-block w-100" alt="Imagen2"> <!-- Imagen para el segundo slide -->
                    </div>
                    <div class="carousel-item"> <!-- Tercer elemento del carrusel -->
                        <img src="assets/img/imagen4.jpg" class="d-block w-100" alt="Imagen3"> <!-- Imagen para el tercer slide -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Fin de la sección de Carrusel -->

    <style>
        .text-center {
            text-align: center; /* Estilo CSS para alineación centrada */
            color: #273746; /* Color del texto */
            font-weight: bold; /* Peso de la fuente en negrita */
            font-size: 30px; /* Tamaño de la fuente */
            margin-top: 20px; /* Margen superior */
            margin-bottom: 20px; /* Margen inferior */
            font-family: "Source Sans Pro", sans-serif; /* Familia de fuentes */
        }
    </style> <!-- Estilos CSS internos para personalizar la apariencia -->

