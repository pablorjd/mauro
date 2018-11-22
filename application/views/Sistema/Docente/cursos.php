 

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Lista de Anuncios</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tablaAnuncios" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Asunto</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
<!--                    <= var_dump($anuncios) ?>-->

                    <?php foreach ($cursos as $curso): ?>
                        <tr>
                            <td><?= $curso->nombre ?></td>
                            <td><button class="btn btn-success" >Ver</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>