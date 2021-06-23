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
                    <h5>DADOS DO SOLICITANTE</h5>
                </div>

                

                <!-- Início do Formulário -->
                <div class="form-config">
                <form class="form" action="./cadastro" method="post">   
                @csrf 

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Sistema Hídrico*</span>
                    <select class="form-select" name="sistema_hidrico">
                        <option selected></option>
                        <option value="1">Barra do Juá</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Nome do Solicitante*</span>
                    <input type="text" class="form-control" id="basic-url" name="nome" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">E-mail*</span>
                    <input type="text" class="form-control" name="email" placeholder="exemplo@exemplo.com" >
                    <span class="input-group-text"></span>
                    <input type="text" class="form-control" placeholder="Repita o e-mail" >
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">CPF/CNPJ*</span>
                    <input type="text" class="form-control" name="cpf_cnpj" placeholder="Apenas números" >
                    <span class="input-group-text">RG</span>
                    <input type="text" class="form-control" name="rg" placeholder="Apenas números" >
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Local da Captação*</span>
                    <input type="text" class="form-control" name="local_captacao" placeholder="" >
                    <span class="input-group-text">Montante/Jusante*</span>
                    <input type="text" class="form-control" name="montante_jusante" placeholder="" >
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Lat. (UTM)*</span>
                    <input type="text" class="form-control" name="latitude" placeholder="Latitude" >
                    <span class="input-group-text">Long. (UTM)*</span>
                    <input type="text" class="form-control" name="longitude" placeholder="Longitude" >
                </div>

                <div class="input-group">
                    <span class="input-group-text">Descrever tipo de uso*</span>
                    <textarea class="form-control" aria-label="With textarea" name="tipo_uso" placeholder="tipo, cultura, área, etc."></textarea>
                </div> <br>

                <label for="basic-url" class="form-label">Volume Mensal Captado (m3)</label>
                <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                    <td>Jan</td>
                    <td>Fev</td>
                    <td>Mar</td>
                    <td>Abr</td>
                    </tr>
                    <tr>
                    <td><input type="text" name="volume_jan" placeholder=""></input></td>
                    <td><input type="text" name="volume_fev" placeholder=""></input></td>
                    <td><input type="text" name="volume_mar" placeholder=""></input></td>
                    <td><input type="text" name="volume_abr" placeholder=""></input></td>
                    </tr>
                    <tr>
                    <td>Mai</td>
                    <td>Jun</td>
                    <td>Jul</td>
                    <td>Ago</td>
                    </tr>
                    <tr>
                    <td><input type="text" name="volume_mai" placeholder=""></input></td>
                    <td><input type="text" name="volume_jun" placeholder=""></input></td>
                    <td><input type="text" name="volume_jul" placeholder=""></input></td>
                    <td><input type="text" name="volume_ago" placeholder=""></input></td>
                    </tr>
                    <td>Set</td>
                    <td>Out</td>
                    <td>Nov</td>
                    <td>Dez</td>
                    </tr>
                    </tr>
                    <td><input type="text" name="volume_set" placeholder=""></input></td>
                    <td><input type="text" name="volume_out" placeholder=""></input></td>
                    <td><input type="text" name="volume_nov" placeholder=""></input></td>
                    <td><input type="text" name="volume_dez" placeholder=""></input></td>
                    </tr>
                </tbody>
                </table>

                <div class="input-group">
                    <span class="input-group-text">Observações</span>
                    <textarea class="form-control" name="observacao" aria-label="With textarea" placeholder=""></textarea>
                </div>


                <!--
                <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>

                <label for="basic-url" class="form-label">Your vanity URL</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                </div>
        -->
                
                <button class="btn-config-02 btn-primary" type="submit">CADASTRAR</button>
                </form>
        </div>

            </div>
        </div>







    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>

