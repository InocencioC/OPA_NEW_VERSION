<?php $this->load->view('layout/sidebar'); ?>

      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view('layout/navbar'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

  <nav  aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item "><a href="<?php echo base_url('usuarios'); ?>">Usuários</a></li>
  <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
  </ol>
  </nav>

          <!-- DataTales Example -->   
  <div class="card shadow mb-4">
  <div class="card-header py-3">
  <a title="Voltar" href="<?php echo base_url('usuarios'); ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a>
  </div>
  <div class="card-body">
  <form class="user" method="POST" name="form_edit">
              
  
  
        
        