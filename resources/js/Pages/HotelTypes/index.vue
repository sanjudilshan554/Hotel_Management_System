<template>
    <AppLayout title="Hotel Types">
        <template #content>
            <section class="main-section mt-1">
                <section class="add-new-modal-section">
                    <div class="">
                        <h1 class="display-5 text-left header">Hotel Types</h1>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="mt-5">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#addHotelTypeModal">
                            Add New
                        </button>
                    </div>
                    <!-- create modal -->
                    <div class="modal fade" id="addHotelTypeModal" tabindex="-1" aria-labelledby="addHotelTypeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Hotel Type</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="from-content">

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                                <input class="form-control" type="text" placeholder="Mount Lavinia" v-model="hotelTypes.name"
                                                    aria-label="default input example">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Price Range</label>
                                                <select class="form-select" aria-label="Default select example " v-model="hotelTypes.price_range">
                                                    <option value="1">Rs.40000 - 80000 per day</option>
                                                    <option value="2">Rs.100000 - 300000 per day</option>
                                                    <option value="3">Rs.300000 - 500000 per day</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Max Occupancy</label>
                                                <input class="form-control" type="text" placeholder="400 - 300 people" v-model="hotelTypes.max_occupancy"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Extra</label>
                                                <input class="form-control" type="text" placeholder="if any extra info" v-model="hotelTypes.extra"
                                                    aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button @click.prevent="createHotelType" class="btn btn-success">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="edit-exist-modal-section">
                    <!-- update -->
                    <div class="modal fade" id="editHotelTypeModal" tabindex="-1" aria-labelledby="editHotelTypeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit exist Hotel</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="from-content">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                                <input class="form-control" type="text" placeholder="4 - 6" v-model="hotelTypes.name"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Price Range</label>
                                                <select class="form-select" aria-label="Default select example" v-model="hotelTypes.price_range">
                                                    <option value="1">Rs.40000 - 80000 per day</option>
                                                    <option value="2">Rs.100000 - 300000 per day</option>
                                                    <option value="3">Rs.300000 - 500000 per day</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Max Occupancy</label>
                                                <input class="form-control" type="text" placeholder="4 - 6" v-model="hotelTypes.max_occupancy"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Extra</label>
                                                <input class="form-control" type="text" placeholder="if any extra info" v-model="hotelTypes.extra"
                                                    aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cansel</button>
                                        <button type="submit" class="btn btn-primary" @click.prevent="update(hotelTypes.id)">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="table-section ">
                    <div class="card col-12">
                        <div class="card-body">
                            <table class="table text-center">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price range</th>
                                        <th scope="col">Max Occupancy</th>
                                        <th scope="col">Extra</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(value, key) in hotelTypeData" :key="key">
                                        <td>{{ key }}</td>
                                        <td>{{ value.name }}</td>
                                        <td> 
                                           <div v-if="value.price_range == 1">
                                            Rs.40000 - 80000 per day
                                            </div>
                                            <div v-else-if="value.price_range == 2">
                                                Rs.100000 - 300000 per day
                                            </div>
                                            <div v-else-if="value.price_range == 2">
                                                Rs.300000 - 500000 per day
                                            </div>
                                        </td>
                                        <td>{{ value.max_occupancy }}</td>
                                        <td>{{ value.extra }}</td>
                                        
                                        <td>
                                            <div class="row">
                                                <div class="action-buttons">
                                                    <button class="action-single-button fa-solid fa-pencil edit-button"
                                                        data-bs-toggle="modal" data-bs-target="#editHotelTypeModal" @click.prevent="find(value.id)">
                                                    </button>
                                                    <button
                                                        class="action-single-button action-button fa-solid fa-trash delete-button" @click.prevent="deleteHotelType(value.id)"> 
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </section>
        </template>
    </AppLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import AppLayout from '@/Layouts/AppLayout.vue'


const hotelTypes = ref({
    name: '',
    price_range:'',
    max_occupancy:'',
    extra:'',
});

const hotelTypeData = ref(null);

const singlehotelTypeData = ref(null);

const createHotelType = async ()=>{
    try{
        const response = await axios.post(route('hotel_types.store'),hotelTypes.value);
        console.log(response.data);
        getAll();
    }catch(error){
        console.log('Error:',error );
    }
};

const getAll = async () => {
    try {
        const response = await axios.get(route('hotel_types.all'));
        hotelTypeData.value = response.data.hotel_types;
        console.log(hotelTypeData.value);
    } catch (error) {
        console.error('Error fetching hotel types data:', error);
    }
};

const deleteHotelType = async (id) => {
    try {
        const response = await axios.delete(route('hotel_types.delete', id));
        console.log(response);
        getAll();
    } catch(error) {
        console.log('Error:', error);
    }
};


const find = async (id) => {
    try{
        const respones = await axios.get(route('hotel_types.find', id));
        hotelTypes.value= respones.data.hotel_types;
        hotelTypes.value.id=respones.data.hotel_types.id;
    }catch(error){
        console.log('Error:',error);
    }
};

const update = async (id) =>{
    try{
        console.log(id);
        const updateFields={
            name: hotelTypes.value.name,
            price_range: hotelTypes.value.price_range,
            max_occupancy: hotelTypes.value.max_occupancy,
            extra: hotelTypes.value.extra,
        }
        const response = await axios.post(route('hotel_types.update',id), updateFields);
        getAll();
    }catch(error){
        console.log(error);
    }
};

onMounted(getAll);
</script>

<style scoped>

.header {
    color: #585555;
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
.card{
    border-radius: 8px;
}
</style>