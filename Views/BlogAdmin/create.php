

<!-- Modal -->
<form action="/Routes/EventoRouter.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="BlogModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Blog</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input type="text" name="accion" value="nuevo" hidden>
        <div class="col">
            <label for="titulo_blog">Titulo/Blog</label>
            <input type="text" name="titulo_blog" id="titulo_blog" class="form-control">
        </div>
        <div class="col">
            <label for="subtitulo_blog">SubTitulo/Blog</label>
            <input type="text" name="subtitulo_blog" id="subtitulo_blog" class="form-control">
        </div>
        <div class="col">
            <label for="idtipo_evento">Tipo/Evento</label>
            <select name="idtipo_evento" id="idtipo_evento" class="form-control">
                <option value="">---Seleccióne---</option>
             
                <option value=""></option>
            </select>
        </div>
        <div class="col">
            <label for="detalle_evento">Detalle/Blog</label>
            <textarea name="detalle_evento" id="detalle_evento" cols="30" rows="5" class="form-control"></textarea>
        </div>
        
        <div class="col" style="margin-top: 10px;">
            <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>