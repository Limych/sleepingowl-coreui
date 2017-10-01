<template>
    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" @click="asideToggle">&#9776;</button>
</template>

<script>
export default {
    name: 'aside-toggler',
    methods: {
        asideToggle (e) {
            e.preventDefault();
            document.body.classList.toggle('aside-menu-hidden')
        }
    }
}
</script>
