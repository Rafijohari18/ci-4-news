<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <input type="hidden" name="id" value="<?= $wa_sales_products['id'] ?>" />
    <div class="form-group">
        <label>Country</label>
        <input type="text" name="country" class="form-control" placeholder="Country" value="<?= $wa_sales_products['country'] ?>" required>
    </div>
    <div class="form-group">
        <label>Order Method Type</label>
        <input type="text" name="order_method_type" class="form-control" placeholder="Order Method Type" value="<?= $wa_sales_products['order_method_type'] ?>" required>
    </div>
    <div class="form-group">
        <label>Retailer Type</label>
        <input type="text" name="retailer_type" class="form-control" placeholder="Retailer Type"  value="<?= $wa_sales_products['retailer_type'] ?>" required>
    </div>
    <div class="form-group">
        <label>Product Line</label>
        <input type="text" name="product_line" class="form-control" placeholder="Product Line" value="<?= $wa_sales_products['product_line'] ?>" required>
    </div>
    <div class="form-group">
        <label>Item Type</label>
        <input type="text" name="item_type" class="form-control" placeholder="Item Type" value="<?= $wa_sales_products['item_type'] ?>" required>
    </div>
    <div class="form-group">
        <label>Product</label>
        <input type="text" name="product" class="form-control" placeholder="Product" value="<?= $wa_sales_products['product'] ?>" required>
    </div>
    <div class="form-group">
        <label>Year</label>
        <input type="text" name="year" class="form-control" placeholder="Year" value="<?= $wa_sales_products['year'] ?>" required>
    </div>
    <div class="form-group">
        <label>Quarter</label>
        <select name="quarter" class="form-control" required>
            <option value="Q1 2012" <?php if ($wa_sales_products['quarter'] == "Q1 2012") : ?> selected<?php endif; ?>>Q1 2012</option>
            <option value="Q2 2012" <?php if ($wa_sales_products['quarter'] == "Q2 2012") : ?> selected<?php endif; ?>>Q2 2012</option>
            <option value="Q3 2012" <?php if ($wa_sales_products['quarter'] == "Q3 2012") : ?> selected<?php endif; ?>>Q3 2012</option>
        </select>
        <!-- <input type="text" name="quarter" class="form-control" placeholder="Quarter" value="<?= $wa_sales_products['quarter'] ?>" required> -->
    </div>
    <div class="form-group">
        <label>Total Revenue</label>
        <input type="number" name="total_revenue" class="form-control" value="<?= $wa_sales_products['total_revenue'] ?>" placeholder="Total Revenue" required>
    </div>
    <div class="form-group">
        <label>Unit Sold</label>
        <input type="number" name="unit_sold" class="form-control" value="<?= $wa_sales_products['unit_sold'] ?>" placeholder="Unit Sold" required>
    </div>
    
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
        <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
    </div>
</form>


<?= $this->endSection() ?>