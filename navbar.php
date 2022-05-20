<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/logob.png" width="180" height="70"><img /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <button class="btn btn-dark btn-lg" aria-current="page" data-bs-toggle="modal" data-bs-target="#salir">Salir</button>

                    <div class="modal fade" tabindex="-1" id="salir" aria-labelledby="ModalFade" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><strong>Alerta!</strong></h5>
                                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><button>
                                </div>
                                <div class="modal-body">
                                    <p class="fs-4">¿Desea Salir?</p>
                                </div>
                                <div class="modal-footer">
                                    <a  class="btn btn-primary href="php_cerrar.php" type="submit">SI</a>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="index.php"></a>
                </li>
            </ul>
        </div>

    </div>

</nav>