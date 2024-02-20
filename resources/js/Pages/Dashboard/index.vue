<template>
    <AppLayout>
        <template #content>
            <div class="container-fluid py-4 pt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                                        Total HOTEL TPYES
                                                    </p>
                                                    <h5 class="font-weight-bolder">
                                                        {{ hotelTypes }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                                        TOTAL ROOMS TYPES
                                                    </p>
                                                    <h5 class="font-weight-bolder">
                                                        {{ roomTypes }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                                        TOTAL HOTELS
                                                    </p>
                                                    <h5 class="font-weight-bolder">
                                                        {{ hotelCount }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                                    <i class="ni ni-paper-diploma text-lg opacity-10"
                                                        aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                                        Total images
                                                    </p>
                                                    <h5 class="font-weight-bolder">
                                                        {{ imagesCount }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import axios from 'axios';
import { ref,onMounted } from 'vue';

const roomTypes = ref(null);
const hotelTypes = ref(null);
const imagesCount = ref(null);
const hotelCount = ref(null);

const getCount = async () => {
   
    try {
        const hotel_types = await axios.get(route('hotel_types.count'));
        const room_types = await axios.get(route('room_types.count'));
        const hotels = await axios.get(route('hotel_tab.count'));
        const hotel_images = await axios.get(route('hotel_image.count'));

        roomTypes.value=room_types.data;
        hotelTypes.value=hotel_types.data;
        hotelCount.value=hotels.data;
        imagesCount.value=hotel_images.data;
        
    } catch (error) {
        console.log('Error:', error);
    }
}


onMounted(getCount)
</script>

<style>

.card{
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.692);
    border-radius: 8px;
}

.icon-shape{
    font-size: xx-large;
}
</style>
