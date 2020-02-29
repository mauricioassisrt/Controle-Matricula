<form action="/servidor/salvar" method="post" disabled="" class="ls-form-text">
	<input type="hidden" name="token" value="ehOCabraMesmo">
	<div class="well well-sm clearfix ls-table-group-actions">
		<p class="d-inline-block">
			<strong class="counterChecks">0</strong>
			<span class="counterChecksStr">item selecionado</span>
		</p>
		<div class="actions pull-right">
			<div class="btn-group">
				<button type="button" class="btn btn-default">Duplicar</button>
				<a href="#" class="btn btn-default">Relatorio</a>
				<a href="#" class="btn btn-default">Arquivar</a>
			</div>
			<button type="button" class="btn btn-default">
				<span class="text-danger">Excluir</span>
			</button>
		</div>
	</div>
	<table class="table ls-table">
		<thead>
			<tr>
				<th class="txt-center"><input type="checkbox"></th>
				<th class="ls-nowrap col-xs-3">Título</th>
				<th class="hidden-xs">Campanha
				</th><th>Status</th>
				<th class="hidden-xs">Data de envio</th>
				<th class="ls-table-actions">Ações</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td> <input name="id" value="1" type="checkbox"> </td>
				<td>Texto 1 <span class="label label-success">Success</span></td>
				<td>Campanha</td>
				<td>Enviada</td>
				<td>21/09/2013</td>
				<td>
				</td>
			</tr>
			<tr>
				<td> <input name="id" value="2" type="checkbox"> </td>
				<td>Texto 2 </td>
				<td>Campanha</td>
				<td>Enviada</td>
				<td>21/09/2013</td>
				<td>
					<a href="/assets/javascripts/manual/fake-response/save.json" data-confirm-text="Confirma exclusão do item?" class="text-danger">
						Excluir
					</a>
				</td>
			</tr>
			<tr>
				<td> <input name="id" value="2" type="checkbox"> </td>
				<td>Texto 3 </td>
				<td>Campanha</td>
				<td>Enviada</td>
				<td>
					<input type="text" class="form-control" id="row3-date" value="2/01/2014" placeholder="dd/mm/aaaa">
				</td>
				<td>
					<a href="/assets/javascripts/manual/fake-response/save.json" data-action-modal="edit">Editar</a>
					<a href="/assets/javascripts/manual/fake-response/save.json" data-confirm-text="Confirma exclusão do item?" class="text-danger">
						Excluir
					</a>
				</td>
			</tr>
		</tbody>
	</table>
</form>