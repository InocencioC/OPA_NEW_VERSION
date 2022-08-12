
   <?php $this->load->view('layout/sidebar');  ?>
   
      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view('layout/navbar'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
        
       
          <div class="container mt-5">
    <h1>Preencha o formulário!</h1>
    <form class="row g-3">
    
    <div class="col-md-6">
    <label for="firstName" class="form-label">Primeiro nome</label>
    <input type="text" class="form-control" id="firstName" Required>
    </div>
    
    <div class="col-md-6">
    <label for="lasttName" class="form-label">Último nome</label>
    <input type="text" class="form-control" id="firstName" Required>
    </div>
    
    <div class="form-group col-md-3">
    <label for="sel1">Selecione o seu gênero</label>
    <select class="form-control" id="sel1">
    <option selected>Selecione</option>
    <option value="0">Homem</option>
    <option value="1">Mulher</option>
    <option value="2">Não binário</option>

    </select>
    </div>


    <div class="col-md-5">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" Required>
    </div>

    <div class="col-md-4">
    <label for="phonenumber" class="form-label">Telefone</label>
    <input type="number" class="form-control" id="phonenumber" placeholder="(+244) 999-999-999">
    </div>

    <div class="form-group col-md-3">
    <label for="sel1">Usa o WhatsApp</label>
    <select class="form-control" id="sel1">
    <option selected>Selecione</option>
    <option value="0">Não</option>
    <option value="1">Sim</option>
    </select>
    </div>
    <div class="form-group col-md-3">
    <label for="sel1">Está empregado</label>
    <select class="form-control" id="sel1">
    <option selected>Selecione</option>
    <option value="0">Não</option>
    <option value="1">Sim</option>
    </select>
    </div>

    <div class="col-md-3">
    <label for="formFileSm" class="form-label">Carregue a sua foto</label>
    <input class="form-control form-control-sm" id="formFileSm" type="file" Required>
    </div>

    <div class="col-md-3">
    <label for="formFileSm" class="form-label">Carregue o seu curriculum vitae</label>
    <input class="form-control form-control-sm" id="formFileSm" type="file" Required>
    </div>

    <div class="col-md-3">
    <label for="formationarea" class="form-label">Área de formação</label>
    <input type="text" class="form-control" id="formationarea" placeholder="Ex: Tecnologias de Informação">
    </div>


    <div class="col-md-3">
    <label for="bairro" class="form-label">Bairro</label>
    <input type="text" class="form-control" id="bairro" >
    </div>
  
<div class="form-group col-md-3">
  <label for="sel1">Seleciona a sua província</label>
  <select class="form-control" id="sel1">
  <option selected>Províncias</option>
    <option value="1">Bengo</option>
    <option value="2">Benguela</option>
    <option value="3">Bié</option>
    <option value="4">Cabinda</option>
    <option value="5">Cuando-Cubango</option>
    <option value="6">Cunene</option>
    <option value="7">Huambo</option>
    <option value="8">Huíla</option>
    <option value="9">Kwanza Sul</option>
    <option value="10">Kwanza Norte</option>
    <option value="11">Luanda</option>
    <option value="12">Lunda Norte</option>
    <option value="13">Lunda Sul</option>
    <option value="14">Malanje</option>
    <option value="15">Moxico</option>
    <option value="16">Namibe</option>
    <option value="17">Uíge</option>
    <option value="18">Zaire</option>
  </select>
</div>
  


    <div class="col-md-12">
    <label for="description" class="form-label">Faça um resumo das suas qualificações</label>
    <textarea class="form-control" id="description" rows="3" Required> 
    </textarea> 
    </div>

    <div class="col-md-12">
  <br>
  <button type="submit" class="btn btn-primary">Salvar</button>
  </div>

</div>

 

  </form>
 
        </div>
        <!-- /.container-fluid -->
        <br>
      </div>
      <!-- End of Main Content -->
