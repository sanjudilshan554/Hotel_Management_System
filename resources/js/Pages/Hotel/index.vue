<template>
    <AppLayout title="Hotel Types">
        <template #content>
            <section class="main-section mt-1">
                <section class="add-new-modal-section">
                    <div class="">
                        <div class="sub-header">
                            <div class="left-content">
                                <i class="fa-solid fa-house"></i>
                                <h1 class="text-left sub-header-text">Hotel Management</h1>
                            </div>
                        </div>
                        <h1 class="text-left header">Hotel Types</h1>
                    </div>

                 <!-- Modal -->
                    <div class="">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Hotel</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="from-content">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Hotel Name</label>
                                                    <input class="form-control" type="text" placeholder="Mount Lavania" v-model="HotelEntry.name"
                                                        aria-label="default input example" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Hotel Category</label>
                                                    <select class="form-select" aria-label="Default select example" v-model="HotelEntry.category" required>
                                                        <option value="Luxury Hotels">Luxury Hotels</option>
                                                        <option value="Mid-Range Hotels">Mid-Range Hotels</option>
                                                        <option value="Budget Hotel">Budget Hotels</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Location</label>
                                                        <select class="form-select" aria-label="Default select example" v-model="HotelEntry.location" required>
                                                        <option value="Location 1">Location 1</option>
                                                        <option value="Location 2">Location 2</option>
                                                        <option value="Location 3">Location 3</option>
                                                        <option value="Location 4">Location 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cansel</button>
                                            <button type="submit" class="btn btn-success" @click.prevent="createHotelEntry()">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="table-section mt-5">
                    <div class="card col-12">
                        <div class="card-header">
                            <button class="btn btn-outline-success  btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-plus add-icon"></i> create new
                            </button>
                            <div class="card-body">
                            <table class="table text-center">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">Hotel name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>1</td>
                                        <!-- <td>{{ singleData.value.name }}</td> -->
                                        <!-- <td>{{ singleData.value.category }}</td>
                                        <td>{{ singleData.value.location }}</td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </section>
            </section>
        </template>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import axios from 'axios';
import { ref,onMounted } from 'vue';

const HotelEntry = ref({
    name:'',
    category:'',
    location:'',
});

const singleData = ([]);

const createHotelEntry = async () => {
    if (!HotelEntry.value.name || !HotelEntry.value.category || !HotelEntry.value.location) {
        
        console.log('Please full');
        return;
    }

    try {
        const response = await axios.post(route('hotel.entry.store'), HotelEntry.value);
        const hotel_entry = response.data.hotel_entry;
        if (hotel_entry) {
            const params = new URLSearchParams();
            params.append('hotel_entry', JSON.stringify(hotel_entry));
            window.location.href = '/hotel/tab/?' + params.toString();
        } else {
            console.log('No data');
        }
    } catch (error) {
        console.log('Error:', error);
    }
}

const get = async () => {
    try{
        const response = await axios.get(route('hotel.entry.get'));
        singleData.value=response.data.hotel_entry;

    }catch(error){
        console.log('Error:',error);
    }
}

onMounted(get);
</script>

<style scoped>
.header {
    color: #554646;
    font-size: large;
}

.sub-header {
    color: #3f9ac4;
    font-size: xx-large;
    display: flex;
    justify-content: space-between;
    align-items: center;

}

.left-content {
    display: flex;
    align-items: center;
}

.sub-header-text {
    font-size: large;
    color: rgb(59, 150, 142);
    margin-left: 1vh;
}

.action-buttons {
    flex-wrap: nowrap;
}

.action-single-button {
    margin: 1vh;
    background-color: none;
    border: none;
}

.delete-button {

    color: red;
}

.edit-button {
    color: blue;
}

.main-section {
    margin-right: 5rem;
    margin-left: 5rem;
}

.card {
    border-radius: 5px;
}

.add-icon {
    margin-right: 1vh;
}
</style>