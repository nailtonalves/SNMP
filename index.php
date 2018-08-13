<!doctype html>
<html lang="pt-br">
    <head>                
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>Monitoramento - Gerência de Redes</title>        
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">
                Gerência de Redes
            </span>
        </nav>
        <br>
        <div id="conteudo"></div>
        <div id="conteudo1"></div>
        <br>
        <div class="container-fluid"> 
            <div class="card">
                <div class=" container-fluid">
                    <div class="card-body ">
                        <div class="row justify-content-center align-items-center"> 
                            <div class="col-md-3 col-sm-5">
                                <form name="formulario">
                                    <div class="form-group">
                                        <label for="ip">ENDEREÇO HOST</label>
                                        <input type="text" class="form-control" id="ip" value="192.168.56.101" placeholder="Ex.: 192.168.56.101">
                                    </div>
                                    <div class="form-group">
                                        <label for="community">COMMUNITY</label>
                                        <input type="text" class="form-control" id="community" value="public" placeholder="Ex.: public">
                                    </div>
                                    <div class="form-group">
                                        <label for="oid">OID IN</label>
                                        <input type="text" class="form-control" id="oid" value=".1.3.6.1.2.1.31.1.1.1.6.1" placeholder="Ex.: .1.3.6.1.2.1.31.1.1.1.6.1">
                                    </div>
                                    <div class="form-group">
                                        <label for="oid2">OID OUT</label>
                                        <input type="text" class="form-control" id="oid2" value=".1.3.6.1.2.1.31.1.1.1.10.1" placeholder="Ex.: .1.3.6.1.2.1.31.1.1.1.10.1">
                                    </div>
                                    <button name="btnMonitorar" type="button" onclick="start()"class="btn btn-primary">Monitorar</button>
                                    <button name="btnParar" type="button" onclick="stop()"class="btn btn-danger" disabled>Parar</button>
                                </form>
                            </div>
                            <div class="col-md-9 col-sm-7">
                                <div class="grafico" id="chart_div" style="width: 100%; height: 20em"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->
        <script src="js/loader.js" type="text/javascript"></script>
        <script src="js/ajax.js" type="text/javascript"></script>
        <script src="js/gerarGrafico.js" type="text/javascript"></script>

        <script type="text/javascript">
                                        gerarGrafico(dadosGrafico);
        </script>
    </script>

</body>
</html>