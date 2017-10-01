<template>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" @click="sidebarToggle">&#9776;</button>
</template>

<script>
export default {
    name: 'sidebar-toggler',
    methods: {
        sidebarToggle (e) {
            e.preventDefault();
            document.body.classList.toggle('sidebar-hidden')
        }
    }
}
</script>
