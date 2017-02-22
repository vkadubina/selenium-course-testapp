<div id="box-similar-products" class="box">
  <h3 class="title"><?php echo language::translate('title_similar_products', 'Similar Products'); ?></h3>
  <div class="content">
    <?php if ($products) { ?>
    <ul class="listing-wrapper products">
      <?php foreach ($products as $product) echo functions::draw_listing_product($product, 'column'); ?>
    </ul>
    <?php } ?>
  </div>
</div>