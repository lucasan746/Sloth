<!DOCTYPE html>
    <form class="" action="/publicacion" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <label for="text">Que quieres compartir?</label>
      <br>
      <textarea name="text" rows="8" cols="80"></textarea>
      <br>
      <label for="img">Sube una foto o video</label>
      <input type="file" name="media" value="">
      <br>
      <input type="hidden" name="id" value="1">
      <button type="submit" name="button">Publicar!</button>
    </form>
