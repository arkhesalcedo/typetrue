<template>
    <div class="tw-flex tw-flex-col tw-items-center">
        <h1 class="tw-mb-10 tw-text-2xl tw-text-gray-600 tw-font-thin tw-text-center">How many years ago were you diagnosed with Type 2?</h1>

        <el-select class="tw-mb-10" v-model="years">
            <el-option
                v-for="number in generateYears"
                :key="`years_${number}`"
                :label="number"
                :value="number">
            </el-option>
        </el-select>

        <div v-if="years === 0">
            <h1 class="tw-mb-10 tw-text-xl tw-text-gray-600 tw-font-thin tw-text-center">Were you diagnosed with Type 2 less than 6 months ago?</h1>

            <div class="tw-flex tw-justify-center tw-mb-10">
                <el-button class="btn-lg text-lg" @click="setMonths(true)">Yes</el-button>

                <el-button class="btn-lg text-lg" @click="setMonths(false)">No</el-button>
            </div>
        </div>

        <el-button class="custom-button btn-lg text-lg tw-inline-block" v-if="years !== 0" type="primary" @click="setDiagnosed">Next</el-button>
    </div>
</template>

<script>
    import { mapMutations, mapGetters } from 'vuex';
    import range from 'lodash/range';
    import updateMixin from '../mixins/update';
    import calculateMixin from '../mixins/calculate';

    export default {
        data() {
            return {
                years: 0,
                months: 0,
            }
        },

        mixins: [updateMixin, calculateMixin],

        computed: {
            ...mapGetters({
                fields: 'typetrue/fields'
            }),

            generateYears() {
                return range(0, 100);
            }
        },

        methods: {
            ...mapMutations({
                setBasicField: 'typetrue/setBasicField',
                setProgress: 'typetrue/setProgress'
            }),

            async setDiagnosed() {
                this.setBasicField({ field: 'yearsAgo', value: this.years });

                this.setBasicField({ field: 'monthsAgo', value: this.months });

                await this.updateLead({ diagnosedMonthsAgo: this.calculateMonthsDiagnosed() });

                window.scrollTo(0, 0);

                await this.$router.push({ name: 'smoker'});
            },

            setMonths(status) {
                if (status) {
                    this.years = 0;
                    this.months = 5;
                } else {
                    this.months = 7;
                }

                this.setDiagnosed();
            }
        },

        mounted() {
            this.setProgress({ value: 35 });
        }
    }
</script>

