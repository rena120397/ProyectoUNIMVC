<?php
        require_once 'view/header.php';  
        session_start();   
?>
    <div class="jumbotron">
    <h1>Bienvenido </h1>
    </div>
    <div class="row text-center">
        <div class="col-sm-4 bg-success">
            <form action="red.php" method='post'>
            <input type="hidden" name="c" id="control" value="cliente">
            <input type="submit" value="clientes" class="btn btn-success">
            </form>
        </div>
        <div class="col-sm-4 bg-warning">
            <form action="red.php" method='post'>
            <input type="hidden" name="c" id="control" value="producto">
            <input type="submit" value="productos" class="btn btn-warning">
            </form>
        </div>
        <div class="col-sm-4 bg-success">
            <form action="red.php" method='post'>
            <input type="hidden" name="c" id="control" value="venta">
            <input type="submit" value="ventas" class="btn btn-info">
            </form>
        </div>
  </div>

</body>
</html>
<?php
    require_once 'view/footer.php';
?>
