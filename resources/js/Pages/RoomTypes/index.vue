<template>
    <AppLayout title="Room Types">
        <template #content>
            <section class="main-section mt-1">
                <div class="">
                    <h1 class="display-5 text-left header">Room Types</h1>
                </div>
                <section class="edit-exist-modal-section mt-5">
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Room</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="from-content">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Hotel Type Name</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="1">Suite</option>
                                                    <option value="2">Starndard</option>
                                                    <option value="3">Delux</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Price Range</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="1">Rs.4000 - 8000 per day</option>
                                                    <option value="2">Rs.10000 - 30000 per day</option>
                                                    <option value="3">Rs.30000 - 50000 per day</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Max Occupancy</label>
                                                <input class="form-control" type="text" placeholder="4 - 6"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Extra</label>
                                                <input class="form-control" type="text" placeholder="if any extra info"
                                                    aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="table-section ">
                    <div class="card col-12">
                        <div class="card-body">
                            <div class="">
                                <form>
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Room Type Name</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="1">Suite</option>
                                                    <option value="2">Starndard</option>
                                                    <option value="3">Delux</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Price Range</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="1">Rs.4000 - 8000 per night</option>
                                                    <option value="2">Rs.10000 - 30000 per night</option>
                                                    <option value="3">Rs.30000 - 50000 per night</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Occupancy</label>
                                                <input class="form-control" type="text" placeholder="4 - 6"
                                                    aria-label="default input example">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Bed Configuration</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="1">1 King. 2Twins</option>
                                                    <option value="2">1 Queen</option>
                                                    <option value="3">1King, 1Twin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Extra</label>
                                                <input class="form-control" type="text" placeholder="if any extra info"
                                                    aria-label="default input example">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div class="mt-1">
                                                <label for="exampleInputPassword1" class="form-label"></label>
                                                <button type="submit" class="form-control btn btn-success add-btn">Add</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <table class="table text-center mt-5">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">Type Name</th>
                                        <th scope="col">Price range</th>
                                        <th scope="col">Max Occupancy</th>
                                        <th scope="col"> Bed Configuration</th>
                                        <th scope="col">Extra</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>
                                            <div class="row">
                                                <!-- Button trigger modal -->
                                                <div class="action-buttons">
                                                    <button class="action-single-button fa-solid fa-pencil edit-button"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    </button>
                                                    <button
                                                        class="action-single-button action-button fa-solid fa-trash delete-button">
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
import AppLayout from '@/Layouts/AppLayout.vue'


</script>
<style scoped>
.header {
    color: #ffffff;
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