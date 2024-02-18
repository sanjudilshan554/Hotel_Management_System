<template>
    <AppLayout title="Hotel Types">
        <template #content>
            <section class="main-section mt-1">
                <section class="add-new-modal-section">
                    <div class="">
                        <div class="sub-header">
                            <div class="left-content">
                                <i class="fa-solid fa-table"></i>
                                <h1 class="text-left sub-header-text">Hotel Management</h1>
                            </div>
                        </div>
                        <h1 class="text-left header">Hotel Types</h1>
                    </div>
                </section>

                <section class="mt-4">
                    <div class="card ">
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
                                        <span class="title">Blog</span>
                                    </label>
                                    <div class="slider"></div>
                                    
                                </div>

                                <!-- hotel information -->
                                <div class="text-content mt-2">
                                    <div class="home text section">
                                        <div class="title information-card-title">Hotel information</div>
                                        <div class="card ">
                                            <form>
                                                <div class="row">
                                                    <div class="row ">
                                                        <div class="col m-1">
                                                            <div class="mb-1">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Hotel
                                                                    Name</label>
                                                                <input type="email" class="form-control input-text"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col m-1">
                                                            <div class="mb-1">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Category</label>

                                                                <select class="form-select  input-text primary"
                                                                    aria-label="Default select example">
                                                                    <option value="1">Luxury Hotels</option>
                                                                    <option value="2">Mid-Range Hotels</option>
                                                                    <option value="3">Budget Hotels</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col m-1">
                                                            <div class="mb-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Address</label>
                                                                <input type="email" class="form-control input-text"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col m-1">
                                                            <div class="mb-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Website</label>
                                                                <input type="email" class="form-control input-text"
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
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col m-1">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Latitude and Longitude</label>
                                                                <input type="email" class="form-control input-text"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col m-1">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Check-in and Check-out Times</label>
                                                                <input type="email" class="form-control input-text"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col m-1">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Room type</label>
                                                                <select class="form-select  input-text primary"
                                                                    aria-label="Default select example">
                                                                    <option value="1">Luxury Hotels</option>
                                                                    <option value="2">Mid-Range Hotels</option>
                                                                    <option value="3">Budget Hotels</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col m-1">
                                                            <div class="mb-2">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Description</label>
                                                                <input type="email" class="form-control input-text"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="submit-button">
                                                    <button type="submit"
                                                        class="btn btn-secondary submit-button">Reset</button>
                                                    <button type="submit"
                                                        class="btn btn-success submit-button">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="blog text section">
                                        <div class="title information-card-title">Hotel images</div>
                                        <div class="card imageflow">
                                            <div class="overflow-auto" style="max-height: 300px;">

                                                <div class="card imgcard" style="width: 18rem;">
       

                                                    
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <img src="" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
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
                    </div>
                </section>

            </section>
        </template>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'


</script>

<style scoped>
@import "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css";

* {
    margin: 0;
    padding: 0;

}


::selection {
    background: #6d50e2;
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
    color: #fff;
}

.content .list label:hover {
    color: #421ed3;
}

.content .slider {
    position: absolute;
    left: 0;
    top: 0;
    height: 60px;
    width: 100%;
    border-radius: 5px;
    background: #6d50e2;
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
    max-width: 100vh;
    max-height: 65vh;

}

.input-text {
    font-size: large;
    padding: 5px;
}

.imageflow {

    max-width: 1200px;

    display: flex;
    flex-direction: row;
}

.submit-button {
    align-items: right;
    padding: 1vh;
    display: flex;
    justify-content: right;
    margin-right: 1vh;
}

.information-card-title{
    font-weight: bolder;
    padding-bottom: 2rem;
}
</style>