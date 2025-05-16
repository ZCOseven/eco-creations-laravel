<section class="nav-category">
    <ul class="list-detail">
        <li class="list-detail-item">
            <a href="{{route('productos.index')}}" class="back">
                <svg class="bx-left-arrow-alt-svg" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.4141 34.5859L16.8281 25.9999H36.0001V21.9999H16.8281L25.4141 13.4139L22.5861 10.5859L9.17212 23.9999L22.5861 37.4139L25.4141 34.5859Z" fill="#1B1F27"></path>
                </svg>
            </a>
        </li>
        <li class="list-detail-item list-full">
            <h2 class="list-title">Detalle Del Producto</h2>
            <div class="d-flex g-1 align-items-center">
                <a class="link link-custom-detail" href="productos.html">productos</a>
                <svg class="bx-chevron-right-svg" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.29154 11.9626L11.0962 8.15794L7.29154 4.35327L6.34888 5.29594L9.21088 8.15794L6.34888 11.0199L7.29154 11.9626Z" fill="#1B1F27"></path>
                </svg>
                <a class="link link-custom-detail" href="#">_categoria_</a>
            </div>
        </li>

    </ul>
</section>
<section class="containerProduct">
    <section class="containerDetailProduct">
        <div class="product-images">
            <div class="product-gallery">
                <img class="product-gallery-img" src="{{asset('img/login/' . $pro->imgpro)}}" alt="{{$pro->nompro}}">
                <img class="product-gallery-img" src="{{asset('img/login/' . $pro->imgpro)}}" alt="{{$pro->nompro}}">
                <img class="product-gallery-img" src="{{asset('img/login/' . $pro->imgpro)}}" alt="{{$pro->nompro}}">
            </div>
            <div> <img class="image-central" src="{{asset('img/login/' . $pro->imgpro)}}" alt="{{$pro->nompro}}"></div>
        </div>
        <div class="product-data">
            <h3 class="product-title">{{$pro->nompro}}</h3>
            <div class="d-flex category">Category: <a class="" href="#">{{$pro->categoria->nomcatg}}</a></div>
            <p class="subtitle">Descripción:</p>
            <p class="description">{{$pro->descpro}}</p>
            <p class="subtitle">Colores:</p>
            <div class="colors">
                <div class="cube cube-red"></div>
                <div class="cube cube-green"></div>
                <div class="cube cube-blue"></div>
                <div class="cube cube-orange"></div>
            </div>
            <p class="price">S/ {{$pro->prepro}}</p>
            <div class="d-flex g-1">
                <p class="amount"> Cantidad: {{$pro->stock_disponible}} </p>
                <p class="rate">Valoración: -- </p>
            </div>
            <div class="btn btn-blue">Comprar ahora</div>
        </div>
    </section>
</section>