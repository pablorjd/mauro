
 
 <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
               Lista Citaciones</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tablaCitaciones" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Profesor</th>
<!--                                <th>ASUNTO</th>-->
                                <th>FECHA</th>
                                <th></th>
                              
                            </tr>
                        </thead>
<!--                           
                           <= var_dump($citaciones)?>
                            -->
                                <?php foreach ($citaciones as $citacion):?>
                                <tr>
                                <td><?=$citacion->nombre?></td>
<!--                                <td><=$citacion->asunto?></td>-->
                                <td><?=$citacion->fecha?></td>   
                                <td><button class="btn btn-success" >Ver</button></td>
                                 </tr>
                                <?php endforeach; ?>                               
                          
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
