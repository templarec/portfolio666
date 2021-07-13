<template>
    <div class="w-full h-full">

        <div class="grid grid-cols-5  w-full h-full">
            <aside class="relative xs:hidden flex flex-col justify-center col-start-1 col-end-2">
            </aside>
            <div
                class="jumbo-hard-skills col-span-5 w-full flex flex-col xs:items-center">
                <h2>Lorenzo Bernini</h2>
                <h3>Full Stack Web Developer</h3>
                <p class="text-2xl mb-10"><a href="/docs/CV_Bernini_Lorenzo.pdf">Scarica CV</a></p>
                <p class="text-4xl">Hard skills:</p>
                <ul class="flex xs:flex-wrap mb-10 xs:items-center justify-center w-full">
                    <li><img src="/icons/icons8-html-5-100.png" alt="html5 icon">HTML5</li>
                    <li><img src="/icons/icons8-css3-100.png" alt="css3 icon">CSS3</li>
                    <li><img src="/icons/tailwind.png" alt="css3 icon">Tailwind</li>
                    <li><img src="/icons/icons8-bootstrap-100.png" alt="css3 icon">Bootstrap</li>
                    <li><img src="/icons/scss.webp" alt="css3 icon">SCSS</li>
                    <li><img src="/icons/icons8-javascript-100.png" alt="css3 icon">Javascript</li>
                    <li><img src="/icons/icons8-vue-js-100.png" alt="css3 icon">Vue.js</li>
                    <li><img class="jquery" src="/icons/icons8-jquery-100.png" alt="css3 icon">JQuery</li>
                    <li><img src="/icons/icons8-mysql-logo-100.png" alt="css3 icon">MySql</li>
                    <li><img src="/icons/icons8-php-logo-100.png" alt="css3 icon">PHP</li>
                    <li><img src="/icons/icons8-laravel-100.png" alt="css3 icon">Laravel</li>
                </ul>
                <p class="text-4xl">Soft skills:</p>
                <img class="xs:hidden" src="/img/word-cloud.png" alt="word cloud">
                <ul class="soft-skills w-full flex flex-col xs:items-center justify-between">
                    <li>Problem solving</li>
                    <li>Apprendimento veloce</li>
                    <li>Creatività</li>
                    <li>Leadership</li>
                    <li>Lavoro di squadra</li>
                </ul>

            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "info",
}
</script>

<style scoped>

</style>
