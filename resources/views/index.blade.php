<!DOCTYPE html>
	<html lang="pt-BR">
	    <head>
	        <title>Printi PHP Developer Test</title>
	        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	    </head>
	    <body>        
	        <div>
	
	            <div class="container">
	                <h2>Repositório</h2>
	                <table class="table ">
	                    <thead>
	                        <tr>
	                            <th>ID</th>
	                            <th>Nome</th>
	                            <th>Proprietário</th>
	                            <th>Descrição</th>
	                            <th>Url Git</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	@forelse($repositories as $repo)
	                        <tr>
	                            <td>{{$repo['id'] ?: '-'}}</td>
	                            <td>{{$repo['name'] ?: '-'}}</td>
	                            <td>{{$repo['owner']['login'] ?: '-'}}</td>
	                            <td>{{$repo['description'] ?: '-'}}</td>     
	                            <td><a href="{{$repo['html_url']?:'#'}}">{{ $repo['html_url'] ?: '' }}</a></td>
	                        </tr>
	                        @empty
	                        	<td>Não existem registros a serem exibidos</td>
	                        @endforelse
	                    </tbody>
	                </table>
	            </div>
	        </div>
	        
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	      
	    </body>
	</html>