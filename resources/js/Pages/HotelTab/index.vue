<template>
    <AppLayout title="Hotel Types">
        <template #content>
            <section class="main-section">
                <section class="add-new-modal-section">
                    <div class="">
                        <div class="sub-header">
                            <div class="left-content">
                                <i class="fa-solid fa-table"></i>
                                <h1 class="text-left sub-header-text">Hotel Management</h1>
                            </div>
                        </div>
                        <h1 class="text-left header">Hotels</h1>
                    </div>
                </section>

                <section class="mt-4 ">
                    <div class="card back">
                        <div class="">
                            <div class="content m-2">
                                <input type="radio" name="slider" checked id="home">
                                <input type="radio" name="slider" id="blog">

                                <div class="list">
                                    <label for="home" class="home">
                                        <i class="fa-solid fa-hotel"></i>
                                        <span class="title">Hotel</span>
                                    </label>
                                    <label for="blog" class="blog">
                                        <i class="fa-solid fa-image"></i>
                                        <span class="title">Images</span>
                                    </label>
                                    <div class="slider"></div>

                                </div>

                                <!-- hotel information -->
                                <div class="text-content mt-2">
                                    <div class="home text section">
                                        <div class="title information-card-title">Hotel information</div>
                                        <div class="card ">
                                            <form>
                                                <input type="hidden">
                                                <div class="row">
                                                    <div class="row ">
                                                        <div class="col m-1">
                                                            <div class="mb-1">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Hotel
                                                                    Name</label>
                                                                <input type="email" class="form-control input-text"
                                                                    v-model="hotelData.name" disabled
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="Mount Lavaina">
                                                            </div>
                                                        </div>
                                                        <div class="col m-1">
                                                            <div class="mb-1">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Category</label>

                                                                <select class="form-select  input-text primary"
                                                                    v-model="hotelData.category" disabled
                                                                    aria-label="Default select example">
                                                                    <option value="Luxury Hotels">Luxury Hotels</option>
                                                                    <option value="Mid-Range Hotels">Mid-Range Hotels
                                                                    </option>
                                                                    <option value="Budget Hotel">Budget Hotels</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-10 m-1">
                                                            <div class="mb-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Address</label>
                                                                <input type="email" class="form-control input-text"
                                                                    v-model="hotelData.address"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-1 m-1">
                                                            <div class="mb-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Postal code</label>
                                                                <input type="text" class="form-control input-text"
                                                                    v-model="hotelData.postel_code"
                                                                    id="exampleFormControlInput1" placeholder="70200">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col m-1">
                                                            <div class="mb-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Website</label>
                                                                <input type="email" class="form-control input-text"
                                                                    v-model="hotelData.website"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col m-1">
                                                            <div class="mb-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Contact number</label>
                                                                <input type="email" class="form-control input-text"
                                                                    v-model="hotelData.contact_number"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col m-1">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Location</label>
                                                                <select class="form-select input-text"
                                                                    aria-label="Default select example"
                                                                    v-model="hotelData.location" disabled>
                                                                    <option value="Location 1">Location 1</option>
                                                                    <option value="Location 2">Location 2</option>
                                                                    <option value="Location 3">Location 3</option>
                                                                    <option value="Location 4">Location 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col m-1">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Check-in and Check-out Times</label>
                                                                <input type="email" class="form-control input-text"
                                                                    v-model="hotelData.check_in_out_process"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col m-1">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">email</label>
                                                                <input type="email" class="form-control input-text"
                                                                    v-model="hotelData.email" id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col m-1">
                                                            <div class="mb-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Description</label>
                                                                <input type="email" class="form-control input-text"
                                                                    v-model="hotelData.description"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="submit-button">
                                                    <button class="btn btn-secondary submit-button"
                                                        @click.prevent="resetData()">Reset</button>

                                                    <button @click.prevent="createHotel()"
                                                        class="btn btn-success submit-button">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- hotel image -->

                                    <div class="blog text section field">
                                        <div class="row">
                                            <div class="col">
                                                <div class="title information-card-title ">Hotel images</div>
                                            </div>
                                            <div class="col pt-2 image-header">
                                                <div class="fa-regular fa-file-image image-upload">
                                                    <input type="file" class="form-control" id="fileInput"
                                                        @change="onImageChange">
                                                </div>
                                                <button @click.prevent="createHotelImage">Submit Image</button>
                                            </div>
                                        </div>
                                        <div class="image-setup image-section">

                                            <div class="card  image-section" style="width: 18rem;">
                                                <img src="" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>

                                            <div class="card  image-section" style="width: 18rem;">
                                                <img src="" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </template>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref, onMounted } from 'vue';
import axios from 'axios';

const getHotelEntryData = () => {
    const urlParams = new URLSearchParams(window.location.search);
    const hotelEntryParam = urlParams.get('hotel_entry');
    if (hotelEntryParam) {
        const hotelEntryData = JSON.parse(decodeURIComponent(hotelEntryParam));
        hotelData.value.hotel_entry_id = hotelEntryData.id;
        hotelData.value.name = hotelEntryData.name;
        hotelData.value.category = hotelEntryData.category;
        hotelData.value.location = hotelEntryData.location;
    }
}

