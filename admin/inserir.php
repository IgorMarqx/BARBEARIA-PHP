<div class="container">
  <h2>INSERIR PÁGINA</h2> 
  <a href="?pg=listar" class="butao">Voltar</a>
  <br>
  <br>
  <form  id="contactForm" action="?pg=inserirdb" method="post">
     
	 <label>Nome da página:</label> 
     <input type="text" class="form-control" name="nome" required="" 
     data-validation-required-message="Please enter your name.">
	 Link: <input type="tel" class="form-control" name="link" required>
	 Descrição:<textarea class="form-control" name="descricao" rows="5"
      cols="10" required></textarea><br>
	 <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>