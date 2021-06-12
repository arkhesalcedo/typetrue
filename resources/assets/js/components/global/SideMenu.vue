<template>
    <div class="tw-relative">
        <img :src="menuImage" alt="Side menu icon" class="tw-cursor-pointer" @click="showMenu">

        <div class="tw-absolute tw-bg-white tw-p-5 tw-pb-0 tw-rounded-lg tw-shadow-xl side-menu" v-if="isMenuVisible">
            <img :src="closeMenuImage" @click="hideMenu" alt="Close side menu icon" class="tw-cursor-pointer tw-absolute close-side-menu-icon">

            <div class="tw-flex tw-flex-col">
                <a href="/" class="tw-mb-5 tw-font-black tw-text-primary tw-text-xl hover:tw-text-blue">
                    <span class="tw-font-black">Home</span>
                </a>

                <a href="/contact-us" class="tw-mb-5 tw-font-black tw-text-primary tw-text-xl hover:tw-text-blue">
                    <span class="tw-font-black">Contact Us</span>
                </a>

                <a href="/privacy-policy" class="tw-mb-5 tw-font-black tw-text-primary tw-text-xl hover:tw-text-blue">
                    <span class="tw-font-black">Privacy Policy</span>
                </a>

                <a href="/terms-of-use" class="tw-mb-5 tw-font-black tw-text-primary tw-text-xl hover:tw-text-blue">
                    <span class="tw-font-black">Terms of Use</span>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['menuImage', 'closeMenuImage'],

        data() {
            return {
                isMenuVisible: false
            }
        },

        methods: {
            showMenu() {
                this.isMenuVisible = true;
            },

            hideMenu() {
                this.isMenuVisible = false;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .side-menu {
        min-width: 335px;
        max-width: 100%;
        top: -20px;
        right: -20px;

        .close-side-menu-icon {
            top: 20px;
            right: 20px;
        }
    }
</style>
