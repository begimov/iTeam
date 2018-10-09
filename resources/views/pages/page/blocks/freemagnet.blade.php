<div class="container">
  <div class="row my-5">
    <div class="col">
      <div class="card">
        <div class="card-body py-4">
          <free-magnet 
            title="{{ $element->data['title'] }}"
            description="{{ $element->data['description'] }}"
            campaign-token="{{ $element->data['campaignToken'] }}"
            button-text="{{ $element->data['buttonText'] }}"
            redirect-url="{{ getElementsFilePath($element, 'doc1') }}"
            layout-type="horizontal"
            no-phone="{{ $element->data['noPhone'] ?? '' }}" 
            user-email="{{ auth()->user() ? auth()->user()->email : '' }}"
            user-name="{{ auth()->user() ? auth()->user()->name : '' }}" />
        </div>
      </div>
    </div>
  </div>
</div>