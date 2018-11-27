<template>
<!-- Modal -->
    <div class="modal fade" :id="'modal-window-' + modalWindowId" tabindex="-1" role="dialog" aria-labelledby="modalWindow" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><h3>&times;</h3></span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-5 d-none d-md-block">
                <img src="/img/home/gift_box.png" class="img-fluid">
              </div>
              <div class="col-md-7 align-self-center">
                  <free-magnet 
                    description='Книга "Как внедрить бизнес-процессы"!'
                    :campaign-token="campaignToken"
                    no-phone="true"
                    :redirect-url="redirectUrl" />
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</template>

<script src="./modalwindow.js"></script>