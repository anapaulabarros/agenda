@extends ('template')

@section('conteudo')


<h2 class="sub-header">Adicionar um novo contato</h2>

	@if( count($errors) > 0)
		Erros encontrados: <br />
		<ul>
			@foreach($errors->all() as $e)
				<li>{{ $e }}</li>
			@endforeach	
		</ul>
	@endif
	
	@if ( isset($sucesso) )
        <div class="alert alert-success" role="alert">
        	Contato Cadastrado com sucesso!
        </div>

    @endif		


	<div class="table-responsive">
		{{Form::open( array("action"=>"ContatoController@postAdd") ) }}
			{{ Form::label('titulo', 'Nome')}}
				{{Form::text('nome',null,['class' => 'form-control', 'placeholder'=>'Nome do contato'])}}
			{{form::label('telefone', 'Telefone') }}
				{{Form::text('telefone', null, ['class' => 'form-control', 'placeholder'=>'Número do telefone'])}}
			
				{{ Form::submit('Cadastrar', ['class' => 'btn btn-primary'])}}
		{{ Form::close()}}		
	</div>

@stop