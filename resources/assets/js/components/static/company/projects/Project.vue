<template>
    <div class="col-xl-4 col-lg-6 mt-3">
        <div class="card text-center h-100" v-if="!areShown">
            <div class="card-body">
                <h5 class="card-title" v-html="project.title"></h5>
                <p class="card-text" v-html="project.description"></p>
                <button type="button" class="btn btn-primary" @click.prevent="more">Проекты</button>
            </div>
            <div class="card-footer bg-white">
                <a :href="project.url" target="_blank">{{ project.url }}</a>
            </div>
        </div>

        <div class="card h-100" v-if="areShown" @click.prevent="more">
            <div class="card-body">
                <p class="card-text" v-html="project.details"></p>
            </div>
        </div>
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
</style>

