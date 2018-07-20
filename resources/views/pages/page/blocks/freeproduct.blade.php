<div class="container">
  <div class="row my-4">
    <div class="col">
      <free-magnet 
        title="ПОЛУЧИТЬ БЕСПЛАТНО"
        campaign-token="{{ $element->data['form']['campaignToken'] }}"
        redirect-url="{{ '/products/' . $element->data['form']['productId'] }}"
        layout-type="horizontal" />
    </div>
  </div>
</div>