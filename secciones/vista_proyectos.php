<?php include('../templates/header.php'); ?>
<?php include('proyectos.php'); ?>

<div class="col-md-5">
    <form action="" method="post">
        <div class="card">
            <div class="card-header">Proyectos
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="id"
                        id="id"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Proyecto</label>
                    <input
                        type="text"
                        class="form-control"
                        name="proyecto"
                        id="proyecto"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Añadir</button> 
                <button type="submit" class="btn btn-primary">Editar</button> 
                <button type="submit" class="btn btn-danger">Eliminar</button> 
            </div>
        </div>
    </form>
</div>

<div class="col-md-7">
    <div class="table-responsive-md">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">CPP 086625</td>
                    <td>Proyecto de Colaboración Público Privada 2022   </td>
                    <td>1/07/2022</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>

<?php include('../templates/footer.php'); ?>