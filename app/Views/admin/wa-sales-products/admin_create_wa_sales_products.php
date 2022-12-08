<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="<?= base_url('admin/wa-sales-products/new') ?>" method="post" id="text-editor">
    <div class="form-group">
        <label>Country</label>
        <input type="text" name="country" class="form-control" placeholder="Country" required>
    </div>
    <div class="form-group">
        <label>Order Method Type</label>
        <input type="text" name="order_method_type" class="form-control" placeholder="Order Method Type" required>
    </div>
    <div class="form-group">
        <label>Retailer Type</label>
        <input type="text" name="retailer_type" class="form-control" placeholder="Retailer Type" required>
    </div>
    <div class="form-group">
        <label>Product Line</label>
        <input type="text" name="product_line" class="form-control" placeholder="Product Line" required>
    </div>
    <div class="form-group">
        <label>Item Type</label>
        <input type="text" name="item_type" class="form-control" placeholder="Item Type" required>
    </div>
    <div class="form-group">
        <label>Product</label>
        <input type="text" name="product" class="form-control" placeholder="Product" required>
    </div>
    <div class="form-group">
        <label>Year</label>
        <input type="text" name="year" class="form-control" placeholder="Year" required>
    </div>
    <div class="form-group">
        <label>Quarter</label>
        <select name="quarter" class="form-control" required>
            <option value="Q1 2012">Q1 2012</option>
            <option value="Q2 2012">Q2 2012</option>
            <option value="Q3 2012">Q3 2012</option>
        </select>
        <!-- <input type="text" name="quarter" class="form-control" placeholder="Quarter" required> -->
    </div>
    <div class="form-group">
        <label>Total Revenue</label>
        <input type="number" name="total_revenue" class="form-control" placeholder="Total Revenue" required>
    </div>
    <div class="form-group">
        <label>Unit Sold</label>
        <input type="number" name="unit_sold" class="form-control" placeholder="Unit Sold" required>
    </div>
   
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
        <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
    </div>
</form>


<?= $this->endSection() ?>