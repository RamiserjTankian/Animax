<!-- Content Header (Page header) -->
<section class="content-header panel-body">
   <h1>
      Nueva serie
      <small>New Serie</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url();?>plantilla/panel/#"><i class="fa fa-dashboard"></i>Series</a></li>
      <li class="active">Nueva serie</li>
   </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
   <form id="nuevaser">
      <div class="form-group col-md-6">
         <label>Nombre:</label>
         <input type="text" class="form-control" id="nombre" name="nombre" required="" placeholder="Nombre">
      </div>
       <div class="form-group col-md-6">
         <label>Portada:</label>
         <input type="file" class="form-control" id="imagen" name="imagen" required="">
      </div>
       <div class="form-group col-md-4">
         <label>Estado:</label>
         <select  class="form-control" id="estado" name="estado" required="" >
            <option value="Por estrenar">Por estrenar</option>
            <option value="En emisión">En emisión</option>
            <option value="Finalizada">Finalizada</option>
         </select>
      </div>
      <div class="form-group col-md-4">
         <label>Categoría:</label>
         <select  class="form-control" id="categoria" name="categoria" required="">
            <?php foreach ($categorias as $key) { ?>
            <option value="<?=$key->nombre;?>"><?=$key->nombre;?></option>
            <?php }  ?>   
         </select>
      </div>
      <div class="form-group col-md-4">
         <label>Días de estreno:</label>
         <select  class="form-control" id="dias" name="dias" required="">  
         <option>Sin precisar</option>
         <option>Lunes</option>
         <option>Martes</option>
         <option>Miércoles</option>
         <option>Jueves</option>
         <option>Viernes</option>
         <option>Sábado</option>
         <option>Domingo</option>
         </select>
      </div>
       <div class="form-group col-md-6">
         <label>Duración:</label>
         <input type="text" class="form-control" id="duracion" name="duracion" required="" placeholder="De 20 a 40min">
      </div>
      <div class="form-group col-md-6">
         <label>Fecha de estreno:</label>
         <input type="date" class="form-control" id="fecha" name="fecha" required="">
      </div>
     
  
      <div class="form-group col-md-12">
         <label>Sinopsis:</label>
         <textarea name="content" id="sinopsis" name="sinopsis" required="">
        
    </textarea>
         <script>
            ClassicEditor
                .create( document.querySelector( '#sinopsis' ) )
                .catch( error => {
                    console.error( error );
                } );
         </script>
      </div>
      <div class="col-md-12">
         <label>Generos</label>
         <?php foreach ($generos as $key) { ?>
         <div class="form-check-inline">
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id='genero[]' name="genero[]" value="<?=$key->id;?>"> <?=$key->nombre;?>
            </label>
         </div>
         <?php }  ?>  
      </div>
      <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
      <div class="col-md-12" id="resultado" style="margin-top:15px;"></div>
      <div class="form-group col-md-12">
         <hr>
         <button type="submit" class="btn btn-default btn-lg">Enviar</button>
      </div>
   </form>
</section>
<!-- /.content -->
<!-- NUEVAS serieS -->
      <script >
         jQuery(document).ready(function() {
               jQuery("#nuevaser").submit(function(event) {
               event.preventDefault();
         
             var msj = '1';
         //validaciones con js
         
        if (msj === "1") {
         var formData = new FormData(jQuery('#nuevaser') [0]);
         jQuery.ajax({
           url: '<?=base_url();?>series/crear_serie',
           type: 'POST',
           contentType: false,
           processData: false,
           dataType: 'json',
           data: formData,
           beforeSend: function() {
             $("#resultado").html('<div class="alert alert-success">Procesando...!</div>');
           }
         })
         .done(function(data, textStatus, jqXHR) {
            var getData = jqXHR.responseJSON; // dejar esta linea
           if(data.status=='ok'){
            $("#resultado").html('<div class="alert alert-success">'+data.code+'</div>');
             window.location.href ='<?=base_url();?>/panel/series';
           }else{
           $("#resultado").html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
           }
         })
               .fail(function(jqXHR, textStatus, errorThrown) {
                 var getErr = jqXHR.responseText;
                 
                 console.log(getErr);
         
               })
          // Fin de ajax
          } else {
              swal("¡Error! ", msj, "error");
          }
          });
         
         });//fin ready
      </script>
