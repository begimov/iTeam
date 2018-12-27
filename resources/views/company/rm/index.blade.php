@extends('layouts.app')

@section('title')
    <title>Русский менеджмент</title>
@endsection

@section('content')
    @include ('company.rm.partials._rmsubnav')
    <!-- TOP -->
    <div class="container-fluid p-0 container-fluid-limit">
        <div class="row">
            <div class="col-lg-5 rm-index-top d-none d-lg-block">&nbsp;</div>
            <div class="col-xl-6 col-lg-7 py-5">
                <div class="row">
                    <div class="col align-self-center">
                        <h2 class="mb-3 font-weight-bold text-primary">Русский менеджмент</h2>
                         <h4 class="mb-3 font-weight-light">Что русскому хорошо, то немцу смерть.<br>
Это верно в отношении управления бизнесом. Методы и технологии, которые вывели вперед немецкие, американские и японские компании, на российских предприятиях терпят поражение, как шведы под Полтавой.</h4>
                        <h4 class="mb-3 font-weight-normal">Русский менеджмент – система знаний о том, как управлять компанией. Мировой опыт и российские реалии в одном флаконе.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 5ELMENETS -->
    <div class="container pt-lg-5 pb-5">
        <div class="row">
            <div class="col text-center">
            <p class="lead">Система &laquo;Русского Менеджмента&raquo; складывается из&nbsp;пяти элементов. Выстроив эти блоки, вы получите управляемую, эффективную и конкурентоспособную компанию. Идите по дорожной карте, чтобы узнать об элементах &laquo;Русского Менеджмента&raquo;.</p>
                <h2 class="font-weight-light mb-3">Пять элементов &laquo;Русского Менеджмента&raquo;</h2>
                <ul class="list-inline m-0">
                    <li class="list-inline-item m-0">
                        <h4><span class="badge badge-primary font-weight-light p-2 a-white">
                            <a href="#_management">Целевое управление</a>
                        </span></h4>
                    </li>
                    <li class="list-inline-item m-0">
                        <h4><span class="badge badge-primary font-weight-light p-2 a-white">
                            <a href="#_strategy">Стратегическое управление</a>
                        </span></h4>
                    </li>
                    <li class="list-inline-item m-0">
                        <h4><span class="badge badge-primary font-weight-light p-2 a-white">
                            <a href="#_processes">Управление процессами</a>
                        </span></h4>
                    </li>
                </ul>
                <ul class="list-inline m-0">
                    <li class="list-inline-item m-0">
                        <h4><span class="badge badge-primary font-weight-light p-2 a-white">
                            <a href="#_orgstructure">Организационная структура</a>
                        </span></h4>
                    </li>
                    <li class="list-inline-item m-0">
                        <h4><span class="badge badge-primary font-weight-light p-2 a-white">
                            <a href="#_motivation">Корпоративная культура</a>
                        </span></h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- SUBNAV2 -->
    <div class="container-fluid a-white p-0">
        <div class="row text-center text-white">
            <div class="col bg-dark py-4 font-weight-normal rm-subnav-04">
                <a href="#_competence">Три ключевые компетенции в&nbsp;Русском Менеджменте</a>
            </div>
            <div class="col bg-secondary py-4 font-weight-normal rm-subnav-05">
                <a href="#_pilotage">Высший пилотаж в&nbsp;Русском менеджменте</a>
            </div>
            <div class="col bg-dark py-4 font-weight-normal rm-subnav-06">
                <a href="#_instruments">Как овладеть инструментами Русского Менеджмента</a>
            </div>
        </div>
    </div>

    <!-- MANAGEMENT -->
    <div class="container-fluid p-0 container-fluid-limit" id="_management">
        <div class="row">
            <div class="col-md-4 rm-index-bg-01 d-none d-md-block">&nbsp;</div>
            <div class="col-xl-7 col-md-8 py-5">
                <div class="row">
                    <div class="col align-self-center">
                        <h2 class="font-weight-light">Целевое управление</h2>
                        <p class="lead">Система целевого управления обеспечивает единую направленность действий всех подразделений и&nbsp;сотрудников к&nbsp;целям компании.</p>
                        <p>О&nbsp;том как строится система целеполагания от&nbsp;стратегического до&nbsp;оперативного уровня вы&nbsp;можете узнать из&nbsp;статей:</p>
                        <p>
                            <ul>
                                <li><a href="{{ config('urls.blog') . 'tselepolaganie-kak-klyuchevaya-problema-menedzhmenta' }}" target="_blank">&laquo;Целеполагание, как ключевая проблема менеджмента&raquo;</a></li>
                                <li><a href="{{ config('urls.blog') . 'bsc-kpi-i-drugie-pokazateli' }}" target="_blank">&laquo;BSC, KPI и&nbsp;другие показатели&raquo;</a></li>
                            </ul>
                        </p>
                        <p>... и&nbsp;мастер-классов:</p>
                        <ul>
                            <li><a href="{{ route('pages.show', 'upravlyat-po-nastoyashchemu') }}">&laquo;Управлять по-настоящему!&raquo;</a></li>
                            <!-- <li><a href="">&laquo;Целевое управление: BSC, KPI, контроллинг&raquo;</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STRATEGIC MANAGEMENT -->
    <div class="container-fluid p-0 bg-white container-fluid-limit" id="_strategy">
        <div class="row">
            <div class="col-md-8 py-5">
                <div class="row">
                    <div class="col align-self-center">
                        <h2 class="font-weight-light">Стратегическое управление</h2>
                        <p class="lead">Главное назначение стратегии&nbsp;&mdash; добиваться увеличения конкурентоспособности компании на&nbsp;рынке и&nbsp;обеспечения долгосрочного роста прибыли, на&nbsp;многие годы вперед.</p>
                        <p>О&nbsp;том, что такое стратегия и&nbsp;как она создается, вы&nbsp;можете узнать из&nbsp;статей:</p>
                        <p>
                            <ul>
                                <li><a href="{{ config('urls.blog') . 'iz-chego-sostoit-strategiya' }}" target="_blank">&laquo;Из&nbsp;чего состоит стратегия?&raquo;</a></li>
                                <li><a href="{{ config('urls.blog') . 's-chego-nachat-razrabotku-sbalansirovannoj-sistemy-pokazatelej' }}" target="_blank">&laquo;С&nbsp;чего начать разработку сбалансированной системы показателей&raquo;</a></li>
                            </ul>
                        </p>
                        <p>... и&nbsp;мастер-классов:</p>
                        <ul>
                            <li><a href="{{ route('pages.show', 'kak-sozdaetsya-strategiya-kratkoe-rukovodstvo-po-proektirovaniyu-budushchego') }}">&laquo;Как создается стратегия&raquo;</a></li>
                            <li><a href="{{ route('pages.show', 'upravlenie-strategiey-s-pomoshchyu-sbalansirovannoy-sistemy-pokazateley-bsc') }}">&laquo;Управление стратегией с&nbsp;помощью сбалансированной системы показателей&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 rm-index-bg-02 d-none d-md-block">&nbsp;</div>
        </div>
    </div>

    <!-- PROCESSES -->
    <div class="container-fluid p-0 container-fluid-limit" id="_processes">
        <div class="row">
            <div class="col-md-4 rm-index-bg-03 d-none d-md-block">&nbsp;</div>
            <div class="col-xl-7 col-md-8 py-5">
                <div class="row">
                    <div class="col align-self-center">
                        <h2 class="font-weight-light">Управление процессами</h2>
                        <p class="lead">Бизнес-процессы&nbsp;&mdash; это цепочки действий, которые приводят к&nbsp;созданию продуктов и&nbsp;услуг. От&nbsp;того, насколько успешно компания управляет своими процессами, зависит качество продуктов, лояльность ее&nbsp;клиентов и&nbsp;финансовые результаты.</p>
                        <p>О&nbsp;том, как строится система управления процессами, вы&nbsp;можете узнать из&nbsp;цикла статей:</p>
                        <p>
                            <ul>
                                <li><a href="{{ config('urls.blog') . 'biznes-urok-3-dorozhnaya-karta-sozdaniya-sistemy-upravleniya-protsessami' }}" target="_blank">&laquo;Как создать систему управления процессами в&nbsp;вашей компании&raquo;</a></li>
                            </ul>
                        </p>
                        <p>... и&nbsp;мастер-классов:</p>
                        <ul>
                            <!-- <li><a href="">&laquo;Приведите в&nbsp;порядок бизнес-процессы&raquo;</a></li> -->
                            <li><a href="{{ route('pages.show', 'praktikum-po-vnedreniyu-processnogo-podhoda') }}">&laquo;Практикум по&nbsp;внедрению процессного подхода&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ORG STRUCTURE -->
    <div class="container-fluid p-0 bg-white container-fluid-limit" id="_orgstructure">
        <div class="row">
            <div class="col-md-8 py-5">
                <div class="row">
                    <div class="col align-self-center">
                        <h2 class="font-weight-light">Организационная структура</h2>
                        <p class="lead">Организационная структура устанавливает порядок распределения функций, полномочий и&nbsp;ответственности в&nbsp;компании. Зачастую она формируется необдуманно и&nbsp;создает проблемы для деятельности организации.</p>
                        <p>Принципы построения организационной структуры мы&nbsp;даем в&nbsp;статьях на&nbsp;нашем портале:</p>
                        <p>
                            <ul>
                                <li><a href="{{ config('urls.blog') . 'idealnyj-holding-eskiznyj-proekt' }}" target="_blank">&laquo;Идеальный холдинг: эскизный проект&raquo;</a></li>
                                <!-- <li><a href="" target="_blank">&laquo;Роль корпоративного центра&raquo;</a></li> -->
                                <!-- <li><a href="" target="_blank">&laquo;Разделение корпорации&raquo;</a></li> -->
                            </ul>
                        </p>
                        <p>... и&nbsp;на&nbsp;мастер-классах:</p>
                        <ul>
                            <li><a href="{{ route('pages.show', 'chto-takoe-pravilnaya-organizacionnaya-struktura-i-kak-ee-postroit') }}">&laquo;Что такое правильная организационная структура и&nbsp;как ее&nbsp;построить&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 rm-index-bg-04 d-none d-md-block">&nbsp;</div>
        </div>
    </div>

    <!-- CULTURE -->
    <div class="container-fluid p-0 container-fluid-limit" id="_motivation">
        <div class="row">
            <div class="col-md-4 rm-index-bg-05 d-none d-md-block">&nbsp;</div>
            <div class="col-xl-7 col-md-8 py-5">
                <div class="row">
                    <div class="col align-self-center">
                        <h2 class="font-weight-light">Корпоративная культура</h2>
                        <p class="lead">
                            Корпоративная культура&nbsp;&mdash; это система ценностей, объединяющих людей ради общего дела.<br>
                            Ценности&nbsp;&mdash; это внутренние мотивы поведения людей. Они незримо руководят поступками сотрудников и&nbsp;жизнью организации. Поэтому важнейшей задачей каждого руководителя является построение продуктивной системы ценностей, как основы сплоченного коллектива, все усилия которого направлены на&nbsp;достижение целей компании.
                        </p>
                        <p>Примеры создания выдающихся коллективов на&nbsp;основе ценностей приведены в&nbsp;статьях на&nbsp;нашем портале:</p>
                        <p>
                            <ul>
                                <!-- <li><a href="">&laquo;Ни&nbsp;кнут и&nbsp;ни&nbsp;пряник&raquo;</a></li> -->
                                <!-- <li><a href="">&laquo;Вечно молодой: Антон Макаренко как управленец XXI&nbsp;века&raquo;</a></li> -->
                            </ul>
                        </p>
                        <p>... и&nbsp;на&nbsp;мастер-классах:</p>
                        <ul>
                            <li><a href="{{ route('pages.show', 'kak-sozdaetsya-silnaya-korporativnaya-kultura') }}">&laquo;Как создается сильная корпоративная культура&raquo;</a></li>
                            <li><a href="{{ route('pages.show', 'kak-sozdat-servis-pokoryayushchiy-klientov') }}">&laquo;Как создать сервис, покоряющий клиентов&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3KEY -->
    <div class="container-fluid py-5 bg-dark text-white" id="_competence">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-light mb-3">Три ключевые компетенции в&nbsp;&laquo;Русском Менеджменте&raquo;</h2>
                    <p class="lead">В&nbsp;системе &laquo;Русский Менеджмент&raquo; управление компанией опирается на&nbsp;&laquo;трех китов&raquo;, три ключевые компетенции, которыми должен владеть каждый руководитель:</p>
                    <ul class="list-inline m-0">
                        <li class="list-inline-item m-0"><h4><span class="badge badge-primary font-weight-light p-2">Управление финансами</span></h4></li>
                        <li class="list-inline-item m-0"><h4><span class="badge badge-primary font-weight-light p-2">Руководство людьми</span></h4></li>
                        <li class="list-inline-item m-0"><h4><span class="badge badge-primary font-weight-light p-2">Маркетинг</span></h4></li>
                    </ul>
                    <p class="mt-2 mb-1">На&nbsp;нашем портале дается комплекс обучающих материалов практической направленности, помогающих управленцам овладеть каждой из&nbsp;этих областей знаний.</p>
                    <p>Чтобы найти необходимые вам материалы, воспользуйтесь представленными здесь рекомендациями.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FINANCES -->
    <div class="container-fluid p-0 container-fluid-limit">
        <div class="row">
            <div class="col-md-4 rm-index-bg-06 d-none d-md-block">&nbsp;</div>
            <div class="col-xl-7 col-md-8 py-5">
                <div class="row">
                    <div class="col align-self-center">
                        <h2 class="font-weight-light">Управление финансами</h2>
                        <p class="lead">
                            Деньги&nbsp;&mdash; это кровь бизнеса&nbsp;и, одновременно, результат успешного ведения дел. В&nbsp;конечном счете, результативность коммерческой организации выражается в&nbsp;денежном потоке, который она генерирует, а&nbsp;эффективность ее&nbsp;деятельности характеризуется показателем прибыли.<br>
                            Руководитель компании должен четко понимать, какой должна быть система финансового управления, чтобы ставить конкретные задачи финансовой службе и&nbsp;контролировать их&nbsp;выполнение.
                        </p>
                        <p>Наш портал дает комплекс знаний для собственников и&nbsp;руководителей компаний, необходимых для организации эффективной системы финансового управления. Это <a href="{{ config('urls.blog') . 'category/upravlenie-finansami' }}" target="_blank">цикл статей, в&nbsp;которых подробно описана методика построения финансового управленческого учета,</a> а&nbsp;также мастер-классы:</p>
                        <ul>
                            <li><a href="{{ route('pages.show', 'chto-dolzhen-znat-kazhdyy-rukovoditel-o-finansah') }}">&laquo;Что должен знать каждый руководитель о&nbsp;финансах&raquo;</a></li>
                            <li><a href="{{ route('pages.show', 'kak-pravilno-rasschitat-sebestoimost-produktov-i-uslug') }}">&laquo;Как правильно рассчитать себестоимость продуктов и&nbsp;услуг&raquo;</a></li>
                            <!-- <li><a href="">&laquo;Методы распределения косвенных расходов&raquo;</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PEOPLE -->
    <div class="container-fluid p-0 bg-white container-fluid-limit">
        <div class="row">
            <div class="col-md-8 py-5">
                <div class="row">
                    <div class="col align-self-center">
                        <h2 class="font-weight-light">Руководство людьми</h2>
                        <p class="lead">
                            Все процессы в&nbsp;бизнесе приводятся в&nbsp;движение энергией людей, все результаты достигаются их&nbsp;усилиями и&nbsp;интеллектом.<br>
                            В&nbsp;современном менеджменте &laquo;человеческий фактор&raquo; стал главным параметром, определяющим конкурентоспособность компании и&nbsp;ее&nbsp;успех на&nbsp;рынке.<br>
                            Поэтому умение руководить сотрудниками, воодушевить людей, вовлечь их&nbsp;в&nbsp;трудовой процесс с&nbsp;максимальной эффективностью, является одним из&nbsp;главных качеств руководителя, от&nbsp;которого в&nbsp;решающей степени зависят результаты компании.
                        </p>
                        <p>О&nbsp;том, как вовлечь сотрудников в&nbsp;трудовую деятельность и&nbsp;задействовать их&nbsp;внутреннюю мотивацию мы&nbsp;говорим на&nbsp;наших мастер-классах:</p>
                        <p>
                            <ul>
                                <li><a href="{{ route('pages.show', 'chto-dolzhen-znat-kazhdyy-rukovoditel-o-motivacii-sotrudnikov') }}">&laquo;Что должен знать каждый руководитель о&nbsp;мотивации сотрудников&raquo;</a></li>
                                <!-- <li><a href="">&laquo;Секреты мотивации&raquo;</a></li> -->
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 rm-index-bg-07 d-none d-md-block">&nbsp;</div>
        </div>
    </div>

    <!-- MARKETING -->
    <div class="container-fluid p-0 container-fluid-limit">
        <div class="row">
            <div class="col-md-4 rm-index-bg-08 d-none d-md-block">&nbsp;</div>
            <div class="col-xl-7 col-md-8 py-5">
                <div class="row">
                    <div class="col align-self-center">
                        <h2 class="font-weight-light">Маркетинг для руководителей</h2>
                        <p class="lead">
                            Для того, чтобы отличаться от&nbsp;конкурентов, компания должна иметь собственное лицо, быть узнаваемой для потребителей, иметь свойства, определяющие ее&nbsp;уникальность.<br>
                            Создание дифференцирующей позиции на&nbsp;конкурентном рынке&nbsp;&mdash; главная задача маркетинга.
                        </p>
                        <p>О&nbsp;том, как создать уникальное позиционирование и&nbsp;стать локальным монополистом на&nbsp;целевом рынке, <a href="{{ config('urls.blog') . 'category/marketing-i-prodazhi' }}" target="_blank">можно узнать из&nbsp;цикла статей</a> и&nbsp;мастер-классов:</p>
                        <ul>
                            <li><a href="{{ route('pages.show', 'chto-dolzhen-znat-kazhdyy-rukovoditel-o-marketinge') }}">&laquo;Что должен знать каждый руководитель о&nbsp;маркетинге&raquo;</a></li>
                            <!-- <li><a href="">&laquo;Как стать лидером в&nbsp;конкурентной гонке&raquo;</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PILOTAGE -->
    <div class="container-fluid py-5 text-white a-white rm-index-pilotage-block" id="_pilotage">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-light mb-3">Высший пилотаж в&nbsp;&laquo;Русском Менеджменте&raquo;</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="lead">
                        В&nbsp;жизни каждой компании наступают периоды, когда назревает необходимость менять методы работы, принципы организации, пересматривать систему ценностей и&nbsp;приоритетов. Если изменения откладываются, то&nbsp;наступает кризис управления, который может привести к&nbsp;большим потерям для бизнеса.<br>
                        Высшим пилотажем в&nbsp;деле управления организациями является умение производить изменения, позволяющие на&nbsp;каждом этапе жизни компании выводить ее&nbsp;на&nbsp;новый, более высокий уровень развития.
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="lead">На&nbsp;наших мастер-классах мы&nbsp;проверенные многолетней практикой методы проведения организационных изменений.</p>
                    <ul class="lead">
                        <li class="mb-2"><a href="{{ route('pages.show', 'postavte-diagnoz-vashemu-biznesu') }}">&laquo;Поставьте диагноз своему бизнесу&raquo;</a></li>
                        <!-- <li class="mb-2"><a href="">&laquo;Как предвидеть и&nbsp;преодолевать кризисы управления&raquo;</a></li> -->
                        <li class="mb-2"><a href="{{ route('pages.show', 'upravlenie-izmeneniyami-inzhenernyy-podhod') }}">&laquo;Управление изменениями. Инженерный подход&raquo;</a></li>
                        <!-- <li class="mb-2"><a href="">&laquo;Архитектура организационных изменений&raquo;</a></li> -->
                        <!-- <li class="mb-2"><a href="">&laquo;Быстрая компания. Как сделать изменения постоянными&raquo;</a></li>
                        <li><a href="">&laquo;Управление проектами. Суть дела&raquo;</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- INSTRUMENTS -->
    <div class="container-fluid py-5 rm-index-howto-block" id="_instruments">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-light mb-3">Как овладеть инструментами &laquo;Русского Менеджмента&raquo;?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="lead">
                        Существует множество форм обучения управленцев, каждая из&nbsp;которых имеет свои преимущества и&nbsp;недостатки. Нам удалось в&nbsp;результате многолетних поисков выработать оптимальную форму обучения руководителей. Это проектный метод обучения, совмещающий овладение новыми знаниями с&nbsp;решением наиболее актуальных задач управления компанией и&nbsp;достижением практических результатов. Этот метод обучения мы&nbsp;назвали &laquo;мастер-проект&raquo;. С&nbsp;ним можно ознакомиться на&nbsp;мастер-классе <a href="{{ route('pages.show', 'chemu-i-kak-nuzhno-obuchat-rukovoditeley-chtoby-oni-stali-liderami-peremen') }}">&laquo;Чему и&nbsp;как нужно обучать руководителей&raquo;</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="lead">В&nbsp;настоящее время на&nbsp;нашем портале размещены следующие мастер-проекты, с&nbsp;помощью которых наши клиенты проводят успешные преобразования в&nbsp;своих компаниях и&nbsp;одновременно обучают свои управленческие команды.</p>
                    <ul class="lead">
                        <li class="mb-2"><a href="{{ route('pages.show', 'razrabotka-strategii-shag-za-shagom') }}">&laquo;Разработка стратегии компании&raquo;</a></li>
                        <li class="mb-2"><a href="{{ route('pages.show', 'upravlenie-strategiey-s-pomoshchyu-sbalansirovannoy-sistemy-pokazateley-bsc') }}">&laquo;Управление стратегией с&nbsp;помощью сбалансированной системы показателей&raquo;</a></li>
                        <li class="mb-2"><a href="{{ route('pages.show', 'kak-sozdat-sistemu-upravleniya-processami-za-4-mesyaca') }}">&laquo;Как построить систему управления процессами в&nbsp;вашей компании&raquo;</a></li>
                        <!-- <li><a href="">&laquo;Целевое управление. Как сделать компанию управляемой и&nbsp;эффективной&raquo;</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection