

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
