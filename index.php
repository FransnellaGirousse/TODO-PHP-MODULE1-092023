<?php
include('config/app.php');
include('html/header.php');

?>
<div class="row"> 
          <div class="col-12">
          <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
              <!-- Formulaire d'ajout -->
              <form action="addItem.php" method="POST">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" name="intitule">
                  <span class="input-group-append">
                    <button type="submit" class="btn btn-info btn-flat">+</button>
                  </span>
              </div>
              </form>

                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <!-- checkbox -->
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Tache</span>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash"></i>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
</div>

<?php
include('html/footer.php');
  