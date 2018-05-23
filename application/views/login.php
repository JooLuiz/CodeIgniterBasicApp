<!-- Esta View carrega o que será exibido na home_page -->
    <div>
        <div>
            <h3 class="center"><a href="<?= base_url() ?>index.php/home">CodeIgniterProject</a></h3>
        </div>

        <div>
            <button type="button" class="btn btn-rounded" data-toggle="modal" data-target="#LoginModal">Login</button>
        </div>

        <div>
          <a href="<?= base_url() ?>index.php/register">Register!</a>
        </div>
        
        <div id="LoginModal" class="modal fade" role="dialog" style="padding-top: 110px">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h5>Login</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">

              <form action="<?= base_url() ?>index.php/home/logging_in" method="post" enctype="multipart/form-data">
                <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" name="email" id="email" class="form-control">
                    <label for="email" class="font-weight-light">E-mail</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-key prefix grey-text"></i>
                    <input type="password" name="password" id="password" class="form-control">
                    <label for="password" class="font-weight-light">Password</label>
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