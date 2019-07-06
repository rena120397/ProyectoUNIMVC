<?php
        require_once 'view/header.php';      
?>
    <div class="jumbotron">
    <h1>Ingresar</h1>
    </div>
    <div class="container">
        <h2>Usuario ADMIN  password ADMIN</h2>
        <form class="form-horizontal" action="red.php?c=usuario" method="GET">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Login:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Enter login" name="login">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
            </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>
<?php
    require_once 'view/footer.php';
?>

