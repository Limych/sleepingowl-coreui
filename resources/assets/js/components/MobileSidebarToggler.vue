<template>
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button" @click="mobileSidebarToggle">&#9776;</button>
</template>

<script>
export default {
    name: 'mobile-sidebar-toggler',
    methods: {
        mobileSidebarToggle (e) {
            e.preventDefault();
            document.body.classList.toggle('sidebar-mobile-show')
        }
    }
}
</script>
