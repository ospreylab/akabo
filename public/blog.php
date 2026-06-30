<script>
    const title = 'Блог компании Акабо: Полезная информация для самостоятельного обслуживания вашего очистного сооружения';
    const description = 'Полезная информация для самостоятельного ремонта вашего очистного сооружения. Пошаговые инструкции для обслуживания септика своими руками.';

    document.title = title;
    const metaTag = document.querySelector('meta[name="description"]');
    if (metaTag) {
        metaTag.setAttribute('content', description);
    }
</script>
<section class="section blog">
    <h1>
        Блог
    </h1>
    <p class="subheader">
        Полезная информация для самостоятельного обслуживания вашего очистного сооружения
    </p>
    <div class="tiles">
        <div class="tile">
            <a href="/blog/pochemu-srabotala-avariinaia-lampa-na-septike">
                <div class="top post-4"></div>
                <div class="bottom">
                    <h2>Почему сработала аварийная лампа на септике?</h2>
                    <p class="post-date">28 июня 2026 г.</p>
                </div>
            </a>
        </div>
        <div class="tile">
            <a href="/blog/rekomendacii-po-ekspluatacii-stancii-biologicheskoi-ochistki">
                <div class="top post-3"></div>
                <div class="bottom">
                    <h2>Рекомендации по эксплуатации станции биологической очистки</h2>
                    <p class="post-date">24 июня 2026 г.</p>
                </div>
            </a>
        </div>
        <div class="tile">
            <a href="/blog/neobhodimyie-sredstva-dlya-obsluzhivaniia-septika">
                <div class="top post-2"></div>
                <div class="bottom">
                    <h2>Необходимые средства для обслуживания септика</h2>
                    <p class="post-date">17 июня 2026 г.</p>
                </div>
            </a>
        </div>
        <div class="tile">
            <a href="/blog/chem-dolzhen-zanimatsia-servisnyi-inzhener-na-obiekte-pri-obsluzhivanii-stancii">
                <div class="top post-1"></div>
                <div class="bottom">
                    <h2>Чем должен заниматься сервисный инженер на объекте при обслуживании станции?</h2>
                    <p class="post-date">15 июня 2026 г.</p>
                </div>
            </a>
        </div>
    </div>
</section>