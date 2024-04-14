<script setup>
import {Head, Link, useForm} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {ref} from "vue";

defineProps({
    posts: {
        type: Array,
    },
});

const form = useForm({
    search: '',
});

const searchText = ref(null);

const searchPost = () => form.post(route('posts.index'), {
    onSuccess: () => {
        searchText.value = form.search !== '' ? `Searched strings: ${form.search}` : '';
        form.reset();
    }
});
</script>

<template>
    <Head title="Dashboard" />

    <div class="flex-grow leading-relaxed w-full max-w-5xl mx-auto">
        <div class="mt-4 mx-4">
            <h1 class="text-5xl md:text-6xl text-zinc-300 font-semibold font-jolly">
                Blog
            </h1>
            <p class="font-bold text-lg text-zinc-400 mt-12" v-text="searchText"></p>
            <form class="mt-2 flex" @submit.prevent="searchPost">
                <input v-model="form.search" type="search" value="" name="search" id="search" class="flex-grow border-zinc-400 border-l border-b border-t rounded-l pr-0 p-2 text-zinc-300 bg-transparent  focus:border-teal-400" placeholder="The sky's the limit...">
                <button class="flex-shrink-0 border-zinc-400 border border-l-0 rounded-r p-2 hover:bg-zinc-100 bg-zinc-300 text-zinc-900" type="submit">
                    <span class="font-black">Search</span>
                </button>
            </form>

            <div class="mt-5">
                <div v-for="post in posts" key="post.id">
                    <Link :href="'/posts/'+post.id+'/'+post.slug" class="block group">
                        <p class="text-2xl md:text-3xl text-zinc-300 group-hover:text-zinc-400 leading-tight md:line-clamp-1 font-extrabold" v-text="post.title"></p>
                        <span class="text-xs md:text-sm text-zinc-400 group-hover:text-zinc-500" v-text="post.publish_date"></span>
                        <p class="text-md md:text-xl mt-1 text-zinc-400 group-hover:text-zinc-500 line-clamp-3" v-text="post.excerpt"></p>
                    </Link>
                </div>
            </div>

        </div>
    </div>

    <GuestLayout>
    </GuestLayout>
</template>

<style scoped>

</style>
