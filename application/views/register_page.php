<div>

    <div>
        <h3 class="center"><a href="<?= base_url() ?>index.php/home">CodeIgniterProject</a></h3>
    </div>
        <h5>Registration</h3>
    </div>
    <div>
        <form action="<?= base_url() ?>index.php/home/registration" method="post" enctype="multipart/form-data">
            
            <div class="md-form">
                <i class="fa fa-key prefix grey-text"></i>
                <input type="text" name="username" id="username" class="form-control">
                <label for="username" class="font-weight-light">Username</label>
            </div>

            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" name="email" id="email" class="form-control">
                <label for="email" class="font-weight-light">E-mail</label>
            </div>

            <div class="form-inline">
                <div class="md-form">
                    <i class="fa fa-key prefix grey-text"></i>
                    <input type="password" name="password" id="password" class="form-control">
                    <label for="password" class="font-weight-light">Password</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-key prefix grey-text"></i>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    <label for="password_confirmation" class="font-weight-light">Password Confirmation</label>
                </div>
            </div>

            <div class="md-form">
                <i class="fa fa-calendar prefix grey-text"></i>
                <input type="date" name="birthday" id="birthday" class="form-control">                
            </div>

            <div class="text-center py-4 mt-3">
                <input class="btn btn-cyan" type="submit" value="Submit">
            </div>
        </form>
    </div>

    <p>
        <a href="<?= base_url() ?>index.php/login">login</a>
    </p>
</div>