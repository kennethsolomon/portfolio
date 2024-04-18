<script setup>
import {Head, Link, router} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {ref} from "vue";

defineProps({
    post: {
        type: Object,
    },
    readDuration: {
        type: String,
    },
    content: {
        type: String
    }
});

</script>

<template>
    <Head title="Blog" />

    <div class="flex-grow leading-relaxed w-full max-w-5xl mx-auto">
        <div class="mt-12 mx-4">
            <div class="flex justify-between items-baseline">
                <h1 class="text-4xl md:text-5xl text-zinc-300 font-semibold font-jolly" v-text="post.title"></h1>
                <Link href="/posts">
                    <h1 class="text-3xl text-teal-500 hover:text-teal-600 font-semibold font-jolly cursor-pointer hidden md:block">Back</h1>
                </Link>
            </div>

            <p class="text-sm md:text-md font-black mt-2 text-zinc-400" v-text="post.publish_date + ' | ' + readDuration"></p>

            <div class="text-zinc-300 mt-5" v-html="content"></div>
        </div>
    </div>

    <GuestLayout>
    </GuestLayout>
</template>

<style scoped>

</style>
