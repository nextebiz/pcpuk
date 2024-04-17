<template>

    <PcpLayout>

        <section class="bg-white dark:bg-gray-900 py-10 pb-32">
            <div class="pt-6 pb-2 px-4 mx-auto  sm:py-4 lg:px-2 ">
                <div class="mx-auto max-w-screen-lg text-center ">
                    <h3 class="mb-4 text-green-500 text-2xl tracking-tight font-extrabold leading-tight  dark:text-white">We have found your registration {{ form.registrationNumber }}!</h3>
                    <h2 class="mb-4 text-5xl tracking-tight font-extrabold leading-tight text-gray-900 dark:text-white">Start your PCP claim today</h2>
                    <p class="font-light text-gray-500 dark:text-gray-400 md:text-lg">To start your claim please fill out the below form and someone will be in touch with you.
                    </p>
                    {{ props.errors }}
                </div>
            </div>

            <div class="container m-auto">
                <form class="" @submit.prevent="saveForm">
                    <div class="text-center py-10">


                        <div class="grid grid-cols-1 gap-4 max-w-[400px] m-auto">
                            <div>
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <div><select name="title" id="title" v-model="form.title"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        :class="props.errors?.title ? 'border-red-500' : ''">

                                        <option></option>
                                        <option>Mr</option>
                                        <option>Mrs</option>
                                        <option>Miss</option>
                                        <option>Ms</option>
                                        <option>Dr</option>
                                    </select>
                                    <div class="input--select-arrow"></div>
                                </div>
                                <div class="error_msg">
                                    {{ props.errors?.title }}
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                                <input type="name" id="name"  v-model="form.name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    :class="props.errors?.name ? 'border-red-500' : ''" placeholder="Your Name" />
                                <div class="error_msg">
                                    {{ props.errors?.name }}
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                                <input type="email" id="email"  v-model="form.email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    :class="props.errors?.email ? 'border-red-500' : ''" placeholder="name@flowbite.com" />
                                <div class="error_msg">
                                    {{ props.errors?.email }}
                                </div>
                            </div>

                            <div class="mb-5">
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Phone</label>
                                <input type="phone" id="phone"  v-model="form.phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    :class="props.errors?.phone ? 'border-red-500' : ''" placeholder="Your Phone" />
                                <div class="error_msg">
                                    {{ props.errors?.phone }}
                                </div>
                            </div>




                            <div class="mb-5">
                                <label for="vehicle_value" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Value</label>
                                <div><select name="vehicle_value" id="vehicle_value" v-model="form.vehicle_value"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        :class="props.errors?.vehicle_value ? 'border-red-500' : ''">

                                        <option></option>
                                        <option value="£0 - £14,999">£0 - £14,999</option>
                                        <option value="£15,999 - £24,999">£15,999 - £24,999</option>
                                        <option value="£25,000 - £34,999">£25,000 - £34,999</option>
                                        <option value="£35,000+">£35,000+</option>
                                    </select>
                                    <div class="input--select-arrow"></div>
                                </div>
                                <div class="error_msg">
                                    {{ props.errors?.vehicle_value }}
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="owned_since" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">How long have you had/did you have the vehicle for?</label>
                                <div><select name="owned_since" id="owned_since" v-model="form.owned_since"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        :class="props.errors?.owned_since ? 'border-red-500' : ''">

                                        <option></option>
                                        <option value="12 - 23 Months">12 - 23 Months</option>
                                        <option value="24 - 35 Months">24 - 35 Months</option>
                                        <option value="36 - 47 Months">36 - 47 Months</option>
                                        <option value="More Than 48 Months">More Than 48 Months</option>
                                    </select>
                                    <div class="input--select-arrow"></div>
                                </div>
                                <div class="error_msg">
                                    {{ props.errors?.owned_since }}
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Was your PCP/HP taken out in the last 8 years?</label>
                                <div
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex">

                                        <div class="me-5">
                                            <input type="radio" id="rbyes" v-model="form.pcp_taken_out" value="yes" />
                                            <label for="rbyes" class="ms-1">Yes</label>
                                        </div>

                                        <div>
                                            <input type="radio" id="rbno" v-model="form.pcp_taken_out" value="no" checked />
                                            <label for="rbno" class="ms-1">No</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="error_msg">
                                    {{ props.errors?.pcp_taken_out }}
                                </div>
                            </div>

                            <div class="mb-5">
                                <label for="dealers_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Dealer's name</label>
                                <input type="dealers_name" id="dealers_name" v-model="form.dealers_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    :class="props.errors?.dealers_name ? 'border-red-500' : ''" placeholder="Your Dealer's name" />
                                <div class="error_msg">
                                    {{ props.errors?.dealers_name }}
                                </div>
                            </div>

                            <div class="mb-5">
                                <label for="lenders_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Lender's name</label>
                                <input type="lenders_name" id="lenders_name" v-model="form.lenders_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    :class="props.errors?.lenders_name ? 'border-red-500' : ''" placeholder="Your Lender's name" />
                                <div class="error_msg">
                                    {{ props.errors?.lenders_name }}
                                </div>
                            </div>
                            <div class="flex items-start mb-5">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value=""
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                </div>
                                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree to terms and conditions</label>
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Send PCP Data
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="text-center py-5 pb-10">
                            <h2 class="text-3xl font-bold mb-5">Vehicle Details</h2>
                            <div class="text-blue-500 cursor-pointer" @click="toggleDetails" preserve-scroll="true">Show Details</div>
                            <hr class="mt-10">
                        </div>

                        <div class="grid grid-cols-3 gap-4" v-if="showdetails">


                            <div class="mb-5">
                                <label for="registrationNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Registration Number</label>
                                <input type="registrationNumber" id="registrationNumber" v-model="form.registrationNumber"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                            <div class="mb-5">
                                <label for="taxStatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tax Status</label>
                                <input type="taxStatus" id="taxStatus" v-model="form.taxStatus"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                            <div class="mb-5">
                                <label for="taxDueDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tax Due Date</label>
                                <input type="taxDueDate" id="taxDueDate" v-model="form.taxDueDate"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                            <div class="mb-5">
                                <label for="motStatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot Status</label>
                                <input type="motStatus" id="motStatus" v-model="form.motStatus"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>
                            <div class="mb-5">
                                <label for="make" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Make</label>
                                <input type="make" id="make" v-model="form.make"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                            <div class="mb-5">
                                <label for="yearOfManufacture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year of Manufacture</label>
                                <input type="yearOfManufacture" id="yearOfManufacture" v-model="form.yearOfManufacture"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>
                            <div class="mb-5">
                                <label for="engineCapacity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Engine Capacity</label>
                                <input type="engineCapacity" id="engineCapacity" v-model="form.engineCapacity"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                            <div class="mb-5">
                                <label for="co2Emissions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Co2 Emissions</label>
                                <input type="co2Emissions" id="co2Emissions" v-model="form.co2Emissions"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                            <div class="mb-5">
                                <label for="fuelType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fuel Type</label>
                                <input type="fuelType" id="fuelType" v-model="form.fuelType"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                            <div class="mb-5">
                                <label for="markedForExport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marked For Export</label>
                                <input type="markedForExport" id="markedForExport" v-model="form.markedForExport"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>
                            <div class="mb-5">
                                <label for="colour" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colour</label>
                                <input type="colour" id="colour" v-model="form.colour"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                            <div class="mb-5">
                                <label for="typeApproval" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type Approval</label>
                                <input type="typeApproval" id="typeApproval" v-model="form.typeApproval"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>
                            <div class="mb-5">
                                <label for="dateOfLastV5CIssued" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Last V5C Issued</label>
                                <input type="dateOfLastV5CIssued" id="dateOfLastV5CIssued" v-model="form.dateOfLastV5CIssued"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                            <div class="mb-5">
                                <label for="motExpiryDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot Expiry Date</label>
                                <input type="motExpiryDate" id="motExpiryDate" v-model="form.motExpiryDate"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>
                            <div class="mb-5">
                                <label for="wheelplan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wheel Plan</label>
                                <input type="wheelplan" id="wheelplan" v-model="form.wheelplan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                            <div class="mb-5">
                                <label for="monthOfFirstRegistration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Month Of First Registration</label>
                                <input type="monthOfFirstRegistration" id="monthOfFirstRegistration" v-model="form.monthOfFirstRegistration"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    disabled />
                            </div>

                        </div>
                    </div>


                </form>
            </div>



        </section>



    </PcpLayout>
