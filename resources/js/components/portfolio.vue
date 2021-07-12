<template>
    <div class="w-full h-full overflow-scroll">

        <div class="grid grid-cols-5 border-1 w-full h-full">
            <aside class="portfolio relative flex flex-col items-end  col-start-1 col-end-2">

            </aside>
            <div class="jumbo-portfolio flex flex-col col-start-2 col-end-5 flex flex-col pt-16 pl-16">
                <div class="grid grid-rows-6 gap-y-6 mt-48">
                    <div class="sito walfood h-48">
                        <div class=" grid grid-cols-3 gap-x-2 w-full h-full">
                            <a class="inline-block" href="http://www.bearwebdesign.eu/">
                                <div class="left flex justify-center left h-full">

                                    <img src="/img/walfood.png" alt="walfood Screenshot">

                                </div>
                            </a>
                            <div class="right col-span-2 h-full w-full">
                                <p class="sito-titolo">Walfood Delivery</p>
                                <p class="sito-desc">Progetto finale del corso <a
                                    href="https://boolean.careers">Boolean</a></p>
                                <p class="sito-desc">Walfood è un sito di food delivery che prende spunto da
                                    Deliveroo</p>
                                <p class="sito-desc">Tecnologie utilizzate: HTML, CSS, SCSS, Bootstrap, Vue.js,
                                    Laravel</p>
                                <ul>
                                    <li>Ordine e pagamento tramite Braintree</li>
                                    <li>Dashboard Ristoratore</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sito boolzapp h-48">
                        <div class="grid grid-cols-3 gap-x-2 w-full h-full">
                            <a class="inline-block" href="https://templarec.github.io/vue-boolzapp/">
                                <div class="left flex justify-center left max-h-48">
                                    <img src="/img/boolzapp.png" alt="boolzapp Screenshot">
                                </div>
                            </a>
                            <div class="right col-span-2 h-full w-full">
                                <p class="sito-titolo">Boolzapp</p>
                                <p class="sito-desc">Esercizio del corso <a href="https://boolean.careers">Boolean</a>
                                </p>
                                <p class="sito-desc">Boolzapp la versione solo grafica di Whatsapp</p>
                                <p class="sito-desc">Tecnologie utilizzate: HTML, CSS, SCSS, Javascript, Vue.js</p>
                                <ul>
                                    <li>Invio di messaggi</li>
                                    <li>Light e Dark theme</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sito laravel-comics h-48">
                        <div class="grid grid-cols-3 gap-x-2 w-full h-full">
                            <a class="inline-block" href="">
                                <div class="left flex justify-center left h-full max-h-48">
                                    <img src="/img/laravel-comics.png" alt="boolzapp Screenshot">
                                </div>
                            </a>
                            <div class="right col-span-2 h-full w-full">
                                <p class="sito-titolo">Laravel Comics</p>
                                <p class="sito-desc">Esercizio del corso <a href="https://boolean.careers">Boolean</a>
                                </p>
                                <p class="sito-desc">Riproduzione del sito DC Comics</p>
                                <p class="sito-desc">Tecnologie utilizzate: HTML, CSS, SCSS, Javascript, Laravel,
                                    MySQL</p>
                                <ul>
                                    <li>Utilizzo del framework Laravel</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sito eduprime h-48">
                        <div class="grid grid-cols-3 gap-x-2 w-full h-full">
                            <a class="inline-block" href="https://www.bearwebdesign.it/EduPrime/">
                                <div class="left flex justify-center left h-full max-h-48">
                                    <img src="/img/eduprime.png" alt="boolzapp Screenshot">
                                </div>
                            </a>
                            <div class="right col-span-2 h-full w-full">
                                <p class="sito-titolo">EduPrime</p>
                                <p class="sito-desc">Progetto individuale di metà corso <a
                                    href="https://boolean.careers">Boolean</a></p>
                                <p class="sito-desc">Riproduzione tema di WordPress EduPrime</p>
                                <p class="sito-desc">Tecnologie utilizzate: HTML, CSS, SCSS, Javascript, Vue.js</p>
                                <ul>
                                    <li>Layout e animazioni</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sito museek h-48">
                        <div class="grid grid-cols-3 gap-x-2 w-full h-full">
                            <a class="inline-block" href="https://museek.eu">
                                <div class="left flex justify-center left h-full max-h-48">
                                    <img src="/img/museek.png" alt="boolzapp Screenshot">
                                </div>
                            </a>
                            <div class="right col-span-2 h-full w-full">
                                <p class="sito-titolo">MuSeek.eu</p>
                                <p class="sito-desc">Landing page della start-up Museek</p>
                                <p class="sito-desc">Wordpress</p>

                            </div>
                        </div>
                    </div>
                    <div class="sito portfolio-launcher h-48">
                        <div class="grid grid-cols-3 gap-x-2 w-full h-full">
                            <a class="inline-block" href="https://templarec.github.io/PortfolioLauncher/">
                                <div class="left flex justify-center left h-full w-full max-h-48">
                                    <img src="/img/crt.png" alt="boolzapp Screenshot">
                                </div>
                            </a>
                            <div class="right col-span-2 h-full w-full">
                                <p class="sito-titolo">Portfolio Launcher 1.73</p>
                                <p class="sito-desc">Versione CLI del mio portfolio</p>
                                <p class="sito-desc">Progetto personale</p>
                                <p class="sito-desc">HTML, CSS, Javascript, Vue.js</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "portfolio"
}
</script>

<style scoped>

</style>
