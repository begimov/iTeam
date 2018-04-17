<template>
  <div>  
    <button type="button" class="button-ytplayer" data-toggle="modal" data-backdrop="static" :data-target="'#' + this.videoId" @click.prevent="onOpen">
      <img src="/img/home/btn_play.png">
    </button>        
    <!-- Modal -->
    <div class="modal fade" :id="this.videoId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col pb-1">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click.prevent="onClose">
                  <a href="#"><span aria-hidden="true">&times;</span></a>
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="100%" height="350" :src="videoUrl" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script src="./ytplayer.js"></script>
