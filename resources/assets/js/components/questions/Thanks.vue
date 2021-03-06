<template>
    <div class="tw-flex tw-flex-col tw-items-center">
        <h1 class="tw-mb-10 tw-text-2xl tw-text-gray-600 tw-font-thin md:tw-w-1/2">We are pleased to inform you that, based on your input, you qualify for low priced life insurance from one of our most trusted providers.</h1>

        <address class="md:tw-w-1/2 tw-text-lg text-blue tw-font-thin tw-font-bold">
            1-877-TYPE-TRU<br>
            1-877-897-3878<br>
            <a href="mailto:info@typetrue.com">info@typetrue.com</a>
        </address>
    </div>
</template>

<script>
    import { mapMutations, mapGetters } from 'vuex';

    export default {
        methods: {
            ...mapMutations({
                setProgress: 'typetrue/setProgress'
            }),
        },

        computed: {
            ...mapGetters({
                leadID: 'typetrue/leadID',
            }),
        },

        created() {
            if (! this.leadID) {
                this.$router.push({ name: 'gender' });
            }

            this.setProgress({ value: 100 });

            setTimeout(() => {
                axios.post('email-quote', {
                    lead_id: this.leadID
                });
            }, 2000);
        }
    }
</script>

