<template>
    <div class="col-xl-3 col-lg-4 col-md-6 mt-3">
        <transition name="fade" mode="out-in">
            <div class="card text-center h-100" v-if="!areShown" key="description">
                <div class="card-body">
                    <h6 class="card-title" v-html="project.title"></h6>
                    <a :href="project.url" target="_blank">
                        <img :src="'/img/company/projects/' + project.img" class="img-fluid mt-2 mb-3" width="30%">
                    </a>
                    <p class="card-text" v-html="project.description"></p>
                    <a :href="project.url" target="_blank">{{ project.url }}</a>
                </div>
                <div class="card-footer bg-white">
                    <button type="button" class="btn btn-primary" @click.prevent="more">Проекты</button>
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

