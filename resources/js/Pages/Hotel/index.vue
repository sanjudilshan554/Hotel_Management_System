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
                                                    <input class="form-control" type="text" placeholder="Mount Lavania"
                                                        aria-label="default input example">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Hotel Category</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="1">Luxury Hotels</option>
                                                        <option value="2">Mid-Range Hotels</option>
                                                        <option value="3">Budget Hotels</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Location</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cansel</button>
                                            <button type="submit" class="btn btn-success">Create</button>
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
                                        <td>Mark</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
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


</script>
<style scoped>
.header {
    color: #ffffff;
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
</style>