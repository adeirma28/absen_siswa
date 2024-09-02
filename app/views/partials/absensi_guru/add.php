<?php
$comp_model = new SharedController;
$page_element_id = "add-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="add"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Add New Absensi Guru</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="absensi_guru-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("absensi_guru/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="id_guru">Nama Guru <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <select required=""  id="ctrl-id_guru" name="id_guru"  placeholder="Select a value ..."    class="custom-select" >
                                                    <option value="">Select a value ...</option>
                                                    <?php 
                                                    $id_guru_options = $comp_model -> absensi_guru_id_guru_option_list();
                                                    if(!empty($id_guru_options)){
                                                    foreach($id_guru_options as $option){
                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                    $selected = $this->set_field_selected('id_guru',$value, "");
                                                    ?>
                                                    <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                        <?php echo $label; ?>
                                                    </option>
                                                    <?php
                                                    }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="hadir">Hadir <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <label class="custom-control custom-checkbox custom-control-inline option-btn">
                                                    <input class="custom-control-input" id="ctrl-hadir" value="true" <?php echo $this->set_field_checked('hadir','true'); ?> type="checkbox"  required="" name="hadir[]"  />
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="ijin">Ijin <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <label class="custom-control custom-checkbox custom-control-inline option-btn">
                                                        <input class="custom-control-input" id="ctrl-ijin" value="true" <?php echo $this->set_field_checked('ijin','true'); ?> type="checkbox"  required="" name="ijin[]"  />
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="sakit">Sakit <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <label class="custom-control custom-checkbox custom-control-inline option-btn">
                                                            <input class="custom-control-input" id="ctrl-sakit" value="true" <?php echo $this->set_field_checked('sakit','true'); ?> type="checkbox"  required="" name="sakit[]"  />
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-submit-btn-holder text-center mt-3">
                                            <div class="form-ajax-status"></div>
                                            <button class="btn btn-primary" type="submit">
                                                Submit
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
