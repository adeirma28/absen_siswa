<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Absensi Siswa</h4>
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
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id_absensisiswa']) ? urlencode($data['id_absensisiswa']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id_absensisiswa">
                                        <th class="title"> Id Absensisiswa: </th>
                                        <td class="value"> <?php echo $data['id_absensisiswa']; ?></td>
                                    </tr>
                                    <tr  class="td-hadir">
                                        <th class="title"> Hadir: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['hadir']; ?>" 
                                                data-pk="<?php echo $data['id_absensisiswa'] ?>" 
                                                data-url="<?php print_link("absensi_siswa/editfield/" . urlencode($data['id_absensisiswa'])); ?>" 
                                                data-name="hadir" 
                                                data-title="Enter Hadir" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="checklist" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['hadir']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-ijin">
                                        <th class="title"> Ijin: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['ijin']; ?>" 
                                                data-pk="<?php echo $data['id_absensisiswa'] ?>" 
                                                data-url="<?php print_link("absensi_siswa/editfield/" . urlencode($data['id_absensisiswa'])); ?>" 
                                                data-name="ijin" 
                                                data-title="Enter Ijin" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="checklist" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['ijin']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-sakit">
                                        <th class="title"> Sakit: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['sakit']; ?>" 
                                                data-pk="<?php echo $data['id_absensisiswa'] ?>" 
                                                data-url="<?php print_link("absensi_siswa/editfield/" . urlencode($data['id_absensisiswa'])); ?>" 
                                                data-name="sakit" 
                                                data-title="Enter Sakit" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="checklist" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['sakit']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-tanggal">
                                        <th class="title"> Tanggal: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['tanggal']; ?>" 
                                                data-pk="<?php echo $data['id_absensisiswa'] ?>" 
                                                data-url="<?php print_link("absensi_siswa/editfield/" . urlencode($data['id_absensisiswa'])); ?>" 
                                                data-name="tanggal" 
                                                data-title="Enter Tanggal" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['tanggal']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_siswa">
                                        <th class="title"> Id Siswa: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/absensi_siswa_id_siswa_option_list'); ?>' 
                                                data-value="<?php echo $data['id_siswa']; ?>" 
                                                data-pk="<?php echo $data['id_absensisiswa'] ?>" 
                                                data-url="<?php print_link("absensi_siswa/editfield/" . urlencode($data['id_absensisiswa'])); ?>" 
                                                data-name="id_siswa" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_siswa']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("absensi_siswa/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("absensi_siswa/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
