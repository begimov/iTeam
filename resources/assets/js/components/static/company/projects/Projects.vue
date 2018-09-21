<template>
    <div class="container-fluid bg-dark">
        <div class="row text-light mb-4">
            <div class="col text-center">
                <h1>Консалтинговые проекты</h1>
            </div>
        </div>

        <div class="row" id="projects-container">
            <company-project v-for="project in projects" :key="project.id" :project="project" />
        </div>
    </div>
</template>

<script src="./projects.js"></script>

