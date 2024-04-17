<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import HeaderLayout from '@/Layouts/Header.vue'
import FooterLayout from '@/Layouts/Footer.vue'
</script>

<template>
    <div class="">
        <HeaderLayout></HeaderLayout>

        <slot />

        <FooterLayout></FooterLayout>
    </div>
</template>
