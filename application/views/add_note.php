<h1><?= $this->session->userdata('username')?></h1>

<form action="" method="post" enctype="multipart/form-data">
        
        <div class="md-form">
            <i class="fa fa-key prefix grey-text"></i>
            <input type="text" name="title" id="title" class="form-control">
            <label for="title" class="font-weight-light">Título</label>
        </div>

        <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="text" name="type" id="type" class="form-control">
            <label for="type" class="font-weight-light">Tipo</label>
        </div>

        <div class="form-inline">
            <div class="md-form">
                <i class="fa fa-key prefix grey-text"></i>
                <input type="text" name="description" id="description" class="form-control">
                <label for="description" class="font-weight-light">Descrição</label>
            </div>

            <div class="md-form">
                <i class="fa fa-key prefix grey-text"></i>
                <input type="checkbox" name="done" id="done" class="form-control">
                <label for="done" class="font-weight-light">Feito</label>
            </div>
        </div>

        <div class="md-form">
            <i class="fa fa-calendar prefix grey-text"></i>
            <input type="date" name="date" id="date" class="form-control">                
        </div>

        <div class="text-center py-4 mt-3">
            <input class="btn btn-cyan" type="submit" value="Submit">
        </div>
    </form>