const hotelData = ref({
    name: '',
    category: '',
    address: '',
    postel_code: '',
    website: '',
    contact_number: '',
    location: '',
    check_in_out_process: '',
    email: '',
    description: '',
    hotel_entry_id: '',
});

const hotelImageData = ref({
    status: '',
    image: '',
    hotel_id: '',
});

const resetData = () => {
    hotelData.value.address = '',
        hotelData.value.postel_code = '',
        hotelData.value.website = '',
        hotelData.value.contact_number = '',
        hotelData.value.check_in_out_process = '',
        hotelData.value.email = '',
        hotelData.value.description = ''
}

const createHotel = async () => {
    try {
        const response = await axios.post(route('hotel_tab.store'), hotelData.value);
        console.log(response);
        hotelImageData.value.hotel_id = response.data.hotel.id;
        console.log(hotelImageData.value.hotel_id);

    } catch (error) {
        console.log(error);
    }
}

const createHotelImage = async () => {
    try {
        const formData = new FormData();
        formData.append('image', hotelImageData.value.image);
        formData.append('hotel_id', hotelImageData.value.hotel_id);
        const response = await axios.post(route('hotel_image'), formData);
        console.log(response);
    } catch (error) {
        console.log('Error:', error);
    }
}
const onImageChange = (e) => {
    console.log(e.target.files[0]);
    hotelImageData.value.image = e.target.files[0];
}

const selectImage = () => {
    document.getElementById('fileInput').click();
}

const pickFile = () => {
    let input = document.getElementById('fileInput');
    let file = input.files;
    if (file && file[0]) {
        hotelImageData.value.image = file[0];
    }
}

onMounted(getHotelEntryData);

</script>

<style scoped>
@import "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css";

.image-header {
    align-items: right;
    display: flex;
    justify-content: right;
    padding-right: 3vh;
}

.image-button {
    padding-top: 1vh;
    padding: 1vh;
    color: black;
}

.image-button:hover {
    padding: 1vh;
    background: #2fc260;
    color: rgb(0, 0, 0);
}

.back {
    background-color: transparent;
    box-shadow: none;
}

.image-upload {
    margin: 1vh;

}

.image-upload:hover {
    font-size: large;
}

.field {
    overflow: auto;
}

.image-section {
    background-color: white;
}

.image-section {
    float: left;
    overflow: hidden;
    margin: 2vh;
}

* {
    margin: 0;
    padding: 0;

}


::selection {
    background: #008bad;
    color: #ffffff;
}

.container {
    max-width: auto;
    width: 100%;
    padding: 10px;
    background: #1d1010;
    margin: 0 20px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}


.content {
    display: flex;
    /* align-items: center; */
    justify-content: space-between;
}

.content .list {
    display: flex;
    flex-direction: column;
    width: 20%;
    margin-right: 80px;
    position: relative;
}

.content .list label {
    height: 60px;
    font-size: 22px;
    font-weight: 500;
    line-height: 60px;
    cursor: pointer;
    padding-left: 25px;
    transition: all 0.5s ease;
    color: #333;
    z-index: 12;
}

#home:checked~.list label.home,
#blog:checked~.list label.blog,
#help:checked~.list label.help,
#code:checked~.list label.code,
#about:checked~.list label.about {
    color: #ffffff;
}

.content .list label:hover {
    color: #236d01;
}

.content .slider {
    position: absolute;
    left: 0;
    top: 0;
    height: 60px;
    width: 100%;
    border-radius: 5px;
    background: #2fc260;
    transition: all 0.4s ease;
}

#home:checked~.list .slider {
    top: 0;
}

#blog:checked~.list .slider {
    top: 60px;
}

#help:checked~.list .slider {
    top: 120px;
}

#code:checked~.list .slider {
    top: 180px;
}

#about:checked~.list .slider {
    top: 240px;
}

.content .text-content {
    width: 70%;
    height: 100%;
}

.content .text {
    display: none;
}


.content .text p {
    text-align: justify;
}

.content .text-content .home {
    display: block;
}

#home:checked~.text-content .home,
#blog:checked~.text-content .blog,
#help:checked~.text-content .help,
#code:checked~.text-content .code,
#about:checked~.text-content .about {
    display: block;
}

#blog:checked~.text-content .home,
#help:checked~.text-content .home,
#code:checked~.text-content .home,
#about:checked~.text-content .home {
    display: none;
}

.content input[type="radio"] {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.header {
    color: #350808;
    font-size: large;
}

.sub-header {
    color: #ffffff;
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
    color: white;
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

.section {
    max-width: 130vh;
    max-height: 70vh;

}

.input-text {
    font-size: large;
    padding: 4px;
}


.submit-button {
    align-items: right;
    padding: 1vh;
    display: flex;
    justify-content: right;
    margin-right: 1vh;
}

.information-card-title {
    font-weight: bolder;
    padding-bottom: 2rem;
}
</style>