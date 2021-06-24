<template>
    <div class="pt-2">
        <LineChart :filteredTime="this.filteredTime" :selectedData="this.selectedData" :currentLabel="this.currentLabel"/>
    </div>
</template>

<script>

    import LineChart from './charts/LineChart';

    export default {
        components: {
            LineChart
        },
        data : function() {
            return {
                filteredTime: [],
                selectedData: [],
                currentLabel: "Spectral estimate of maximum wave",
                Time: [],
                Lev: [],
                Hs: [],
                Hx: [],
                Tp: [],
                Tm01: [],
                Tm02: []
            }
        },
        mounted() {
            let Time = [];
            let Lev = [];
            let Hs = [];
            let Hx = [];
            let Tp = [];
            let Tm01 = [];
            let Tm02 = [];
            let Dp = [];
            let Dpm = [];
            let Hs_sw1 = [];
            let Hs_sw8 = [];
            let tp_sw1 = [];
            let tp_sw8 = [];
            let dpm_sw8 = [];
            let dpm_sw1 = [];
            let Hs_sea8 = [];
            let Hs_sea = [];
            let Tp_sea8 = [];
            let Tp_sea = [];
            let Tm_sea = [];
            let Dpm_sea8 = [];
            let Dpm_sea = [];
            let Hs_ig = [];
            let Hs_fig = [];
            let Wsp = [];
            let Gst = [];
            let Wd = [];
            let Wsp100 = [];
            let Wsp50 = [];
            let Wsp80 = [];
            let Precip = [];
            let Tmp = [];
            let Rh = [];
            let Vis = [];
            let Cld = [];
            let Cb = [];
            let Csp0 = [];
            let Cd0 = [];
            let Ss = [];
            let Sst = [];
            axios.post('/getOceanData')
                .then((response) => {
                let data = response.data;
                if(data) {
                    data.forEach(element => {
                        Time.push(element.Time);
                        Lev.push(element.lev);
                        Hs.push(element.hs);
                        Hx.push(element.hx);
                        Tp.push(element.tp);
                        Tm01.push(element.tm01);
                        Tm02.push(element.tm02);
                    });
                }
                else {
                    console.log('No data');
                }
            });
            this.Time = Time;
            this.Lev = Lev;
            this.Hs = Hs;
            this.Hx = Hx;
            this.Tp = Tp;
            this.Tm01 = Tm01;
            this.Tm02 = Tm02;
            this.$nextTick(function () {
                this.setTime(Time);
                this.setSelectedData(Hx);
            });
        },
        methods: {
            setTime(Time) {
                // let min = Date.parse("2014-02-10 05:00:00");
                // let max = Date.parse("2014-02-10 23:00:00");
                // // this.filteredTime = Time.filter(a => a > min && a < max);
                // this.filteredTime = this.Time.filter(function (time) {
                //     t = Date.parse(time);
                //     return (t >= min && t <= max);
                // });

                this.filteredTime = Time
            },
            setSelectedData(Data) {
                this.selectedData = Data;
            }
        }
    }
</script>
