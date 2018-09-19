<template>
    <div class="col-xl-4 col-lg-6 mt-3">
        <transition name="fade" mode="out-in">
            <div class="card text-center h-100" v-if="!areShown" key="description">
                <div class="card-body">
                    <h5 class="card-title" v-html="project.title"></h5>
                    <img :src="'/img/company/projects/' + project.img" class="img-fluid mt-2 mb-3" width="30%">
                    <p class="card-text" v-html="project.description"></p>
                    <button type="button" class="btn btn-primary" @click.prevent="more">Проекты</button>
                </div>
                <div class="card-footer bg-white">
                    <a :href="project.url" target="_blank">{{ project.url }}</a>
                </div>
            </div>

            <div class="card h-100 bg-dark text-light" v-else @click.prevent="more" key="details">
                <div class="card-body">
                    <p class="card-text" v-html="project.details"></p>
                </div>
            </div>
        </transition>
    </div>
</template>

<script src="./project"></script>

<style>
    .project-details-popover {
        position:fixed;
        z-index:99999;
        left:0;
        top:0;
        background-color:#00000099;
    }
    .fade-enter-active, .fade-leave-active {
        transition: opacity .3s;
    }
    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>

