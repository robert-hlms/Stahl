<div class="modal fade" role="dialog" tabindex="-1" data-backdrop="false" id="delete-nosotros-{{$image->id}}">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true"></span>
				</button>
				<h4 class="modal-tiitle">Eliminar ? </h4>
			</div>
			<div class="modal-body">
				<p>Confirme si desea eliminar</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        		<button type="button" class="btn btn-danger" onclick="delete_obj('nosotros','{{$image->id}}')" data-dismiss="modal">Eliminar</button>
			</div>
		</div>
	</div>
</div>