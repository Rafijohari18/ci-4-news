<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<!-- <h1>Rafi Johari Wilistianto</h1>
<h1>NPM : 40621100085</h1> -->

<a href="<?= base_url('admin/wa-sales-products/new') ?>" class="btn btn-primary mr-3 mb-4">Add Data</a>
<table class="table">
<thead>
<tr>
    <th>#</th>
    <th>Country</th>
    <th>Order Method Type</th>
    <th>Retailer Type</th>
    <th>Product Line</th>
    <th>Item Type</th>
    <th>Product</th>
    <th>Year</th>
    <th>Quarter</th>
    <th>Total Revenue</th>
    <th>Unit Sold</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach($wa_sales_products as $item): ?>
<tr>
    <td><?= $item['id'] ?></td>
    <td>
        <strong><?= $item['country'] ?></strong><br>
        <small class="text-muted"><?= $item['created_at'] ?></small>
    </td>
    <td>
        <strong><?= $item['order_method_type'] ?></strong>
    </td>
    <td>
        <strong><?= $item['retailer_type'] ?></strong>
    </td>
    <td>
        <strong><?= $item['product_line'] ?></strong>
    </td>
    <td>
        <strong><?= $item['item_type'] ?></strong>
    </td>
    <td>
        <strong><?= $item['product'] ?></strong>
    </td>
    <td>
        <strong><?= $item['year'] ?></strong>
    </td>
    <td>
        <strong><?= $item['quarter'] ?></strong>
    </td>
    <td>
        <strong><?= $item['total_revenue'] ?></strong>
    </td>
    <td>
        <strong><?= $item['unit_sold'] ?></strong>
    </td>
    <td>
        <a href="<?= base_url('admin/wa-sales-products/'.$item['id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
        <a href="#" data-href="<?= base_url('admin/wa-sales-products/'.$item['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>


<?= $this->endSection() ?>