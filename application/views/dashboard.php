

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
                           
                            var JSONObject = JSON.parse(data);
                            for (var key in JSONObject) {
                                if (JSONObject.hasOwnProperty(key)) {                                   
                                    ndd_id.push(JSONObject[key]);                                  
                                }
                            }
                       

                            var graphTarget = $("#graphCanvas");
							
							Chart.scaleService.updateScaleDefaults('linear', {
								ticks: {
									min: 0,
								//	max: 150,
									stepSize: 5,
								},
							});

                            var barGraph = new Chart(graphTarget, {
                                type: 'bar',
                                data: {
									datasets: [{
										label: 'Noms de domaines',
										data: ndd_id,
										backgroundColor: '#f15e53',
										borderColor: '#d25147',
										hoverBackgroundColor: '#080718',
										hoverBorderColor: '#666666',									
									}],
									labels: ['Janv', 'Fév', 'Mars', 'Avr','Mai', 'Juin', 'Juil', 'Août','Sept', 'Oct', 'Nov', 'Déc']
								  }								
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
