<?php

class Tac_admin_services
{

    public static function register_settings()
    {
//        # footer script settings
        register_setting('tac_admin_services_settings', 'tac_footer_script_content');

        # Other
        add_settings_section('tac_footer_script_content', 'Other (Identifirers, ...) ', array('Tac_admin_services', 'ohter_service_html'), 'tac_admin_services_settings');

        foreach (Tac_admin::$services as $key1 => $services) {
            $newSection = true;
            foreach ($services as $key2 => $service) {
                if ($newSection) {
                    $newSection = false;
                    add_settings_section($key1, $service['title'], array($service['class'], $service['function']), 'tac_admin_services_settings');
                    continue;
                }
                register_setting('tac_admin_services_settings', $service['id']);

                $codejs = $service['code']['js'] == "null" ? null : $service['code']['js'];
                $codehtml = $service['code']['html'] == "null" ? null : $service['code']['html'];
                $args = array('id' => $service['id'], 'value' => $service['value'], 'codejs' => $codejs, 'codehtml' => $codehtml);

                $function = $service['function'] == '' ? 'service_html' : $service['function'];
                add_settings_field($service['id'], $service['title'], array($service['class'], $function), 'tac_admin_services_settings', $key1, $args);
            }
        }
    }


    public static function section_html()
    {
        ?>
        <hr>
        <?php

    }

    public static function ohter_service_html()
    {
        ?>
        <p> If some services are missing in the next section but are present in tarteaucitron.js, you can add the JavaScript code to activate them in the following textarea.</p>
        <textarea name="tac_footer_script_content" rows="15"
                  cols="100"><?php echo get_option('tac_footer_script_content') ?></textarea>
        <?php
    }

    public static function service_html($args)
    {
        ?>

        <div class="row">
            <div class="col-md-12">
                <div class="row" style="padding: 15px;">
                    <div class="col-sm col-md-1">
                        <input type="checkbox" name="<?php echo $args['id'] ?>"
                               value="<?php echo $args['value'] ?>"<?php checked($args['value'] == get_option($args['id'], '')); ?> />
                    </div>
                    <div class="col-sm col-md-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalJs<?php echo $args['id'] ?>" <?php if($args['codejs'] == null) { echo "disabled";} ?>>
                            JS code
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modalJs<?php echo $args['id'] ?>" tabindex="-1" role="dialog"
                             aria-labelledby="modalJs<?php echo $args['id'] ?>Title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalJs<?php echo $args['id'] ?>Title">Js code</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                       <pre> <?php echo $args['codejs'] ?></pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalhtml<?php echo $args['id'] ?>" <?php if($args['codehtml'] == null) { echo "disabled";} ?>>
                            HTML code
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modalhtml<?php echo $args['id'] ?>" tabindex="-1" role="dialog"
                             aria-labelledby="modalhtml<?php echo $args['id'] ?>Title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalhtml<?php echo $args['id'] ?>Title">HTML code</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <pre> <?php echo $args['codehtml'] ?></pre>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md">
                        <div class="tac_shortcodes">
                            <code>Shortcode coming soon</code> <!-- [<?php echo $args['id']?> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public static function header_boolean_html()
    {
        ?>
        <input type="checkbox" name="tac_header_script_bool"
               value="1"<?php checked(1 == get_option('tac_header_script_bool', '')); ?> />
        <?php
    }

    public static function tac_menu_services()
    {

        echo '<h1>' . get_admin_page_title() . '</h1>';
        ?>
        <form method="post" action="options.php">

            <?php submit_button("Save"); ?>
            <!--                generation automatique des champs pour les options tac_admin_settings -->
            <?php settings_fields('tac_admin_services_settings') ?>

            <?php do_settings_sections('tac_admin_services_settings') ?>

            <?php submit_button("Save"); ?>
        </form>

        <?php

    }
}
