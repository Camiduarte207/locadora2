<div class="container">
    <h2 class="bi bi-people"><i class="bi bi-plus"></i>Cadastro de novo Cliente</h2>

    <form action="index.php?menu=inserir-clientes" method="post">
        <div class="mb-3 col-6">
            <label class="form-label" for="nomeCliente">Nome do Cliente</label>
            <div class="input-group">
            <div class="input-group-text">
            <i class="bi bi-person-circle"></i>
            </div>   
            <input class="form-control" type="text" name="nomeCliente" id="nomeCliente">
            </div>
        </div>
        <div class="mb-3 col-3">
            <label class="form-label" for="telefoneCliente">Telefone</label>
            <div class="input-group">
            <div class="input-group-text">
            <i class="bi bi-telephone-fill"></i>
            </div> 
            <input class="form-control" type="text" name="telefoneCliente" id="telefoneCliente">
            </div>
        </div>
        <div class="mb-3 col-3">
            <label class="form-label" for="emailCliente">E-Mail</label>
            <div class="input-group">
            <div class="input-group-text">
            <i class="bi bi-envelope-at-fill"></i>
            </div>    
            <input class="form-control" type="email" name="emailCliente" id="emailCliente">
            </div>
        </div>

        <div>
            <input class="btn btn-success bi bi-floppy-fill" type="submit" value="Salvar">
        </div>
    </form>
</div>