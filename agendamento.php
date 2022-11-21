<div class="container">
    <h2>AGENDE AGORA</h2>
    <form id="agendamento" action="?pg=agendamentodb" method="post">

        <label>Nome:</label> <input placeholder="Insira seu nome" type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name.">
        <label>Telefone: </label><input required placeholder="Insira seu número" type="text" class="form-control" name="telefone" />
        <label>Data de Agendamento:</label> <input required type="date" class="form-control" name="data" />
        
        <div >
            <label for="">Informe o horário que deseja cortar:</label>
            <select required class="form-control" name="horario" id="selecHour">
                <option value="1">Selecione um Horário</option>
                <option value="10:30">10:30</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="4">Informe o horário que deseja!</option>
            </select>
        </div>

        <div style="display: none;" id="custom">
            <label for="">Escolha o horário que você prefere</label>
            <input placeholder="Insira o horário que deseja" name="horario" class="form-control" type="text" id="teste" >
        </div>
        <a id="toggle" style="display: block;" href="##">Escolha seu horário</a>


        <label for="">Selecione o barbeiro</label>
        <select required class="form-control" name="barbeiro" id="">
            <option value="">Selecione um Barbeiro</option>
            <option value="Wesley">Barbeiro Wesley</option>
            <option value="Wagner">Barbeiro Wagner</option>
            <option value="Junior">Barbeiro Junior</option>
            <option value="Fabricio">Barbeiro Fabricio</option>
        </select>

        <label for="">Selecione o tipo de corte</label>
        <select required class="form-control" name="tipCorte" id="selectCorte">
            <option value="1">Selecione um Corte</option>
            <option value="Degradê">Corte Degradê</option>
            <option value="Militar">Corte Militar</option>
            <option value="Social">Corte Social</option>
            <option value="Barba">Barba</option>
            <option value="4">Informe o corte que deseja!</option>
        </select>
        <div style="display: none;" id="corte">
            <label for="">Insira o tipo de corte que você deseja</label>
            <input placeholder="Insira o horário que deseja" name="tipCorte" class="form-control" type="text" id="teste" >
        </div>
        <a id="toggleCorte" style="display: block;" href="##">Escolha seu horário</a>
        
        <br>
        <button type="submit" class="btn btn-outline-dark">Registrar Agendamento</button>
    </form>
</div>

<script src="agendamento.js"></script>