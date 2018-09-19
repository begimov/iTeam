<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Консалтинговые проекты</h1>
            </div>
        </div>

        <div class="row" id="projects-container">
            <company-project v-for="project in projects" :key="project.id" :project="project" />
        </div>
    </div>
</template>

<script src="./projects.js"></script>

