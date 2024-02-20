<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <GuestLayout>
        <div>
            <main class="main-content mt-0">
                <div class="page-header align-items-start min-vh-50 pt-7 pb-9 m-3 border-radius-lg" style="
                        background-image: url('image/setup_images/2.jpg');
                    ">
                    <span class="mask bg-gradient-dark opacity-6"></span>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 text-center mx-auto">
                                <h1 class="text-white mb-2 mt-5">Login!</h1>
                                <p class="text-lead text-white">
                                    Experience the beauty of life by logging  with us today.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                            <div class="card mt-5">
                                <div class="card-header pb-0 text-start">
                                    <h3 class="font-weight-bolder">
                                        Welcome back
                                    </h3>
                                    <p class="mb-0">
                                        Enter your email and password to sign in
                                    </p>
                                </div>

                                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                                    {{ status }}
                                </div>

                                <div class="card-body">
                                    <form @submit.prevent="submit">
                                        <div class="">
                                            <InputLabel for="email" value="Email" />
                                            <div class="mb-3">
                                                <TextInput id="email" type="email" class="form-control" placeholder="Email"
                                                    aria-label="Email" v-model="form.email" required autofocus
                                                    autocomplete="username" />
                                                <InputError class="mt-2" :message="form.errors.email" />
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <InputLabel for="password" value="Password" />
                                            <div class="mb-">
                                                <TextInput id="password" type="password" placeholder="Password"
                                                    aria-label="Password" class="form-control" v-model="form.password"
                                                    required autocomplete="current-password" />
                                                <InputError class="mt-2" :message="form.errors.password
                                                    " />
                                            </div>
                                        </div>

                                        <div class="form-check form-switch mt-3">
                                            <Checkbox class="form-check-input" name="remember"
                                                v-model:checked="form.remember" />
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>

                                        <div class="text-center">
                                            <PrimaryButton class="btn btn-primary w-100 mt-4 mb-0" :class="{
                                                'opacity-25':
                                                    form.processing,
                                            }" :disabled="form.processing">
                                                Log in
                                            </PrimaryButton>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto text-sm mt-3 mb-0 ">
                                        <p>don't you have an account <Link href="/register"  class="text-dark font-weight-bolder">Register</Link></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- footer -->
        <footer class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4 mx-auto text-center"></div>
                    <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-dribbble"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-twitter"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-instagram"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-pinterest"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-github"></span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto text-center mt-1">
                        <p class="mb-0 text-secondary"></p>
                    </div>
                </div>
            </div>
        </footer>
    </GuestLayout>
</template>
