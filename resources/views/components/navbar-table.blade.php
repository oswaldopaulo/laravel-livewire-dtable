<nav class="navbar navbar-expand-lg navbar-light">




    <ul class="navbar-nav mr-auto align-content-center">

        @if($novo ?? null)
            <li class="nav-item">
                <a type="button" href="{{$novo}}" class="btn btn-primary m-1"><i class="fas fa-plus-circle"></i>Novo</a>

            </li>
        @endif

        {{ $slot }}


    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input wire:model.lazy="search" type="text" name="texto" id="texto" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <img src="{{ asset('assets/img/pesquisar-icon.svg') }}" style="height: 26px; margin-left: 6px;">
    </form>

</nav>
