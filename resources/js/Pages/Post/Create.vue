<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import TextArea from "@/Components/TextArea.vue";
import MarkdownEditor from "@/Components/MarkdownEditor.vue";

const form = useForm({
    title: '',
    body: '',
});

const createPost = () => form.post(route('posts.store'));
</script>

<template>
    <Head title="Dashboard" />

    <div class="flex-grow leading-relaxed w-full max-w-5xl mx-auto">
        <div class="mt-12 mx-4">
            <h1 class="text-zinc-200 text-2xl font-bold">Create a Post</h1>

            <form @submit.prevent="createPost" class="mt-6">
                <div>
                    <InputLabel for="title" class="sr-only">Title</InputLabel>
                    <TextInput id="title" class="w-full" v-model="form.title" placeholder="Give it a great title..." />
                    <InputError :message="form.errors.title" class="mt-1" />
                </div>

                <div class="mt-3">
                    <InputLabel for="body" class="sr-only">Body</InputLabel>
                    <MarkdownEditor v-model="form.body" />
                    <TextArea id="body" v-model="form.body" rows="25" class="mt-2" />
                    <InputError :message="form.errors.body" class="mt-1" />
                </div>

                <div class="mt-3">
                    <PrimaryButton type="submit">Create Post</PrimaryButton>
                </div>
            </form>
        </div>
    </div>
</template>
