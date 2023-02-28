<script setup>
import { ref } from 'vue';
import 'chartkick/chart.js';
import BarChart from '@/Components/BarChart.vue';
import PieChart from '@/Components/PieChart.vue';
import Counter from '@/Components/Counter.vue';
import DonutChart from '@/Components/DonutChart.vue';
import LineChart from '@/Components/LineChart.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import TranscientCounter from '@/Components/TranscientCounter.vue';
import Footer from '@/Components/Footer.vue';
import HouseholdCounter from '@/Components/HouseholdCounter.vue';
import FamilyCounter from '@/Components/FamilyCounter.vue';
import BarChart2 from '@/Components/BarChart2.vue';
import LineChart2 from '@/Components/LineChart2.vue';
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>


<template>
<body>
    <Head title="Welcome" />
<section class=header :key="uniqueKey">
<div class="head">
    <div class="republic">
        <h1><span style="color:#A19417"> REPUBLIC OF THE PHILIPPINES</span><br>
            <span style="color:#38B524">CITY OF </span>
            <span style="color:#FF2E71">BORONGAN</span>
        </h1>
    </div>
    
    <div class="bor">
        <a href="/"><img src="images/Borongan_City_Seal-removebg-preview.png"></a>
    </div>

    <div class="title">
        <h1>REGISTRY OF BARANGAY INHABITANTS AND MIGRANTS</h1>
    </div>
    <div class="flex items-top min-h-screen">
        <div class ="text">
        <div v-if="canLogin">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    >Dashboard</Link
                >

                <template v-else>
                    <Link :href="route('login')" class="ml-4">Log in</Link>

                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="ml-4"
                        >Register</Link
                    >
                </template>
        </div>
        </div>
    </div>
</div>
</section>
<section class="charts">
    <div class="title1">
        <h1><span style="color:#38B524">CITY OF </span>
            <span style="color:#FF2E71">BORONGAN</span>
        </h1>
        <p> OVERVIEW</p>
    </div>
    <div class="bar">
        <div class="bkg">
            <div class="txt">
        <h1>Population by Marital Status</h1>
            <BarChart></BarChart>
        </div>
    </div>
    </div>
    <div class="pie">
        <div class="bkg">
        <div class="txt">
            <h1>Population based on Gender</h1>
            <PieChart></PieChart>
        </div>
        </div>
    </div>
    <div class="counter">
        <div class="bkg">
        <div class="txt">
            <h1>Total Population</h1>
        </div>
            <Counter/>
        </div>
    </div>
    <div class="donut">
        <div class="bkg">
        <div class="txt">
            <h1>Population by Age</h1>
            <DonutChart/>
        </div>
        </div>
    </div>
    <div class="line">
        <div class="bkg">
        <div class="txt">
            <h1>Population by Religion</h1>
            <LineChart/>
        </div>
        </div>
    </div>
    <div class="famcounter">
        <div class="bkg">
        <div class="txt">
            <h1>Total Family Count</h1>
            <FamilyCounter/>
        </div>
        </div>
    </div>
    <div class="householdcounter">
        <div class="bkg">
        <div class="txt">
            <h1>Total Household Count</h1>
            <HouseholdCounter/>
        </div>
        </div>
    </div>
    <div class="bar2">
        <div class="bkg">
            <div class="txt">
        <h1>Population by Ethnicity</h1>
            <BarChart2></BarChart2>
        </div>
    </div>
    </div>
    <div class="line2">
        <div class="bkg">
        <div class="txt">
            <h1>Population by Highest Educational Attainment</h1>
            <LineChart2/>
        </div>
        </div>
    </div>
    <div class="trans">
        <img src="images/TRANSPARENCY-SEAL-1024x329.jpg">
    </div>
    <div class="download">
        <img src="images/DOWNLOAD-FORMS-1-1024x328.jpg">
    </div>
   <!--- <div class="transcientcounter">
        <div class="bkg">
        <div class="txt">
            <h1>Total Transcient Count</h1>
            <TranscientCounter/>
        </div>
        </div> 
    </div> -->
</section>

</body>
<Footer/>  
</template>

