<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-7">
                
                <?php echo form_open(admin_url().'Branches/create', ['id' => 'add_branch', 'autocomplete' => 'off']); ?>

                <div class="panel_s">
                    <div class="panel-body">
                    
                        <div class="form-group">
                            <label for="branch_name" class="control-label"><?php echo _l('branch_name'); ?></label>
                            <input type="text" class="form-control" name="branch_name" value="">
                        </div>
                        <div class="form-group">
                            <label for="branch_location" class="control-label"><?php echo _l('branch_location'); ?></label>
                            <input type="text" class="form-control" name="branch_location" value="">
                        </div>

                        <div class="form-group">
                            <label for="branch_country" class="control-label"><?php echo _l('Branch Country'); ?></label>
                            <input type="text" class="form-control" name="branch_country" value="">
                        </div>

                        <div class="form-group">
                            <label for="branch_city" class="control-label"><?php echo _l('Branch City'); ?></label>
                            <input type="text" class="form-control" name="branch_city" value="">
                        </div>

                        <div class="form-group">
                            <label for="branch_street" class="control-label"><?php echo _l('Branch Street'); ?></label>
                            <input type="text" class="form-control" name="branch_street" value="">
                        </div>

                        <div class="form-group">
                            <label for="branch_number" class="control-label"><?php echo _l('Contact Number'); ?></label>
                            <input type="tel" class="form-control" name="branch_number" value="">
                        </div>

                        <div class="form-group">
                            <label for="branch_commercial_register" class="control-label"><?php echo _l('Commercial Register'); ?></label>
                            <input type="number" class="form-control" name="branch_commercial_register" value="">
                        </div>

                        <div class="form-group">
                            <label for="branch_tax_number" class="control-label"><?php echo _l('Tax Number'); ?></label>
                            <input type="number" class="form-control" name="branch_tax_number" value="">
                        </div>

                        <div class="form-group">
                            <label for="branch_currency" class="control-label"><?php echo _l('Currency'); ?></label>
                            <input type="number" class="form-control" name="branch_currency" value="">
                        </div>

                        <div class="form-group">
                            <label for="branch_tax" class="control-label"><?php echo _l('Tax'); ?></label>
                            <input type="number" class="form-control" name="branch_tax" value="">
                        </div>

                        <div class="form-group">
                            <label for="branch_info" class="control-label"><?php echo _l('Branch Info'); ?></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="branch_tax" value=""></textarea>
                        </div>
                        
                        
                       
                       
                       
                       
                       
                       
                            
    
                        
                        
                        
                        

                    
                    <div class="panel-footer text-right">
                        <button type="submit" class="btn btn-primary"><?php echo _l('submit'); ?></button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            
        </div>
    </div>
    <?php init_tail(); ?>
    <script>
    $(function() {
        var qr_loaded = 0;
        var is_g2fa_enabled = "<?php echo $current_user->two_factor_auth_enabled ?>"
        $('input[type=radio][name="two_factor_auth"]').change(function() {
            if (this.value == 'google') {
                if (is_g2fa_enabled == 2) {
                    return;
                }

                if (qr_loaded == 0) {
                    $('#qr_image').load(admin_url + 'authentication/get_qr', {}, function(response,
                        status) {
                        qr_loaded = 1;
                        $('#qr_image').show();
                    });
                } else {
                    $('#qr_image').show();
                }
                $('#submit_2fa').prop("disabled", true);
            } else {
                $('#qr_image').hide();
                $('#submit_2fa').prop("disabled", false);
            }
        });
        appValidateForm($('#staff_profile_table'), {
            firstname: 'required',
            lastname: 'required',
            email: 'required'
        });
        appValidateForm($('#staff_password_change_form'), {
            oldpassword: 'required',
            newpassword: 'required',
            newpasswordr: {
                equalTo: "#newpassword"
            }
        });
        appValidateForm($('#two_factor_auth_form'), {
            two_factor_auth: 'required'
        });
    });
    </script>
    </body>

    </html>
