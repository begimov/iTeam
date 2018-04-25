<template>
  <div>
    <div class="row">
      <div class="col">
          <form action="/grform/payment" method="get" id="grForm">
              <div class="row">
                  <div class="col">
                    <div class="form-group form-group-lg">
                      <input type="text" class="form-control" name="name" placeholder="Имя" v-model="modal.name">
                    </div>
                    <div class="form-group form-group-lg">
                      <input type="email" class="form-control" name="email" placeholder="Эл.адрес" v-model="modal.email">
                    </div>
                    <div class="form-group form-group-lg">
                      <input type="text" class="form-control" name="phone" placeholder="Телефон" v-model="modal.phone">
                    </div>
                  </div>
                <input type="hidden" name="campaign_token" v-model="modal.campaign_token" />
              </div>
              <a href="#" class="btn btn-danger btn-lg disabled" id="grFormBtn" v-if="isLoading">ОТПРАВКА...</a>
              <a href="#" class="btn btn-danger btn-lg" id="grFormBtn" v-else @click.prevent="register">{{ cta }}</a>
          </form>
          <p class="help-block alert-danger" id="grFormHelpBlock" v-if="error">{{ error }}</p>
          <p class="help-block alert-success" id="grFormHelpBlock" v-if="msg">{{ msg }}</p>
      </div>
    </div>
  </div>
</template>

<script src="./freemagnet.js"></script>

<style scoped>
.help-block {
  margin-top: 20px;
  padding: 5px;
}
</style>