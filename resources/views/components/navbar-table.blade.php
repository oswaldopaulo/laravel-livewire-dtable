
<nav class="navbar navbar-expand-lg navbar-light bg-light m-0 p-0">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if($novo ?? null)
                    <li class="nav-item">
                        <a type="button" href="{{$novo}}" class="btn btn-primary ml-0"><i class="fas fa-plus-circle"></i>Novo</a>

                    </li>
                @endif

                {{ $slot }}

            </ul>
            <form class="d-flex">
                <input wire:model.lazy="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>
