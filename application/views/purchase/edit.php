<div class="content-body">
    <div class="card">
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">
                <form method="post" id="data_form">


                    <div class="row">


                        <div class="col-sm-6 cmp-pnl">
                            <div id="customerpanel" class="inner-cmp-pnl">
                                <div class="form-group row">
                                    <div class="fcol-sm-12">
                                        <h3 class="title">
                                            <?php echo $this->lang->line('Bill From') ?> <a href='#'
                                                class="btn btn-primary btn-sm rounded"
                                                data-toggle="modal"
                                                data-target="#addCustomer">
                                                <?php echo $this->lang->line('Add Supplier') ?>
                                            </a>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="frmSearch col-sm-12"><label for="cst"
                                            class="caption"><?php echo $this->lang->line('Search Supplier') ?></label>
                                        <input type="text" class="form-control" name="cst" id="supplier-box"
                                            placeholder="Enter Supplier Name or Mobile Number to search"
                                            autocomplete="off" />

                                        <div id="supplier-box-result"></div>
                                    </div>

                                </div>
                                <div id="customer">
                                    <div class="clientinfo">
                                        <?php echo $this->lang->line('Supplier Details') ?>
                                        <hr>
                                        <?php echo '  <input type="hidden" name="customer_id" id="customer_id" value="' . $invoice['csd'] . '">
                                <div id="customer_name"><strong>' . $invoice['name'] . '</strong></div>
                            </div>
                            <div class="clientinfo">

                                <div id="customer_address1"><strong>' . $invoice['address'] . '<br>' . $invoice['city'] . ',' . $invoice['country'] . '</strong></div>
                            </div>

                            <div class="clientinfo">

                                <div type="text" id="customer_phone">Phone: <strong>' . $invoice['phone'] . '</strong><br>Email: <strong>' . $invoice['email'] . '</strong></div>
                            </div>'; ?>
                                        <hr><?php echo $this->lang->line('Warehouse') ?> <select id="s_warehouses"
                                            class="selectpicker form-control">
                                            <?php echo $this->common->default_warehouse();
                                            echo '<option value="0">' . $this->lang->line('All') ?></option><?php foreach ($warehouse as $row) {
                                                                                                                echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
                                                                                                            } ?>

                                        </select>
                                    </div>


                                </div>
                            </div>
                            <div class="col-sm-6 cmp-pnl">
                                <div class="inner-cmp-pnl">


                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <h3
                                                class="title"> <?php echo $this->lang->line('Purchase Order Properties') ?></h3>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6"><label for="invocieno"
                                                class="caption"> <?php echo $this->lang->line('Purchase Order') ?>
                                                #</label>

                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="icon-file-text-o"
                                                        aria-hidden="true"></span></div>
                                                <input type="text" class="form-control" placeholder="Purchase Order #"
                                                    name="invocieno"
                                                    value="<?php echo $invoice['tid']; ?>" readonly><input
                                                    type="hidden"
                                                    name="iid"
                                                    value="<?php echo $invoice['iid']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6"><label for="invocieno"
                                                class="caption"> <?php echo $this->lang->line('Reference') ?></label>

                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="icon-bookmark-o"
                                                        aria-hidden="true"></span></div>
                                                <input type="text" class="form-control" placeholder="Reference #"
                                                    name="refer"
                                                    value="<?php echo $invoice['refer'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6"><label for="invocieno"
                                            class="caption">Commercial Invoice No </label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-bookmark-o"
                                                    aria-hidden="true"></span></div>
                                            <input type="text" class="form-control" placeholder="Commercial Invoice No #"
                                                name="commercial_invoice_no"  value="<?php echo $invoice['commercial_invoice_no'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><label for="invocieno"
                                            class="caption">Performa Invoice No </label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-bookmark-o"
                                                    aria-hidden="true"></span></div>
                                            <input type="text" class="form-control" placeholder="Performa Invoice No #"
                                                name="performa_invoice_no"  value="<?php echo $invoice['proforma_invoice_no'] ?>">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">

                                        <div class="col-sm-6"><label for="invociedate"
                                                class="caption"> <?php echo $this->lang->line('Order Date') ?></label>

                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="icon-calendar4"
                                                        aria-hidden="true"></span></div>
                                                <input type="text" class="form-control required editdate"
                                                    placeholder="Billing Date" name="invoicedate"
                                                    autocomplete="false"
                                                    value="<?php echo dateformat($invoice['invoicedate']) ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6"><label for="invocieduedate"
                                                class="caption"><?php echo $this->lang->line('Order Due Date') ?></label>

                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="icon-calendar-o"
                                                        aria-hidden="true"></span></div>
                                                <input type="text" class="form-control required editdate"
                                                    name="invocieduedate"
                                                    placeholder="Due Date" autocomplete="false"
                                                    value="<?php echo dateformat($invoice['invoiceduedate']) ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="taxformat"
                                                class="caption"><?php echo $this->lang->line('Tax') ?></label>
                                            <select class="form-control round" onchange="changeTaxFormat(this.value)"
                                                id="taxformat">

                                                <?php echo $taxlist; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="discountFormat"
                                                    class="caption"><?php echo $this->lang->line('Discount') ?></label>
                                                <select class="form-control" onchange="changeDiscountFormat(this.value)"
                                                    id="discountFormat">
                                                    <?php echo '<option value="' . $invoice['format_discount'] . '">' . $this->lang->line('Do not change') . '</option>'; ?>
                                                    <?php echo $this->common->disclist() ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="discountFormat"
                                        class="caption">Currency</label>
                                            <select class="form-control" name="currency_code" onchange="updateCurrencyDisplay(this.value)" id="currencyCode">
                                                <option value="SAR" <?php if ($invoice['currency_code'] == 'SAR') echo 'selected'; ?>>﷼ SAR</option>
                                                <option value="USD" <?php if ($invoice['currency_code'] == 'USD') echo 'selected'; ?>>$ Dollar (USD)</option>
                                                <option value="EUR" <?php if ($invoice['currency_code'] == 'EUR') echo 'selected'; ?>>€ Euro (EUR)</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label for="toAddInfo"
                                                class="caption"><?php echo $this->lang->line('Order Note') ?></label>
                                            <textarea class="form-control" name="notes"
                                                rows="2"><?php echo $invoice['notes'] ?></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <div id="saman-row">
                            <table class="table-responsive tfr my_stripe">

                                <thead>
                                    <tr class="item_header bg-gradient-directional-amber">
                                        <th width="30%"
                                            class="text-center"><?php echo $this->lang->line('Item Name') ?></th>
                                            <th width="10%"
                                            class="text-center">Item Code</th>
                                            
                                        <th width="8%" class="text-center"><?php echo $this->lang->line('Quantity') ?></th>
                                        <th width="10%" class="text-center"><?php echo $this->lang->line('Rate') ?></th>
                                        <th width="10%" class="text-center"><?php echo $this->lang->line('Tax') ?>(%)</th>
                                        <th width="10%" class="text-center"><?php echo $this->lang->line('Tax') ?></th>
                                        <th width="7%" class="text-center"><?php echo $this->lang->line('Discount') ?></th>
                                        <th width="7%" class="text-center">Shipping</th>
                                        <th width="10%" class="text-center"><?php echo $this->lang->line('Amount') ?>
                                            (<span class="selectedCurrency"><?php echo $invoice['currency_code'] ?></span>)
                                        </th>
                                        <th width="5%" class="text-center"><?php echo $this->lang->line('Action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0;
                                    foreach ($products as $row) {
                                        echo '<tr >
                        <td><input type="text" class="form-control" name="product_name[]" placeholder="Enter Product name or Code"  value="' . $row['product'] . '">
                        </td>
                        <td><input type="text" class="form-control" name="product_code[]" placeholder="Enter Product  Code"  value="' . $row['code'] . '">
                        </td>
                        <td><input type="text" class="form-control req amnt" name="product_qty[]" id="amount-' . $i . '"
                                   onkeypress="return isNumber(event)" onkeyup="rowTotal(' . $i . '), billUpyog()"
                                   autocomplete="off" value="' . amountFormat_general($row['qty']) . '" ><input type="hidden" name="old_product_qty[]" value="' . amountFormat_general($row['qty']) . '" ></td>
                        <td><input type="text" class="form-control req prc" name="product_price[]" id="price-' . $i . '"
                                   onkeypress="return isNumber(event)" onkeyup="rowTotal(' . $i . '), billUpyog()"
                                   autocomplete="off" value="' . edit_amountExchange_s($row['price'], $invoice['currency_code'], $this->aauth->get_user()->loc) . '"></td>
                        <td> <input type="text" class="form-control vat" name="product_tax[]" id="vat-' . $i . '"
                                    onkeypress="return isNumber(event)" onkeyup="rowTotal(' . $i . '), billUpyog()"
                                    autocomplete="off"  value="' . amountFormat_general($row['tax']) . '"></td>
                        <td class="text-center" id="texttaxa-' . $i . '">' . edit_amountExchange_s($row['totaltax'], $invoice['currency_code'], $this->aauth->get_user()->loc) . '</td>
                        <td><input type="text" class="form-control discount" name="product_discount[]"
                                   onkeypress="return isNumber(event)" id="discount-' . $i . '"
                                   onkeyup="rowTotal(' . $i . '), billUpyog()" autocomplete="off"  value="' . amountFormat_general($row['discount']) . '"></td>
                        <td><input type="text" class="form-control shipping" name="product_shipping[]"
                                   onkeypress="return isNumber(event)" id="shipping-' . $i . '"
                                   onkeyup="rowTotal(' . $i . '), billUpyog()" autocomplete="off"  value="' . amountFormat_general($row['shipping']) . '"></td>
                        <td><span class="selectedCurrency">' . $invoice['currency_code'] . '</span>
                            <strong><span class="ttlText" id="result-' . $i . '">' . edit_amountExchange_s($row['subtotal'], $invoice['currency_code'], $this->aauth->get_user()->loc) . '</span></strong></td>
                        <td class="text-center">
<button type="button" data-rowid="' . $i . '" class="btn btn-danger removeProd" title="Remove"> <i class="fa fa-minus-square"></i> </button>
                        </td>
                        <input type="hidden" name="taxa[]" id="taxa-' . $i . '" value="' . edit_amountExchange_s($row['totaltax'], $invoice['currency_code'], $this->aauth->get_user()->loc) . '">
                        <input type="hidden" name="disca[]" id="disca-' . $i . '" value="' . edit_amountExchange_s($row['totaldiscount'], $invoice['currency_code'], $this->aauth->get_user()->loc) . '">
                        <input type="hidden" class="ttInput" name="product_subtotal[]" id="total-' . $i . '" value="' . edit_amountExchange_s($row['subtotal'], $invoice['currency_code'], $this->aauth->get_user()->loc) . '">
                        <input type="hidden" class="pdIn" name="pid[]" id="pid-' . $i . '" value="' . $row['pid'] . '">
                         <input type="hidden" name="unit[]" id="unit-' . $i . '" value="' . $row['unit'] . '">   <input type="hidden" name="hsn[]" id="unit-' . $i . '" value="' . $row['code'] . '">
                    </tr><tr class="desc_p"><td colspan="8"><textarea id="dpid-' . $i . '" class="form-control" name="product_description[]" placeholder="Enter Product description" autocomplete="off">' . $row['product_des'] . '</textarea><br></td></tr>';
                                        $i++;
                                    } ?>
                                    <tr class="last-item-row sub_c">
                                        <td class="add-row">
                                            <button type="button" class="btn btn-success" id="addproduct">
                                                <i class="fa fa-plus-square"></i> <?php echo $this->lang->line('Add Row') ?>
                                            </button>
                                        </td>
                                        <td colspan="7"></td>
                                    </tr>

                                    <tr class="sub_c" style="display: table-row;">
                                        <td colspan="6" align="right">
                                            <strong><?php echo $this->lang->line('Total Tax') ?></strong>
                                        </td>
                                        <td align="left" colspan="2"><span
                                                class="currenty lightMode"><span class="selectedCurrency"><?php echo $invoice['currency_code'] ?></span></span>
                                            <span id="taxr"
                                                class="lightMode"><?= edit_amountExchange_s($invoice['tax'], $invoice['currency_code'], $this->aauth->get_user()->loc) ?></span>
                                        </td>
                                    </tr>
                                    <tr class="sub_c" style="display: table-row;">
                                        <td colspan="6" align="right">
                                            <strong><?php echo $this->lang->line('Total Discount') ?></strong>
                                        </td>
                                        <td align="left" colspan="2"><span
                                                class="currenty lightMode"><span class="selectedCurrency"><?php echo $invoice['currency_code'] ?></span></span>
                                            <span id="discs"
                                                class="lightMode"><?php echo edit_amountExchange_s($invoice['discount'], $invoice['currency_code'], $this->aauth->get_user()->loc) ?></span>
                                        </td>
                                    </tr>

                                    <tr class="sub_c" style="display: table-row;">
                                        <td colspan="6" align="right"><input type="hidden"
                                                value="<?php echo edit_amountExchange_s($invoice['subtotal'], $invoice['currency_code'], $this->aauth->get_user()->loc) ?>"
                                                id="subttlform"
                                                name="subtotal"><strong><?php echo $this->lang->line('Shipping') ?></strong>
                                        </td>
                                        <td align="left" colspan="2">
                                    <span id="shippings" class="lightMode"><?php echo $invoice['shipping'] ?></span>
                                       
                                    </td>
                                    </tr>

                                    <tr class="sub_c" style="display: table-row;">
                                        <td colspan="2"><?php if ($exchange['active'] == 1) {
                                                            echo $this->lang->line('Payment Currency client') . ' <small>' . $this->lang->line('based on live market') ?></small>
                                                <select name="mcurrency"
                                                    class="selectpicker form-control">

                                                    <?php
                                                            echo '<option value="' . $invoice['multi'] . '">Do not change</option><option value="0">None</option>';
                                                            foreach ($currency as $row) {

                                                                echo '<option value="' . $row['id'] . '">' . $row['symbol'] . ' (' . $row['code'] . ')</option>';
                                                            } ?>

                                                </select><?php } ?>
                                        </td>
                                        <td colspan="4" align="right"><strong><?php echo $this->lang->line('Grand Total') ?>
                                                (<span
                                                    class="currenty lightMode"><span class="selectedCurrency"><?php echo $invoice['currency_code'] ?></span></span>)</strong>
                                        </td>
                                        <td align="left" colspan="2"><input type="text" name="total" class="form-control"
                                                id="invoiceyoghtml"
                                                value="<?= edit_amountExchange_s($invoice['total'], $invoice['currency_code'], $this->aauth->get_user()->loc); ?>"
                                                readonly="">

                                        </td>
                                    </tr>
                                    <tr class="sub_c" style="display: table-row;">
                                        <td colspan="2"><?php echo $this->lang->line('Payment Terms') ?> <select
                                                name="pterms"
                                                class="selectpicker form-control"><?php echo '<option value="' . $invoice['termid'] . '">*' . $invoice['termtit'] . '</option>';
                                                                                    foreach ($terms as $row) {
                                                                                        echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
                                                                                    } ?>


                                            </select></td>
                                        <td colspan="2">
                                            <div>
                                                <label><?php echo $this->lang->line('Update Stock') ?></label>

                                                <fieldset class="right-radio">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="update_stock"
                                                            id="customRadioRight1" value="yes" checked="">
                                                        <label class="custom-control-label"
                                                            for="customRadioRight1"><?php echo $this->lang->line('Yes') ?></label>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="right-radio">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="update_stock"
                                                            id="customRadioRight2" value="no">
                                                        <label class="custom-control-label"
                                                            for="customRadioRight2"><?php echo $this->lang->line('No') ?></label>
                                                    </div>
                                                </fieldset>

                                            </div>
                                        </td>
                                        <td align="right" colspan="4"><input type="submit" class="btn btn-success sub-btn"
                                                value="<?php echo $this->lang->line('Update Order') ?>"
                                                id="submit-data"
                                                data-loading-text="Updating...">
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <input type="hidden" value="purchase/editaction" id="action-url">
                        <input type="hidden" value="puchase_search" id="billtype">
                        <input type="hidden" value="<?php echo $i; ?>" name="counter" id="ganak">
                        <input type="hidden" value="<span class="selectedCurrency"><?php echo $invoice['currency_code'] ?></span>" name="currency">

                        <input type="hidden" value="<?= $this->common->taxhandle_edit($invoice['taxstatus']) ?>"
                            name="taxformat" id="tax_format">
                        <input type="hidden" value="<?= $invoice['format_discount']; ?>" name="discountFormat"
                            id="discount_format">
                        <input type="hidden" value="<?= $invoice['taxstatus']; ?>" name="tax_handle" id="tax_status">
                        <input type="hidden" value="yes" name="applyDiscount" id="discount_handle">

                        <input type="hidden" value="<?php
                                                    $tt = 0;
                                                    if ($invoice['ship_tax_type'] == 'incl') $tt = @number_format(($invoice['shipping'] - $invoice['ship_tax']) / $invoice['shipping'], 2, '.', '');
                                                    echo amountFormat_general(number_format((($invoice['ship_tax'] / $invoice['shipping']) * 100) + $tt, 3, '.', '')); ?>"
                            name="shipRate" id="ship_rate">
                        <input type="hidden" value="<?= $invoice['ship_tax_type']; ?>" name="ship_taxtype"
                            id="ship_taxtype">
                        <input type="hidden" value="<?= amountFormat_general($invoice['ship_tax']); ?>" name="ship_tax"
                            id="ship_tax">


                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="addCustomer" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="product_action" class="form-horizontal">
                <!-- Modal Header -->
                <div class="modal-header">

                    <h4 class="modal-title"
                        id="myModalLabel"><?php echo $this->lang->line('Add Supplier') ?></h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only"><?php echo $this->lang->line('Close') ?></span>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <p id="statusMsg"></p><input type="hidden" name="mcustomer_id" id="mcustomer_id" value="0">


                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                            for="name"><?php echo $this->lang->line('Name') ?></label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Name"
                                class="form-control margin-bottom" id="mcustomer_name" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                            for="phone"><?php echo $this->lang->line('Phone') ?></label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Phone"
                                class="form-control margin-bottom" name="phone" id="mcustomer_phone">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label" for="email">Email</label>

                        <div class="col-sm-10">
                            <input type="email" placeholder="Email"
                                class="form-control margin-bottom crequired" name="email"
                                id="mcustomer_email">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"
                            for="address"><?php echo $this->lang->line('Address') ?></label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Address"
                                class="form-control margin-bottom " name="address" id="mcustomer_address1">
                        </div>
                    </div>
                    <div class="form-group row">


                        <div class="col-sm-6">
                            <input type="text" placeholder="City"
                                class="form-control margin-bottom" name="city" id="mcustomer_city">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Region"
                                class="form-control margin-bottom" name="region">
                        </div>

                    </div>

                    <div class="form-group row">


                        <div class="col-sm-6">
                            <input type="text" placeholder="Country"
                                class="form-control margin-bottom" name="country" id="mcustomer_country">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="PostBox"
                                class="form-control margin-bottom" name="postbox">
                        </div>
                    </div>


                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal"><?php echo $this->lang->line('Close') ?></button>
                    <input type="submit" id="msupplier_add" class="btn btn-primary submitBtn"
                        value="<?php echo $this->lang->line('ADD') ?>" />
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.editdate').datepicker({
        autoHide: true,
        format: '<?php echo $this->config->item('dformat2'); ?>'
    });
</script>