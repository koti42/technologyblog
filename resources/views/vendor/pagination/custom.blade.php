<script>
    $('.pagination-inner a').on('click', function () {
        $(this).siblings().removeClass('pagination-active');
        $(this).addClass('pagination-active');
    })
</script>
<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:400,300");

    body {
        color: #2c3e50;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
    }

    h1 {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 300;
    }

    .pagination-container {
        margin: 100px auto;
        text-align: center;
    }

    .pagination {
        position: relative;
    }

    .pagination a {
        position: relative;
        display: inline-block;
        color: #2c3e50;
        text-decoration: none;
        font-size: 1.2rem;
        padding: 8px 16px 10px;
    }

    .pagination a:before {
        z-index: -1;
        position: absolute;
        height: 100%;
        width: 100%;
        content: "";
        top: 0;
        left: 0;
        background-color: #2c3e50;
        border-radius: 24px;
        transform: scale(0);
        transition: all 0.2s;
    }

    .pagination a:hover,
    .pagination a .pagination-active {
        color: #c1c1c1;
    }

    .pagination a:hover:before,
    .pagination a .pagination-active:before {
        transform: scale(1);
    }

    .pagination .pagination-active {
        color: #c1c1c1;
    }

    .pagination .pagination-active:before {
        transform: scale(1);
    }

    .pagination-newer {
        margin-right: 70px;
    }

    .pagination-older {
        margin-left: 50px;
    }

</style>
<nav class="pagination-container">
    <div class="pagination">
    @if ($paginator->hasPages())


            @if ($paginator->onFirstPage())
                <a class="pagination-older" href="#">Önceki</a>
            @else
                <a  href="{{ $paginator->previousPageUrl() }}" class="pagination-older" href="#">Önceki</a>
            @endif



            @foreach ($elements as $element)

                @if (is_string($element))
                    <a class=""><span class="pagination-newer">{{ $element }}</span></a>
                @endif



                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="pagination-active"><span>{{ $page }}</span></a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach



            @if ($paginator->hasMorePages())
               <a  class="pagination-newer" href="{{ $paginator->nextPageUrl() }}" rel="next">Sonraki</a>
            @else
                <a class=""><span class="pagination-newer">Sonraki</span></a>
            @endif

    @endif
    </div>
</nav>
