<template>
    <div class="col-xl-3 col-lg-4 col-sm-6 mt-3">
        <transition name="fade" mode="out-in">
            <div class="card text-center h-100 bg-light" v-if="!areShown" key="description">
                <div class="card-body">
                    <a :href="project.url" target="_blank"><h6 class="card-title mb-0" v-html="project.title"></h6></a>
                    <a :href="project.url" target="_blank">
                        <img :src="'/img/company/projects/' + project.img" class="img-fluid my-3" :width="project.width" v-if="project.img">
                        <p class="my-3 lead font-weight-bold text-uppercase" v-else>{{ project.logoText }}</p>
                    </a>
                    <p class="card-text" v-html="project.description"></p>
                </div>
                <div class="card-footer bg-white">
                    <button type="button" class="btn btn-primary btn-sm" @click.prevent="more">Проекты</button>
                </div>
            </div>

            <div class="card h-100 bg-secondary text-light" v-else @click.prevent="more" key="details">
                <div class="card-body p-3">
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
        transition: all 0.5s ease 0.2s;
    }
    .fade-enter, .fade-leave-to {
        transform: translateY(10px);
        opacity: 0;
    }
</style>

