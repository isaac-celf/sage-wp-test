@if ($nav)
    <nav class="navbar navbar-expand-lg w-100">
        <div class="collapse navbar-collapse w-100" id="navbarNav">
            <ul class="navbar-nav nav justify-content-end w-100">
                @foreach ($nav as $item)
                    <div class="dropdown">
                        <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                            <a href="{{ $item->url }}" class="nav-link btn btn-secondary btn-nav dropdown-toggle"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ $item->label }}
                            </a>

                            @if ($item->children)
                                <ul class="dropdown-menu">
                                    @foreach ($item->children as $child)
                                        <li
                                            class="my-child-item {{ $child->classes ?? '' }} {{ $child->active ? 'active' : '' }}">
                                            <a href="{{ $child->url }}" class="dropdown-item">
                                                {{ $child->label }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    </div>
                @endforeach
            </ul>
        </div>
    </nav>
@endif
