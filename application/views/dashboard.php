

    <div class="cont-dash clearfix">
        <div class="left-dash">
            <div class="dash-item1">
                <div class="content">
                    <div>
                    <a href="<?php echo site_url('domaine/index'); ?>" >
                        Nombre de <span>NDD</span>  
                        <div class="display-nbr"><?php echo $t_dashboard->nb_site; ?></div>
                    </a>
                    </div>
                </div>
            </div>
            <div class="dash-item2">
                <div class="content">
                    <div>
                    <a href="<?php echo site_url('registrar/index'); ?>" > 
                        <span>Registrar</span>
                        <div class="display-nbr"><?php echo $t_dashboard->nb_registrar ?></div>
                    </a>
                    </div>
                </div>
            </div>
            <div class="dash-item3">
                <div class="content">
                    <div>
                    <a href="<?php echo site_url('hebergement/index'); ?>" >
                        Nombre<span>d’Hebergement</span>
                        <div class="display-nbr"><?php echo $t_dashboard->nb_hebergement ?></div>
                    </a>
                    </div>
                </div>
            </div>
            <div class="dash-item4">
                <div class="content">
                    <div>
                    <a href="<?php echo site_url('ip/index'); ?>" >
                        Nombre <span>d'ip</span>
                        <div class="display-nbr"><?php echo $t_dashboard->nb_ip ?></div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-dash">
            <div class="bloc-graph">
                <!-- content graph -->
            </div>
            <div class="dash-item5">
                <div class="content">
                    <div>
                    <a href="<?php echo site_url('user/index'); ?>" >
                        <span>Utilisateurs</span>
                        <div class="display-nbr"><?php echo $t_dashboard->nb_user ?></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
