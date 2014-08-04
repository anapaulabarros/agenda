@extends('template')

@section('conteudo')

<h2 class="sub-header">Meus Contatos</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nomme</th>
                  <th>Telefone</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($contatos as $contato)

                  <tr>
                    <td>{{ $contato->id }}</td>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->telefone }}</td>
                    </tr>

                @endforeach
                
                
                
                
              </tbody>
            </table>
          </div>


@stop
