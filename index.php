<?php require_once './header.php'; ?>
<div class="container mt-5">
    <form method="post" enctype="multipart/form-data" action="gestao.php?q=add">
        <div class="form-group" >
            <input type="text" name="nome" class="form-control" />
        </div>
        <div class="form-group">
            <input type="file" name="arquivo" class="form-control" />
        </div>
        <button type="submit" class="btn btn-primary">enviar</button>
    </form>
</div>
<?php require_once './footer.php'; ?>