</template>

<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import { onMounted, onUpdated, ref } from "vue";
import PcpLayout from "@/Layouts/PcpLayout.vue";
let searching = ref(false);

const showdetails = ref(false);

const props = defineProps({
    car_data: Object,
    errors: Object
})

function toggleDetails() {


    showdetails.value = !showdetails.value;
}

const form = useForm({
    'registrationNumber': props.car_data?.registrationNumber,
    'taxStatus': props.car_data?.taxStatus,
    'taxDueDate': props.car_data?.taxDueDate,
    'motStatus': props.car_data?.motStatus,
    'make': props.car_data?.make,
    'yearOfManufacture': props.car_data?.yearOfManufacture,
    'engineCapacity': props.car_data?.engineCapacity,
    'co2Emissions': props.car_data?.co2Emissions,
    'fuelType': props.car_data?.fuelType,
    'markedForExport': props.car_data?.markedForExport,
    'colour': props.car_data?.colour,
    'typeApproval': props.car_data?.typeApproval,
    'dateOfLastV5CIssued': props.car_data?.dateOfLastV5CIssued,
    'motExpiryDate': props.car_data?.motExpiryDate,
    'wheelplan': props.car_data?.wheelplan,
    'monthOfFirstRegistration': props.car_data?.monthOfFirstRegistration,
    'title': '',
    'name': '',
    'email': '',
    'phone': '',
    'vehicle_value': '',
    'owned_since': '',
    'pcp_taken_out': false,
    'dealers_name': '',
    'lenders_name': '',

});

function saveForm() {
    form.post(route('pcp.store'), {
        preserveScroll: true
    });
    // searching.value = true;
    // console.log(result)
}

onMounted(function () {
    if (props.flash?.search_error != undefined) {
        searching.value = false;
    }


})
onUpdated(function () {
    if (props.flash?.search_error != undefined) {
        searching.value = false;
    }
})


</script>

<style>
.search_error {
    @apply border border-red-500 bg-gray-100 p-3 mt-3 rounded-lg text-red-500;
}

.error_msg {
    @apply text-red-500;
}
</style>
