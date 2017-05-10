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
	            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	                <div class="modal-dialog">
	                    <div class="modal-content">
	                        <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	                            <h4 class="modal-title" id="myModalLabel">titulo</h4>
	                        </div>
	                        <div class="modal-body">
	                            <form name="frmContatos" class="form-horizontal" novalidate="">
	
	                                <div class="form-group error">
	                                    <label for="inputEmail3" class="col-sm-3 control-label">Nome</label>
	                                    <div class="col-sm-9">
	                                        <input type="text" class="form-control has-error" id="nome" name="nome" placeholder="Nome completo" value=""
	                                        ng-model="contato.nome" ng-required="true">
	                                    </div>
	                                </div>
	
	                                <div class="form-group">
	                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
	                                    <div class="col-sm-9">
	                                        <input type="email" class="form-control" id="email" name="email" placeholder="Endereço de e-mail" value=""
	                                        ng-model="contato.email" ng-required="true">
	                                    </div>
	                                </div>
	
	                                <div class="form-group">
	                                    <label for="inputEmail3" class="col-sm-3 control-label">Telefone</label>
	                                    <div class="col-sm-9">
	                                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="">
	                                    </div>
	                                </div>
	
	                                <div class="form-group">
	                                    <label for="inputEmail3" class="col-sm-3 control-label">Posição</label>
	                                    <div class="col-sm-9">
	                                        <input type="text" class="form-control" id="posicao" name="posicao" placeholder="Position" value="">
	                                    <span class="help-inline"
	                                        ng-show="frmContatos.posicao.$invalid && frmContatos.posicao.$touched">Posição é obrigatório</span>
	                                    </div>
	                                </div>
	
	                            </form>
	                        </div>
	                        <div class="modal-footer">
	                            <button type="button" class="btn btn-primary" id="btn-save">Salvar alterações</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	
	        <!-- Carrega bibliotecas Javascripts (AngularJS, JQuery, Bootstrap) -->
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	      
	    </body>
	</html>