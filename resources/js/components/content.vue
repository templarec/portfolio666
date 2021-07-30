<template>
    <div>

        <div class="partners">
                    <span class="inline-block">
                        Dev Buddies
                    </span>
        </div>
        <div class="grid grid-cols-5">
            <aside class="relative flex flex-col justify-center col-start-1 col-end-2">
            </aside>
            <div class="jumbo xs:p-0 xs:-ml-1.5 col-start-2 col-end-5 flex flex-col justify-center">
                <h2>{ templarec.dev }</h2>
                <h3>Lorenzo Bernini</h3>
                <h4>Full Stack Web Developer</h4>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "contenuto",
    mounted() {
        console.log('Content Vue loaded .. . . ')
    }
}
</script>

<style scoped>


</style>
