<!DOCTYPE html>
<html>
    <head>
        <title>PulseConsumo</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/stylesheet/normalize.css?version=12" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <?php 
            require('connection.php');
            
            $query = 'select * from movimentacao where id_pulseira = (select id from pulseira where rfid = '. $_GET['rfid'] .');';
            $result = mysqli_query($connection, $query);
            $movimentacao = mysqli_fetch_assoc($result);
            
            $query = 'select * from pulseira where rfid = ' . $_GET['rfid'];
            $result = mysqli_query($connection, $query);
            $pulseira = mysqli_fetch_assoc($result);
        ?>
    </head>
    <body>
    <div id="app">
        <div class="left-container">
            <nav>
                <div class="nav-left">
                    <img src="/assets/images/logo.png" class="logo"></img>
                    <h2 class="logo-name">PulseConsumo</h2>
                </div>
                <div class="nav-right">
                    <a href="#">Cadastre-se</a>
                    <a href="#">Login</a>
                </div>
            </nav>
            
            <h1>Pulseira: <?php echo $pulseira['rfid'] ?></h1>
            <h2>Saldo: <?php echo $pulseira['saldo'] ?></h2>
            
            <br><br>
            
            <!--<form>-->
            <!--    <input type="text" name="rfid" placeholder="Código GTIN da Pulseira"/>-->
            <!--    <p><input type="checkbox" name="termos" v-model="termos"> <b class="check-text">Aceito as Políticas de Privacidade.</b></p>-->
            <!--    <input type="submit" value="Confirmar" v-if="termos" />-->
            <!--    <input type="submit" value="Confirmar" v-if="!termos" v-on:click.prevent.stop="ValidaTermos(termos)" />-->
            <!--</form>-->
            
            <div class="movimentos">
                <div class="movimento mov-debito">
                    <h4>Movimentação de débito</h4>
                    <p>50,00</p>
                    <span>11:05:56 06/05/2019</span>
                </div>
                
                <div class="movimento mov-credito">
                    <h4>Movimentação de crédito</h4>
                    <p>50,00</p>
                    <span>11:05:56 06/05/2019</span>
                </div>
            </div>
        </div>
    </div>    
    <script src="vue.js"></script>
    </body>
</html>