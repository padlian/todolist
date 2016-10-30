<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Todolist</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/mystyle.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12" id="header">Header</div>
      </div>
      <div class="row">
        <div class="col-md-12" id="notif_area"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Tambah
              </a>
              <button id="refresh" class="btn btn-warning">Refresh</button>
              <div class="collapse" id="collapseExample">
                <div class="well">
                  <h2>Tambah</h2>
                  <form id="form_list">
                    <div class="form-group">
                      <label for="todolist">To Do List</label>
                      <input type="text" class="form-control" name="todolist" placeholder="To Do List">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" name="description" placeholder="Description"></textarea>
                    </div>
                    <!--<input type="submit" class="btn btn-success" value="Tambah">-->
                    <button type="button" class="btn btn-primary" id="btn_simpan">Simpan</button>
                  </form>
                </div>
              </div>              
            </div>
          </div>
          <div class="row" id="isi_list">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" id="footer">Footer</div>
      </div>
    </div>

    <div id="notif" style="display:none">
      <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Yeey!</strong> Tambah List Berhasil
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>assets/js/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $.ajax({
        url: "<?php echo base_url() ?>json",
        dataType: "text",
        success: function(data) {
            var json = $.parseJSON(data);
            for (var i=0;i<json.length;++i)
            {
              $('#isi_list').append(
                    '<div class=\"col-md-3 list\"><div class=\"list-title\">'+json[i].judul+'</div><div class=\"list-content\">'+json[i].judul+'</div></div>'
              );
            }
        }
      });
    </script>
  </body>
</html>