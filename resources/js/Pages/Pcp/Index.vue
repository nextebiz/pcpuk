<template>

    <PcpLayout>




        <section class="bg-gray-200 dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 py-20 mx-auto lg:gap-8 xl:gap-0 lg:py-32 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">PCP Search Vehicle</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 pr-10">From checkout to global sales tax compliance, companies around the world use Flowbite to
                        simplify their payment stack.</p>
                    <form @submit.prevent="submitRegNo">
                        <div class="flex">
                            <input type="text" v-model="form.regno" class="w-[220px] mr-3 rounded-lg p-3 bg-gray-100" placeholder="Type registration number">
                            <div class="flex">
                                <button type="submit"
                                    class="mr-3 inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center  border border-gray-300 rounded-lg bg-blue-500 text-white hover:bg-blue-800 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Search
                                    Registration</button>
                                <div  v-if="searching" class="flex justify-center align-middle content-center ">
                                    <div class="content-center mr-2 text-sm">Searching </div>
                                    <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="w-[26px] ">
                                        <circle class="fill-blue-500" stroke="#0000FF" stroke-width="15" r="15" cx="40" cy="65">
                                            <animate attributeName="cy" calcMode="spline" dur="2" values="65;135;65;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate>
                                        </circle>
                                        <circle class="fill-blue-500" stroke="#0000FF" stroke-width="15" r="15" cx="100" cy="65">
                                            <animate attributeName="cy" calcMode="spline" dur="2" values="65;135;65;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate>
                                        </circle>
                                        <circle class="fill-blue-500" stroke="#0000FF" stroke-width="15" r="15" cx="160" cy="65">
                                            <animate attributeName="cy" calcMode="spline" dur="2" values="65;135;65;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate>
                                        </circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="search_error" v-if="form.error_msg != ''">
                            {{ props.flash.search_error }}
                        </div>

                    </form>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="assets/img/cars/cars-t.png" class="object-contain" alt="mockup">
                </div>
            </div>


        </section>

        <section class="bg-white dark:bg-gray-900">
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img class="w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="dashboard image">
                <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image">
                <div class="mt-4 md:mt-0" ref="me1">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Let's create more tools and ideas that brings us together.</h2>
                    <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Flowbite helps you connect with friends and communities of people who share your interests. Connecting with your friends and
                        family
                        as well as discovering new ones is easy with features like Groups.</p>
                    <a href="#"
                        class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                        Get started
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>


        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 dark:text-white">Start your free trial today</h2>
                    <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Try Flowbite Platform for 30 days. No credit card required.</p>
                    <a href="#"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Free
                        trial for 30 days</a>
                </div>
            </div>
        </section>
    </PcpLayout>
</template>

<script setup>
import { useForm, usePage } from "@inertiajs/vue3";
import { onMounted, onUpdated, ref } from "vue";
import PcpLayout from "@/Layouts/PcpLayout.vue";
let searching = ref(false);

const props = defineProps({
    flash: Object
})

const form = useForm({
    'regno': 'Kj16cnz',
    error_msg: ''
});

function submitRegNo() {
    form.error_msg = '';
    let result = form.post(route('pcp.search'), {
        preserveScroll: true
    });
    searching.value = true;
    console.log(result)
}

onMounted(function () {

})
onUpdated(function () {
    if (props.flash?.search_error != undefined) {
        searching.value = false;
        form.error_msg = props.flash?.search_error;
    }
})


</script>

<style>
.search_error {
    @apply border border-red-500 bg-gray-100 p-3 mt-3 rounded-lg text-red-500;
}
</style>
