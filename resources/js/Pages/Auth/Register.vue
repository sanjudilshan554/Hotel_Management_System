<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>
<template>
    <GuestLayout>
        <div>
            <main class="main-content mt-0">
                <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="
                        background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg');
                        background-position: top;
                    ">
                    <span class="mask bg-gradient-dark opacity-6"></span>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 text-center mx-auto">
                                <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                                <p class="text-lead text-white">
                                    Use these awesome forms to login or create
                                    new account in your project for free.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                            <div class="card z-index-0">
                                <div class="card-body">
                                    <form @submit.prevent="submit">
                                        <div class="mb-3">
                                            <InputLabel for="name" value="Name" />

                                            <TextInput type="text" class="form-control" v-model="form.name" required
                                                autofocus autocomplete="name" />

                                            <InputError class="mt-2" :message="form.errors.name" />
                                        </div>
                                        <div class="mb-3">
                                            <InputLabel for="email" value="Email" />

                                            <TextInput id="email" type="email" class="form-control" v-model="form.email"
                                                required autocomplete="username" />

                                            <InputError class="mt-2" :message="form.errors.email" />
                                        </div>

                                        <div class="mb-3">
                                            <div class="mt-4">
                                                <InputLabel for="password" value="Password" />

                                                <TextInput id="password" type="password" class="form-control"
                                                    v-model="form.password" required autocomplete="new-password" />

                                                <InputError class="mt-2" :message="form.errors.password
                                                    " />
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <InputLabel for="password_confirmation" value="Confirm Password" />

                                            <TextInput id="password_confirmation" type="password" class="form-control"
                                                v-model="form.password_confirmation
                                                    " required autocomplete="new-password" />

                                            <InputError class="mt-2" :message="form.errors
                                                    .password_confirmation
                                                " />
                                        </div>
                                        <div class="form-check form-check-info text-start">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                                checked />
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree the
                                                <a href="javascript:;" class="text-dark font-weight-bolder">Terms and
                                                    Conditions</a>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <PrimaryButton class="btn bg-gradient-dark w-100 my-4 mb-2" :class="{
                                                'opacity-25':
                                                    form.processing,
                                            }" :disabled="form.processing">
                                                Register
                                            </PrimaryButton>
                                        </div>
                                        <p class="text-sm mt-3 mb-0">
                                            Already have an account?
                                            <a href="javascript:;" class="text-dark font-weight-bolder">Sign in</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
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
                        <p class="mb-0 text-secondary">Copyright ©</p>
                    </div>
                </div>
            </div>
        </footer>
    </GuestLayout>
</template>
