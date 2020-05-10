<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--<meta name="viewport" content="initial-scale=1">-->
        <meta charset="UTF-8">
        <title></title>

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css">

        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.flash.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>

        <style type="text/css">
            .marginBottom-0 {margin-bottom:0;}

            .dropdown-submenu{position:relative;}
            .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
            .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
            .dropdown-submenu:hover>a:after{border-left-color:#555;}
            .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
   
            .hide_col{
                display:none;
            }
        </style>

        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>       
        <script type='text/javascript'>

            (function ($) {
                $(document).ready(function () {
                    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        $(this).parent().siblings().removeClass('open');
                        $(this).parent().toggleClass('open');
                    });
                });
            })(jQuery);

        </script>
                
        <link rel="stylesheet" href="script/JQui/jqueryui/jquery-ui.css" >
    
    </head>
    <body>
           
        <form>   
            <div class="navbar navbar-default navbar-fixed-top"> 
            </div>
        
            <br>
            <br>
            <br>
            <br>
            <br>
                            
                <div class="col-sm-12" style="margin-bottom:20px;">
                
                    <div class="col-sm-2">
                        <label for="tbxPesqLocalid" ID="Label34" style="Font-Size:8pt;">LOCALIDADE</label>
                        <input type="text" name="tbxPesqLocalid"  placeholder="Informe nome localidade" ID="tbxPesqLocalid" class="form-control" />              
                    </div>
                    <div class="col-sm-2">
                        <label for="dropPesqUF" ID="Label46" Style="Font-Size: 8pt;" >UF</label>
                        
                        <select name="dropPesqUF" class="form-control" id="dropPesqUF" >
                    
                            <option>Selecione...</option>

                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AM">Amazonas</option>
                            <option value="AP">Amapa</option>
                            <option value="BA">Bahia</option>

                            <option value="CE">Ceara</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espirito Santo</option>
                            <option value="GO">Goias</option>
                            <option value="MA">Maranhao</option>
                            
                            <option value="MG">Minas Gerais</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="PA">Para</option>
                            <option value="PB">Paraiba</option>
                            
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piaui</option>
                            <option value="PR">Parana</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            
                            <option value="RO">Rondonia</option>
                            <option value="RR">Roraima</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SE">Sergipe</option>
                            
                            <option value="TO">Tocantins</option>       
                        </select>
                        
                    </div>

                    <div class="col-sm-2">
                        <label for="dropStatusADSL" ID="Label47" Style="Font-Size: 8pt;" >SITUACAO ADSL</label>
                        
                        <select name="dropStatusADSL" class="form-control" id="dropStatusADSL" >     
                            <option>Selecione...</option>
                            <option value="POSSUI ADSL">POSSUI ADSL</option>
                            <option value="NAO POSSUI ADSL">NAO POSSUI ADSL</option>
                            <option value="AMBOS">AMBOS</option>         
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <label> </label>
                        <button id="btn_rodar" type="button" class="btn btn-success btn-xs form-control" style =" font-size:  9pt;" data-toggle="modal" >Consultar</button>                   
                    </div>
                    
                </div>
                
            <br>
                
            </br>
            </br>    
                
                <div class="col-sm-12"> 
                        <table id="table1" class="display" cellspacing="0" width="300%">
                                    <thead>
                                        <tr>
                                            <th>ESTACAO</th>
                                            <th >NOMEESTACAO</th>
                                            <th>TOTAL</th>
                                            <th>OCUP</th>
                                            <th>RESERVA</th>
                                            <th>DISPONIVEIS</th>
                                            <th>SIGLA</th>
                                            <th>LOCALIDADE</th>
                                            <th>MUNICIPIO</th>
                                            <th>DATA</th>

                                            <!--<th>SITUACAO_ADSL</th>-->
                
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            
                                            <th>ESTACAO</th>
                                            <th >NOMEESTACAO</th>
                                            <th>TOTAL</th>
                                            <th>OCUP</th>
                                            <th>RESERVA</th>
                                            <th>DISPONIVEIS</th>
                                            <th>SIGLA</th>
                                            <th>LOCALIDADE</th>
                                            <th>MUNICIPIO</th>
                                            <th>DATA</th>

                                            <!--<th>SITUACAO_ADSL</th>-->   
                                        </tr>
                                    </tfoot>
                        </table>
                </div>   
        </form>
    </body>
        
        <script>
        
            $(document).ready(function () {

                var table= $('#table1').DataTable({
                              
                "ajax": "",
                    dom: 'Bfrtip',
                    buttons: [
                          'excel', 'pdf'
                    ],
                        "columns": [
                            // {"data": "ID", className: "hide_col"},
                            {"data": "SIGLAESTACAO"},
                            {"data": "NOMEESTACAO"},
                            {"data": "PORTAS_INSTALADAS"},
                            {"data": "PORTAS_OCUPADAS"},
                            {"data": "PORTAS_RESERVADAS"},
                            {"data": "PORTAS_DISPONIVEIS"},
                            {"data": "SIGLALOCALIDADE"},
                            {"data": "NOMELOCALIDADE"},
                            {"data": "MUNICIPIO"},
                            {"data": "DATAPROCESSAMENTO"}
                            //  {"data": "SITUACAO_ADSL"}
                                                                
                        ],

                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                    },
                    
                    // "bDestroy": true,
                    "bAutoWidth": false ,
                    
                    "aoColumnDefs": [
                        { "sWidth": "2%", "aTargets": [ 0 ] },
                        { "sWidth": "25%", "aTargets": [ 1 ] },
                        { "sWidth": "2%", "aTargets": [ 2 ] },
                        { "sWidth": "2%", "aTargets": [ 3 ] },
                        { "sWidth": "2%", "aTargets": [ 4 ] },
                        { "sWidth": "10%", "aTargets": [ 5 ] },
                        { "sWidth": "1%", "aTargets": [ 6 ] },
                        { "sWidth": "20%", "aTargets": [ 7 ] },
                        { "sWidth": "20%", "aTargets": [ 8 ] },
                        { "sWidth": "100%", "aTargets": [ 9 ] }
                    ]                          
                });
                
                $('#btn_rodar').click(function(){

                    var nomelocalidade;
                    nomelocalidade = $('#tbxPesqLocalid').val();
                    var uf;
                    uf = $('#dropPesqUF option:selected').val();
                    var StatusADSL;
                    StatusADSL = $('#dropStatusADSL option:selected').val();

                    table.ajax.url('MapsPorts_Controller.php?nomelocalidade='+nomelocalidade+'&uf='+uf+'&situacaoADSL='+StatusADSL).load();
                });

            });
        
        </script>           
        <script src="script/JQui/jqueryui/jquery-ui.js" type="text/javascript" ></script>
            
</html>
