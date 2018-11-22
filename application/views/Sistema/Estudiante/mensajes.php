
 
 <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
               Lista Mensajes</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tablaMensajes" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>REMITENTE</th>
                                <th>ASUNTO</th>
                                <th>FECHA</th>
                                <th></th>
                              
                            </tr>
                        </thead>
<!--                           <= var_dump($mensajes)?>-->
                            
                                <?php foreach ($mensajes as $mensaje):?>
                                <tr>
                                <td><?=$mensaje->nombre?></td>
                                <td><?=$mensaje->asunto?></td>
                                <td><?=$mensaje->fecha?></td>   
                                <td><button class="btn btn-success" >Ver</button></td>
                                 </tr>
                                <?php endforeach; ?>
                               
                           
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
