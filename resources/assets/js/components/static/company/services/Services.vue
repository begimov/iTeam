<template>
    <div>
        <div class="container py-5">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-light mb-3">Услуги</h2>
                    <p class="lead">Мы&nbsp;работаем с&nbsp;управленческими командами предприятий как наставники, помогая выработать и&nbsp;осуществить на&nbsp;практике решения, изменяющие компанию, чтобы преобразовать ее&nbsp;в&nbsp;эффективную систему, способную противостоять любым конкурентам на&nbsp;любых рынках.</p>
                    <p class="text-primary font-weight-normal py-2">
                        <span class="lead font-weight-bold text-primary">Организационные изменения охватывают пять направлений.</span><br>
                        Эти направления взаимосвязаны и&nbsp;при осуществлении любого из&nbsp;них затрагиваются все остальные.
                    </p>
                    <p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" @click.prevent="setActive(1)"><img src="/img/company/services/services_01.png"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" @click.prevent="setActive(2)"><img src="/img/company/services/services_02.png"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" @click.prevent="setActive(3)"><img src="/img/company/services/services_03.png"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" @click.prevent="setActive(4)"><img src="/img/company/services/services_04.png"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" @click.prevent="setActive(5)"><img src="/img/company/services/services_05.png"></a>
                            </li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="row mt-3" v-if="this.active === 1">
                <div class="col-lg-4 services-01">&nbsp;</div>
                <div class="col-lg-8 p-3">
                    <h4 class="font-weight-normal mb-3">Создание системы целевого управления</h4>
                    <p>Мы&nbsp;помогаем руководителям предприятий построить все четыре уровня системы целевого управления:</p>
                    <ul>
                        <li>Создать миссию компании&nbsp;&mdash; цель высшего уровня, которая определяет смысл деятельности компании.</li>
                        <li>Разработать Сбалансированную систему показателей, направляющую все действия компании к&nbsp;ее&nbsp;стратегическим целям.</li>
                        <li>Наладить систему годового планирования и&nbsp;контроля исполнения планов</li>
                        <li>Внедрить KPI сотрудников, связанные со&nbsp;стратегическими и&nbsp;тактическими целями компании.</li>
                    </ul>
                    <p>В&nbsp;ходе построения системы целевого управления мы&nbsp;уделяем особое внимание взаимным связям всех уровней, а&nbsp;также их&nbsp;взаимодействию с&nbsp;другими компонентами системы управления компанией: стратегией, процессами, структурой, корпоративной культурой.</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script src="./services.js"></script>
