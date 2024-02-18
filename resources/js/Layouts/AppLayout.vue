<template>
    <div>
        <!DOCTYPE html>
        <html lang="en">
            <Head :title="title ? title : 'Admin'">
                <meta charset="utf-8" />
                <meta
                    name="viewport"
                    content="width=device-width, initial-scale=1, shrink-to-fit=no"
                />
                <link
                    rel="apple-touch-icon"
                    sizes="76x76"
                    href="../../assets/img/apple-icon.png"
                />
                <link
                    rel="icon"
                    type="image/png"
                    href="../../assets/img/favicon.png"
                />
                <title>Argon Dashboard 2 PRO by Creative Tim</title>

                <link
                    rel="canonical"
                    href="https://www.creative-tim.com/product/argon-dashboard-pro"
                />

                <meta
                    name="keywords"
                    content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, Argon Dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, soft design, soft dashboard bootstrap 5 dashboard"
                />
                <meta
                    name="description"
                    content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you."
                />

                <meta name="twitter:card" content="product" />
                <meta name="twitter:site" content="@creativetim" />
                <meta
                    name="twitter:title"
                    content="Argon Dashboard PRO by Creative Tim"
                />
                <meta
                    name="twitter:description"
                    content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you."
                />
                <meta name="twitter:creator" content="@creativetim" />
                <meta
                    name="twitter:image"
                    content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/argon-dashboard-pro.jpg"
                />

                <meta property="fb:app_id" content="655968634437471" />
                <meta
                    property="og:title"
                    content="Argon Dashboard PRO by Creative Tim"
                />
                <meta property="og:type" content="article" />
                <meta
                    property="og:url"
                    content="https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/landing"
                />
                <meta
                    property="og:image"
                    content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/argon-dashboard-pro.jpg"
                />
                <meta
                    property="og:description"
                    content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you."
                />
                <meta property="og:site_name" content="Creative Tim" />

             
            </Head>

            <body class="g-sidenav-show  bg-gray-100 body-background-image">
                <noscript
                    ><iframe
                        src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                        height="0"
                        width="0"
                        style="display: none; visibility: hidden"
                    ></iframe
                ></noscript>

                <!-- background color are there -->
                <div class="min-height-300 body-background-image position-absolute w-100"> 
                    <SideBar />

                    <main
                        class="main-content position-relative border-radius-lg"
                    >
                        <Navbar />

                        <div class="logout">
                            <AuthenticatedLayout class=""/>
                        </div>
                        
                        <slot name="header"/>

                        <slot name="content" />

                     

                        <Footer />
                    </main>
                </div>
            </body>
        </html>
    </div>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SideBar from "@/Components/Sidebar/sidebar.vue";
import Navbar from "@/Components/Navbar/Navbar.vue";
import Footer from "@/Components/Footer/Footer.vue";


</script>

<style scoped>

.logout{
    display: flex;
    align-items: right;
    justify-content: right;
    text-align: right;
    margin-right: 1rem
}

/* .body-background-image{
    background-color: rgb(255, 142, 127);
} */
</style>
