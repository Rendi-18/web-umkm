@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link border-0 rounded shadow-sm" aria-hidden="true"><i
                            class="bi bi-chevron-double-left"></i> Previous</span>
                </li>
            @else
                <li class="page-item ">
                    <a class="page-link border-0 rounded shadow-sm" href="{{ $paginator->previousPageUrl() }}#berita"
                        rel="prev" aria-label="@lang('pagination.previous')"><i class="bi bi-chevron-double-left"></i>
                        Previous</a>
                </li>
            @endif



            <select onchange="location = this.value" class="page-link border-0 mx-3 px-2 rounded shadow-sm">
                @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <option selected>{{ $page }}</option>
                    @else
                        <option value="{{ $url }}">
                            {{ $page }}
                        </option>
                    @endif
                @endforeach
            </select>



            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link border-0 rounded shadow-sm" href="{{ $paginator->nextPageUrl() }}"
                        rel="next" aria-label="@lang('pagination.next')">Next <i
                            class="bi bi-chevron-double-right"></i></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link border-0 rounded shadow-sm" aria-hidden="true">Next <i
                            class="bi bi-chevron-double-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
