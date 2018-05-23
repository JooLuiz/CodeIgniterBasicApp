<div>
	<div>
		<h1>Welcome, <?= $this->session->userdata('username')?></h1>
	</div>
	<div>
		<h3>You can see all your notes Here: </h3>
		<a href="<?= base_url() ?>index.php/notes">Your Notes</a>
	</div>
	<div>
		<h3>Or add a new Note:</h3>
		<button type="button" class="btn btn-rounded" data-toggle="modal" data-target="#NoteModal">Add Note</button>
	</div>

	<div>
		<p>
			<a href="<?= base_url() ?>index.php/home/logout">Logout</a>
		</p>
	</div>

	<p><?= $this->session->flashdata('error')?></p>

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