<style lang="css">
.head{
    background-image: linear-gradient(#38b52480 0.14%, #ff2e7167 46.77%, rgba(56, 181, 36, 0.5) 92.2%),url(images/Borongan-cityhall.png);
    background-position: center;
    background-size: cover;
    position: relative;
    width: 100%;
    min-height: 100vh;
    }
.text {
   color: white;
   font-family: 'Poppins';
   font-size: 15px;
   padding: 20px;
    text-align: left;
    position: absolute;
    top: 7%;
    right: 6%;

}
.republic{
position: absolute;
width: 317px;
height: 69px;
left: 23%;
top: 6%;
font-family: 'Poppins';
font-style: normal;
font-weight: 700;
font-size: 17px;
line-height: 22px;
display: flex;
align-items: center;
text-align: center;
}
.bor{
    position: absolute;
    left: 13%;
    top: 5%;
    width: 100%;  
    width: 96px;
    height: 96px;    
}
.title{
position: absolute;
width: 50%;
height: 252px;
padding: 20px;
text-align: center;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
font-family: 'Poppins';
font-style: normal;
font-weight: 700;
font-size: 38px;
color: #FFFFFF;
}
.title1{
position: absolute;
width: 50%;
height: 252px;
padding: 20px;
text-align: center;
position: absolute;
top: 130%;
left: 50%;
transform: translate(-50%, -50%);
font-family: 'Poppins';
font-style: normal;
font-weight: 700;
font-size: 35px;
color: black;
}
.title1 p{
position: absolute;
width: 50%;
height: 252px;
padding: 20px;
text-align: center;
position: absolute;
top: 80%;
left: 50%;
transform: translate(-50%, -50%);
font-family: 'Poppins';
font-style: normal;
font-weight: 700;
font-size: 33px;
color: black;
}
.bkg{
    flex-basis: 31%;
    background: #fff3f3;
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 0.5s;
}
.bar{
    position: absolute;
    border: 10%;
    box-shadow: 80%;
    left: 7%;
    top: 189%;
    width: 30%;
    height: 150%;
}
.txt{
    text-align: center;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 13px;
    color: black;
}
.pie{
    position: absolute;
    border: 10%;
    box-shadow: 80%;
    left: 40%;
    top: 185%;
    width: 20%;
    height: 5%;
}
.counter{
    position: absolute;
    border: 10%;
    box-shadow: 80%;
    left: 7%;
    top: 147%;
    width: 25%;
    height: 5%;
}
.donut{
    position: absolute;
    border: 10%;
    box-shadow: 80%;
    left: 40%;
    top: 245%;
    width: 20%;
    height: 5%;
}
.bar2{
    position: absolute;
    border: 10%;
    box-shadow: 80%;
    left: 7%;
    top: 248.5%;
    width: 30%;
    height: 150%;
}
.line2{
    position: absolute;
    border: 10%;
    box-shadow: 80%;
    right: 7%;
    top: 248.5%;
    width: 30%;
    height: 150%;
}
.line{
    position: absolute;
    border: 10%;
    box-shadow: 80%;
    right: 7%;
    top: 189%;
    width: 30%;
    height: 150%;
}
.famcounter{
    position: absolute;
    border: 10%;
    box-shadow: 80%;
    right: 7%;
    top: 147%;
    width: 25%;
    height: 5%;
}
.householdcounter{
    position: absolute;
    border: 10%;
    box-shadow: 80%;
    left: 37.5%;
    top: 147%;
    width: 25%;
    height: 5%;
}
.transcientcounter{
    position: absolute;
    border: 10%;
    box-shadow: 80%;
    left: 10%;
    top: 230%;
    width: 25%;
    height: 5%;
}
.bkg:hover{
    box-shadow: 0 0 40px 0px rgba(0,0,0,0.2);
}
.foot{
    position: absolute;
    bottom: 0%;
}
.trans{
    position: absolute;
    left: 2%;
    top: 300%;
    width: 100%;  
    width: 400px;
    height: 129px;
    transition: 0.1s;    
}
.trans:hover{
    box-shadow: 0 0 90px 0px rgba(0,0,0,0.2);
}
.download{
    position: absolute;
    left: 35%;
    top: 300%;
    width: 100%;  
    width: 400px;
    height: 129px;
    transition: 0.1s;    
}
.download:hover{
    box-shadow: 0 0 90px 0px rgba(0,0,0,0.2);
}
</style>
<script>
export default {
    data() {
        return {
            uniqueKey: Date.now()
        };
    },
    components: { LineChart, HouseholdCounter },
    components: {
    HouseholdCounter
  }
};
</script>
