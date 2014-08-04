<?php
	/**
	* Classe com os métodos para a rata de atividade/add
	*/
	class ContatoController extends BaseController
	{
		
		

		/*Método que lista as tarefas*/
		public function listar() {
			$contatosModel = new Contato();
			$contatos = $contatosModel->orderBy('created_at', 'desc')->get();
			return View::make('lista_contatos')->with('contatos', $contatos);

		}

        
        public function getAdd() {
            return View::make('add_contato');
        }
        public function postAdd() {
            //Criando as regras de validação
			$regras = array('nome' => 'required',
							'telefone'=>'required');

			//executando a validação
			$validacao = Validator::make(Input::all(), $regras);

			//Se a validação deu errado
			if($validacao->Fails()) {
				return Redirect::to('contato/add')->withErrors($validacao);
			} else {
				$contato = new Contato;
				$contato->nome = Input::get('nome');
				$contato->telefone = Input::get('telefone');

				$contato->save();

				return View::make('add_contato')->with('sucesso', TRUE);
			}
        }
		
	}
?>