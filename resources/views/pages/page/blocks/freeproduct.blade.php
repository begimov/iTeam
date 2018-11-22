<div class="container">
  <div class="row mt-4 mb-5">
    <div class="col">
      <div class="card">
        <div class="card-body py-4">
          <free-magnet 
            title="ПОЛУЧИТЬ БЕСПЛАТНО"
            campaign-token="{{ $element->data['form']['campaignToken'] }}"
            redirect-url="{{ '/products/' . $element->data['form']['productId'] }}"
            layout-type="horizontal"
            no-phone="{{ $element->data['form']['noPhone'] ?? '' }}" 
            user-email="{{ auth()->user() ? auth()->user()->email : '' }}"
            user-name="{{ auth()->user() ? auth()->user()->name : '' }}" />
        </div>
      </div>
    </div>
  </div>
</div>