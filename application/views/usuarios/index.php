
   <?php $this->load->view('layout/sidebar');  ?>
   
   <!-- Main Content -->
   <div id="content">

   <?php $this->load->view('layout/navbar'); ?>

     <!-- Begin Page Content -->
     <div class="container-fluid">
  
     <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
  </ol>
</nav>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
             <a title="Cadastrar novo usuário" href="" class="btn btn-success btn-sm float-right "><i class="fas fa-user-plus" ></i>&nbsp;Novo</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nome</th>
                      <th>Área de formação</th>
                      <th>Está empregado</th>
                      <th>E-mail</th>
                      <th>Província</th>
                      <th>CV</th>
                      <th class="text-right no-sort">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($usuarios as $user): ?>
                    <tr>
                      <td><?php echo $user->id ?></td>
                      <td><?php echo $user->username ?></td>
                      <td><?php echo $user->training_area ?></td>
                      <td><?php echo $user->employee ?></td>
                      <td><?php echo $user->email ?></td>
                      <td><?php echo $user->province ?></td>
                      <td><?php echo $user->dir_cv ?></td>
                     <td class="text-right" >
                      <a title="Editar"  href="<?php echo base_url('usuarios/edit/'.$user->id); ?>" class="btn btn-sm btn-primary" >Editar</a>
                      <a title="Excluir" href="" class="btn btn-sm btn-danger" >Excluir</a>
                     </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


     </div>
     <!-- /.container-fluid -->

   </div>
   <!-- End of Main Content -->
