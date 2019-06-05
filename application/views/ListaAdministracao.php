<div class="container">
    <div class="conntainer">
        <h1>Lista de Equipe</h1>
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
        ?> 
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead  class="thead-dark">
                    <tr>
                        <th scope="col"><i class="fas fa-anchor"></i> Nome</th>
                        <th scope="col"> Duração</th>
                        <th scope="col"> Sinopse<th>
                        <th scope="col"> Companhia<th>
                        <th scope="col"> Gênero<th>
                        <th scope="col"> Diretor<th>        
                        <th scope="col"> Atores<th>
                        <th scope="col"> Status<th>
                        <th scope="col"><i class="fas fa-anchor"></i> Imagem</th>
                        <th scope="col"><i class="fas fa-location-arrow"></i> Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($filme as $fm) {
                        echo '<tr>';
                        echo '<td>' . $fm->tx_nome . '</td>';
                        echo '<td> <img src="' . base_url('uploads/' . $fm->imagem) . '" height="50"></td>';
                        echo '<td>'
                        . '<a class="btn btn-outline-light" href="' . base_url('administracao/alterar/' . $fm->id) . '"> <i class="fas fa-exchange-alt"></i>  Alterar</a>'
                        . '<a class="btn btn-danger" href="' . base_url('administracao/alterar/' . $fm->id) .  '"> <i class="fas fa-trash-alt"></i>    Deletar</a>'
                        . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
