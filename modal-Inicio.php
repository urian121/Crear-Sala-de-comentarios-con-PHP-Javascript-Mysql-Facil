<div id="modal_container" class="modal-container showModal">
<div class="modalPersonalizada" style="width: 680px !important;">
<a href="#close" title="Close" class="closeModal" id="closeModal">X</a>
    <img  src="imgs/icon.png" alt="Logo" style="width: 80px;">
    <p>
    Completa algunos datos, para que puedas  <strong> comentar.</strong>
    <br><br>
    </p>

    <form class="form-inline" action="loginCookies.php" method="POST" enctype="multipart/form-data">
        <div class="form-group mx-sm-5 mb-2">
            <label for="nameUser"><strong>Tu Nombre</strong></label>
            <input type="text" class="inpuSpecial" name="nameUser" style="border:1px solid #E2E2E2 !important;" required>
        </div>
    <br>
        <div class="form-group">
        <label for="photoUser"><strong>Tu foto de perfil aqui!</strong></label>
            <div style="width: 150px; margin:0 auto;">
            <label class="dropimage profile">
                <input type="file" name="photoUser" title="Drop image or click me" accept="image/*" required>
            </label>
            </div>
        </div>

        <input type="submit" name="enviar" value="Entrar Ahora!"  id="entrar">
    </form>
  </div>
</div>