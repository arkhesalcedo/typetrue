<template>
    <div class="tw-flex tw-flex-col tw-items-center">
        <h1 class="tw-mb-10 tw-text-2xl tw-text-gray-600 tw-font-thin tw-text-center">What is your gender?</h1>

        <div>
            <el-button class="btn-lg text-lg" @click="setGender('male')">Male</el-button>

            <el-button class="btn-lg text-lg" @click="setGender('female')">Female</el-button>
        </div>
    </div>
</template>

<script>
    import { mapMutations, mapActions } from 'vuex';
    export default {
        data() {
            return {
                preSelectedA1c: null
            }
        },

        methods: {
            ...mapActions({
                createLead: 'typetrue/createLead',
                updateLead: 'typetrue/updateLead'
            }),

            ...mapMutations({
                setBasicField: 'typetrue/setBasicField',
                setProgress: 'typetrue/setProgress',
            }),

            async setGender(gender) {
                this.setBasicField({ field: 'gender', value: gender });

                await this.createLead({ gender });

                if (this.preSelectedA1c) {
                    await this.updateLead({ a1c: this.preSelectedA1c });
                }

                window.scrollTo(0, 0);

                await this.$router.push({ name: 'age'});
            }
        },

        mounted() {
            this.preSelectedA1c = this.$route.query.a1c;

            if (this.preSelectedA1c) {
                this.setBasicField({ field: 'a1c', value: this.preSelectedA1c });
            }

            this.setProgress({ value: 10 });
        }
    }
</script>

