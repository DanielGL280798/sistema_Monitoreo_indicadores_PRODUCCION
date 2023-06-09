@if ($paginator->hasPages())
    <div class="mt-3">
        <ul class="pagination pagination-rounded justify-content-center mb-0">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">Anterior</span>
                </li>
            @else
                <li class="page-item">
                    <button type="button" dusk="previousPage" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">Anterior</button>
                </li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li wire:key="paginator-page-{{ $page }}" aria-current="page" class="page-item active">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li wire:key="paginator-page-{{ $page }}" class="page-item">
                                <a type="button" class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <button type="button" dusk="nextPage" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">Siguiente</button>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">Siguiente</span>
                </li>
            @endif
        </ul>
    </div>
@endif
