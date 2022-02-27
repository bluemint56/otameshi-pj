@if ($paginator->lastPage() > 1)
<ul class="pagination">
    <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $paginator->url(1) }}">最初</a>
     </li>
    <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $paginator->url(1) }}">
            <span aria-hidden="true"><</span>
            {{-- Previous --}}
        </a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $paginator->url($paginator->currentPage()+1) }}" >
            <span aria-hidden="true">></span>
            {{-- Next --}}
        </a>
    </li>
    <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">最後</a>
    </li>
</ul>
@endif

<style>
    ul {
        display: flex;
        justify-content: center;
    }
    li {
        list-style: none;
        margin: 3px;
    }
    .page-link {
        color: white;
    }
    .page-item {
        border: 1px solid MidnightBlue;
        padding: 5px;
        background-color: MediumPurple;
    }
    .page-item:hover {
        opacity: 0.7;
    }
</style>