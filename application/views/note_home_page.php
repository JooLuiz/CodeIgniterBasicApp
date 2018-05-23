<div>
	<div>
		<h1>Your Notes</h1>
	</div>
	<p><?= $this->session->flashdata('error')?></p>

	<?php
	if($notes){
	?>

	<table class="table">

		    <thead class="mdb-color lighten-3">
		        <tr class="text-white">
		            <th>Date</th>
		            <th>Title</th>
		            <th>Description</th>
		            <th>Kind</th>
		        </tr>
		    </thead>

		    <tbody>
		        <?php
		        foreach ($notes as $note)
				{
						?>
					<tr style="background-color: white;">
						<td><?php echo $note->date ?></td>
						<td><?php echo $note->title ?></td>
						<td><?php echo $note->description ?></td>
						<td><?php echo $note->type ?></td>
					</tr>
				
				<?php } ?>
		    </tbody>

		</table>

		<?php }else{?>
			<div>
				<p>Hello <?= $this->session->userdata('username')?>, there's no notes right now, but you can Add Notes:</p>
			</div>


		<?php }?>
		<div>
			<button type="button" class="btn btn-rounded" data-toggle="modal" data-target="#NoteModal">Add Note</button>
		</div>
		<div>
			<a href="<?= base_url() ?>index.php/">Back</a>
		</div>

		<div id="NoteModal" class="modal fade" role="dialog">
    	<div class="modal-dialog">
      	<!-- Modal content-->
      		<div class="modal-content">
        		<div class="modal-header">
		          <h5>Add Note</h5>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        <div class="modal-body">
		        	<form action="<?= base_url() ?>index.php/home/adding_note" method="post" enctype="multipart/form-data">
				        <div class="md-form">
				            <input type="text" name="title" id="title" class="form-control">
				            <label for="title" class="font-weight-light">Title</label>
				        </div>
				        <div class="md-form">
				            <input type="text" name="type" id="type" class="form-control">
				            <label for="type" class="font-weight-light">Kind</label>
				        </div>
			            <div class="md-form">
			                <input type="text" name="description" id="description" class="form-control">
			                <label for="description" class="font-weight-light">Description</label>
			            </div>
				        <div class="md-form">
				            <input type="date" name="date" id="date" class="form-control">                
				        </div>
				        <div class="text-center py-4 mt-3">
				            <input class="btn btn-cyan" type="submit" value="Submit">
				        </div>
				    </form>
		        </div>
		     </div>
		 </div>
	</div>
</div>