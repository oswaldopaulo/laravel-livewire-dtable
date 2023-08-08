<div>
    {{-- In work, do what you enjoy. --}}
    <div class="card-header">
        tete

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <x-navbar-table novo="novo"/>
            <table class="table table-bordered table-hover"  width="100%" cellspacing="0">

                <thead>
                <tr>


                    <th style="text-align: left">Editar</th>
                    <th style="text-align: left">ID</th>
                    <th style="text-align: left">Nome</th>
                    <th style="text-align: left">Email</th>

                    <th style="text-align: left">Excluir</th>


                </tr>
                </thead>

                <tbody>
                @foreach($t as $r)
                    <tr>

                        <td style="width: 10px"><a href="{{ url($link . $r->id)}}"> <i class="fas fa-edit"></i></a ></td>
                        <td><a href="{{ url($link . $r->id)}}"> {{$r->id}}</a ></td>
                        <td><a href="{{ url($link . $r->id)}}"> {{$r->nome}}</a ></td>
                        <td><a href="{{ url($link . $r->id)}}"> {{Str::limit($r->descricao,20)}}</a ></td>
                        <td><a href="{{ url($link . $r->id)}}"> {{$r->marca}}</a ></td>
                        <td><a href="{{ url($link . $r->id)}}"> {{$r->modelo}}</a ></td>
                        <td><a href="{{ url($link . $r->id)}}"> {{$r->compl}}</a ></td>
                        <td style="text-align: center; width: 10px"><a href="#" onclick="modal('{{ url('cadastros/itens/remove/' . $r->id) }}')"><i class="fas fa-trash-alt mr-1 red"></i></a></td>



                        {{--                        @if(Auth::user()->tipo>=1)--}}
                        {{--                            <!--<td style="text-align: center"><a href="{{ url($link . $r->id)}}"> {{$r->criador}}</a></td> -->--}}
                        {{--                            <td style="text-align: center"><a href="#"--}}
                        {{--                                                              onclick="modal('{{ url('cadastros/chamados/remove/' . $r->id) }}')"><i--}}
                        {{--                                            class="fas fa-trash-alt mr-1 red"></i></a></td>--}}
                        {{--                        @endif--}}
                    </tr>

                @endforeach

                </tbody>
            </table>
            {{ $t->links()  }}

        </div>
    </div>
</div>
