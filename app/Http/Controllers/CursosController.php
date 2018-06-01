<?php namespace cursos\Http\Controllers;

	use Illuminate\Support\Facades\DB;
	use Request;
	use cursos\Curso;
	
	class CursosController extends Controller{
		public function lista(){
			$cursos = DB::select('select * from curso');
			
			return view('listagem')->with('cursos', $cursos);
		}
		
		public function detalha(){
			$id = Request::input('id', '0');
			
			$resposta = DB::select('select * from curso where id= ?', [$id]);
			
			if(empty($resposta)){
				return "Curso não cadastrado";
			}
			return view('detalhes')->with('c', $resposta[0]);
		}		
		public function pesquisa(){
			$title = Request::input('title', '0');
			
			$resposta = DB::select('select * from curso where title LIKE = ?', '%',[$title],'%');
			
			if(empty($resposta)){
				return "Curso não cadastrado";
			}
			return view('detalhes')->with('c', $resposta[0]);
		}		
	}
?>