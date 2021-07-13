<template>
    <div class="w-full h-full">

        <div class="grid grid-cols-5 border-1 w-full h-full">
            <aside class="about xs:hidden relative flex flex-col items-end  col-start-1 col-end-2">
                <img class="mt-48" src="/img/lory.jpg" alt="Foto profilo">
            </aside>
            <div class="jumbo-about flex flex-col col-span-5">
                <p class="w-full p-4">
                    Nato a Padova il 17/07/1986, appassionato di
                    <mark>informatica</mark>
                    sin da bambino.
                    <br>Ho conseguito il diploma di perito informatico nel 2006 all'ITI Galileo Ferraris di Padova.
                    <br>Ho frequentato la facoltà di Informatica dell'Università di Udine, città dove risiedo tutt'ora.
                    <br>Ho frequentato il corso
                    <mark>Boolean Careers</mark>
                    per diventare
                    <mark>Jr. Full Stack Web Developer</mark>
                    nel primo
                    semestre del 2021.
                    <br>Oltre l'informatica e la programmazione, i miei interessi sono la meditazione e la filosofia
                    orientale.
                    <br>Ho una figlia adolescente e sono proprietario di 5 gatti.
                </p>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "about"
}
</script>

<style scoped>

</style>
