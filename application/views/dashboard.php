

    <div class="cont-dash clearfix">
        <div class="left-dash">
            <div class="dash-item1">
                <div class="content">
                    <div>
                    <a href="<?php echo site_url('domaine'); ?>" >
                        <span>NDD</span>  
                        <div class="display-nbr"><?php echo $t_dashboard->nb_site; ?></div>
                    </a>
                    </div>
                </div>
            </div>
            <div class="dash-item2">
                <div class="content">
                    <div>
                    <a href="<?php echo site_url('registrar'); ?>" > 
                        <span>Registrar</span>
                        <div class="display-nbr"><?php echo $t_dashboard->nb_registrar ?></div>
                    </a>
                    </div>
                </div>
            </div>
            <div class="dash-item3">
                <div class="content">
                    <div>
                    <a href="<?php echo site_url('hebergement'); ?>" >
                       <span>Hebergements</span>
                        <div class="display-nbr"><?php echo $t_dashboard->nb_hebergement ?></div>
                    </a>
                    </div>
                </div>
            </div>
            <div class="dash-item4">
                <div class="content">
                    <div>
                    <a href="<?php echo site_url('ip'); ?>" >
                        <span>Nombre d'ip</span>
                        <div class="display-nbr"><?php echo $t_dashboard->nb_ip ?></div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-dash">
            <div class="bloc-graph">  
            <canvas id="graphCanvas" style="padding: 25px;"></canvas>      
            <script>
                $(document).ready(function () {
                    showGraph();
                });

                function showGraph()
                {
                    {
                    $.ajax({
                        url: "<?=site_url('domaine/get_domaine_by_month')?>",
                        success: function(data){
                          
                            var ndd_id = [];
                            var ndd_month = [];
                            //console.log(data);
                            var JSONObject = JSON.parse(data);
                            for (var key in JSONObject) {
                                if (JSONObject.hasOwnProperty(key)) {
                                    ndd_month.push(JSONObject[key]["mois"]);
                                    ndd_id.push(JSONObject[key]["nb"]);
                               // console.log(JSONObject[key]["mois"] + ", " + JSONObject[key]["nb"]);
                                }
                            }

                            // console.log(ndd_id);
                            // console.log(ndd_month);
                            var chartdata = {
                                labels: ndd_month,
                                datasets: [
                                    {
                                        label: 'Nombre de domaine',
                                        backgroundColor: '#f15e53',
                                        borderColor: '#d25147',
                                        hoverBackgroundColor: '#080718',
                                        hoverBorderColor: '#666666',
                                        data: ndd_id
                                    }
                                ]
                            };

                            var graphTarget = $("#graphCanvas");

                            var barGraph = new Chart(graphTarget, {
                                type: 'bar',
                                data: chartdata
                            });
                        }
                    });
                    }
                }
            </script>
            </div>
            <!--<div class="dash-item5">
                <div class="content">
                    <div>
                    <a href="<?php //echo site_url('user'); ?>" >
                        <span>Utilisateurs</span>
                        <div class="display-nbr"><?php //echo $t_dashboard->nb_user ?></div>
                        </a>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
