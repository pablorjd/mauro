<center>
    <br>
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Crear mensaje</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Asunto</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="asunto" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Mensaje</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">Escribe aquí tu mensaje</textarea>
  </div>
</div>

</fieldset>
</form>
</center>

 
<!--  DataTables Example 
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
                           <= var_dump($mensajes)?>
                            
                                <php foreach ($mensajes as $mensaje):?>
                                <tr>
                                <td><=$mensaje->nombre?></td>
                                <td><=$mensaje->asunto?></td>
                                <td><=$mensaje->fecha?></td>   
                                <td><button class="btn btn-success" >Ver</button></td>
                                 </tr>
                                <php endforeach; ?>
                               
                           
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>-->
