<div class="container">
  <div class="row my-5">
    <div class="col">
      <div class="card">
        <div class="card-body py-4">
          <free-magnet 
            title="ПОЛУЧИТЬ БЕСПЛАТНО"
            campaign-token="{{ $element->data['form']['campaignToken'] }}"
            redirect-url="{{ '/products/' . $element->data['form']['productId'] }}"
            layout-type="horizontal" />
        </div>
      </div>
    </div>
  </div>
</div>