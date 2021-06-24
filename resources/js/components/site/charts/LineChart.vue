<script>

    import { Line } from 'vue-chartjs';

    export default {
        extends: Line,
        name: 'LineChart',
        props: {
            filteredTime: Array,
            selectedData: Array,
            currentLabel: String
        },
        mounted() {

        },
        watch: {
           filteredTime: function() {
                this.displayChart();
           }
        },
        methods: {
            displayChart() {
                this.renderChart({
                    labels: this.filteredTime,
                    datasets: [{
                        label: 'Hx[m]',
                        backgroundColor: '#FC2525',
                        data: this.selectedData
                    }]
                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    title: {
                        display: true,
                        text: this.currentLabel
                    }
                });
            }
        }
    }
</script>
