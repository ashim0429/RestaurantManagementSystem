<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel">
            <div class="panel-body">

                <fieldset class="border p-2">
                    <legend class="w-auto"><?php echo display('add_ingredient') ?></legend>
                </fieldset>
                <?php echo form_open_multipart('production/production/insert_production', array('class' => 'form-vertical', 'id' => 'insert_production', 'name' => 'insert_production')) ?>

                <form action="">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="name" class="col-sm-5 col-form-label"><?php echo display('ingredient_name') ?> <i class="text-danger">*</i>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="ingredient_name" value="" id="ingredient_name" required="" tabindex="3">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="stock_quantity" class="col-sm-5 col-form-label"><?php echo display('stock_quantity') ?> <i class="text-danger">*</i>
                                </label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="stock_quantity" value="" id="stock_quantity" required="" tabindex="3">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="min_stock" class="col-sm-5 col-form-label"><?php echo display('minimum_stock') ?> <i class="text-danger">*</i>
                                </label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="min_stock" value="" id="min_stock" required="" tabindex="3" min="0">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="status" class="col-sm-5 col-form-label"><?php echo display('status') ?> <i class="text-danger">*</i>
                                </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="status" id="status" required="" tabindex="3">
                                        <option disabled>Select One</option>
                                        <option value="0">Kitchen Item</option>
                                        <option value="1">Other Item</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="is_active" class="col-sm-5 col-form-label"><?php echo display('is_active') ?> <i class="text-danger">*</i>
                                </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="is_active" id="is_active" required="" tabindex="3">
                                        <option disabled>Select One</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group row">
                                <div class="col-sm-5"><input type="submit" id="add_ingredient" class="btn btn-success btn-large" name="add_ingredient"></div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('application/modules/production/assets/js/production.js'); ?>" type="text/javascript"></script>