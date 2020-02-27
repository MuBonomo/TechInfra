<?php
    include('header.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/leaflet/leaflet.css"/>   
        <style>
            #map {
                width:  500px;
                height: 400px;
            }
        </style>
    </head>
    <body>


        <main class="uk-container uk-container-large">
        <br>

            <div class="" uk-grid style="display: flex">
                <div class="uk-width-1-2@m">
                <br>
                    <div class="uk-card uk-card-default uk-card-body" id="map">
                        <script src="../assets/leaflet/jquery-1.9.1.min.js"></script> 
                        <script src="../assets/leaflet/leaflet.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                init_map();
                                add_marker();
                            });
                            var map;

                            function init_map() {
                                map = L.map('map').setView([-23.000679, -46.846548], 15);
                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    attribution: 'Map data &copy; 2011 OpenStreetMap contributors, Imagery &copy; 2012 CloudMade',
                                    key: 'BC9A493B41014CAABB98F0471D759707'
                                }).addTo(map);
                            }
                            function add_marker() {
                                var points = [
                                    ["P1",  -23.000679,  -46.846548, "src/paises/itupeva.html"],
                                ];
                                var marker = [];
                                var i;
                                for (i = 0; i < points.length; i++) {
                                    marker[i] = new L.Marker([points[i][1], points[i][2]], {
                                        win_url: points[i][3]
                                    });
                                    marker[i].addTo(map);
                                    marker[i].on('click', onClick);
                                };
                            }

                            function onClick(e) {
                                //console.log(this.options.win_url);
                                window.open(this.options.win_url, "_self");
                            }
                        </script>
                    </div>
                </div>

                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-card-body">
                        <p>
                        A <strong>TechInfra Solucions</strong> é uma empresa de informática especializada que presta consultoria em vários segmentos da área de TI para empresas de médio e grande porte.<br>
                        Desde 2000 oferecemos Suporte de Tecnologia que compreende as áreas de redes, servidores, virtualização, storage, backup e infra-estrutura. Os serviços são apoiados por ferramentas de última geração e, principalmente, por profissionais capacitados e experientes, trazendo o que é de mais moderno para os nossos clientes.<br> 
                        Visando sempre as tendências do mercado, trabalhando com eficiência, transparência com os clientes e qualidades nos serviços realizados, a TechInfraSolucions tornou-se referência nacional nos serviços ofertados.
                        <br><br>
                        Venha nos conhecer! Estamos localizados na Av. Senador Lacerda Franco, 360 - Centro, Itatiba - SP, 13250-400 ou então pelo telefone (11) 4534-8000.

                        </p>
                    </div>
                </div>
            </div>
            
        </main>


        

        <script src="../assets/js/uikit.js"></script>
        <script src="../assets/js/uikit-icons.js"></script>
    </body>
</html>