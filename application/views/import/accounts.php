<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Import Accounts</h5>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">
                <div class="content">
                    <div class="card card-block">
                        <div id="notify" class="alert alert-success" style="display:none;">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>

                            <div class="message"></div>
                        </div>
                        <?php echo form_open_multipart('import/accounts_upload'); ?>
                        <div class="card card-block">

                            <hr>
                            <p>Your customer data file should as per this template <a
                                        href="<?= base_url('assets/samples/accounts_import.csv') ?>"><strong>Download
                                        Template</strong></a>. Please download a database backup before importing the
                                geopos_accounts.
                            </p>
                            <p>Column Order in CSV File Must be like this</p>
    
                            <hr>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label" for="name">File
                                </label>

                                <div class="col-sm-6">
                                    <input type="file" name="userfile" size="15"/>(csv format only)
                                </div>
                            </div>

                           

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label"></label>

                                <div class="col-sm-4">
                                    <input type="submit" class="btn btn-success margin-bottom"
                                           value="Import Accounts"
                                           data-loading-text="Adding...">

                                </div>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
