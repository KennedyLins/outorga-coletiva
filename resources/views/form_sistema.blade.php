<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="content-language" content="pt-BR">

        <title>APAC | Outorga Coletiva</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/mystyle.css')}}" type="text/css">

        <!--<style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> -->
    </head>
    <body>
        <div class="container ">

            <div class="content">
                <div class="row ">
                    <img src="{{asset('img/tira-apac-ana-governo.png')}}">
                </div>
                
                <div class="row titulo"> 
                    <h3>TERMO DE ALOCAÇÃO DE ÁGUA</h3>
                    <h3>ANEXO CADASTRAL</h3>
                </div>

                <div class="information "> 
                    <div class="row ">
                    <h5>CADASTRAR NOVO SISTEMA</h5>
                </div>

                

                <!-- Início do Formulário -->
                <div class="form-config">
                <form name="f2" class="form" action="./cad_sistema" method="post">   
                @csrf 

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Nome do Sistema*</span>
                    <input type="text" class="form-control" id="basic-url" name="name" aria-describedby="basic-addon3" required>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Observação</span>
                    <input type="text" class="form-control" id="basic-url" name="observacao" aria-describedby="basic-addon3">
                </div>

                <button class="btn-config-02 btn-primary" type="submit" onclick="validar()">CADASTRAR</button>
                </form>
        </div>

            </div>
        </div>


    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
    </body>
</html>

