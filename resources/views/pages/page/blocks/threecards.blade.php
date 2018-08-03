<div class="container-fluid bg-dark">
    <div class="container py-2">
        <div class="row my-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-header bg-info text-center">
                        <h5 class="mb-0 text-white">{!! $element->data['title1'] !!}</h5>
                    </div>
                    @isset($element->data['files']['img1'])
                        <div class="text-center p-2">
                            <img src="{{ getElementsFilePath($element, 'img1') }}" width="50%" class="img-fluid rounded">
                        </div>
                    @endisset
                    <div class="card-body">
                        {!! $element->data['text1'] !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-sm-3 mt-md-0">
                <div class="card h-100">
                    <div class="card-header bg-info text-center">
                        <h5 class="mb-0 text-white">{!! $element->data['title2'] !!}</h5>
                    </div>
                    @isset($element->data['files']['img2'])
                        <div class="text-center p-2">
                            <img src="{{ getElementsFilePath($element, 'img2') }}" width="50%" class="img-fluid rounded">
                        </div>
                    @endisset
                    <div class="card-body">
                        {!! $element->data['text2'] !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-sm-3 mt-md-0">
                <div class="card h-100">
                    <div class="card-header bg-info text-center">
                        <h5 class="mb-0 text-white">{!! $element->data['title3'] !!}</h5>
                    </div>
                    @isset($element->data['files']['img3'])
                        <div class="text-center p-2">
                            <img src="{{ getElementsFilePath($element, 'img3') }}" width="50%" class="img-fluid rounded">
                        </div>
                    @endisset
                    <div class="card-body">
                        {!! $element->data['text3'] !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>