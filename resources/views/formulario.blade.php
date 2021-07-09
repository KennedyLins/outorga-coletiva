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
                <form name="f1" class="form" action="./cadastro" method="post">   
                @csrf 

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Sistema Hídrico*</span>
                    <select class="form-select" name="sistema_hidrico" required>
                        <option selected></option>
                        <option value="1">Barra do Juá</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Nome do Solicitante*</span>
                    <input type="text" class="form-control" id="basic-url" name="nome" aria-describedby="basic-addon3" required>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">E-mail*</span>
                    <input type="email" class="form-control" id="email" name="email"  placeholder="exemplo@exemplo.com" required>
                    <span class="input-group-text"></span>
                    <input type="email" class="form-control" id="repita" name="repita" placeholder="Repita o e-mail*" required >
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">CPF/CNPJ*</span>
                    <input type="number" class="form-control" name="cpf_cnpj" placeholder="Apenas números" required>
                    <span class="input-group-text">RG</span>
                    <input type="number" class="form-control" name="rg" placeholder="Apenas números" >
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Local da Captação*</span>
                    <input type="text" class="form-control" name="local_captacao" placeholder="" required>
                    <span class="input-group-text">Montante/Jusante*</span>
                    <input type="number" class="form-control" name="montante_jusante" placeholder="Apenas números" required >
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Lat. (UTM)*</span>
                    <input type="text" class="form-control" name="latitude" placeholder="Latitude" required>
                    <span class="input-group-text">Long. (UTM)*</span>
                    <input type="text" class="form-control" name="longitude" placeholder="Longitude" required>
                </div>

                <div class="input-group">
                    <span class="input-group-text">Descrever tipo de uso*</span>
                    <textarea class="form-control" aria-label="With textarea" name="tipo_uso" placeholder="tipo, cultura, área, etc." required></textarea>
                </div> <br>

                <h5>Volume Mensal Captado (m3)</h5>
                <label for="basic-url" class="form-label">Digite 0.0 para os meses onde não houve captação</label>
                <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                    <td>Jan*</td>
                    <td>Fev*</td>
                    <td>Mar*</td>
                    <td>Abr*</td>
                    </tr>
                    <tr>
                    <td><input type="number" name="volume_jan" placeholder="Apenas números" required></input></td>
                    <td><input type="number" name="volume_fev" placeholder="Apenas números" required></input></td>
                    <td><input type="number" name="volume_mar" placeholder="Apenas números" required></input></td>
                    <td><input type="number" name="volume_abr" placeholder="Apenas números" required></input></td>
                    </tr>
                    <tr>
                    <td>Mai*</td>
                    <td>Jun*</td>
                    <td>Jul*</td>
                    <td>Ago*</td>
                    </tr>
                    <tr>
                    <td><input type="number" name="volume_mai" placeholder="Apenas números" required></input></td>
                    <td><input type="number" name="volume_jun" placeholder="Apenas números" required></input></td>
                    <td><input type="number" name="volume_jul" placeholder="Apenas números" required></input></td>
                    <td><input type="number" name="volume_ago" placeholder="Apenas números" required></input></td>
                    </tr>
                    <td>Set*</td>
                    <td>Out*</td>
                    <td>Nov*</td>
                    <td>Dez*</td>
                    </tr>
                    </tr>
                    <td><input type="number" name="volume_set" placeholder="Apenas números" required></input></td>
                    <td><input type="number" name="volume_out" placeholder="Apenas números" required></input></td>
                    <td><input type="number" name="volume_nov" placeholder="Apenas números" required></input></td>
                    <td><input type="number" name="volume_dez" placeholder="Apenas números" required></input></td>
                    </tr>
                </tbody>
                </table>

                <div class="input-group">
                    <span class="input-group-text">Observações</span>
                    <textarea class="form-control" name="observacao" aria-label="With textarea" placeholder=""></textarea>
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

