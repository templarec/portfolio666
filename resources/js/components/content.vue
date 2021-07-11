<template>
    <div class="w-full h-full">
        <div class="custom-shape-divider-top-1626026182">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="partners">
                    <span class="inline-block">
                        Dev Buddies
                    </span>
        </div>
        <div class="grid grid-cols-5 border-1 w-full h-full">
            <aside class="relative flex flex-col justify-center col-start-1 col-end-2">
            </aside>
            <div class="jumbo col-start-2 col-end-5 flex flex-col justify-center">
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

.custom-shape-divider-top-1626026182 {
    position: absolute;
    top: 74px;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-top-1626026182 svg {
    position: relative;
    display: block;
    width: calc(105% + 1.3px);
    height: 150px;
}

.custom-shape-divider-top-1626026182 .shape-fill {
    fill: #FBBF24;
}
</style>
