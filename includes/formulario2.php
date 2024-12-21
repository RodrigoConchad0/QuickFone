
<div class="container">
        <div class="row">
            <div class="col col-sm-10 col-lg-8 offset-sm-1 offset-lg-2">
                <!-- Formulário de envio de informações -->
                <form action="" method="POST">
                    <div class="mb-2">
                        <label class="form-label" for="#f-nome-completo">Nome Completo</label>
                        <input type="text" name="fNomeCompleto" id="f-nome-completo"
                            class="form-control" placeholder="Insira o seu nome completo" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="#f-telefone">Número de Telefone</label>
                        <input type="tel" name="fTelefone" id="f-telefone"
                            class="form-control" placeholder="Insira o seu número de telefone" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="#f-email">Endereço de Email</label>
                        <input type="email" name="fEmail" id="f-email"
                            class="form-control" placeholder="Insira o seu email" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Forma de Contato Preferível</label>
                        <select class="form-select" name="fContatoPreferido">
                            <option value="email">Email</option>
                            <option value="telefone">Telefone</option>
                        </select>
                    </div>
    
                    <div class="mb-2">
                        <label class="form-label">Modelo:</label>
                        <input type="text" class="form-control font-weight-bold" value="<?= $nomeModelo; ?>" readonly style="background-color:rgb(210, 230, 250); color: #007bff ;font-weight: bold;">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Preço:</label>
                        <input type="text" class="form-control font-weight-bold" value="<?= $precoReparacao; ?> €" readonly style="background-color:rgb(210, 230, 250);color: #007bff; font-weight: bold;">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Tipo de Reparação:</label>
                        <input type="text" class="form-control font-weight-bold" value="<?= $tipoReparacao; ?>" readonly style=" background-color:rgb(210, 230, 250); color: #007bff; font-weight: bold;">
                    </div>

                 

                    <button class="btn btn-outline-primary" type="submit">Enviar</button>
                </form>